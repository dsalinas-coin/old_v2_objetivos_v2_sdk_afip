<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECompConsultaResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECompConsResponse
     */
    private $ResultGet = null;

    /**
     * @var \App\Client\Type\ArrayOfErr
     */
    private $Errors = null;

    /**
     * @var \App\Client\Type\ArrayOfEvt
     */
    private $Events = null;

    /**
     * @return \App\Client\Type\FECompConsResponse
     */
    public function getResultGet()
    {
        return $this->ResultGet;
    }

    /**
     * @param \App\Client\Type\FECompConsResponse $ResultGet
     * @return FECompConsultaResponse
     */
    public function withResultGet($ResultGet)
    {
        $new = clone $this;
        $new->ResultGet = $ResultGet;

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
     * @return FECompConsultaResponse
     */
    public function withErrors($Errors)
    {
        $new = clone $this;
        $new->Errors = $Errors;

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
     * @return FECompConsultaResponse
     */
    public function withEvents($Events)
    {
        $new = clone $this;
        $new->Events = $Events;

        return $new;
    }


}

