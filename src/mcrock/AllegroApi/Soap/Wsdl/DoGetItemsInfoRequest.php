<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class DoGetItemsInfoRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfLong $itemsIdArray
     */
    protected $itemsIdArray = null;

    /**
     * @var int $getDesc
     */
    protected $getDesc = null;

    /**
     * @var int $getImageUrl
     */
    protected $getImageUrl = null;

    /**
     * @var int $getAttribs
     */
    protected $getAttribs = null;

    /**
     * @var int $getPostageOptions
     */
    protected $getPostageOptions = null;

    /**
     * @var int $getCompanyInfo
     */
    protected $getCompanyInfo = null;

    /**
     * @var int $getProductInfo
     */
    protected $getProductInfo = null;

    /**
     * @var int $getAfterSalesServiceConditions
     */
    protected $getAfterSalesServiceConditions = null;

    /**
     * @var int $getEan
     */
    protected $getEan = null;

    /**
     * @var int $getAdditionalServicesGroup
     */
    protected $getAdditionalServicesGroup = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfLong $itemsIdArray
     * @param int $getDesc
     * @param int $getImageUrl
     * @param int $getAttribs
     * @param int $getPostageOptions
     * @param int $getCompanyInfo
     * @param int $getProductInfo
     * @param int $getAfterSalesServiceConditions
     * @param int $getEan
     * @param int $getAdditionalServicesGroup
     */
    public function __construct($sessionHandle = null, $itemsIdArray = null, $getDesc = null, $getImageUrl = null, $getAttribs = null, $getPostageOptions = null, $getCompanyInfo = null, $getProductInfo = null, $getAfterSalesServiceConditions = null, $getEan = null, $getAdditionalServicesGroup = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemsIdArray = $itemsIdArray;
      $this->getDesc = $getDesc;
      $this->getImageUrl = $getImageUrl;
      $this->getAttribs = $getAttribs;
      $this->getPostageOptions = $getPostageOptions;
      $this->getCompanyInfo = $getCompanyInfo;
      $this->getProductInfo = $getProductInfo;
      $this->getAfterSalesServiceConditions = $getAfterSalesServiceConditions;
      $this->getEan = $getEan;
      $this->getAdditionalServicesGroup = $getAdditionalServicesGroup;
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
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemsIdArray()
    {
      return $this->itemsIdArray;
    }

    /**
     * @param ArrayOfLong $itemsIdArray
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setItemsIdArray($itemsIdArray)
    {
      $this->itemsIdArray = $itemsIdArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetDesc()
    {
      return $this->getDesc;
    }

    /**
     * @param int $getDesc
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setGetDesc($getDesc)
    {
      $this->getDesc = $getDesc;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetImageUrl()
    {
      return $this->getImageUrl;
    }

    /**
     * @param int $getImageUrl
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setGetImageUrl($getImageUrl)
    {
      $this->getImageUrl = $getImageUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetAttribs()
    {
      return $this->getAttribs;
    }

    /**
     * @param int $getAttribs
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setGetAttribs($getAttribs)
    {
      $this->getAttribs = $getAttribs;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetPostageOptions()
    {
      return $this->getPostageOptions;
    }

    /**
     * @param int $getPostageOptions
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setGetPostageOptions($getPostageOptions)
    {
      $this->getPostageOptions = $getPostageOptions;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetCompanyInfo()
    {
      return $this->getCompanyInfo;
    }

    /**
     * @param int $getCompanyInfo
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setGetCompanyInfo($getCompanyInfo)
    {
      $this->getCompanyInfo = $getCompanyInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetProductInfo()
    {
      return $this->getProductInfo;
    }

    /**
     * @param int $getProductInfo
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setGetProductInfo($getProductInfo)
    {
      $this->getProductInfo = $getProductInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetAfterSalesServiceConditions()
    {
      return $this->getAfterSalesServiceConditions;
    }

    /**
     * @param int $getAfterSalesServiceConditions
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setGetAfterSalesServiceConditions($getAfterSalesServiceConditions)
    {
      $this->getAfterSalesServiceConditions = $getAfterSalesServiceConditions;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetEan()
    {
      return $this->getEan;
    }

    /**
     * @param int $getEan
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setGetEan($getEan)
    {
      $this->getEan = $getEan;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetAdditionalServicesGroup()
    {
      return $this->getAdditionalServicesGroup;
    }

    /**
     * @param int $getAdditionalServicesGroup
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setGetAdditionalServicesGroup($getAdditionalServicesGroup)
    {
      $this->getAdditionalServicesGroup = $getAdditionalServicesGroup;
      return $this;
    }

}
