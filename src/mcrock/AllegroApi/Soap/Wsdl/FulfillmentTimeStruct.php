<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class FulfillmentTimeStruct
{

    /**
     * @var int $fulfillmentTimeFrom
     */
    protected $fulfillmentTimeFrom = null;

    /**
     * @var int $fulfillmentTimeTo
     */
    protected $fulfillmentTimeTo = null;

    /**
     * @param int $fulfillmentTimeFrom
     * @param int $fulfillmentTimeTo
     */
    public function __construct($fulfillmentTimeFrom = null, $fulfillmentTimeTo = null)
    {
      $this->fulfillmentTimeFrom = $fulfillmentTimeFrom;
      $this->fulfillmentTimeTo = $fulfillmentTimeTo;
    }

    /**
     * @return int
     */
    public function getFulfillmentTimeFrom()
    {
      return $this->fulfillmentTimeFrom;
    }

    /**
     * @param int $fulfillmentTimeFrom
     * @return \mcrock\AllegroApi\Soap\Wsdl\FulfillmentTimeStruct
     */
    public function setFulfillmentTimeFrom($fulfillmentTimeFrom)
    {
      $this->fulfillmentTimeFrom = $fulfillmentTimeFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getFulfillmentTimeTo()
    {
      return $this->fulfillmentTimeTo;
    }

    /**
     * @param int $fulfillmentTimeTo
     * @return \mcrock\AllegroApi\Soap\Wsdl\FulfillmentTimeStruct
     */
    public function setFulfillmentTimeTo($fulfillmentTimeTo)
    {
      $this->fulfillmentTimeTo = $fulfillmentTimeTo;
      return $this;
    }

}
