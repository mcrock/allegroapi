<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class DoQueryAllSysStatusRequest
{

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int $countryId
     * @param string $webapiKey
     */
    public function __construct($countryId = null, $webapiKey = null)
    {
      $this->countryId = $countryId;
      $this->webapiKey = $webapiKey;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoQueryAllSysStatusRequest
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoQueryAllSysStatusRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

}
