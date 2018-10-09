<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:20
 */

namespace mcrock\AllegroApi;


use mcrock\AllegroApi\Rest\Model\Auth\TokenInterface;
use mcrock\AllegroApi\Rest\Model\RequestInterface;
use mcrock\AllegroApi\Rest\Service\Auth\AuthServiceInterface;
use Psr\Http\Message\ResponseInterface;

interface RestClientInterface
{
    const CONTENT_TYPE_PUBLIC = 'application/vnd.allegro.public.v1+json';

    const CONTENT_TYPE_BETA = 'application/vnd.allegro.beta.v1+json';

    const DATE_TIME_FORMAT = 'Y-m-d\TH:i:s.v\Z';

    const DATE_TIME_ZONE = 'UTC';

    const UPLOAD_API_URL = 'https://upload.allegro.pl';

    const REST_API_URL = 'https://api.allegro.pl';

    const OAUTH_URL = 'https://allegro.pl/auth/oauth';

    public function getAuthService(): AuthServiceInterface;

    public function sendRequest(TokenInterface $token, RequestInterface $request): ResponseInterface;

    public function getLastHttpRequest(): ?\Psr\Http\Message\RequestInterface;

    public function getLastHttpResponse(): ?ResponseInterface;
}
