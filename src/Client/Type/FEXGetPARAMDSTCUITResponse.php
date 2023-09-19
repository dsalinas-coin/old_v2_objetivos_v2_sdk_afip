<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetPARAMDSTCUITResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseDSTCuit
     */
    private $FEXGetPARAM_DST_CUITResult = null;

    /**
     * @return \App\Client\Type\FEXResponseDSTCuit
     */
    public function getFEXGetPARAM_DST_CUITResult()
    {
        return $this->FEXGetPARAM_DST_CUITResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseDSTCuit $FEXGetPARAM_DST_CUITResult
     * @return FEXGetPARAMDSTCUITResponse
     */
    public function withFEXGetPARAM_DST_CUITResult($FEXGetPARAM_DST_CUITResult)
    {
        $new = clone $this;
        $new->FEXGetPARAM_DST_CUITResult = $FEXGetPARAM_DST_CUITResult;

        return $new;
    }


}

