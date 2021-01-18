<?php

class Brizy_Content_Placeholders_Filters_PostOptionProvider extends Brizy_Content_Placeholders_Filters_OptionProvider {

	/**
	 * @return array
	 */
	public function getOptions() {
		return $this->buildQuery()->posts;
	}

	/**
	 * @return WP_Query
	 */
	protected function buildQuery() {
		return new WP_Query(
			$this->args
		);
	}
}
