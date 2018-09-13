<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class DoGetPostBuyDataRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfLong $itemsArray
     */
    protected $itemsArray = null;

    /**
     * @var ArrayOfLong $buyerFilterArray
     */
    protected $buyerFilterArray = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfLong $itemsArray
     * @param ArrayOfLong $buyerFilterArray
     */
    public function __construct($sessionHandle = null, $itemsArray = null, $buyerFilterArray = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemsArray = $itemsArray;
      $this->buyerFilterArray = $buyerFilterArray;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetPostBuyDataRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemsArray()
    {
      return $this->itemsArray;
    }

    /**
     * @param ArrayOfLong $itemsArray
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetPostBuyDataRequest
     */
    public function setItemsArray($itemsArray)
    {
      $this->itemsArray = $itemsArray;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getBuyerFilterArray()
    {
      return $this->buyerFilterArray;
    }

    /**
     * @param ArrayOfLong $buyerFilterArray
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetPostBuyDataRequest
     */
    public function setBuyerFilterArray($buyerFilterArray)
    {
      $this->buyerFilterArray = $buyerFilterArray;
      return $this;
    }

}
