<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetPARAMCbteTipoResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseCbteTipo
     */
    private $FEXGetPARAM_Cbte_TipoResult = null;

    /**
     * @return \App\Client\Type\FEXResponseCbteTipo
     */
    public function getFEXGetPARAM_Cbte_TipoResult()
    {
        return $this->FEXGetPARAM_Cbte_TipoResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseCbteTipo $FEXGetPARAM_Cbte_TipoResult
     * @return FEXGetPARAMCbteTipoResponse
     */
    public function withFEXGetPARAM_Cbte_TipoResult($FEXGetPARAM_Cbte_TipoResult)
    {
        $new = clone $this;
        $new->FEXGetPARAM_Cbte_TipoResult = $FEXGetPARAM_Cbte_TipoResult;

        return $new;
    }


}

