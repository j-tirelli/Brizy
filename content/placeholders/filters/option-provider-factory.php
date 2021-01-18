<?php

class Brizy_Content_Placeholders_Filters_OptionProviderFactory {
	public static function create( $optionQuery ) {
		$args = [];
		parse_str( $optionQuery, $args );

		if ( isset( $args['post_type'] ) ) {
			return new Brizy_Content_Placeholders_Filters_PostOptionProvider($args);
		}

		if ( isset( $args['taxonomy'] ) ) {
			return new Brizy_Content_Placeholders_Filters_TermOptionProvider($args);
		}

		if ( isset( $args['role'] ) || isset( $args['role__in'] ) || isset( $args['role__not_in'] ) ) {
			return new Brizy_Content_Placeholders_Filters_AuthorOptionProvider($args);
		}

		// add support for more providers here
		// .....

		throw new Exception('Unable to create the OptionProvider from query');

	}
}
