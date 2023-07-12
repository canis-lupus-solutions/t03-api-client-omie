<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos;

use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\CabecalhoSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\InformacoesAdicionaisSubModelo;
use CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\ObservacoesSubModelo;

/**
 * Class PedidoEntityOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos
 * @name    PedidoEntityOmieModel
 * @version 1.0.0
 */
class PedidoEntityOmieModel
{
    protected ?CabecalhoSubModelo $cabecalho = null;

    /**
     * @var \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\DetSubModelo[]
     */
    protected array $det = [];

    protected ?InformacoesAdicionaisSubModelo $informacoesAdicionais = null;

    protected ?ObservacoesSubModelo $observacoes = null;

    /*
    protected array $departamentos = [];
    protected array $frete = [];
    protected array $listaParcelas = [];
    protected array $marketPlace = [];
    protected array $totalPedido = [];
    protected array $infoCadastro = [];
    protected array $exportacao = [];
    */


    /* GETTERS/SETTERS */

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\CabecalhoSubModelo|null
     */
    public function getCabecalho(): ?CabecalhoSubModelo
    {
        return $this->cabecalho;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\CabecalhoSubModelo|null $cabecalho
     *
     * @return PedidoEntityOmieModel
     */
    public function setCabecalho(?CabecalhoSubModelo $cabecalho): PedidoEntityOmieModel
    {
        $this->cabecalho = $cabecalho;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\DetSubModelo[]
     */
    public function getDet(): array
    {
        return $this->det;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\DetSubModelo[] $det
     *
     * @return PedidoEntityOmieModel
     */
    public function setDet(array $det): PedidoEntityOmieModel
    {
        $this->det = $det;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\InformacoesAdicionaisSubModelo|null
     */
    public function getInformacoesAdicionais(): ?InformacoesAdicionaisSubModelo
    {
        return $this->informacoesAdicionais;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\InformacoesAdicionaisSubModelo|null $informacoesAdicionais
     *
     * @return PedidoEntityOmieModel
     */
    public function setInformacoesAdicionais(?InformacoesAdicionaisSubModelo $informacoesAdicionais): PedidoEntityOmieModel
    {
        $this->informacoesAdicionais = $informacoesAdicionais;

        return $this;
    }

    /**
     * @return \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\ObservacoesSubModelo|null
     */
    public function getObservacoes(): ?ObservacoesSubModelo
    {
        return $this->observacoes;
    }

    /**
     * @param \CanisLupus\ApiClients\Omie\v1\Models\Produtos\Pedidos\SubModelos\ObservacoesSubModelo|null $observacoes
     *
     * @return PedidoEntityOmieModel
     */
    public function setObservacoes(?ObservacoesSubModelo $observacoes): PedidoEntityOmieModel
    {
        $this->observacoes = $observacoes;

        return $this;
    }
}
