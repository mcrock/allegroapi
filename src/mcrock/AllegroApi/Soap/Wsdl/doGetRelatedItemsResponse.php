<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doGetRelatedItemsResponse
{

    /**
     * @var RelatedItemsStruct $relatedItems
     */
    protected $relatedItems = null;

    /**
     * @param RelatedItemsStruct $relatedItems
     */
    public function __construct($relatedItems = null)
    {
      $this->relatedItems = $relatedItems;
    }

    /**
     * @return RelatedItemsStruct
     */
    public function getRelatedItems()
    {
      return $this->relatedItems;
    }

    /**
     * @param RelatedItemsStruct $relatedItems
     * @return \mcrock\AllegroApi\Soap\Wsdl\doGetRelatedItemsResponse
     */
    public function setRelatedItems($relatedItems)
    {
      $this->relatedItems = $relatedItems;
      return $this;
    }

}
