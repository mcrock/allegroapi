<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class doBidItemResponse
{

    /**
     * @var string $bidPrice
     */
    protected $bidPrice = null;

    /**
     * @param string $bidPrice
     */
    public function __construct($bidPrice = null)
    {
      $this->bidPrice = $bidPrice;
    }

    /**
     * @return string
     */
    public function getBidPrice()
    {
      return $this->bidPrice;
    }

    /**
     * @param string $bidPrice
     * @return \mcrock\AllegroApi\Soap\Wsdl\doBidItemResponse
     */
    public function setBidPrice($bidPrice)
    {
      $this->bidPrice = $bidPrice;
      return $this;
    }

}
