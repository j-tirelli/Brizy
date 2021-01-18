<?php

/**
 * This is a sub placeholder and should be used only in content of a filter.
 * It will probably fail if you used this with out a sub contenxt
 *
 * Class Brizy_Content_Placeholders_Filters_OptionLabel
 */
class Brizy_Content_Placeholders_Filters_OptionLabel extends Brizy_Content_Placeholders_Abstract {
	const NAME = 'brizy_dc_option_label';

	/**
	 * Brizy_Content_Placeholders_Filters_OptionLabel constructor.
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

		$option = $context->getOptionBaseObject();

		if($option instanceof WP_Post) {
			return $option->post_title;
		}

		if($option instanceof WP_Term) {
			return $option->name;
		}

		if($option instanceof WP_User) {
			return $option->data->display_name;
		}

		throw new Exception('Unable to obtain label of the an unknown option');

	}

	/**
	 * @return mixed|string
	 */
	protected function getOptionValue()
	{
		return $this->getReplacePlaceholder();
	}
}
