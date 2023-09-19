<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEParamGetTiposDocResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\DocTipoResponse
     */
    private $FEParamGetTiposDocResult = null;

    /**
     * @return \App\Client\Type\DocTipoResponse
     */
    public function getFEParamGetTiposDocResult()
    {
        return $this->FEParamGetTiposDocResult;
    }

    /**
     * @param \App\Client\Type\DocTipoResponse $FEParamGetTiposDocResult
     * @return FEParamGetTiposDocResponse
     */
    public function withFEParamGetTiposDocResult($FEParamGetTiposDocResult)
    {
        $new = clone $this;
        $new->FEParamGetTiposDocResult = $FEParamGetTiposDocResult;

        return $new;
    }


}

