<?php

namespace GatewayMundi\One\DataContract\Request\CreateSaleRequestData;

use GatewayMundi\One\DataContract\Common\BaseObject;

/**
 * Class Order
 * @package GatewayMundi\One\DataContract\Request\CreateSaleRequestData
 */
class Order extends BaseObject
{
    /**
     * @var string Número do pedido no sistema do e-commerce
     */
    protected $OrderReference;

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->OrderReference;
    }

    /**
     * @param string $OrderReference
     * @return $this
     */
    public function setOrderReference($OrderReference)
    {
        $this->OrderReference = $OrderReference;

        return $this;
    }
}