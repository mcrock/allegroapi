<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doGetPostBuyFormsDataForSellersResponse
{

    /**
     * @var ArrayOfPostbuyformdatastruct $postBuyFormData
     */
    protected $postBuyFormData = null;

    /**
     * @param ArrayOfPostbuyformdatastruct $postBuyFormData
     */
    public function __construct($postBuyFormData = null)
    {
      $this->postBuyFormData = $postBuyFormData;
    }

    /**
     * @return ArrayOfPostbuyformdatastruct
     */
    public function getPostBuyFormData()
    {
      return $this->postBuyFormData;
    }

    /**
     * @param ArrayOfPostbuyformdatastruct $postBuyFormData
     * @return \mcrock\AllegroApi\Soap\Wsdl\doGetPostBuyFormsDataForSellersResponse
     */
    public function setPostBuyFormData($postBuyFormData)
    {
      $this->postBuyFormData = $postBuyFormData;
      return $this;
    }

}
