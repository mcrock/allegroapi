<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class RelatedPersonsStruct
{

    /**
     * @var string $spouseFirstName
     */
    protected $spouseFirstName = null;

    /**
     * @var string $spouseLastName
     */
    protected $spouseLastName = null;

    /**
     * @param string $spouseFirstName
     * @param string $spouseLastName
     */
    public function __construct($spouseFirstName = null, $spouseLastName = null)
    {
      $this->spouseFirstName = $spouseFirstName;
      $this->spouseLastName = $spouseLastName;
    }

    /**
     * @return string
     */
    public function getSpouseFirstName()
    {
      return $this->spouseFirstName;
    }

    /**
     * @param string $spouseFirstName
     * @return \mcrock\AllegroApi\Soap\Wsdl\RelatedPersonsStruct
     */
    public function setSpouseFirstName($spouseFirstName)
    {
      $this->spouseFirstName = $spouseFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpouseLastName()
    {
      return $this->spouseLastName;
    }

    /**
     * @param string $spouseLastName
     * @return \mcrock\AllegroApi\Soap\Wsdl\RelatedPersonsStruct
     */
    public function setSpouseLastName($spouseLastName)
    {
      $this->spouseLastName = $spouseLastName;
      return $this;
    }

}
