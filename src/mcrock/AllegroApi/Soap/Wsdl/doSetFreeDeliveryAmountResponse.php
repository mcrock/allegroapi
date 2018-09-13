<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doSetFreeDeliveryAmountResponse
{

    /**
     * @var boolean $responseStatus
     */
    protected $responseStatus = null;

    /**
     * @param boolean $responseStatus
     */
    public function __construct($responseStatus = null)
    {
      $this->responseStatus = $responseStatus;
    }

    /**
     * @return boolean
     */
    public function getResponseStatus()
    {
      return $this->responseStatus;
    }

    /**
     * @param boolean $responseStatus
     * @return \mcrock\AllegroApi\Soap\Wsdl\doSetFreeDeliveryAmountResponse
     */
    public function setResponseStatus($responseStatus)
    {
      $this->responseStatus = $responseStatus;
      return $this;
    }

}
