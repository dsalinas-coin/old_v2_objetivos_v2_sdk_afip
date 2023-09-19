<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CbteTipoResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\ArrayOfCbteTipo
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
     * @return \App\Client\Type\ArrayOfCbteTipo
     */
    public function getResultGet()
    {
        return $this->ResultGet;
    }

    /**
     * @param \App\Client\Type\ArrayOfCbteTipo $ResultGet
     * @return CbteTipoResponse
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
     * @return CbteTipoResponse
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
     * @return CbteTipoResponse
     */
    public function withEvents($Events)
    {
        $new = clone $this;
        $new->Events = $Events;

        return $new;
    }


}

