<?php

class Brizy_Content_Placeholders_Filters_AuthorOptionProvider extends Brizy_Content_Placeholders_Filters_OptionProvider {

	/**
	 * @return array
	 */
	public function getOptions() {
		return $this->buildQuery()->get_results();
	}

	/***
	 * @return WP_User_Query
	 */
	protected function buildQuery() {
		return new WP_User_Query(
			$this->args
		);
	}
}
