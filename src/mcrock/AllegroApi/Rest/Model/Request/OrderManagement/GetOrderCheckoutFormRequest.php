<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 16:27
 */

namespace mcrock\AllegroApi\Rest\Model\Request\OrderManagement;


use mcrock\AllegroApi\Rest\Model\RequestInterface;
use mcrock\AllegroApi\RestClientInterface;

class GetOrderCheckoutFormRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $checkoutFormId;

    public function __construct(string $checkoutFormId)
    {
        $this->checkoutFormId = $checkoutFormId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "order/checkout-forms/{$this->checkoutFormId}";
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

    /**
     * @return string
     */
    public function getCheckoutFormId(): string
    {
        return $this->checkoutFormId;
    }

    /**
     * @param string $checkoutFormId
     */
    public function setCheckoutFormId(string $checkoutFormId): void
    {
        $this->checkoutFormId = $checkoutFormId;
    }


}
