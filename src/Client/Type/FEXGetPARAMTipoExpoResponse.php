<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetPARAMTipoExpoResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseTex
     */
    private $FEXGetPARAM_Tipo_ExpoResult = null;

    /**
     * @return \App\Client\Type\FEXResponseTex
     */
    public function getFEXGetPARAM_Tipo_ExpoResult()
    {
        return $this->FEXGetPARAM_Tipo_ExpoResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseTex $FEXGetPARAM_Tipo_ExpoResult
     * @return FEXGetPARAMTipoExpoResponse
     */
    public function withFEXGetPARAM_Tipo_ExpoResult($FEXGetPARAM_Tipo_ExpoResult)
    {
        $new = clone $this;
        $new->FEXGetPARAM_Tipo_ExpoResult = $FEXGetPARAM_Tipo_ExpoResult;

        return $new;
    }


}

