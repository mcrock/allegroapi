<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 13:15
 */

namespace mcrock\AllegroApi\Rest\Model\Request\OfferManagement\ShippingRates;


use mcrock\AllegroApi\Rest\Model\Auth\TokenInterface;
use mcrock\AllegroApi\Rest\Model\RequestInterface;
use mcrock\AllegroApi\RestClientInterface;

class GetShippingRatesRequest implements RequestInterface
{
    /**
     * @var TokenInterface
     */
    private $token;

    public function __construct(TokenInterface $token)
    {
        $this->token = $token;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "sale/shipping-rates";
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
        return ['seller.id' => $this->token->getUserId()];
    }

    /**
     * @return TokenInterface
     */
    public function getToken(): TokenInterface
    {
        return $this->token;
    }

    /**
     * @param TokenInterface $token
     */
    public function setToken(TokenInterface $token): void
    {
        $this->token = $token;
    }


}
