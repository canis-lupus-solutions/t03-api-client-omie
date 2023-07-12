<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos;

/**
 * Class EnderecoEntregaSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos
 * @name    EnderecoEntregaSubModelo
 * @version 1.0.0
 */
class EnderecoEntregaSubModelo
{
    /**
     * CNPJ / CPF do recebedor.
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $cnpjCpf = null;

    /**
     * Endereço.
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $endereco = null;

    /**
     * Número do endereço.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $numero = null;

    /**
     * Complemento do endereço.
     * Recomenda-se armazenar como VARCHAR(40).
     */
    protected ?string $complemento = null;

    /**
     * Bairro.
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $bairro = null;

    /**
     * CEP.
     * Recomenda-se armazenar como VARCHAR(9).
     */
    protected ?string $cep = null;

    /**
     * Estado.
     * Recomenda-se armazenar como VARCHAR(2).
     */
    protected ?string $estado = null;

    /**
     * Cidade.
     * Recomenda-se armazenar como VARCHAR(40).
     */
    protected ?string $cidade = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getCnpjCpf(): ?string
    {
        return $this->cnpjCpf;
    }

    /**
     * @param string|null $cnpjCpf
     *
     * @return EnderecoEntregaSubModelo
     */
    public function setCnpjCpf(?string $cnpjCpf): EnderecoEntregaSubModelo
    {
        $this->cnpjCpf = $cnpjCpf;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    /**
     * @param string|null $endereco
     *
     * @return EnderecoEntregaSubModelo
     */
    public function setEndereco(?string $endereco): EnderecoEntregaSubModelo
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumero(): ?string
    {
        return $this->numero;
    }

    /**
     * @param string|null $numero
     *
     * @return EnderecoEntregaSubModelo
     */
    public function setNumero(?string $numero): EnderecoEntregaSubModelo
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComplemento(): ?string
    {
        return $this->complemento;
    }

    /**
     * @param string|null $complemento
     *
     * @return EnderecoEntregaSubModelo
     */
    public function setComplemento(?string $complemento): EnderecoEntregaSubModelo
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    /**
     * @param string|null $bairro
     *
     * @return EnderecoEntregaSubModelo
     */
    public function setBairro(?string $bairro): EnderecoEntregaSubModelo
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCep(): ?string
    {
        return $this->cep;
    }

    /**
     * @param string|null $cep
     *
     * @return EnderecoEntregaSubModelo
     */
    public function setCep(?string $cep): EnderecoEntregaSubModelo
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEstado(): ?string
    {
        return $this->estado;
    }

    /**
     * @param string|null $estado
     *
     * @return EnderecoEntregaSubModelo
     */
    public function setEstado(?string $estado): EnderecoEntregaSubModelo
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    /**
     * @param string|null $cidade
     *
     * @return EnderecoEntregaSubModelo
     */
    public function setCidade(?string $cidade): EnderecoEntregaSubModelo
    {
        $this->cidade = $cidade;

        return $this;
    }
}
