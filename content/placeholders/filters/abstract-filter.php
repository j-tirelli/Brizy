<?php

abstract class Brizy_Content_Placeholders_Filters_AbstractFilter extends Brizy_Content_Placeholders_Abstract {

	const DATASOURCE_MANUAL = 'manual';
	const DATASOURCE_QUERY = 'query';

	/**
	 * Brizy_Content_Placeholders_Filters_AbstractFilter constructor.
	 *
	 * @param $placeholder
	 * @param string $display
	 */
	public function __construct(  $placeholder, $display = Brizy_Content_Placeholders_Abstract::DISPLAY_INLINE ) {
		$this->setLabel( '' );
		$this->setPlaceholder( $placeholder );
		$this->setDisplay( $display );
	}

	abstract protected function getOptions($queryArgs);

	/**
	 * @return mixed|string
	 */
	protected function getOptionValue()
	{
		return $this->getReplacePlaceholder();
	}
}
