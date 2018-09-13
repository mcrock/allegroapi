<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class PostBuyFormStruct
{

    /**
     * @var int $transactionId
     */
    protected $transactionId = null;

    /**
     * @var ArrayOfLong $transactionPackageIds
     */
    protected $transactionPackageIds = null;

    /**
     * @var TransactionPayByLinkStruct $transactionPayByLink
     */
    protected $transactionPayByLink = null;

    /**
     * @param int $transactionId
     * @param TransactionPayByLinkStruct $transactionPayByLink
     */
    public function __construct($transactionId = null, $transactionPayByLink = null)
    {
      $this->transactionId = $transactionId;
      $this->transactionPayByLink = $transactionPayByLink;
    }

    /**
     * @return int
     */
    public function getTransactionId()
    {
      return $this->transactionId;
    }

    /**
     * @param int $transactionId
     * @return \mcrock\AllegroApi\Soap\Wsdl\PostBuyFormStruct
     */
    public function setTransactionId($transactionId)
    {
      $this->transactionId = $transactionId;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getTransactionPackageIds()
    {
      return $this->transactionPackageIds;
    }

    /**
     * @param ArrayOfLong $transactionPackageIds
     * @return \mcrock\AllegroApi\Soap\Wsdl\PostBuyFormStruct
     */
    public function setTransactionPackageIds($transactionPackageIds)
    {
      $this->transactionPackageIds = $transactionPackageIds;
      return $this;
    }

    /**
     * @return TransactionPayByLinkStruct
     */
    public function getTransactionPayByLink()
    {
      return $this->transactionPayByLink;
    }

    /**
     * @param TransactionPayByLinkStruct $transactionPayByLink
     * @return \mcrock\AllegroApi\Soap\Wsdl\PostBuyFormStruct
     */
    public function setTransactionPayByLink($transactionPayByLink)
    {
      $this->transactionPayByLink = $transactionPayByLink;
      return $this;
    }

}
