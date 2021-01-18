<?php

class Brizy_Content_FilterContext extends Brizy_Content_Context {

	/**
	 * All filters should have a group attribute
	 *
	 * @var null
	 */
	private $filterGroup = null;

	/**
	 * All options are build based on a list of Objects.. posts/terms..
	 *
	 * @var null
	 */
	private $optionBaseObject = null;

	/**
	 * @var int
	 */
	private $index;

	/**
	 * Brizy_Content_FilterContext constructor.
	 *
	 * @param Brizy_Content_Context $parentContext
	 * @param $option
	 * @param $index
	 * @param $filterGroup
	 */
	public function __construct( Brizy_Content_Context $parentContext, $option, $index, $filterGroup ) {
		parent::__construct( $parentContext->getProject(), null, $parentContext->getWpPost(), null, $parentContext );

		$this->setFilterGroup( $filterGroup );
		$this->setOptionBaseObject( $option );
		$this->setIndex( $index );
	}

	/**
	 * @return null
	 */
	public function getFilterGroup() {
		return $this->filterGroup;
	}

	/**
	 * @param null $filterGroup
	 *
	 * @return Brizy_Content_FilterContext
	 */
	public function setFilterGroup( $filterGroup ) {
		$this->filterGroup = $filterGroup;

		return $this;
	}

	/**
	 * @return null
	 */
	public function getOptionBaseObject() {
		return $this->optionBaseObject;
	}

	/**
	 * @param null $optionBaseObject
	 *
	 * @return Brizy_Content_FilterContext
	 */
	public function setOptionBaseObject( $optionBaseObject ) {
		$this->optionBaseObject = $optionBaseObject;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIndex() {
		return $this->index;
	}

	/**
	 * @param mixed $index
	 *
	 * @return Brizy_Content_FilterContext
	 */
	public function setIndex( $index ) {
		$this->index = $index;

		return $this;
	}
}
