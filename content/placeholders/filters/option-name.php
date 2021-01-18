<?php

/**
 * Class Brizy_Content_Placeholders_Filters_OptionName
 */
class Brizy_Content_Placeholders_Filters_OptionName extends Brizy_Content_Placeholders_Abstract {

	const NAME = 'brizy_dc_option_name';

	/**
	 * Brizy_Content_Placeholders_Filters_OptionName constructor.
	 */
	public function __construct() {
		$this->setLabel( '' );
		$this->setPlaceholder( self::NAME );
		$this->setDisplay( Brizy_Content_Placeholders_Abstract::DISPLAY_INLINE );
	}

	/**
	 * @param Brizy_Content_Context $context
	 * @param Brizy_Content_ContentPlaceholder $contentPlaceholder
	 *
	 * @return string
	 */
	public function getValue( Brizy_Content_Context $context, Brizy_Content_ContentPlaceholder $contentPlaceholder ) {
		$parentPlaceholder = $context->getParentPlaceholder();
		$filterType       = $context->getFilterType();
		$optionBaseObject = $context->getOptionBaseObject();
		$loopId           = $context->getPostLoopId();
		$optionSource     = $parentPlaceholder->getAttr( 'optionSource', true );

		$filterName = null;
		if ( $optionSource === Brizy_Content_Placeholders_Filters_Filter::DATASOURCE_MANUAL ) {
			$filterName = $parentPlaceholder->getAttr('filterName');
		}


		return Brizy_Content_Placeholders_Filters_Option::getName( $loopId, $optionBaseObject, $filterType, $filterName );
	}

	/**
	 * @return mixed|string
	 */
	protected function getOptionValue() {
		return $this->getReplacePlaceholder();
	}
}
