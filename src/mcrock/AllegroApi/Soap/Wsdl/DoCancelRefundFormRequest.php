<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class DoCancelRefundFormRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $refundId
     */
    protected $refundId = null;

    /**
     * @param string $sessionId
     * @param int $refundId
     */
    public function __construct($sessionId = null, $refundId = null)
    {
      $this->sessionId = $sessionId;
      $this->refundId = $refundId;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoCancelRefundFormRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefundId()
    {
      return $this->refundId;
    }

    /**
     * @param int $refundId
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoCancelRefundFormRequest
     */
    public function setRefundId($refundId)
    {
      $this->refundId = $refundId;
      return $this;
    }

}
