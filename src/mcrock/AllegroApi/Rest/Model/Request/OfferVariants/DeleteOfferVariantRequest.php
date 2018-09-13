<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 15:02
 */

namespace mcrock\AllegroApi\Rest\Model\Request\OfferVariants;


use mcrock\AllegroApi\Rest\Model\RequestInterface;
use mcrock\AllegroApi\RestClientInterface;

class DeleteOfferVariantRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $setId;

    public function __construct(string $setId)
    {
        $this->setId = $setId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return "sale/offer-variants/{$this->setId}";
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
    public function getSetId(): string
    {
        return $this->setId;
    }

    /**
     * @param string $setId
     */
    public function setSetId(string $setId): void
    {
        $this->setId = $setId;
    }


}
