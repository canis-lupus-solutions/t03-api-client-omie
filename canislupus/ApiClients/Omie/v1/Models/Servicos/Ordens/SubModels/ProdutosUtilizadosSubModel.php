<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels;

/**
 * Class ProdutosUtilizadosSubModel.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\SubModels
 * @name    ProdutosUtilizadosSubModel
 * @version 1.0.0
 */
class ProdutosUtilizadosSubModel
{
    /**
     * Pode ser:
     * REM - Será gerado uma remessa dos produtos para o cliente.
     * EST - Será gerado uma saída de estoque.
     * Obrigatório na inclusão.
     *
     * Mapeado através do campo [cAcaoProdUtilizados].
     * Recomenda-se armazenar como VARCHAR(3).
     */
    public ?string $acaoUtilizacao = null;

    /**
     * Código da Categoria da Remessa.
     * Obrigatório quando usar cAcaoFaturamento = REM.
     *
     * Mapeado através do campo [cCodCategRem].
     * Recomenda-se armazenar como VARCHAR(20).
     */
    public ?string $codigoCategoriaRemessa = null;

    /**
     * @var ProdutoUtilizadoSubModel[]
     *
     * Produtos utilizados no serviço.
     *
     * Mapeado através do campo [produtoUtilizado].
     */
    public array $produtosUtilizados = [];
}
