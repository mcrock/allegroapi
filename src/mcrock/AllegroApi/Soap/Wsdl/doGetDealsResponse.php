<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doGetDealsResponse
{

    /**
     * @var ArrayOfDealsstruct $dealsList
     */
    protected $dealsList = null;

    /**
     * @param ArrayOfDealsstruct $dealsList
     */
    public function __construct($dealsList = null)
    {
      $this->dealsList = $dealsList;
    }

    /**
     * @return ArrayOfDealsstruct
     */
    public function getDealsList()
    {
      return $this->dealsList;
    }

    /**
     * @param ArrayOfDealsstruct $dealsList
     * @return \mcrock\AllegroApi\Soap\Wsdl\doGetDealsResponse
     */
    public function setDealsList($dealsList)
    {
      $this->dealsList = $dealsList;
      return $this;
    }

}
