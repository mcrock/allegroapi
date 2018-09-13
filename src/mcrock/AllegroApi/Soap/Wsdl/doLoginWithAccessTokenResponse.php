<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doLoginWithAccessTokenResponse
{

    /**
     * @var string $sessionHandlePart
     */
    protected $sessionHandlePart = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $serverTime
     */
    protected $serverTime = null;

    /**
     * @param string $sessionHandlePart
     * @param int $userId
     * @param int $serverTime
     */
    public function __construct($sessionHandlePart = null, $userId = null, $serverTime = null)
    {
      $this->sessionHandlePart = $sessionHandlePart;
      $this->userId = $userId;
      $this->serverTime = $serverTime;
    }

    /**
     * @return string
     */
    public function getSessionHandlePart()
    {
      return $this->sessionHandlePart;
    }

    /**
     * @param string $sessionHandlePart
     * @return \mcrock\AllegroApi\Soap\Wsdl\doLoginWithAccessTokenResponse
     */
    public function setSessionHandlePart($sessionHandlePart)
    {
      $this->sessionHandlePart = $sessionHandlePart;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \mcrock\AllegroApi\Soap\Wsdl\doLoginWithAccessTokenResponse
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return int
     */
    public function getServerTime()
    {
      return $this->serverTime;
    }

    /**
     * @param int $serverTime
     * @return \mcrock\AllegroApi\Soap\Wsdl\doLoginWithAccessTokenResponse
     */
    public function setServerTime($serverTime)
    {
      $this->serverTime = $serverTime;
      return $this;
    }

}
