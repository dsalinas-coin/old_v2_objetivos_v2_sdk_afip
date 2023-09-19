<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEParamGetTiposPaisesResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEPaisResponse
     */
    private $FEParamGetTiposPaisesResult = null;

    /**
     * @return \App\Client\Type\FEPaisResponse
     */
    public function getFEParamGetTiposPaisesResult()
    {
        return $this->FEParamGetTiposPaisesResult;
    }

    /**
     * @param \App\Client\Type\FEPaisResponse $FEParamGetTiposPaisesResult
     * @return FEParamGetTiposPaisesResponse
     */
    public function withFEParamGetTiposPaisesResult($FEParamGetTiposPaisesResult)
    {
        $new = clone $this;
        $new->FEParamGetTiposPaisesResult = $FEParamGetTiposPaisesResult;

        return $new;
    }


}

