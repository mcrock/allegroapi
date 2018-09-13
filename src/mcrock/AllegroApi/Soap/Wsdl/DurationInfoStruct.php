<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class DurationInfoStruct
{

    /**
     * @var int $durationType
     */
    protected $durationType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDurationType()
    {
      return $this->durationType;
    }

    /**
     * @param int $durationType
     * @return \mcrock\AllegroApi\Soap\Wsdl\DurationInfoStruct
     */
    public function setDurationType($durationType)
    {
      $this->durationType = $durationType;
      return $this;
    }

}
