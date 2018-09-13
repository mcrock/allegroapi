<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doGetShipmentDataForRelatedItemsResponse
{

    /**
     * @var RelatedItemsShipmentDataStruct $relatedItemsShipmentData
     */
    protected $relatedItemsShipmentData = null;

    /**
     * @param RelatedItemsShipmentDataStruct $relatedItemsShipmentData
     */
    public function __construct($relatedItemsShipmentData = null)
    {
      $this->relatedItemsShipmentData = $relatedItemsShipmentData;
    }

    /**
     * @return RelatedItemsShipmentDataStruct
     */
    public function getRelatedItemsShipmentData()
    {
      return $this->relatedItemsShipmentData;
    }

    /**
     * @param RelatedItemsShipmentDataStruct $relatedItemsShipmentData
     * @return \mcrock\AllegroApi\Soap\Wsdl\doGetShipmentDataForRelatedItemsResponse
     */
    public function setRelatedItemsShipmentData($relatedItemsShipmentData)
    {
      $this->relatedItemsShipmentData = $relatedItemsShipmentData;
      return $this;
    }

}
