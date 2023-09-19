<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECompConsultarResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECompConsultaResponse
     */
    private $FECompConsultarResult = null;

    /**
     * @return \App\Client\Type\FECompConsultaResponse
     */
    public function getFECompConsultarResult()
    {
        return $this->FECompConsultarResult;
    }

    /**
     * @param \App\Client\Type\FECompConsultaResponse $FECompConsultarResult
     * @return FECompConsultarResponse
     */
    public function withFECompConsultarResult($FECompConsultarResult)
    {
        $new = clone $this;
        $new->FECompConsultarResult = $FECompConsultarResult;

        return $new;
    }


}

