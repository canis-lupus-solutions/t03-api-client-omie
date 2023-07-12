<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Cenarios;

use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class CenariosHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Cenarios
 * @name    CenariosHandler
 * @version 1.0.0
 */
class CenariosHandler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/geral/cenarios/';
    const ACTION_LISTAR = 'ListarCenarios';


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
     * @return CenarioOmieModel
     */
    private function hidrateEntity(array $data): CenarioOmieModel
    {
        $object = new CenarioOmieModel();
        $object->setIdOmie($data['nCodigo'] ?? null);
        $object->setNome($data['cNome'] ?? null);
        $object->setPadrao($data['padrao'] ?? null);

        return $object;
    }


    /**
     * @return CenarioOmieModel[]
     * @throws OmieApiException
     */
    public function listar(): array
    {
        $list = [];

        $page = 0;

        do {
            $page++;

            $param = [
                'nPagina'       => $page,
                'nRegPorPagina' => 100
            ];

            $result = $this->request(self::ACTION_LISTAR, $param);

            foreach ($result['cenariosEncontrados'] as $cadastro) {
                $list[] = $this->hidrateEntity($cadastro);
            }

            $totalPages = $result['nTotPaginas'];

        } while ($page < $totalPages);

        return $list;
    }
}


