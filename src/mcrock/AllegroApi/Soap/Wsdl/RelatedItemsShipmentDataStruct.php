<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class RelatedItemsShipmentDataStruct
{

    /**
     * @var ArrayOfSellershipmentdatastruct $sellerShipmentData
     */
    protected $sellerShipmentData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfSellershipmentdatastruct
     */
    public function getSellerShipmentData()
    {
      return $this->sellerShipmentData;
    }

    /**
     * @param ArrayOfSellershipmentdatastruct $sellerShipmentData
     * @return \mcrock\AllegroApi\Soap\Wsdl\RelatedItemsShipmentDataStruct
     */
    public function setSellerShipmentData($sellerShipmentData)
    {
      $this->sellerShipmentData = $sellerShipmentData;
      return $this;
    }

}
