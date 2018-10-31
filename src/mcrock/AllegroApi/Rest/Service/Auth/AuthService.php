<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 11:49
 */

namespace mcrock\AllegroApi\Rest\Service\Auth;


use GuzzleHttp\Client;
use mcrock\AllegroApi\CredentialsInterface;
use mcrock\AllegroApi\Rest\Model\Auth\Token;
use mcrock\AllegroApi\Rest\Model\Auth\TokenInterface;
use mcrock\AllegroApi\RestClientInterface;
use mcrock\Curl\CurlClient;
use mcrock\Curl\CurlClientInterface;

class AuthService implements AuthServiceInterface
{
    /**
     * @var CredentialsInterface
     */
    private $credentials;
    /**
     * @var Client
     */
    private $httpClient;

    public $isSandbox;


    public function __construct(CredentialsInterface $credentials, Client $httpClient, $isSandbox)
    {
        $this->credentials = $credentials;
        $this->httpClient  = $httpClient;
        $this->isSandbox   = $isSandbox;
    }

    public function getAuthUrl(): string
    {
        $query = [
            'response_type' => 'code',
            'client_id' => $this->credentials->getRestClientId(),
            'api-key' => $this->credentials->getRestApiKey(),
            'redirect_uri' => $this->credentials->getRestRedirectUri(),
        ];

        $authUrl = $this->httpClient->isSandbox ? RestClientInterface::SANDBOX_OAUTH_URL : RestClientInterface::OAUTH_URL;

        return $authUrl.'/authorize?'.http_build_query($query);
    }

    public function getNewToken(string $authCode): TokenInterface
    {
        $authUrl = $this->isSandbox ? RestClientInterface::SANDBOX_OAUTH_URL : RestClientInterface::OAUTH_URL;

        $response = $this->httpClient->post($authUrl.'/token', [
            'auth' => [
                $this->credentials->getRestClientId(),
                $this->credentials->getRestClientSecret(),
            ],
            'query' => [
                'grant_type' => 'authorization_code',
                'code' => $authCode,
                'api-key' => $this->credentials->getRestApiKey(),
                'redirect_uri' => $this->credentials->getRestRedirectUri(),
            ]
        ]);

        return new Token($response);
    }

    public function refreshToken(TokenInterface $token): TokenInterface
    {
        $authUrl = $this->isSandbox ? RestClientInterface::SANDBOX_OAUTH_URL : RestClientInterface::OAUTH_URL;

        $response = $this->httpClient->post($authUrl.'/token', [
            'auth' => [
                $this->credentials->getRestClientId(),
                $this->credentials->getRestClientSecret(),
            ],
            'query' => [
                'grant_type' => 'refresh_token',
                'refresh_token' => $token->getRefreshToken(),
                'redirect_uri' => $this->credentials->getRestRedirectUri(),
            ]
        ]);

        return new Token($response);
    }

}
