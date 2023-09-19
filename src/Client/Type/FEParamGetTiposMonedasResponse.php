<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEParamGetTiposMonedasResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\MonedaResponse
     */
    private $FEParamGetTiposMonedasResult = null;

    /**
     * @return \App\Client\Type\MonedaResponse
     */
    public function getFEParamGetTiposMonedasResult()
    {
        return $this->FEParamGetTiposMonedasResult;
    }

    /**
     * @param \App\Client\Type\MonedaResponse $FEParamGetTiposMonedasResult
     * @return FEParamGetTiposMonedasResponse
     */
    public function withFEParamGetTiposMonedasResult($FEParamGetTiposMonedasResult)
    {
        $new = clone $this;
        $new->FEParamGetTiposMonedasResult = $FEParamGetTiposMonedasResult;

        return $new;
    }


}

