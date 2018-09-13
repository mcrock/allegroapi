<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doGetMyIncomingPaymentsResponse
{

    /**
     * @var ArrayOfUserincomingpaymentstruct $payTransIncome
     */
    protected $payTransIncome = null;

    /**
     * @param ArrayOfUserincomingpaymentstruct $payTransIncome
     */
    public function __construct($payTransIncome = null)
    {
      $this->payTransIncome = $payTransIncome;
    }

    /**
     * @return ArrayOfUserincomingpaymentstruct
     */
    public function getPayTransIncome()
    {
      return $this->payTransIncome;
    }

    /**
     * @param ArrayOfUserincomingpaymentstruct $payTransIncome
     * @return \mcrock\AllegroApi\Soap\Wsdl\doGetMyIncomingPaymentsResponse
     */
    public function setPayTransIncome($payTransIncome)
    {
      $this->payTransIncome = $payTransIncome;
      return $this;
    }

}
