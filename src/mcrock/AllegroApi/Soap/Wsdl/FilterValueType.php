<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class FilterValueType
{

    /**
     * @var string $filterValueId
     */
    protected $filterValueId = null;

    /**
     * @var string $filterValueName
     */
    protected $filterValueName = null;

    /**
     * @var int $filterValueCount
     */
    protected $filterValueCount = null;

    /**
     * @param string $filterValueId
     * @param string $filterValueName
     */
    public function __construct($filterValueId = null, $filterValueName = null)
    {
      $this->filterValueId = $filterValueId;
      $this->filterValueName = $filterValueName;
    }

    /**
     * @return string
     */
    public function getFilterValueId()
    {
      return $this->filterValueId;
    }

    /**
     * @param string $filterValueId
     * @return \mcrock\AllegroApi\Soap\Wsdl\FilterValueType
     */
    public function setFilterValueId($filterValueId)
    {
      $this->filterValueId = $filterValueId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilterValueName()
    {
      return $this->filterValueName;
    }

    /**
     * @param string $filterValueName
     * @return \mcrock\AllegroApi\Soap\Wsdl\FilterValueType
     */
    public function setFilterValueName($filterValueName)
    {
      $this->filterValueName = $filterValueName;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilterValueCount()
    {
      return $this->filterValueCount;
    }

    /**
     * @param int $filterValueCount
     * @return \mcrock\AllegroApi\Soap\Wsdl\FilterValueType
     */
    public function setFilterValueCount($filterValueCount)
    {
      $this->filterValueCount = $filterValueCount;
      return $this;
    }

}
