<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens;

/**
 * Class VerificarStatusOrdemRequest.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens
 * @name    VerificarStatusOrdemRequest
 * @version 1.0.0
 */
class VerificarStatusOrdemRequest
{
    public ?int $idOmie = null;
    public ?string $idIntegracao = null;
    public ?bool $exibirPdfDemonstrativo = null;
    public ?bool $exibirPdfDestinatario = null;
    public ?bool $exibirRps = null;
    public ?bool $exibirRecibo = null;


    public function __construct(
        ?int    $idOmie = null,
        ?string $idIntegracao = null,
        ?bool   $exibirPdfDemonstrativo = null,
        ?bool   $exibirPdfDestinatario = null,
        ?bool   $exibirRps = null,
        ?bool   $exibirRecibo = null
    )
    {
        $this->idOmie = $idOmie;
        $this->idIntegracao = $idIntegracao;
        $this->exibirPdfDemonstrativo = $exibirPdfDemonstrativo;
        $this->exibirPdfDestinatario = $exibirPdfDestinatario;
        $this->exibirRps = $exibirRps;
        $this->exibirRecibo = $exibirRecibo;
    }
}
