<?php
namespace CanisLupus\ApiClients\Omie\v1;

use Exception;
use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;

/**
 * Class OmieApiHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1
 * @name    OmieApiHandler
 * @version 1.0.0
 */
class OmieApiHandler
{
    protected OmieApiConfig $config;


    /**
     * @param OmieApiConfig $config
     */
    public function __construct(
        OmieApiConfig $config
    )
    {
        $this->config = $config;
    }


    /**
     * @param string     $action
     * @param array|null $param
     *
     * @return array
     */
    private function preparePayload(string $action, array $param = null): array
    {
        $payload = [
            'app_key'    => $this->config->getAppKey(),
            'app_secret' => $this->config->getAppSecret(),
            'call'       => $action,
        ];

        if ($param) {
            $payload['param'] = [$param];
        }

        return $payload;
    }

    /**
     * @param string     $endpoint
     * @param string     $action
     * @param array|null $param
     *
     * @return array
     * @throws OmieApiException
     * @throws Exception
     */
    protected function call(string $endpoint, string $action, array $param = null): array
    {
        $guzzleClient = new Client();

        try {
            $res = $guzzleClient->post($endpoint, [
                RequestOptions::JSON => $this->preparePayload($action, $param),
            ]);

            return json_decode($res->getBody(), true);

        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $errorData = json_decode((string)$e->getResponse()->getBody(), true);
                $errorMessage = $errorData['faultstring'];
                $errorCode = $errorData['faultcode'];

                throw (new OmieApiException($errorMessage))->setOmieErrorMessage($errorMessage)->setOmieErrorCode($errorCode);

            } else {
                $response = $e->getHandlerContext();

                if (isset($response['error'])) {
                    throw new Exception($response['error']);
                } else {
                    throw new Exception("An unknow error ocurred calling: $endpoint with action: $action");
                }
            }

        } catch (GuzzleException $e) {
            throw new Exception($e->getMessage());
        }
    }
}
