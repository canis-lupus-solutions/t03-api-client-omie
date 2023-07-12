<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos;

/**
 * Class CaracteristicaSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Produtos\SubModelos
 * @name    CaracteristicaSubModelo
 * @version 1.0.0
 */
class CaracteristicaSubModelo
{
    /**
     * Código da característica de produto.
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $idOmie = null;

    /**
     * Código de integração da característica do produto.
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $idIntegracao = null;

    /**
     * Nome da característica.
     * Recomenda-se armazenar como VARCHAR(30).
     */
    protected ?string $nome = null;

    /**
     * Conteúdo da característica.
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $conteudo = null;

    /**
     * Exibir esta característica no item da NF-e emitida (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $exibeItemNF = null;

    /**
     * Exibir esta característica no item do Pedido, Remessa ou Devolução (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $exibeItemPedido = null;


    /* GETTERS/SETTERS */

    /**
     * @return int|null
     */
    public function getIdOmie(): ?int
    {
        return $this->idOmie;
    }

    /**
     * @param int|null $idOmie
     *
     * @return CaracteristicaSubModelo
     */
    public function setIdOmie(?int $idOmie): CaracteristicaSubModelo
    {
        $this->idOmie = $idOmie;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdIntegracao(): ?string
    {
        return $this->idIntegracao;
    }

    /**
     * @param string|null $idIntegracao
     *
     * @return CaracteristicaSubModelo
     */
    public function setIdIntegracao(?string $idIntegracao): CaracteristicaSubModelo
    {
        $this->idIntegracao = $idIntegracao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * @param string|null $nome
     *
     * @return CaracteristicaSubModelo
     */
    public function setNome(?string $nome): CaracteristicaSubModelo
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getConteudo(): ?string
    {
        return $this->conteudo;
    }

    /**
     * @param string|null $conteudo
     *
     * @return CaracteristicaSubModelo
     */
    public function setConteudo(?string $conteudo): CaracteristicaSubModelo
    {
        $this->conteudo = $conteudo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExibeItemNF(): ?string
    {
        return $this->exibeItemNF;
    }

    /**
     * @param string|null $exibeItemNF
     *
     * @return CaracteristicaSubModelo
     */
    public function setExibeItemNF(?string $exibeItemNF): CaracteristicaSubModelo
    {
        $this->exibeItemNF = $exibeItemNF;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExibeItemPedido(): ?string
    {
        return $this->exibeItemPedido;
    }

    /**
     * @param string|null $exibeItemPedido
     *
     * @return CaracteristicaSubModelo
     */
    public function setExibeItemPedido(?string $exibeItemPedido): CaracteristicaSubModelo
    {
        $this->exibeItemPedido = $exibeItemPedido;

        return $this;
    }
}
