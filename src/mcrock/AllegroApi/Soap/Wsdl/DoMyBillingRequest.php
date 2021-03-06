<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class DoMyBillingRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @param string $sessionHandle
     */
    public function __construct($sessionHandle = null)
    {
      $this->sessionHandle = $sessionHandle;
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
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoMyBillingRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

}
