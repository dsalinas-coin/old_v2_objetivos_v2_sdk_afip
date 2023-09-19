<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FECAEARequest implements RequestInterface
{

    /**
     * @var \App\Client\Type\FECAEACabRequest
     */
    private $FeCabReq = null;

    /**
     * @var \App\Client\Type\ArrayOfFECAEADetRequest
     */
    private $FeDetReq = null;

    /**
     * Constructor
     *
     * @var \App\Client\Type\FECAEACabRequest $FeCabReq
     * @var \App\Client\Type\ArrayOfFECAEADetRequest $FeDetReq
     */
    public function __construct($FeCabReq, $FeDetReq)
    {
        $this->FeCabReq = $FeCabReq;
        $this->FeDetReq = $FeDetReq;
    }

    /**
     * @return \App\Client\Type\FECAEACabRequest
     */
    public function getFeCabReq()
    {
        return $this->FeCabReq;
    }

    /**
     * @param \App\Client\Type\FECAEACabRequest $FeCabReq
     * @return FECAEARequest
     */
    public function withFeCabReq($FeCabReq)
    {
        $new = clone $this;
        $new->FeCabReq = $FeCabReq;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfFECAEADetRequest
     */
    public function getFeDetReq()
    {
        return $this->FeDetReq;
    }

    /**
     * @param \App\Client\Type\ArrayOfFECAEADetRequest $FeDetReq
     * @return FECAEARequest
     */
    public function withFeDetReq($FeDetReq)
    {
        $new = clone $this;
        $new->FeDetReq = $FeDetReq;

        return $new;
    }


}

