<?php

use Brizy_Content_Placeholders_Filters_FilterQuery as  FilterQuery;


class Brizy_Content_Placeholders_Filters_Option {

	const FILTER_KEY = 'filter';

	public static function getQuery( $value, $postLoopId, $optionBaseObject, $filterType, $filterName = null ) {
		$filterKey = FilterQuery::FILTER_KEY;

		$params = [];

		switch ( true ) {
			case ( $optionBaseObject instanceof WP_Post ):
				$type                                   = $optionBaseObject->post_type;
				$params[ $postLoopId ]['post'][ $type ] = $value;
				break;
			case ( $optionBaseObject instanceof WP_Term ):
				$taxonomy                                   = $optionBaseObject->taxonomy;
				$params[ $postLoopId ]['term'][ $taxonomy ] = $value;
				break;
			case $optionBaseObject instanceof WP_User:
				$params[ $postLoopId ]['user'] = $value;
				break;
			default:
				switch ( $filterType ) {
					case Brizy_Content_Placeholders_Filters_Filter::TYPE_RANGE:
					case Brizy_Content_Placeholders_Filters_Filter::TYPE_TEXT:
						$params[ $postLoopId ][ $filterName ] = $value;
						break;
				}
				break;
		}

		return $params;
	}

	public static function getName( $postLoopId, $optionBaseObject, $filterType, $filterName = null ) {
		$filterKey = FilterQuery::FILTER_KEY;

		$namePrefix = "{$filterKey}[{$postLoopId}]";

		switch ( true ) {
			case ( $optionBaseObject instanceof WP_Post ):
				$type   = $optionBaseObject->post_type;
				$suffix = self::isArray( $filterType ) ? '[]' : '';

				return "{$namePrefix}[post][{$type}]{$suffix}";
			case ( $optionBaseObject instanceof WP_Term ):
				$taxonomy = $optionBaseObject->taxonomy;
				$suffix   = self::isArray( $filterType ) ? '[]' : '';

				return "{$namePrefix}[term][{$taxonomy}]{$suffix}";
			case $optionBaseObject instanceof WP_User:
				$suffix = self::isArray( $filterType ) ? '[]' : '';

				return "{$namePrefix}[user]{$suffix}";

			default:
				switch ( $filterType ) {
					case Brizy_Content_Placeholders_Filters_Filter::TYPE_TEXT:
						return "{$namePrefix}[{$filterName}]";
					case Brizy_Content_Placeholders_Filters_Filter::TYPE_RANGE:
						return "{$namePrefix}[{$filterName}][]";

				}
		}
	}

	public static function getValue( $postLoopId, $optionBaseObject, $filterType, $filterName = null, $valueIndex = null ) {
		$loopValue = self::getLoopValue( $postLoopId );

		if ( ! $loopValue ) {
			return null;
		}

		switch ( true ) {
			case ( $optionBaseObject instanceof WP_Post ):
				$type = $optionBaseObject->post_type;

				if ( isset( $loopValue['post'][ $type ] ) ) {
					return $loopValue['post'][ $type ];
				} else {
					return null;
				}
			case ( $optionBaseObject instanceof WP_Term ):
				$taxonomy = $optionBaseObject->taxonomy;

				if ( isset( $loopValue['term'][ $taxonomy ] ) ) {
					return $loopValue['term'][ $taxonomy ];
				} else {
					return null;
				}

			case $optionBaseObject instanceof WP_User:
				if ( isset( $loopValue['user'] ) ) {
					return $loopValue['user'];
				} else {
					return null;
				}
			default:
				switch ( $filterType ) {
					case Brizy_Content_Placeholders_Filters_Filter::TYPE_TEXT:
						return isset( $loopValue[ $filterName ] ) ? $loopValue[ $filterName ] : null;
					case Brizy_Content_Placeholders_Filters_Filter::TYPE_RANGE:
						return isset( $loopValue[ $filterName ][ $valueIndex ] ) ? $loopValue[ $filterName ][ $valueIndex ] : null;

				}
		}
	}

	public static function getValueOfOptionObject( $object ) {
		if ( $object instanceof WP_Post ) {
			return $object->ID;
		}

		if ( $object instanceof WP_Term ) {
			return $object->term_id;
		}

		if ( $object instanceof WP_User ) {
			return $object->ID;
		}
	}

	private static function getLoopValue( $loopId ) {
		return isset( $_REQUEST[ self::FILTER_KEY ][ $loopId ] ) ? $_REQUEST[ self::FILTER_KEY ][ $loopId ] : null;
	}

	private static function isArray( $filterType ) {
		switch ( $filterType ) {
			case 'checkbox':
				return true;
			case 'radio':
			default:
				return false;
		}
	}

}
