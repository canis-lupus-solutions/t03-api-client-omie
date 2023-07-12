<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos;

/**
 * Class RecomendacoesSubModelo.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Clientes\SubModelos
 * @name    RecomendacoesSubModelo
 * @version 1.0.0
 */
class RecomendacoesSubModelo
{
    /**
     * Número de Parcelas padrão para as Vendas.
     * Recomenda-se armazenar como VARCHAR(3).
     */
    protected ?string $numeroParcelas = null;

    /**
     * Código do Vendedor padrão.
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $codigoVendedor = null;

    /**
     * Enviar a NF-e e Boleto para outro e-mail?.
     * Recomenda-se armazenar como VARCHAR(200).
     */
    protected ?string $emailFatura = null;

    /**
     * Por padrão: Gerar Boletos ao Emitir NF-e? (S/N).
     * Recomenda-se armazenar como VARCHAR(1).
     */
    protected ?string $gerarBoletos = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getNumeroParcelas(): ?string
    {
        return $this->numeroParcelas;
    }

    /**
     * @param string|null $numeroParcelas
     *
     * @return RecomendacoesSubModelo
     */
    public function setNumeroParcelas(?string $numeroParcelas): RecomendacoesSubModelo
    {
        $this->numeroParcelas = $numeroParcelas;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoVendedor(): ?int
    {
        return $this->codigoVendedor;
    }

    /**
     * @param int|null $codigoVendedor
     *
     * @return RecomendacoesSubModelo
     */
    public function setCodigoVendedor(?int $codigoVendedor): RecomendacoesSubModelo
    {
        $this->codigoVendedor = $codigoVendedor;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmailFatura(): ?string
    {
        return $this->emailFatura;
    }

    /**
     * @param string|null $emailFatura
     *
     * @return RecomendacoesSubModelo
     */
    public function setEmailFatura(?string $emailFatura): RecomendacoesSubModelo
    {
        $this->emailFatura = $emailFatura;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGerarBoletos(): ?string
    {
        return $this->gerarBoletos;
    }

    /**
     * @param string|null $gerarBoletos
     *
     * @return RecomendacoesSubModelo
     */
    public function setGerarBoletos(?string $gerarBoletos): RecomendacoesSubModelo
    {
        $this->gerarBoletos = $gerarBoletos;

        return $this;
    }
}
