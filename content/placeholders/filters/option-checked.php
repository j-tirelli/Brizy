<?php

/**
 * Class Brizy_Content_Placeholders_Filters_OptionChecked
 */
class Brizy_Content_Placeholders_Filters_OptionChecked extends Brizy_Content_Placeholders_Abstract {

	const NAME = 'brizy_dc_option_checked';

	/**
	 * Brizy_Content_Placeholders_Filters_OptionChecked constructor.
	 */
	public function __construct(  ) {
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
		$optionBaseObject = $context->getOptionBaseObject();
		$loopId = $context->getPostLoopId();
		$optionValue = Brizy_Content_Placeholders_Filters_Option::getValueOfOptionObject($optionBaseObject);
		$currentOptionValue = Brizy_Content_Placeholders_Filters_Option::getValue( $loopId,  $optionBaseObject, $filterType );

		// leave here == not ===
		if($currentOptionValue == $optionValue || ( is_array( $currentOptionValue ) && in_array( $optionValue, $currentOptionValue ) ) ) {
			return 'checked';
		}

		return '';
	}

	/**
	 * @return mixed|string
	 */
	protected function getOptionValue() {
		return $this->getReplacePlaceholder();
	}
}
