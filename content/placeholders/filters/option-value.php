<?php

/**
 * This is a sub placeholder and should be used only in content of a filter.
 * It will probably fail if you used this with out a sub context
 * Class Brizy_Content_Placeholders_Filters_OptionValue
 */
class Brizy_Content_Placeholders_Filters_OptionValue extends Brizy_Content_Placeholders_Abstract {

	const NAME = 'brizy_dc_option_value';

	/**
	 * Brizy_Content_Placeholders_Filters_OptionValue constructor.
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
	 * @return int|mixed
	 * @throws Exception
	 */
	public function getValue( Brizy_Content_Context $context, Brizy_Content_ContentPlaceholder $contentPlaceholder ) {


		$filterType = $context->getFilterType();
		$loopId = $context->getPostLoopId();
		$option = $context->getOptionBaseObject();

		switch ( $filterType ) {
			case Brizy_Content_Placeholders_Filters_Filter::TYPE_TEXT:
				$filterName = $context->getParentPlaceholder()->getAttr('filterName', true);
				return Brizy_Content_Placeholders_Filters_Option::getValue( $loopId,  null, $filterType, $filterName );
			case Brizy_Content_Placeholders_Filters_Filter::TYPE_RANGE:
				$valueIndex = $contentPlaceholder->getAttr('valueIndex', true);
				$filterName = $context->getParentPlaceholder()->getAttr('filterName', true);
				return Brizy_Content_Placeholders_Filters_Option::getValue( $loopId,  null, $filterType, $filterName, $valueIndex );


			case Brizy_Content_Placeholders_Filters_Filter::TYPE_CHECKBOX:
			case Brizy_Content_Placeholders_Filters_Filter::TYPE_RADIO:
				return Brizy_Content_Placeholders_Filters_Option::getValueOfOptionObject( $option );
		}



	}

	/**
	 * @return mixed|string
	 */
	protected function getOptionValue() {
		return $this->getReplacePlaceholder();
	}
}
