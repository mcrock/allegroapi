<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class SellerPaymentInfoStruct
{

    /**
     * @var ArrayOfShipmentpaymentinfostruct $shipmentPaymentInfoPza
     */
    protected $shipmentPaymentInfoPza = null;

    /**
     * @var ArrayOfShipmentpaymentinfostruct $shipmentPaymentInfoNonPza
     */
    protected $shipmentPaymentInfoNonPza = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfShipmentpaymentinfostruct
     */
    public function getShipmentPaymentInfoPza()
    {
      return $this->shipmentPaymentInfoPza;
    }

    /**
     * @param ArrayOfShipmentpaymentinfostruct $shipmentPaymentInfoPza
     * @return \mcrock\AllegroApi\Soap\Wsdl\SellerPaymentInfoStruct
     */
    public function setShipmentPaymentInfoPza($shipmentPaymentInfoPza)
    {
      $this->shipmentPaymentInfoPza = $shipmentPaymentInfoPza;
      return $this;
    }

    /**
     * @return ArrayOfShipmentpaymentinfostruct
     */
    public function getShipmentPaymentInfoNonPza()
    {
      return $this->shipmentPaymentInfoNonPza;
    }

    /**
     * @param ArrayOfShipmentpaymentinfostruct $shipmentPaymentInfoNonPza
     * @return \mcrock\AllegroApi\Soap\Wsdl\SellerPaymentInfoStruct
     */
    public function setShipmentPaymentInfoNonPza($shipmentPaymentInfoNonPza)
    {
      $this->shipmentPaymentInfoNonPza = $shipmentPaymentInfoNonPza;
      return $this;
    }

}
