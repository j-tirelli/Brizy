<?php

use Brizy_Content_Context as Context;
use Brizy_Content_ContentPlaceholder as ContentPlaceholder;

class Brizy_Content_Placeholders_Filters_FilterQuery {

	const FILTER_KEY = 'filter';

	private $context;
	private $placeholder;

	public function __construct( Context $context, ContentPlaceholder $contentPlaceholder ) {
		$this->context     = $context;
		$this->placeholder = $contentPlaceholder;
	}


	public function getWPQueryParamsByLoopId() {

		$loopId = $this->placeholder->getAttr( 'id' );

		if ( ! isset( $_REQUEST[ self::FILTER_KEY ][ $loopId ] ) ) {
			return [];
		}

		$params  = [];
		$filters = $_REQUEST[ self::FILTER_KEY ][ $loopId ];

		foreach ( $filters as $key => $filter ) {
			switch ( $key ) {
				case 'post':
					foreach ( $filter as $type => $id ) {
						$params['post_type'] = $type;
						$params['post__in']  = $id;
					}
					break;
				case 'term':
					foreach ( $filter as $tax => $id ) {
						$params['tax_query'][] =
							[
								'taxonomy' => $tax,
								'field'    => 'term_id',
								'terms'    => (array) $id,
							];
					}

					if ( count( $params['tax_query'] ) > 1 ) {
						$params['tax_query']['relation'] = 'AND';
					}

					break;
				case 'user':
					$params['author__in'] = $filter;
					break;
				default:
					$params = array_merge( $params, $this->getOtherFilterTypeParams( $key, $filter ) );
					break;
			}
		}

		return $params;
	}


	private function getOtherFilterTypeParams( $key, $filter ) {
		$params            = [];
		$placeholders      = $this->context->getPlaceholdersByAttrValue( 'filterName', $key );
		$filterPlaceholder = array_pop( $placeholders );

		if ( ! $filterPlaceholder ) {
			return [];
		}

		$filterQuery = $filterPlaceholder->getAttr( 'filterQuery', true );
		$filterType  = $filterPlaceholder->getAttr( 'type', true );

		$args = [];
		parse_str( $filterQuery, $args );

		switch ( true ) {
			case isset( $args['metaKey'] ):
				if ( $filterType === 'range' ) {
					$params['meta_query'] = [];

					if ( isset( $filter[0] ) ) {
						$params['meta_query'][] = array(
							'key'     => $args['metaKey'],
							'value'   => $filter[0],
							'compare' => '>',
						);
					}

					if ( isset( $filter[1] ) ) {
						$params['meta_query'][] = array(
							'key'     => $args['metaKey'],
							'value'   => $filter[1],
							'compare' => '<',
						);
					}
				}

				if ( $filterType === 'text' && $filter) {
					$params['meta_query'] = array(
						array(
							'key'     => $args['metaKey'],
							'value'   => $filter,
							'compare' => 'LIKE',
						),
					);
				}
				break;
			case isset( $args['postField'] ):
				if ( $filterType === 'range' ) {
					if ( $filter[0] ) {
						$params['range_query'][] = array(
							'key'     => $args['postField'],
							'value'   => $filter[0],
							'compare' => '>',
						);
					}

					if ( $filter[1] ) {
						$params['range_query'][] = array(
							'key'     => $args['postField'],
							'value'   => $filter[1],
							'compare' => '<',
						);
					}
				}

				if ( $filterType === 'text' ) {
					$params[ $args['postField'] ] = $filter;
				}
				break;
		}

		return $params;
	}
}
