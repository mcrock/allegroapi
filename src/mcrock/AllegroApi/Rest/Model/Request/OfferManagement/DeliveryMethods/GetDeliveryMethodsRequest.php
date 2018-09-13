<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 12:02
 */

namespace mcrock\AllegroApi\Rest\Model\Request\OfferManagement\DeliveryMethods;


use mcrock\AllegroApi\Rest\Model\RequestInterface;
use mcrock\AllegroApi\RestClientInterface;

class GetDeliveryMethodsRequest implements RequestInterface
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "sale/delivery-methods";
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_BETA;
    }

    public function getBody(): ?array
    {
        return null;
    }

    public function getQuery(): ?array
    {
        return null;
    }

}
