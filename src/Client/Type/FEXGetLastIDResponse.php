<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetLastIDResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseLastID
     */
    private $FEXGetLast_IDResult = null;

    /**
     * @return \App\Client\Type\FEXResponseLastID
     */
    public function getFEXGetLast_IDResult()
    {
        return $this->FEXGetLast_IDResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseLastID $FEXGetLast_IDResult
     * @return FEXGetLastIDResponse
     */
    public function withFEXGetLast_IDResult($FEXGetLast_IDResult)
    {
        $new = clone $this;
        $new->FEXGetLast_IDResult = $FEXGetLast_IDResult;

        return $new;
    }


}

