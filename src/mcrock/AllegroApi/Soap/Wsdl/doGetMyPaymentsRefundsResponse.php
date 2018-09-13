<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doGetMyPaymentsRefundsResponse
{

    /**
     * @var ArrayOfUserpaymentrefundsstruct $payTransPaymentRefunds
     */
    protected $payTransPaymentRefunds = null;

    /**
     * @param ArrayOfUserpaymentrefundsstruct $payTransPaymentRefunds
     */
    public function __construct($payTransPaymentRefunds = null)
    {
      $this->payTransPaymentRefunds = $payTransPaymentRefunds;
    }

    /**
     * @return ArrayOfUserpaymentrefundsstruct
     */
    public function getPayTransPaymentRefunds()
    {
      return $this->payTransPaymentRefunds;
    }

    /**
     * @param ArrayOfUserpaymentrefundsstruct $payTransPaymentRefunds
     * @return \mcrock\AllegroApi\Soap\Wsdl\doGetMyPaymentsRefundsResponse
     */
    public function setPayTransPaymentRefunds($payTransPaymentRefunds)
    {
      $this->payTransPaymentRefunds = $payTransPaymentRefunds;
      return $this;
    }

}
