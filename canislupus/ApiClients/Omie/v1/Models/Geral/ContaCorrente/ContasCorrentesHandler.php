<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\ContaCorrente;

use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class ContasCorrentesHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\ContaCorrente
 * @name    ContasCorrentesHandler
 * @version 1.0.0
 */
class ContasCorrentesHandler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/geral/contacorrente/';
    const ACTION_LISTAR = 'ListarContasCorrentes';


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
     * @return ContaCorrenteEntityOmieModel
     */
    private function hidrateEntity(array $data): ContaCorrenteEntityOmieModel
    {
        $object = new ContaCorrenteEntityOmieModel();
        $object->setIdOmie($data['nCodCC'] ?? null);
        $object->setIdIntegracao($data['cCodCCInt'] ?? null);
        $object->setDescricao($data['descricao'] ?? null);

        return $object;
    }

    /**
     * @param array $data
     *
     * @return ContaCorrenteStatusOmieModel
     */
    private function hidrateStatus(array $data): ContaCorrenteStatusOmieModel
    {
        $object = new ContaCorrenteStatusOmieModel();
        $object->setIdOmie($data['nCodCC'] ?? null);
        $object->setIdIntegracao($data['cCodCCInt'] ?? null);
        $object->setCodigoStatus($data['cCodStatus'] ?? null);
        $object->setDescricaoStatus($data['cDesStatus'] ?? null);

        return $object;
    }

    /**
     * @param ContaCorrenteEntityOmieModel $entity
     *
     * @return array
     */
    private function mountArrayFromEntity(ContaCorrenteEntityOmieModel $entity): array
    {
        $entityArrayData = [];

        if ($entity->getIdOmie() !== null) {
            $entityArrayData['codigo_produto'] = $entity->getIdOmie();
        }
        if ($entity->getIdIntegracao() !== null) {
            $entityArrayData['codigo_produto_integracao'] = $entity->getIdIntegracao();
        }
        if ($entity->getDescricao() !== null) {
            $entityArrayData['descricao'] = $entity->getDescricao();
        }

        return $entityArrayData;
    }


    /**
     * @return ContaCorrenteEntityOmieModel[]
     * @throws OmieApiException
     */
    public function listar(): array
    {
        $list = [];

        $page = 0;

        do {
            $page++;

            $param = [
                'pagina' => $page,
                'registros_por_pagina' => 500,
                'apenas_importado_api' => "N",
            ];

            $result = $this->request(self::ACTION_LISTAR, $param);

            foreach ($result['ListarContasCorrentes'] as $cadastro) {
                $list[] = $this->hidrateEntity($cadastro);
            }

            $totalPages = $result['total_de_paginas'];

        } while ($page < $totalPages);

        return $list;
    }
}


