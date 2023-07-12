<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Cenarios;

/**
 * Class CenarioOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Cenarios
 * @name    CenarioOmieModel
 * @version 1.0.0
 */
class CenarioOmieModel
{
    /**
     * Código interno do omie, mapeado através do campo [nCodigo].
     *
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $idOmie = null;

    /**
     * Nome do Cenário de impostas, mapeado através do campo [cNome].
     * Recomenda-se armazenar como VARCHAR(50).
     */
    protected ?string $nome = null;

    /**
     * Indica se o Cenário de Impostos é padrão (ativo ou inativo)
     * Recomenda-se armazenar como BOOLEAN.
     */
    protected ?bool $padrao = null;


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
     * @return CenarioOmieModel
     */
    public function setIdOmie(?int $idOmie): CenarioOmieModel
    {
        $this->idOmie = $idOmie;

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
     * @return CenarioOmieModel
     */
    public function setNome(?string $nome): CenarioOmieModel
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPadrao(): ?bool
    {
        return $this->padrao;
    }

    /**
     * @param bool|null $padrao
     *
     * @return CenarioOmieModel
     */
    public function setPadrao(?bool $padrao): CenarioOmieModel
    {
        $this->padrao = $padrao;

        return $this;
    }
}
