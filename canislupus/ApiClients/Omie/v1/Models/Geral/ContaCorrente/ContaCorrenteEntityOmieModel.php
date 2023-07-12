<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\ContaCorrente;

/**
 * Class ContaCorrenteEntityOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\ContaCorrente
 * @name    ContaCorrenteEntityOmieModel
 * @version 1.0.0
 */
class ContaCorrenteEntityOmieModel
{
    /**
     * Código interno do omie, mapeado através do campo [nCodCC].
     *
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $idOmie = null;

    /**
     * Código interno de integração do omie, mapeado através do campo [cCodCCInt].
     *
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $idIntegracao = null;

    /**
     * Descrição do produto.
     * Recomenda-se armazenar como VARCHAR(40).
     */
    protected ?string $descricao = null;


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
     * @return ContaCorrenteEntityOmieModel
     */
    public function setIdOmie(?int $idOmie): ContaCorrenteEntityOmieModel
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
     * @return ContaCorrenteEntityOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): ContaCorrenteEntityOmieModel
    {
        $this->idIntegracao = $idIntegracao;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    /**
     * @param string|null $descricao
     *
     * @return ContaCorrenteEntityOmieModel
     */
    public function setDescricao(?string $descricao): ContaCorrenteEntityOmieModel
    {
        $this->descricao = $descricao;

        return $this;
    }
}
