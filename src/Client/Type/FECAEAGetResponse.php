<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECAEAGetResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECAEAGet
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
     * @return \App\Client\Type\FECAEAGet
     */
    public function getResultGet()
    {
        return $this->ResultGet;
    }

    /**
     * @param \App\Client\Type\FECAEAGet $ResultGet
     * @return FECAEAGetResponse
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
     * @return FECAEAGetResponse
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
     * @return FECAEAGetResponse
     */
    public function withEvents($Events)
    {
        $new = clone $this;
        $new->Events = $Events;

        return $new;
    }


}

