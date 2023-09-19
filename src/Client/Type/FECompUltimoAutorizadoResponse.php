<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECompUltimoAutorizadoResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FERecuperaLastCbteResponse
     */
    private $FECompUltimoAutorizadoResult = null;

    /**
     * @return \App\Client\Type\FERecuperaLastCbteResponse
     */
    public function getFECompUltimoAutorizadoResult()
    {
        return $this->FECompUltimoAutorizadoResult;
    }

    /**
     * @param \App\Client\Type\FERecuperaLastCbteResponse
     * $FECompUltimoAutorizadoResult
     * @return FECompUltimoAutorizadoResponse
     */
    public function withFECompUltimoAutorizadoResult($FECompUltimoAutorizadoResult)
    {
        $new = clone $this;
        $new->FECompUltimoAutorizadoResult = $FECompUltimoAutorizadoResult;

        return $new;
    }


}

