<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetLastCMPResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseLastCMP
     */
    private $FEXGetLast_CMPResult = null;

    /**
     * @return \App\Client\Type\FEXResponseLastCMP
     */
    public function getFEXGetLast_CMPResult()
    {
        return $this->FEXGetLast_CMPResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseLastCMP $FEXGetLast_CMPResult
     * @return FEXGetLastCMPResponse
     */
    public function withFEXGetLast_CMPResult($FEXGetLast_CMPResult)
    {
        $new = clone $this;
        $new->FEXGetLast_CMPResult = $FEXGetLast_CMPResult;

        return $new;
    }


}

