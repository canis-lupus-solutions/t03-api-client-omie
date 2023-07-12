<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceberBoleto;

use Exception;
use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class ContasReceberBoletoHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceberBoleto
 * @name    ContasReceberBoletoHandler
 * @version 1.0.0
 */
class ContasReceberBoletoHandler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/financas/contareceberboleto/';
    const ACTION_OBTER = 'ObterBoleto';


    /**
     * @param string     $action
     * @param array|null $param
     *
     * @return array
     * @throws OmieApiException
     */
    private function request(string $action, array $param = null): array
    {
        return $this->call(self::ENDPOINT, $action, $param);
    }

    /**
     * @param array $data
     *
     * @return ContaReceberBoletoEntityOmieModel
     * @throws Exception
     */
    private function hidrateEntity(array $data): ContaReceberBoletoEntityOmieModel
    {
        $object = new ContaReceberBoletoEntityOmieModel();

        $object->setLinkBoleto($data['cLinkBoleto'] ?? null);

        return $object;
    }


    /**
     * @param $request
     *
     * @return ContaReceberBoletoEntityOmieModel
     * @throws OmieApiException
     */
    public function obter($request = null): ContaReceberBoletoEntityOmieModel
    {
        $param = [];

        if ($request) {
            if (is_array($request)) {
                $param = array_merge($param, $request);

            } else if (is_object($request)) {
                // ..
            }
        }

        $result = $this->request(self::ACTION_OBTER, $param);

        return $this->hidrateEntity($result);
    }
}
