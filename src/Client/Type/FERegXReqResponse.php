<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FERegXReqResponse implements ResultInterface
{

    /**
     * @var int
     */
    private $RegXReq = null;

    /**
     * @var \App\Client\Type\ArrayOfErr
     */
    private $Errors = null;

    /**
     * @var \App\Client\Type\ArrayOfEvt
     */
    private $Events = null;

    /**
     * @return int
     */
    public function getRegXReq()
    {
        return $this->RegXReq;
    }

    /**
     * @param int $RegXReq
     * @return FERegXReqResponse
     */
    public function withRegXReq($RegXReq)
    {
        $new = clone $this;
        $new->RegXReq = $RegXReq;

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
     * @return FERegXReqResponse
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
     * @return FERegXReqResponse
     */
    public function withEvents($Events)
    {
        $new = clone $this;
        $new->Events = $Events;

        return $new;
    }


}

