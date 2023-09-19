<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEParamGetTiposOpcionalResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\OpcionalTipoResponse
     */
    private $FEParamGetTiposOpcionalResult = null;

    /**
     * @return \App\Client\Type\OpcionalTipoResponse
     */
    public function getFEParamGetTiposOpcionalResult()
    {
        return $this->FEParamGetTiposOpcionalResult;
    }

    /**
     * @param \App\Client\Type\OpcionalTipoResponse
     * $FEParamGetTiposOpcionalResult
     * @return FEParamGetTiposOpcionalResponse
     */
    public function withFEParamGetTiposOpcionalResult($FEParamGetTiposOpcionalResult)
    {
        $new = clone $this;
        $new->FEParamGetTiposOpcionalResult = $FEParamGetTiposOpcionalResult;

        return $new;
    }


}

