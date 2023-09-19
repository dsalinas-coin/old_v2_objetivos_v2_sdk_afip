<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEParamGetTiposIvaResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\IvaTipoResponse
     */
    private $FEParamGetTiposIvaResult = null;

    /**
     * @return \App\Client\Type\IvaTipoResponse
     */
    public function getFEParamGetTiposIvaResult()
    {
        return $this->FEParamGetTiposIvaResult;
    }

    /**
     * @param \App\Client\Type\IvaTipoResponse $FEParamGetTiposIvaResult
     * @return FEParamGetTiposIvaResponse
     */
    public function withFEParamGetTiposIvaResult($FEParamGetTiposIvaResult)
    {
        $new = clone $this;
        $new->FEParamGetTiposIvaResult = $FEParamGetTiposIvaResult;

        return $new;
    }


}

