<?php

namespace GatewayMundi\One\DataContract\Request\TokenRequestData;

use GatewayMundi\One\DataContract\Common\BaseObject;
use GatewayMundi\One\DataContract\Common;


/**
 * Class TokenRequestData
 * @package GatewayMundi\One\DataContract\Request\TokenRequestData
 */
class TokenRequestData extends BaseObject
{

    /**
     * @var Common\GenericData[] Coleção de dados genéricos de antifraude
     */
    protected $GenericDataCollection;

    /**
     * @return Common\GenericData[]
     */
    public function getGenericDataCollection()
    {
        if (empty($this->GenericDataCollection)){
            $this->GenericDataCollection = array();
        }

        return $this->GenericDataCollection;
    }

    /**
     * @param Common\GenericData $genericData
     * @return Common\GenericData
     */
    public function addGenericData($genericData = null)
    {
        if ($genericData == null){
            $genericData = new Common\GenericData();
        }

        $this->GenericDataCollection[] = $genericData;

        return $genericData;
    }

}
