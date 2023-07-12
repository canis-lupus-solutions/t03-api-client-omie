<?php
namespace CanisLupus\ApiClients\Omie\v1\Models\Servicos;

use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Ordens\Handler as OrdensDeServicoHandler;
use CanisLupus\ApiClients\Omie\v1\Models\Servicos\Cadastro\Handler as CadastroDeServicosHandler;
use CanisLupus\ApiClients\Omie\v1\OmieApiConfig;
use CanisLupus\ApiClients\Omie\v1\OmieApiHandler;

/**
 * Class ServicosHandler.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1\Models\Servicos
 * @name    ServicosHandler
 * @version 1.0.0
 */
class ServicosHandler extends OmieApiHandler
{
    public CadastroDeServicosHandler $cadastro;
    public OrdensDeServicoHandler $ordens;


    /**
     * @param OmieApiConfig $config
     */
    public function __construct(OmieApiConfig $config)
    {
        parent::__construct($config);

        $this->cadastro = new CadastroDeServicosHandler($config);
        $this->ordens = new OrdensDeServicoHandler($config);
    }
}


