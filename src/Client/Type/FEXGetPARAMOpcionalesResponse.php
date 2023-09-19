<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetPARAMOpcionalesResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseOpc
     */
    private $FEXGetPARAM_OpcionalesResult = null;

    /**
     * @return \App\Client\Type\FEXResponseOpc
     */
    public function getFEXGetPARAM_OpcionalesResult()
    {
        return $this->FEXGetPARAM_OpcionalesResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseOpc $FEXGetPARAM_OpcionalesResult
     * @return FEXGetPARAMOpcionalesResponse
     */
    public function withFEXGetPARAM_OpcionalesResult($FEXGetPARAM_OpcionalesResult)
    {
        $new = clone $this;
        $new->FEXGetPARAM_OpcionalesResult = $FEXGetPARAM_OpcionalesResult;

        return $new;
    }


}

