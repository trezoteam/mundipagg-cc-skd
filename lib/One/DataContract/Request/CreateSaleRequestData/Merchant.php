<?php

namespace GatewayMundi\One\DataContract\Request\CreateSaleRequestData;

use GatewayMundi\One\DataContract\Common\BaseObject;

/**
 * Class Merchant
 * @package GatewayMundi\One\DataContract\Request\CreateSaleRequestData
 */
class Merchant extends BaseObject
{
    /**
     * @var string Identificação da loja.
     * Este campo deve ser utilizado por plataformas de e-commerce que desejam enviar o identificar da loja que esta realizando a transação
     */
    protected $MerchantReference;

    /**
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->MerchantReference;
    }

    /**
     * @param string $merchantReference
     * @return $this
     */
    public function setMerchantReference($merchantReference)
    {
        $this->MerchantReference = $merchantReference;
        return $this;
    }
}