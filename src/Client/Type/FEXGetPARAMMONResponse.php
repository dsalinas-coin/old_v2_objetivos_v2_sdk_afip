<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetPARAMMONResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseMon
     */
    private $FEXGetPARAM_MONResult = null;

    /**
     * @return \App\Client\Type\FEXResponseMon
     */
    public function getFEXGetPARAM_MONResult()
    {
        return $this->FEXGetPARAM_MONResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseMon $FEXGetPARAM_MONResult
     * @return FEXGetPARAMMONResponse
     */
    public function withFEXGetPARAM_MONResult($FEXGetPARAM_MONResult)
    {
        $new = clone $this;
        $new->FEXGetPARAM_MONResult = $FEXGetPARAM_MONResult;

        return $new;
    }


}

