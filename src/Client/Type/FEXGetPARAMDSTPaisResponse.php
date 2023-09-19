<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetPARAMDSTPaisResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseDSTPais
     */
    private $FEXGetPARAM_DST_paisResult = null;

    /**
     * @return \App\Client\Type\FEXResponseDSTPais
     */
    public function getFEXGetPARAM_DST_paisResult()
    {
        return $this->FEXGetPARAM_DST_paisResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseDSTPais $FEXGetPARAM_DST_paisResult
     * @return FEXGetPARAMDSTPaisResponse
     */
    public function withFEXGetPARAM_DST_paisResult($FEXGetPARAM_DST_paisResult)
    {
        $new = clone $this;
        $new->FEXGetPARAM_DST_paisResult = $FEXGetPARAM_DST_paisResult;

        return $new;
    }


}

