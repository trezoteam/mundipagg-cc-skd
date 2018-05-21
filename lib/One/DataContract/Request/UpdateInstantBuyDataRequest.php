<?php
namespace GatewayMundi\One\DataContract\Request;

use GatewayMundi\One\DataContract\Common\BaseObject;


class UpdateInstantBuyDataRequest extends BaseObject {
    protected $BuyerKey;

    public function getBuyerKey(){
        return $this->BuyerKey;
    }

    public function setBuyerKey($buyerKey){
        $this->BuyerKey = $buyerKey;
        return $this;
    }
}
