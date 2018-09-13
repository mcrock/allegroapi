<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 17:03
 */

namespace mcrock\AllegroApi;


use mcrock\AllegroApi\Rest\Model\Auth\TokenInterface;
use mcrock\AllegroApi\Soap\Service\SoapService;

interface SoapClientInterface
{
    public function getSessionHandle(): string;

    public function setSessionHandle(string $sessionHandle);

    public function refreshSessionHandleWithRestToken(TokenInterface $token);

    public function getService(): SoapService;
}
