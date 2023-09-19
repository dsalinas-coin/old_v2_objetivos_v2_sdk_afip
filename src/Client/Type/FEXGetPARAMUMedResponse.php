<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetPARAMUMedResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseUmed
     */
    private $FEXGetPARAM_UMedResult = null;

    /**
     * @return \App\Client\Type\FEXResponseUmed
     */
    public function getFEXGetPARAM_UMedResult()
    {
        return $this->FEXGetPARAM_UMedResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseUmed $FEXGetPARAM_UMedResult
     * @return FEXGetPARAMUMedResponse
     */
    public function withFEXGetPARAM_UMedResult($FEXGetPARAM_UMedResult)
    {
        $new = clone $this;
        $new->FEXGetPARAM_UMedResult = $FEXGetPARAM_UMedResult;

        return $new;
    }


}

