<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doGetMyPaymentsInfoResponse
{

    /**
     * @var PaymentsInfoStruct $paymentsInfo
     */
    protected $paymentsInfo = null;

    /**
     * @param PaymentsInfoStruct $paymentsInfo
     */
    public function __construct($paymentsInfo = null)
    {
      $this->paymentsInfo = $paymentsInfo;
    }

    /**
     * @return PaymentsInfoStruct
     */
    public function getPaymentsInfo()
    {
      return $this->paymentsInfo;
    }

    /**
     * @param PaymentsInfoStruct $paymentsInfo
     * @return \mcrock\AllegroApi\Soap\Wsdl\doGetMyPaymentsInfoResponse
     */
    public function setPaymentsInfo($paymentsInfo)
    {
      $this->paymentsInfo = $paymentsInfo;
      return $this;
    }

}
