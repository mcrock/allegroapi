<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 17:19
 */

namespace Imper69\AllegroApi;


use Imper69\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper69\AllegroApi\Soap\Service\SoapService;
use Imper69\AllegroApi\Soap\Wsdl\DoLoginWithAccessTokenRequest;
use Imper69\AllegroApi\Soap\Wsdl\ServiceService;

class AllegroApiClientSoapClient implements AllegroApiSoapClientInterface
{
    /**
     * @var string
     */
    private $sessionHandle;

    /**
     * @var SoapService
     */
    private $soapService;

    /**
     * @var AccountInterface
     */
    private $account;


    public function __construct(AccountInterface $account, string $sessionHandle = null)
    {
        $this->account = $account;
        $this->sessionHandle = $sessionHandle;
    }

    public function getSessionHandle(): string
    {
        return $this->sessionHandle;
    }

    public function setSessionHandle(string $sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
    }

    public function refreshSessionHandleWithRestToken(TokenInterface $token)
    {
        $client = $this->getService();

        $request = new DoLoginWithAccessTokenRequest(
            $token->getAccessToken(),
            1,
            $this->account->getAllegroSoapApiKey()
        );

        $response = $client->doLoginWithAccessToken($request);

        $this->sessionHandle = $response->getSessionHandlePart();
    }

    public function getService(): SoapService
    {
        if (is_null($this->soapService)) {
            $this->soapService = new SoapService(['trace' => true]);
        }

        return $this->soapService;
    }

}