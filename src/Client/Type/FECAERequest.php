<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FECAERequest implements RequestInterface
{

    /**
     * @var \App\Client\Type\FECAECabRequest
     */
    private $FeCabReq = null;

    /**
     * @var \App\Client\Type\ArrayOfFECAEDetRequest
     */
    private $FeDetReq = null;

    /**
     * Constructor
     *
     * @var \App\Client\Type\FECAECabRequest $FeCabReq
     * @var \App\Client\Type\ArrayOfFECAEDetRequest $FeDetReq
     */
    public function __construct($FeCabReq, $FeDetReq)
    {
        $this->FeCabReq = $FeCabReq;
        $this->FeDetReq = $FeDetReq;
    }

    /**
     * @return \App\Client\Type\FECAECabRequest
     */
    public function getFeCabReq()
    {
        return $this->FeCabReq;
    }

    /**
     * @param \App\Client\Type\FECAECabRequest $FeCabReq
     * @return FECAERequest
     */
    public function withFeCabReq($FeCabReq)
    {
        $new = clone $this;
        $new->FeCabReq = $FeCabReq;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfFECAEDetRequest
     */
    public function getFeDetReq()
    {
        return $this->FeDetReq;
    }

    /**
     * @param \App\Client\Type\ArrayOfFECAEDetRequest $FeDetReq
     * @return FECAERequest
     */
    public function withFeDetReq($FeDetReq)
    {
        $new = clone $this;
        $new->FeDetReq = $FeDetReq;

        return $new;
    }


}

