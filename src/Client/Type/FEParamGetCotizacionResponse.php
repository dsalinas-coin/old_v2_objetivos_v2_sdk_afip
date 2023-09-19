<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEParamGetCotizacionResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECotizacionResponse
     */
    private $FEParamGetCotizacionResult = null;

    /**
     * @return \App\Client\Type\FECotizacionResponse
     */
    public function getFEParamGetCotizacionResult()
    {
        return $this->FEParamGetCotizacionResult;
    }

    /**
     * @param \App\Client\Type\FECotizacionResponse $FEParamGetCotizacionResult
     * @return FEParamGetCotizacionResponse
     */
    public function withFEParamGetCotizacionResult($FEParamGetCotizacionResult)
    {
        $new = clone $this;
        $new->FEParamGetCotizacionResult = $FEParamGetCotizacionResult;

        return $new;
    }


}

