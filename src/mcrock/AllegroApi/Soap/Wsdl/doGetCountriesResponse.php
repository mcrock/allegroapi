<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doGetCountriesResponse
{

    /**
     * @var ArrayOfCountryinfotype $countryArray
     */
    protected $countryArray = null;

    /**
     * @param ArrayOfCountryinfotype $countryArray
     */
    public function __construct($countryArray = null)
    {
      $this->countryArray = $countryArray;
    }

    /**
     * @return ArrayOfCountryinfotype
     */
    public function getCountryArray()
    {
      return $this->countryArray;
    }

    /**
     * @param ArrayOfCountryinfotype $countryArray
     * @return \mcrock\AllegroApi\Soap\Wsdl\doGetCountriesResponse
     */
    public function setCountryArray($countryArray)
    {
      $this->countryArray = $countryArray;
      return $this;
    }

}
