<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Estoque\Consultas;

use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class ConsultasDeEstoqueHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Estoque\Consultas
 * @name    ConsultasDeEstoqueHandler
 * @version 1.0.0
 */
class ConsultasDeEstoqueHandler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/estoque/consulta/';
    const ACTION_LISTAR = 'ListarPosEstoque';


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
     * @return PosicaoEstoqueOmie
     */
    private function hidrateEntity(array $data): PosicaoEstoqueOmie
    {
        $object = new PosicaoEstoqueOmie();
        $object->setCodigoLocalEstoque($data['codigo_local_estoque'] ?? null);
        $object->setIdOmieProduto($data['nCodProd'] ?? null);
        $object->setCodigoProduto($data['cCodigo'] ?? null);
        $object->setDescricao($data['cDescricao'] ?? null);
        $object->setPrecoUnitario($data['nPrecoUnitario'] ?? null);
        $object->setCustoMedioContabil($data['nCMC'] ?? null);
        $object->setSaldo($data['nSaldo'] ?? null);
        $object->setSaldoPendente($data['nPendente'] ?? null);
        $object->setReservado($data['reservado'] ?? null);
        $object->setFisico($data['fisico'] ?? null);
        $object->setEstoqueMinimo($data['estoque_minimo'] ?? null);

        return $object;
    }

    /**
     * @param array|null $request
     *
     * @return PosicaoEstoqueOmie[]
     * @throws OmieApiException
     */
    public function listarPosicoes($request = null): array
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

            foreach ($result['produtos'] as $cadastro) {
                $list[] = $this->hidrateEntity($cadastro);
            }

            $totalPages = $result['nTotPaginas'];

        } while ($page < $totalPages);

        return $list;
    }
}


