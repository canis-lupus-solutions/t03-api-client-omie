<?php
namespace CanisLupus\ApiClients\Omie\v1;

/**
 * Class OmieApiConfig.
 *
 * @author  Leonardo de Aguiar <leoaguiarpereira@gmail.com>
 * @package CanisLupus\ApiClients\Omie\v1
 * @name    OmieApiConfig
 * @version 1.0.0
 */
class OmieApiConfig
{
    protected string $appKey;
    protected string $appSecret;


    /**
     * OmieApiConfig constructor.
     *
     * @param string $appKey
     * @param string $appSecret
     */
    public function __construct(
        string $appKey,
        string $appSecret
    ) {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
    }


    /**
     * @return string
     */
    public function getAppKey(): string
    {
        return $this->appKey;
    }

    /**
     * @param string $appKey
     *
     * @return OmieApiConfig
     */
    public function setAppKey(string $appKey): OmieApiConfig
    {
        $this->appKey = $appKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getAppSecret(): string
    {
        return $this->appSecret;
    }

    /**
     * @param string $appSecret
     *
     * @return OmieApiConfig
     */
    public function setAppSecret(string $appSecret): OmieApiConfig
    {
        $this->appSecret = $appSecret;

        return $this;
    }
}
