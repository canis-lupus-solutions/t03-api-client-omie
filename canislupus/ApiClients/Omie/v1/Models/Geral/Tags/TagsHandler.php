<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags;

use CanisLupus\ApiClients\Omie\v1\Exceptions\OmieApiException;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class TagsHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Tags
 * @name    TagsHandler
 * @version 1.0.0
 */
class TagsHandler extends OmieApiHandler
{
    const ENDPOINT = 'https://app.omie.com.br/api/v1/geral/clientetag/';
    const ACTION_LISTAR = 'ListarTags';
    const ACTION_INCLUIR = 'IncluirTags';
    const ACTION_EXCLUIR = 'ExcluirTags';
    const ACTION_EXCLUIR_TODAS = 'ExcluirTodas';


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
     * @return TagEntityOmieModel
     */
    private function hidrateEntity(array $data): TagEntityOmieModel
    {
        $object = new TagEntityOmieModel();
        $object->setIdOmie($data['nCodTag'] ?? null);
        $object->setTag($data['tag'] ?? null);

        return $object;
    }

    /**
     * @param array $data
     *
     * @return TagStatusOmieModel
     */
    private function hidrateStatus(array $data): TagStatusOmieModel
    {
        $object = new TagStatusOmieModel();
        $object->setIdOmieCliente($data['nCodCliente'] ?? null);
        $object->setIdIntegracaoCliente($data['cCodIntCliente'] ?? null);
        $object->setCodigoStatus($data['cCodStatus'] ?? null);
        $object->setDescricaoStatus($data['cDesStatus'] ?? null);

        return $object;
    }

    /**
     * @param TagEntityOmieModel $entity
     *
     * @return array
     */
    private function mountArrayFromEntity(TagEntityOmieModel $entity): array
    {
        $entityArrayData = [];

        if ($entity->getIdOmie() !== null) {
            $entityArrayData['nCodTag'] = $entity->getIdOmie();
        }
        if ($entity->getTag() !== null) {
            $entityArrayData['tag'] = $entity->getTag();
        }

        return $entityArrayData;
    }

    /**
     * @param TagListarRequestOmieModel $requestModel
     *
     * @return TagEntityOmieModel[]
     * @throws OmieApiException
     */
    public function listar(TagListarRequestOmieModel $requestModel): array
    {
        $param = [];

        if ($requestModel->getIdOmieCliente()) {
            $param['nCodCliente'] = $requestModel->getIdOmieCliente();
        }

        $result = $this->request(self::ACTION_LISTAR, $param);

        $list = [];
        foreach ($result['tagsLista'] as $cadastro) {
            $list[] = $this->hidrateEntity($cadastro);
        }

        return $list;
    }

    /**
     * @param TagIncluirRequestOmieModel $requestModel
     *
     * @return TagStatusOmieModel
     * @throws OmieApiException
     */
    public function incluir(TagIncluirRequestOmieModel $requestModel): TagStatusOmieModel
    {
        $param = [];

        if ($requestModel->getIdOmieCliente()) {
            $param['nCodCliente'] = $requestModel->getIdOmieCliente();
        }

        // Tags
        if ($requestModel->getTags()) {
            $param['tags'] = [];

            foreach ($requestModel->getTags() as $tag) {
                $param['tags'][] = ['tag' => $tag->getTag()];
            }
        }

        $result = $this->request(self::ACTION_INCLUIR, $param);

        return $this->hidrateStatus($result);
    }

    /**
     * @param TagExcluirTodasRequestOmieModel $requestModel
     *
     * @return TagStatusOmieModel
     * @throws OmieApiException
     */
    public function excluirTodas(TagExcluirTodasRequestOmieModel $requestModel): TagStatusOmieModel
    {
        $param = [];

        if ($requestModel->getIdOmieCliente()) {
            $param['nCodCliente'] = $requestModel->getIdOmieCliente();
        }

        $result = $this->request(self::ACTION_EXCLUIR_TODAS, $param);

        return $this->hidrateStatus($result);
    }
}
