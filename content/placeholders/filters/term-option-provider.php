<?php

class Brizy_Content_Placeholders_Filters_TermOptionProvider extends Brizy_Content_Placeholders_Filters_OptionProvider {

	/**
	 * @return array|int
	 */
	public function getOptions() {
		return $this->buildQuery()->get_terms();
	}

	/**
	 * @return WP_Term_Query
	 */
	protected function buildQuery() {
		return new WP_Term_Query(
			$this->args
		);
	}
}
