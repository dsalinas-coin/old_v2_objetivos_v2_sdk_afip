<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEParamGetTiposCbteResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\CbteTipoResponse
     */
    private $FEParamGetTiposCbteResult = null;

    /**
     * @return \App\Client\Type\CbteTipoResponse
     */
    public function getFEParamGetTiposCbteResult()
    {
        return $this->FEParamGetTiposCbteResult;
    }

    /**
     * @param \App\Client\Type\CbteTipoResponse $FEParamGetTiposCbteResult
     * @return FEParamGetTiposCbteResponse
     */
    public function withFEParamGetTiposCbteResult($FEParamGetTiposCbteResult)
    {
        $new = clone $this;
        $new->FEParamGetTiposCbteResult = $FEParamGetTiposCbteResult;

        return $new;
    }


}

