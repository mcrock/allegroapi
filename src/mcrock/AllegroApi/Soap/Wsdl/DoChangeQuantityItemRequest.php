<?php

namespace mcrock\AllegroApi\Soap\Wsdl;

class DoChangeQuantityItemRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $newItemQuantity
     */
    protected $newItemQuantity = null;

    /**
     * @param string $sessionHandle
     * @param int $itemId
     * @param int $newItemQuantity
     */
    public function __construct($sessionHandle = null, $itemId = null, $newItemQuantity = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemId = $itemId;
      $this->newItemQuantity = $newItemQuantity;
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
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoChangeQuantityItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoChangeQuantityItemRequest
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewItemQuantity()
    {
      return $this->newItemQuantity;
    }

    /**
     * @param int $newItemQuantity
     * @return \mcrock\AllegroApi\Soap\Wsdl\DoChangeQuantityItemRequest
     */
    public function setNewItemQuantity($newItemQuantity)
    {
      $this->newItemQuantity = $newItemQuantity;
      return $this;
    }

}
