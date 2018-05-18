<?php

namespace GatewayMundi\One\DataContract\Request;

use GatewayMundi\One\DataContract\Common\BaseObject;
use GatewayMundi\One\DataContract\Common\ManageCreditCardTransaction;

/**
 * Class CaptureRequest
 * @package GatewayMundi\One\DataContract\Request
 */
class CancelRequest extends BaseObject
{
    /**
     * @var string Identificação da Ordem na plataforma One
     */
    protected $OrderKey;

    /**
     * @var ManageCreditCardTransaction[] Coleção de ManageCreditCardTransaction com o valor que será capturado de cada cartão.
     */
    protected $CreditCardTransactionCollection;

    /**
     * @return string
     */
    public function getOrderKey()
    {
        return $this->OrderKey;
    }

    /**
     * @param string $OrderKey
     * @return $this
     */
    public function setOrderKey($OrderKey)
    {
        $this->OrderKey = $OrderKey;

        return $this;
    }

    /**
     * @return ManageCreditCardTransaction[]
     */
    public function getCreditCardTransactionCollection()
    {
        return $this->CreditCardTransactionCollection;
    }

    /**
     * @param ManageCreditCardTransaction $creditCardTransaction
     * @return $this
     */
    public function addCreditCardTransaction($creditCardTransaction = null)
    {
        if ($this->CreditCardTransactionCollection == null){
            $this->CreditCardTransactionCollection = array();
        }

        if ($creditCardTransaction == null){
            $creditCardTransaction = new ManageCreditCardTransaction();
        }

        $this->CreditCardTransactionCollection[] = $creditCardTransaction;

        return $creditCardTransaction;
    }
}