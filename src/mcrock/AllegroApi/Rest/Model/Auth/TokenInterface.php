<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.06.17
 * Time: 16:48
 */

namespace mcrock\AllegroApi\Rest\Model\Auth;


interface TokenInterface
{
    public function getAccessToken(): string;

    public function getRefreshToken(): string;

    public function getExpirationTime(): \DateTime;

    public function getUserId(): string;
}
