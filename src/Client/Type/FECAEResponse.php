<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECAEResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECAECabResponse
     */
    private $FeCabResp = null;

    /**
     * @var \App\Client\Type\ArrayOfFECAEDetResponse
     */
    private $FeDetResp = null;

    /**
     * @var \App\Client\Type\ArrayOfEvt
     */
    private $Events = null;

    /**
     * @var \App\Client\Type\ArrayOfErr
     */
    private $Errors = null;

    /**
     * @return \App\Client\Type\FECAECabResponse
     */
    public function getFeCabResp()
    {
        return $this->FeCabResp;
    }

    /**
     * @param \App\Client\Type\FECAECabResponse $FeCabResp
     * @return FECAEResponse
     */
    public function withFeCabResp($FeCabResp)
    {
        $new = clone $this;
        $new->FeCabResp = $FeCabResp;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfFECAEDetResponse
     */
    public function getFeDetResp()
    {
        return $this->FeDetResp;
    }

    /**
     * @param \App\Client\Type\ArrayOfFECAEDetResponse $FeDetResp
     * @return FECAEResponse
     */
    public function withFeDetResp($FeDetResp)
    {
        $new = clone $this;
        $new->FeDetResp = $FeDetResp;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfEvt
     */
    public function getEvents()
    {
        return $this->Events;
    }

    /**
     * @param \App\Client\Type\ArrayOfEvt $Events
     * @return FECAEResponse
     */
    public function withEvents($Events)
    {
        $new = clone $this;
        $new->Events = $Events;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfErr
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * @param \App\Client\Type\ArrayOfErr $Errors
     * @return FECAEResponse
     */
    public function withErrors($Errors)
    {
        $new = clone $this;
        $new->Errors = $Errors;

        return $new;
    }


}

