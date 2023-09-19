<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECAEASinMovConsResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\ArrayOfFECAEASinMov
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
     * @return \App\Client\Type\ArrayOfFECAEASinMov
     */
    public function getResultGet()
    {
        return $this->ResultGet;
    }

    /**
     * @param \App\Client\Type\ArrayOfFECAEASinMov $ResultGet
     * @return FECAEASinMovConsResponse
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
     * @return FECAEASinMovConsResponse
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
     * @return FECAEASinMovConsResponse
     */
    public function withEvents($Events)
    {
        $new = clone $this;
        $new->Events = $Events;

        return $new;
    }


}

