<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetPARAMIncotermsResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseInc
     */
    private $FEXGetPARAM_IncotermsResult = null;

    /**
     * @return \App\Client\Type\FEXResponseInc
     */
    public function getFEXGetPARAM_IncotermsResult()
    {
        return $this->FEXGetPARAM_IncotermsResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseInc $FEXGetPARAM_IncotermsResult
     * @return FEXGetPARAMIncotermsResponse
     */
    public function withFEXGetPARAM_IncotermsResult($FEXGetPARAM_IncotermsResult)
    {
        $new = clone $this;
        $new->FEXGetPARAM_IncotermsResult = $FEXGetPARAM_IncotermsResult;

        return $new;
    }


}

