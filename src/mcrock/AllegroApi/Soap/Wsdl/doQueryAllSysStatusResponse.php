<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doQueryAllSysStatusResponse
{

    /**
     * @var ArrayOfSysstatustype $sysCountryStatus
     */
    protected $sysCountryStatus = null;

    /**
     * @param ArrayOfSysstatustype $sysCountryStatus
     */
    public function __construct($sysCountryStatus = null)
    {
      $this->sysCountryStatus = $sysCountryStatus;
    }

    /**
     * @return ArrayOfSysstatustype
     */
    public function getSysCountryStatus()
    {
      return $this->sysCountryStatus;
    }

    /**
     * @param ArrayOfSysstatustype $sysCountryStatus
     * @return \mcrock\AllegroApi\Soap\Wsdl\doQueryAllSysStatusResponse
     */
    public function setSysCountryStatus($sysCountryStatus)
    {
      $this->sysCountryStatus = $sysCountryStatus;
      return $this;
    }

}
