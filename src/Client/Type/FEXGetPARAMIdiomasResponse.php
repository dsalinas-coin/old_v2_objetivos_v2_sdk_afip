<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetPARAMIdiomasResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseIdi
     */
    private $FEXGetPARAM_IdiomasResult = null;

    /**
     * @return \App\Client\Type\FEXResponseIdi
     */
    public function getFEXGetPARAM_IdiomasResult()
    {
        return $this->FEXGetPARAM_IdiomasResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseIdi $FEXGetPARAM_IdiomasResult
     * @return FEXGetPARAMIdiomasResponse
     */
    public function withFEXGetPARAM_IdiomasResult($FEXGetPARAM_IdiomasResult)
    {
        $new = clone $this;
        $new->FEXGetPARAM_IdiomasResult = $FEXGetPARAM_IdiomasResult;

        return $new;
    }


}

