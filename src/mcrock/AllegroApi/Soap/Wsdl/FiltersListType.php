<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class FiltersListType
{

    /**
     * @var string $filterId
     */
    protected $filterId = null;

    /**
     * @var string $filterName
     */
    protected $filterName = null;

    /**
     * @var string $filterType
     */
    protected $filterType = null;

    /**
     * @var string $filterControlType
     */
    protected $filterControlType = null;

    /**
     * @var string $filterDataType
     */
    protected $filterDataType = null;

    /**
     * @var boolean $filterIsRange
     */
    protected $filterIsRange = null;

    /**
     * @var int $filterArraySize
     */
    protected $filterArraySize = null;

    /**
     * @var ArrayOfFiltervaluetype $filterValues
     */
    protected $filterValues = null;

    /**
     * @var FilterRelationType $filterRelations
     */
    protected $filterRelations = null;

    /**
     * @param string $filterId
     * @param string $filterName
     * @param string $filterType
     * @param string $filterControlType
     * @param string $filterDataType
     * @param boolean $filterIsRange
     */
    public function __construct($filterId = null, $filterName = null, $filterType = null, $filterControlType = null, $filterDataType = null, $filterIsRange = null)
    {
      $this->filterId = $filterId;
      $this->filterName = $filterName;
      $this->filterType = $filterType;
      $this->filterControlType = $filterControlType;
      $this->filterDataType = $filterDataType;
      $this->filterIsRange = $filterIsRange;
    }

    /**
     * @return string
     */
    public function getFilterId()
    {
      return $this->filterId;
    }

    /**
     * @param string $filterId
     * @return \mcrock\AllegroApi\Soap\Wsdl\FiltersListType
     */
    public function setFilterId($filterId)
    {
      $this->filterId = $filterId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilterName()
    {
      return $this->filterName;
    }

    /**
     * @param string $filterName
     * @return \mcrock\AllegroApi\Soap\Wsdl\FiltersListType
     */
    public function setFilterName($filterName)
    {
      $this->filterName = $filterName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilterType()
    {
      return $this->filterType;
    }

    /**
     * @param string $filterType
     * @return \mcrock\AllegroApi\Soap\Wsdl\FiltersListType
     */
    public function setFilterType($filterType)
    {
      $this->filterType = $filterType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilterControlType()
    {
      return $this->filterControlType;
    }

    /**
     * @param string $filterControlType
     * @return \mcrock\AllegroApi\Soap\Wsdl\FiltersListType
     */
    public function setFilterControlType($filterControlType)
    {
      $this->filterControlType = $filterControlType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilterDataType()
    {
      return $this->filterDataType;
    }

    /**
     * @param string $filterDataType
     * @return \mcrock\AllegroApi\Soap\Wsdl\FiltersListType
     */
    public function setFilterDataType($filterDataType)
    {
      $this->filterDataType = $filterDataType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFilterIsRange()
    {
      return $this->filterIsRange;
    }

    /**
     * @param boolean $filterIsRange
     * @return \mcrock\AllegroApi\Soap\Wsdl\FiltersListType
     */
    public function setFilterIsRange($filterIsRange)
    {
      $this->filterIsRange = $filterIsRange;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilterArraySize()
    {
      return $this->filterArraySize;
    }

    /**
     * @param int $filterArraySize
     * @return \mcrock\AllegroApi\Soap\Wsdl\FiltersListType
     */
    public function setFilterArraySize($filterArraySize)
    {
      $this->filterArraySize = $filterArraySize;
      return $this;
    }

    /**
     * @return ArrayOfFiltervaluetype
     */
    public function getFilterValues()
    {
      return $this->filterValues;
    }

    /**
     * @param ArrayOfFiltervaluetype $filterValues
     * @return \mcrock\AllegroApi\Soap\Wsdl\FiltersListType
     */
    public function setFilterValues($filterValues)
    {
      $this->filterValues = $filterValues;
      return $this;
    }

    /**
     * @return FilterRelationType
     */
    public function getFilterRelations()
    {
      return $this->filterRelations;
    }

    /**
     * @param FilterRelationType $filterRelations
     * @return \mcrock\AllegroApi\Soap\Wsdl\FiltersListType
     */
    public function setFilterRelations($filterRelations)
    {
      $this->filterRelations = $filterRelations;
      return $this;
    }

}
