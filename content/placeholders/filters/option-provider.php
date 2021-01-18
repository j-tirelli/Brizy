<?php

abstract class Brizy_Content_Placeholders_Filters_OptionProvider {

	protected $args;

	public function __construct( $args ) {
		$this->args = $args;
	}

	abstract public function getOptions();

	// optionQuery="entity=post&entityType=page&orderBy=name&order=ASC&valueMatch[property]=post_title&valueMatch
	abstract protected function buildQuery();
}
