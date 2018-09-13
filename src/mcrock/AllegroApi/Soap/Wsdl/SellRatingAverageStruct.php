<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class SellRatingAverageStruct
{

    /**
     * @var string $sellRatingGroupTitle
     */
    protected $sellRatingGroupTitle = null;

    /**
     * @var float $sellRatingGroupAverage
     */
    protected $sellRatingGroupAverage = null;

    /**
     * @param string $sellRatingGroupTitle
     * @param float $sellRatingGroupAverage
     */
    public function __construct($sellRatingGroupTitle = null, $sellRatingGroupAverage = null)
    {
      $this->sellRatingGroupTitle = $sellRatingGroupTitle;
      $this->sellRatingGroupAverage = $sellRatingGroupAverage;
    }

    /**
     * @return string
     */
    public function getSellRatingGroupTitle()
    {
      return $this->sellRatingGroupTitle;
    }

    /**
     * @param string $sellRatingGroupTitle
     * @return \mcrock\AllegroApi\Soap\Wsdl\SellRatingAverageStruct
     */
    public function setSellRatingGroupTitle($sellRatingGroupTitle)
    {
      $this->sellRatingGroupTitle = $sellRatingGroupTitle;
      return $this;
    }

    /**
     * @return float
     */
    public function getSellRatingGroupAverage()
    {
      return $this->sellRatingGroupAverage;
    }

    /**
     * @param float $sellRatingGroupAverage
     * @return \mcrock\AllegroApi\Soap\Wsdl\SellRatingAverageStruct
     */
    public function setSellRatingGroupAverage($sellRatingGroupAverage)
    {
      $this->sellRatingGroupAverage = $sellRatingGroupAverage;
      return $this;
    }

}
