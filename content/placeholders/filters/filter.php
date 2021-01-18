<?php

use Brizy_Content_Placeholders_Filters_OptionProviderFactory as OptionProviderFactory;
use Brizy_Content_Placeholders_Filters_AbstractFilter as AbstractFilter;
use Brizy_Content_ContextFactory as ContextFactory;
use Brizy_Content_ContentPlaceholder as ContentPlaceholder;
use Brizy_Content_PlaceholderProvider as PlaceholderProvider;
use Brizy_Content_PlaceholderExtractor as PlaceholderExtractor;
use Brizy_Content_PlaceholderReplacer as PlaceholderReplacer;
use Brizy_Content_FilterContext as FilterContext;
use Brizy_Content_Placeholders_Filters_FilterQuery as FilterQuery;

class Brizy_Content_Placeholders_Filters_Filter extends AbstractFilter {

	const TYPE_RADIO = 'radio';
	const TYPE_CHECKBOX = 'checkbox';
	const TYPE_TEXT = 'text';
	const TYPE_RANGE = 'range';
	const TYPE_SELECT = 'select';

	const NAME = 'brizy_dc_filter';

	/**
	 * Brizy_Content_Placeholders_Filters_Filter constructor.
	 */
	public function __construct() {
		parent::__construct( self::NAME );
		add_filter( 'brizy_post_loop_args', [ $this, 'mergeFilterParams' ], 10, 3 );
	}

	public function getValue( Brizy_Content_Context $context, ContentPlaceholder $contentPlaceholder ) {
		$type        = $contentPlaceholder->getAttr( 'type', true );
		$dataSource  = $contentPlaceholder->getAttr( 'optionSource', true );
		$filterGroup = $contentPlaceholder->getAttr( 'group', true );
		$postLoopId  = $contentPlaceholder->getAttr( 'postLoopId', false );

		//$postLoopQuery       = $contentPlaceholder->getAttr( 'postLoopQuery', true );
		//$postLoopPlaceholder = $this->getPlaceholderById( $context, $postLoopId );

		// return the content as the options are added manually
		if ( $dataSource === AbstractFilter::DATASOURCE_MANUAL ) {
			$filerName  = $contentPlaceholder->getAttr( 'filerName', false );
			$subContext = ContextFactory::createFilterContext( $context, null, null, $filterGroup );
			$subContext->setParentPlaceholder( $contentPlaceholder );
			$subContext->setFilterName( $filerName );
			$subContext->setPostLoopId( $postLoopId );
			$subContext->setFilterType( $type );

			return $this->getContent( $subContext, $contentPlaceholder, '' );
		}

		// try to obtain the options
		$optionQuery = $contentPlaceholder->getAttr( 'optionQuery', true );
		$options     = $this->getOptions( $optionQuery );
		$content     = '';
		foreach ( $options as $i => $option ) {
			$subContext = ContextFactory::createFilterContext( $context, $option, $i, $filterGroup );
			$subContext->setParentPlaceholder( $contentPlaceholder );
			$subContext->setPostLoopId( $postLoopId );
			$subContext->setFilterType( $type );

			$content = $this->getContent( $subContext, $contentPlaceholder, $content );
		}

		return $content;
	}

	public function mergeFilterParams( $params, $context,$contentPlaceholder ) {

		$loopId = $contentPlaceholder->getAttr('id');

		if ( $loopId ) {
			$filterQuery  = new FilterQuery($context,$contentPlaceholder);
			$selectedFilters = $filterQuery->getWPQueryParamsByLoopId(  );
			$params          = array_merge( $params, $selectedFilters );
		}

		return $params;
	}


	protected function getOptions( $queryArgs ) {
		$provider = OptionProviderFactory::create( $queryArgs );

		return $provider->getOptions();
	}

	protected function getPlaceholderById( Brizy_Content_Context $context, $id ) {

		static $loopPlaceholder = [];

		if ( ! isset( $loopPlaceholder[ $id ] ) ) {
			return $loopPlaceholder[ $id ] = $context->getPlaceholderById( $id );
		}

		return $loopPlaceholder;
	}

	/**
	 * @param FilterContext $subContext
	 * @param ContentPlaceholder $contentPlaceholder
	 * @param string $content
	 *
	 * @return string
	 */
	protected function getContent( FilterContext $subContext, ContentPlaceholder $contentPlaceholder, string $content ) {
		$placeholderProvider = new PlaceholderProvider( $subContext );
		$extractor           = new PlaceholderExtractor( $placeholderProvider );

		$replacer = new PlaceholderReplacer( $subContext, $placeholderProvider, $extractor );

		$content .= do_shortcode( $replacer->getContent( $contentPlaceholder->getContent() ) );

		return $content;
	}
}
