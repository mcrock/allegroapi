<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class FinishItemsStruct
{

    /**
     * @var int $finishItemId
     */
    protected $finishItemId = null;

    /**
     * @var int $finishCancelAllBids
     */
    protected $finishCancelAllBids = null;

    /**
     * @var string $finishCancelReason
     */
    protected $finishCancelReason = null;

    /**
     * @param int $finishItemId
     */
    public function __construct($finishItemId = null)
    {
      $this->finishItemId = $finishItemId;
    }

    /**
     * @return int
     */
    public function getFinishItemId()
    {
      return $this->finishItemId;
    }

    /**
     * @param int $finishItemId
     * @return \mcrock\AllegroApi\Soap\Wsdl\FinishItemsStruct
     */
    public function setFinishItemId($finishItemId)
    {
      $this->finishItemId = $finishItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFinishCancelAllBids()
    {
      return $this->finishCancelAllBids;
    }

    /**
     * @param int $finishCancelAllBids
     * @return \mcrock\AllegroApi\Soap\Wsdl\FinishItemsStruct
     */
    public function setFinishCancelAllBids($finishCancelAllBids)
    {
      $this->finishCancelAllBids = $finishCancelAllBids;
      return $this;
    }

    /**
     * @return string
     */
    public function getFinishCancelReason()
    {
      return $this->finishCancelReason;
    }

    /**
     * @param string $finishCancelReason
     * @return \mcrock\AllegroApi\Soap\Wsdl\FinishItemsStruct
     */
    public function setFinishCancelReason($finishCancelReason)
    {
      $this->finishCancelReason = $finishCancelReason;
      return $this;
    }

}
