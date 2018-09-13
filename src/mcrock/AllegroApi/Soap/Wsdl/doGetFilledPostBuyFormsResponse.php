<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doGetFilledPostBuyFormsResponse
{

    /**
     * @var FilledPostBuyFormsStruct $filledPostBuyForms
     */
    protected $filledPostBuyForms = null;

    /**
     * @param FilledPostBuyFormsStruct $filledPostBuyForms
     */
    public function __construct($filledPostBuyForms = null)
    {
      $this->filledPostBuyForms = $filledPostBuyForms;
    }

    /**
     * @return FilledPostBuyFormsStruct
     */
    public function getFilledPostBuyForms()
    {
      return $this->filledPostBuyForms;
    }

    /**
     * @param FilledPostBuyFormsStruct $filledPostBuyForms
     * @return \mcrock\AllegroApi\Soap\Wsdl\doGetFilledPostBuyFormsResponse
     */
    public function setFilledPostBuyForms($filledPostBuyForms)
    {
      $this->filledPostBuyForms = $filledPostBuyForms;
      return $this;
    }

}
