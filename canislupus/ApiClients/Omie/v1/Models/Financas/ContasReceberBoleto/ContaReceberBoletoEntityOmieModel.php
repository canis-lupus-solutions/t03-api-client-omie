<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceberBoleto;

/**
 * Class ContaReceberBoletoEntityOmieModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Financas\ContasReceberBoleto
 * @name    ContaReceberBoletoEntityOmieModel
 * @version 1.0.0
 */
class ContaReceberBoletoEntityOmieModel
{
    /**
     * Link do Boleto.
     * Mapeado do campo [cLinkBoleto].
     *
     * Recomenda-se armazenar como VARCHAR(500).
     */
    protected ?string $linkBoleto = null;


    /* GETTERS/SETTERS */

    /**
     * @return string|null
     */
    public function getLinkBoleto(): ?string
    {
        return $this->linkBoleto;
    }

    /**
     * @param string|null $linkBoleto
     *
     * @return ContaReceberBoletoEntityOmieModel
     */
    public function setLinkBoleto(?string $linkBoleto): ContaReceberBoletoEntityOmieModel
    {
        $this->linkBoleto = $linkBoleto;

        return $this;
    }
}
