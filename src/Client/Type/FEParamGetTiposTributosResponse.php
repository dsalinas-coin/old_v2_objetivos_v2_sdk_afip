<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEParamGetTiposTributosResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FETributoResponse
     */
    private $FEParamGetTiposTributosResult = null;

    /**
     * @return \App\Client\Type\FETributoResponse
     */
    public function getFEParamGetTiposTributosResult()
    {
        return $this->FEParamGetTiposTributosResult;
    }

    /**
     * @param \App\Client\Type\FETributoResponse $FEParamGetTiposTributosResult
     * @return FEParamGetTiposTributosResponse
     */
    public function withFEParamGetTiposTributosResult($FEParamGetTiposTributosResult)
    {
        $new = clone $this;
        $new->FEParamGetTiposTributosResult = $FEParamGetTiposTributosResult;

        return $new;
    }


}

