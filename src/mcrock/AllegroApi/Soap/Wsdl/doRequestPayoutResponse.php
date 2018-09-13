<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doRequestPayoutResponse
{

    /**
     * @var RequestPayoutStruct $requestPayout
     */
    protected $requestPayout = null;

    /**
     * @param RequestPayoutStruct $requestPayout
     */
    public function __construct($requestPayout = null)
    {
      $this->requestPayout = $requestPayout;
    }

    /**
     * @return RequestPayoutStruct
     */
    public function getRequestPayout()
    {
      return $this->requestPayout;
    }

    /**
     * @param RequestPayoutStruct $requestPayout
     * @return \mcrock\AllegroApi\Soap\Wsdl\doRequestPayoutResponse
     */
    public function setRequestPayout($requestPayout)
    {
      $this->requestPayout = $requestPayout;
      return $this;
    }

}
