<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Geral\Empresas;

/**
 * Class EmpresasEntityOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Geral\Empresas
 * @name    EmpresasEntityOmieModel
 * @version 1.0.0
 */
class EmpresasEntityOmieModel
{
    /**
     * Código interno do omie, mapeado através do campo [codigo_empresa].
     * Recomenda-se armazenar como BIGINT.
     */
    protected ?int $idOmie = null;

    /**
     * Código interno de integração do omie, mapeado através do campo [codigo_empresa_integracao].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    protected ?string $idIntegracao = null;


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
     * @return EmpresasEntityOmieModel
     */
    public function setIdOmie(?int $idOmie): EmpresasEntityOmieModel
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
     * @return EmpresasEntityOmieModel
     */
    public function setIdIntegracao(?string $idIntegracao): EmpresasEntityOmieModel
    {
        $this->idIntegracao = $idIntegracao;

        return $this;
    }
}
