<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doGetUserLoginResponse
{

    /**
     * @var string $userLogin
     */
    protected $userLogin = null;

    /**
     * @param string $userLogin
     */
    public function __construct($userLogin = null)
    {
      $this->userLogin = $userLogin;
    }

    /**
     * @return string
     */
    public function getUserLogin()
    {
      return $this->userLogin;
    }

    /**
     * @param string $userLogin
     * @return \mcrock\AllegroApi\Soap\Wsdl\doGetUserLoginResponse
     */
    public function setUserLogin($userLogin)
    {
      $this->userLogin = $userLogin;
      return $this;
    }

}
