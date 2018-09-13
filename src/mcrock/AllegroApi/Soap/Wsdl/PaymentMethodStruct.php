<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class PaymentMethodStruct
{

    /**
     * @var string $paymentMethodId
     */
    protected $paymentMethodId = null;

    /**
     * @var string $paymentMethodName
     */
    protected $paymentMethodName = null;

    /**
     * @var string $paymentMethodImage
     */
    protected $paymentMethodImage = null;

    /**
     * @var int $paymentMethodUsage
     */
    protected $paymentMethodUsage = null;

    /**
     * @param string $paymentMethodId
     * @param string $paymentMethodName
     * @param string $paymentMethodImage
     * @param int $paymentMethodUsage
     */
    public function __construct($paymentMethodId = null, $paymentMethodName = null, $paymentMethodImage = null, $paymentMethodUsage = null)
    {
      $this->paymentMethodId = $paymentMethodId;
      $this->paymentMethodName = $paymentMethodName;
      $this->paymentMethodImage = $paymentMethodImage;
      $this->paymentMethodUsage = $paymentMethodUsage;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId()
    {
      return $this->paymentMethodId;
    }

    /**
     * @param string $paymentMethodId
     * @return \mcrock\AllegroApi\Soap\Wsdl\PaymentMethodStruct
     */
    public function setPaymentMethodId($paymentMethodId)
    {
      $this->paymentMethodId = $paymentMethodId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodName()
    {
      return $this->paymentMethodName;
    }

    /**
     * @param string $paymentMethodName
     * @return \mcrock\AllegroApi\Soap\Wsdl\PaymentMethodStruct
     */
    public function setPaymentMethodName($paymentMethodName)
    {
      $this->paymentMethodName = $paymentMethodName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodImage()
    {
      return $this->paymentMethodImage;
    }

    /**
     * @param string $paymentMethodImage
     * @return \mcrock\AllegroApi\Soap\Wsdl\PaymentMethodStruct
     */
    public function setPaymentMethodImage($paymentMethodImage)
    {
      $this->paymentMethodImage = $paymentMethodImage;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentMethodUsage()
    {
      return $this->paymentMethodUsage;
    }

    /**
     * @param int $paymentMethodUsage
     * @return \mcrock\AllegroApi\Soap\Wsdl\PaymentMethodStruct
     */
    public function setPaymentMethodUsage($paymentMethodUsage)
    {
      $this->paymentMethodUsage = $paymentMethodUsage;
      return $this;
    }

}
