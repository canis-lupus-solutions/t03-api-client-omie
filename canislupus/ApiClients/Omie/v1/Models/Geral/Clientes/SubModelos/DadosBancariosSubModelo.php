<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos;

/**
 * Class DadosBancariosSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos
 * @name    DadosBancariosSubModelo
 * @version 1.0.0
 */
class DadosBancariosSubModelo
{
    /**
     * Código do Banco.
     * Recomenda-se armazenar como VARCHAR(3).
     */
    protected ?string $codigoBanco = null;

    /**
     * Agência.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $agencia = null;

    /**
     * Número da Conta Corrente.
     * Recomenda-se armazenar como VARCHAR(10).
     */
    protected ?string $contaCorrente = null;

    /**
     * CNPJ ou CPF do titular.
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $docTitular = null;

    /**
     * Nome do titular.
     * Recomenda-se armazenar como VARCHAR(60).
     */
    protected ?string $nomeTitular = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getCodigoBanco(): ?string
    {
        return $this->codigoBanco;
    }

    /**
     * @param string|null $codigoBanco
     *
     * @return DadosBancariosSubModelo
     */
    public function setCodigoBanco(?string $codigoBanco): DadosBancariosSubModelo
    {
        $this->codigoBanco = $codigoBanco;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAgencia(): ?string
    {
        return $this->agencia;
    }

    /**
     * @param string|null $agencia
     *
     * @return DadosBancariosSubModelo
     */
    public function setAgencia(?string $agencia): DadosBancariosSubModelo
    {
        $this->agencia = $agencia;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContaCorrente(): ?string
    {
        return $this->contaCorrente;
    }

    /**
     * @param string|null $contaCorrente
     *
     * @return DadosBancariosSubModelo
     */
    public function setContaCorrente(?string $contaCorrente): DadosBancariosSubModelo
    {
        $this->contaCorrente = $contaCorrente;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocTitular(): ?string
    {
        return $this->docTitular;
    }

    /**
     * @param string|null $docTitular
     *
     * @return DadosBancariosSubModelo
     */
    public function setDocTitular(?string $docTitular): DadosBancariosSubModelo
    {
        $this->docTitular = $docTitular;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomeTitular(): ?string
    {
        return $this->nomeTitular;
    }

    /**
     * @param string|null $nomeTitular
     *
     * @return DadosBancariosSubModelo
     */
    public function setNomeTitular(?string $nomeTitular): DadosBancariosSubModelo
    {
        $this->nomeTitular = $nomeTitular;

        return $this;
    }
}
