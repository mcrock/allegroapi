<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 11:29
 */

namespace mcrock\AllegroApi\Rest\Model\Request\OfferManagement\ShippingRates\PostData;


use mcrock\AllegroApi\Rest\Model\Collection\AbstractCollection;
use mcrock\AllegroApi\Rest\Model\Collection\WrongElementTypeException;

class ShippingRateCollection extends AbstractCollection
{
    public function add($value, $offset = null)
    {
        if (!$value instanceof ShippingRate) {
            throw new WrongElementTypeException(ShippingRate::class);
        }

        parent::add($value, $offset);
    }

}
