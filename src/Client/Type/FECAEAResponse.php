<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECAEAResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECAEACabResponse
     */
    private $FeCabResp = null;

    /**
     * @var \App\Client\Type\ArrayOfFECAEADetResponse
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
     * @return \App\Client\Type\FECAEACabResponse
     */
    public function getFeCabResp()
    {
        return $this->FeCabResp;
    }

    /**
     * @param \App\Client\Type\FECAEACabResponse $FeCabResp
     * @return FECAEAResponse
     */
    public function withFeCabResp($FeCabResp)
    {
        $new = clone $this;
        $new->FeCabResp = $FeCabResp;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfFECAEADetResponse
     */
    public function getFeDetResp()
    {
        return $this->FeDetResp;
    }

    /**
     * @param \App\Client\Type\ArrayOfFECAEADetResponse $FeDetResp
     * @return FECAEAResponse
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
     * @return FECAEAResponse
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
     * @return FECAEAResponse
     */
    public function withErrors($Errors)
    {
        $new = clone $this;
        $new->Errors = $Errors;

        return $new;
    }


}

