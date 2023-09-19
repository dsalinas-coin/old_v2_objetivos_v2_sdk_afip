<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEParamGetPtosVentaResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEPtoVentaResponse
     */
    private $FEParamGetPtosVentaResult = null;

    /**
     * @return \App\Client\Type\FEPtoVentaResponse
     */
    public function getFEParamGetPtosVentaResult()
    {
        return $this->FEParamGetPtosVentaResult;
    }

    /**
     * @param \App\Client\Type\FEPtoVentaResponse $FEParamGetPtosVentaResult
     * @return FEParamGetPtosVentaResponse
     */
    public function withFEParamGetPtosVentaResult($FEParamGetPtosVentaResult)
    {
        $new = clone $this;
        $new->FEParamGetPtosVentaResult = $FEParamGetPtosVentaResult;

        return $new;
    }


}

