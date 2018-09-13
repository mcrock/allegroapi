<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class DoFinishItemsRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfFinishitemsstruct $finishItemsList
     */
    protected $finishItemsList = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfFinishitemsstruct $finishItemsList
     */
    public function __construct($sessionHandle = null, $finishItemsList = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->finishItemsList = $finishItemsList;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoFinishItemsRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfFinishitemsstruct
     */
    public function getFinishItemsList()
    {
      return $this->finishItemsList;
    }

    /**
     * @param ArrayOfFinishitemsstruct $finishItemsList
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoFinishItemsRequest
     */
    public function setFinishItemsList($finishItemsList)
    {
      $this->finishItemsList = $finishItemsList;
      return $this;
    }

}
