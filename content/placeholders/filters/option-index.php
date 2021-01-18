<?php

/**
 * Class Brizy_Content_Placeholders_Filters_OptionIndex
 */
class Brizy_Content_Placeholders_Filters_OptionIndex extends Brizy_Content_Placeholders_Abstract {

	const NAME = 'brizy_dc_option_index';

	/**
	 * Brizy_Content_Placeholders_Filters_OptionIndex constructor.
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

		return $context->getIndex();
	}

	/**
	 * @return mixed|string
	 */
	protected function getOptionValue() {
		return $this->getReplacePlaceholder();
	}
}
