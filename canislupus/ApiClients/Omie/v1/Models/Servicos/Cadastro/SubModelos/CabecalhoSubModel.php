<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro\SubModelos;

/**
 * Class CabecalhoSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro\SubModelos
 * @name    CabecalhoSubModel
 * @version 1.0.0
 */
class CabecalhoSubModel
{
    /**
     * Descrição Resumida do serviço prestado.
     *
     * Mapeado através do campo [cDescricao]
     * Recomenda-se armazenar como VARCHAR(120).
     */
    public ?string $descricao = null;

    /**
     * Código do serviço exibido na tela de serviços do omie.
     *
     * Mapeado através do campo [cCodigo]
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $codigo = null;

    /**
     * ID da Tributação dos Serviços.
     *
     * Mapeado através do campo [cIdTrib]
     * Recomenda-se armazenar como VARCHAR(2).
     */
    public ?string $codigoTributacao = null;

    /**
     * Código do Serviço Municipal.
     *
     * Mapeado através do campo [cCodServMun]
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $codigoServicoMunicipal = null;

    /**
     * Código do Serviço LC 116.
     *
     * Mapeado através do campo [cCodLC116]
     * Recomenda-se armazenar como VARCHAR(10).
     */
    public ?string $codigoLc116 = null;

    /**
     * Id do NBS.
     *
     * Mapeado através do campo [nIdNBS]
     * Recomenda-se armazenar como VARCHAR(9).
     */
    public ?string $codigoNbs = null;

    /**
     * Preço Unitário do Serviço.
     *
     * Mapeado através do campo [nPrecoUnit]
     * Recomenda-se armazenar como DECIMAL(15,4).
     */
    public ?float $valorUnitario = null;

    /**
     * Código da Categoria.
     *
     * Mapeado através do campo [cCodCateg]
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $codigoCategoria = null;
}
