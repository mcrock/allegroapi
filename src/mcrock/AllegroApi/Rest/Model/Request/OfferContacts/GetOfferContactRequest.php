<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 13:47
 */

namespace mcrock\AllegroApi\Rest\Model\Request\OfferContacts;


use mcrock\AllegroApi\Rest\Model\RequestInterface;

class GetOfferContactRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "sale/offer-contacts/{$this->id}";
    }

    public function getContentType(): ?string
    {
        return null;
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
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }


}
