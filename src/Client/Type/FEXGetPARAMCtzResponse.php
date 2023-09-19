<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetPARAMCtzResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseCtz
     */
    private $FEXGetPARAM_CtzResult = null;

    /**
     * @return \App\Client\Type\FEXResponseCtz
     */
    public function getFEXGetPARAM_CtzResult()
    {
        return $this->FEXGetPARAM_CtzResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseCtz $FEXGetPARAM_CtzResult
     * @return FEXGetPARAMCtzResponse
     */
    public function withFEXGetPARAM_CtzResult($FEXGetPARAM_CtzResult)
    {
        $new = clone $this;
        $new->FEXGetPARAM_CtzResult = $FEXGetPARAM_CtzResult;

        return $new;
    }


}

