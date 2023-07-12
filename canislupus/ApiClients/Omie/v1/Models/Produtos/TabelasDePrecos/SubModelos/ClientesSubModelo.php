<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos;

/**
 * Class ClientesSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Produtos\TabelasDePrecos\SubModelos
 * @name    ClientesSubModelo
 * @version 1.0.0
 */
class ClientesSubModelo
{
    /**
     * Considerar todos os clientes nesta tabela de preços? (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $todosClientes = null;

    /**
     * Considerar apenas os clientes de uma determinada Tag.
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoTag = null;

    /**
     * Descrição da tag do cliente informada no campo nCodTag.
     * Recomenda-se armazenar como TEXT.
     */
    protected ?string $descricaoTag = null;

    /**
     * Considerar apenas os clientes do Estado.
     * Recomenda-se armazenar como VARCHAR(2).
     */
    protected ?string $uf = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getTodosClientes(): ?string
    {
        return $this->todosClientes;
    }

    /**
     * @param string|null $todosClientes
     *
     * @return ClientesSubModelo
     */
    public function setTodosClientes(?string $todosClientes): ClientesSubModelo
    {
        $this->todosClientes = $todosClientes;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoTag(): ?int
    {
        return $this->codigoTag;
    }

    /**
     * @param int|null $codigoTag
     *
     * @return ClientesSubModelo
     */
    public function setCodigoTag(?int $codigoTag): ClientesSubModelo
    {
        $this->codigoTag = $codigoTag;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescricaoTag(): ?string
    {
        return $this->descricaoTag;
    }

    /**
     * @param string|null $descricaoTag
     *
     * @return ClientesSubModelo
     */
    public function setDescricaoTag(?string $descricaoTag): ClientesSubModelo
    {
        $this->descricaoTag = $descricaoTag;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUf(): ?string
    {
        return $this->uf;
    }

    /**
     * @param string|null $uf
     *
     * @return ClientesSubModelo
     */
    public function setUf(?string $uf): ClientesSubModelo
    {
        $this->uf = $uf;

        return $this;
    }
}
