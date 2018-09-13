<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class DoSetShipmentPriceTypeRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $shipmentPriceTypeId
     */
    protected $shipmentPriceTypeId = null;

    /**
     * @param string $sessionId
     * @param int $shipmentPriceTypeId
     */
    public function __construct($sessionId = null, $shipmentPriceTypeId = null)
    {
      $this->sessionId = $sessionId;
      $this->shipmentPriceTypeId = $shipmentPriceTypeId;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoSetShipmentPriceTypeRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentPriceTypeId()
    {
      return $this->shipmentPriceTypeId;
    }

    /**
     * @param int $shipmentPriceTypeId
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoSetShipmentPriceTypeRequest
     */
    public function setShipmentPriceTypeId($shipmentPriceTypeId)
    {
      $this->shipmentPriceTypeId = $shipmentPriceTypeId;
      return $this;
    }

}
