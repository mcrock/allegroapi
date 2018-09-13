<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class FilledPostBuyFormsStruct
{

    /**
     * @var ArrayOfLong $transactionIds
     */
    protected $transactionIds = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfLong
     */
    public function getTransactionIds()
    {
      return $this->transactionIds;
    }

    /**
     * @param ArrayOfLong $transactionIds
     * @return \mcrock\AllegroApi\Soap\Wsdl\FilledPostBuyFormsStruct
     */
    public function setTransactionIds($transactionIds)
    {
      $this->transactionIds = $transactionIds;
      return $this;
    }

}
