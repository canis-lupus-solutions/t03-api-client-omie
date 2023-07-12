<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Estoque\Locais;

use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class LocaisHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Estoque\Locais
 * @name    LocaisHandler
 * @version 1.0.0
 */
class LocaisHandler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/estoque/local/';
    const ACTION_LISTAR = 'ListarLocaisEstoque';


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
     * @return LocaisOmie
     */
    private function hidrateEntity(array $data): LocaisOmie
    {
        $object = new LocaisOmie();
        $object->setIdOmie($data['codigo_local_estoque'] ?? null);
        $object->setCodigo($data['codigo'] ?? null);
        $object->setDescricao($data['descricao'] ?? null);

        return $object;
    }

    /**
     * @param LocaisOmie $entity
     *
     * @return array
     */
    private function mountArrayFromEntity(LocaisOmie $entity): array
    {
        $entityArrayData = [];

        if ($entity->getIdOmie() !== null) {
            $entityArrayData['codigo_local_estoque'] = $entity->getIdOmie();
        }
        if ($entity->getCodigo() !== null) {
            $entityArrayData['codigo'] = $entity->getCodigo();
        }
        if ($entity->getDescricao() !== null) {
            $entityArrayData['descricao'] = $entity->getDescricao();
        }

        return $entityArrayData;
    }


    /**
     * @param array|null $request
     *
     * @return array
     * @throws OmieApiException
     */
    public function listar($request = null): array
    {
        $list = [];

        $page = 0;

        do {
            $page++;

            $param = [
                'nPagina'       => $page,
                'nRegPorPagina' => 500,
            ];

            if ($request) {
                if (is_array($request)) {
                    $param = array_merge($param, $request);
                }
            }

            $result = $this->request(self::ACTION_LISTAR, $param);

            foreach ($result['locaisEncontrados'] as $cadastro) {
                $list[] = $this->hidrateEntity($cadastro);
            }

            $totalPages = $result['nTotPaginas'];

        } while ($page < $totalPages);

        return $list;
    }
}


