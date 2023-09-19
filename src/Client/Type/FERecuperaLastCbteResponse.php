<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FERecuperaLastCbteResponse implements ResultInterface
{

    /**
     * @var int
     */
    private $PtoVta = null;

    /**
     * @var int
     */
    private $CbteTipo = null;

    /**
     * @var int
     */
    private $CbteNro = null;

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
    public function getPtoVta()
    {
        return $this->PtoVta;
    }

    /**
     * @param int $PtoVta
     * @return FERecuperaLastCbteResponse
     */
    public function withPtoVta($PtoVta)
    {
        $new = clone $this;
        $new->PtoVta = $PtoVta;

        return $new;
    }

    /**
     * @return int
     */
    public function getCbteTipo()
    {
        return $this->CbteTipo;
    }

    /**
     * @param int $CbteTipo
     * @return FERecuperaLastCbteResponse
     */
    public function withCbteTipo($CbteTipo)
    {
        $new = clone $this;
        $new->CbteTipo = $CbteTipo;

        return $new;
    }

    /**
     * @return int
     */
    public function getCbteNro()
    {
        return $this->CbteNro;
    }

    /**
     * @param int $CbteNro
     * @return FERecuperaLastCbteResponse
     */
    public function withCbteNro($CbteNro)
    {
        $new = clone $this;
        $new->CbteNro = $CbteNro;

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
     * @return FERecuperaLastCbteResponse
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
     * @return FERecuperaLastCbteResponse
     */
    public function withEvents($Events)
    {
        $new = clone $this;
        $new->Events = $Events;

        return $new;
    }


}

