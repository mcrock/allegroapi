<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class DoGetTransactionsIDsRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfLong $itemsIdArray
     */
    protected $itemsIdArray = null;

    /**
     * @var string $userRole
     */
    protected $userRole = null;

    /**
     * @var ArrayOfLong $shipmentIdArray
     */
    protected $shipmentIdArray = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfLong $itemsIdArray
     * @param string $userRole
     * @param ArrayOfLong $shipmentIdArray
     */
    public function __construct($sessionHandle = null, $itemsIdArray = null, $userRole = null, $shipmentIdArray = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemsIdArray = $itemsIdArray;
      $this->userRole = $userRole;
      $this->shipmentIdArray = $shipmentIdArray;
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
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetTransactionsIDsRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemsIdArray()
    {
      return $this->itemsIdArray;
    }

    /**
     * @param ArrayOfLong $itemsIdArray
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetTransactionsIDsRequest
     */
    public function setItemsIdArray($itemsIdArray)
    {
      $this->itemsIdArray = $itemsIdArray;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserRole()
    {
      return $this->userRole;
    }

    /**
     * @param string $userRole
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetTransactionsIDsRequest
     */
    public function setUserRole($userRole)
    {
      $this->userRole = $userRole;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getShipmentIdArray()
    {
      return $this->shipmentIdArray;
    }

    /**
     * @param ArrayOfLong $shipmentIdArray
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetTransactionsIDsRequest
     */
    public function setShipmentIdArray($shipmentIdArray)
    {
      $this->shipmentIdArray = $shipmentIdArray;
      return $this;
    }

}
