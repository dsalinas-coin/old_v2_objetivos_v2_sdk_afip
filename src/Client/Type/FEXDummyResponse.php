<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXDummyResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\DummyResponse
     */
    private $FEXDummyResult = null;

    /**
     * @return \App\Client\Type\DummyResponse
     */
    public function getFEXDummyResult()
    {
        return $this->FEXDummyResult;
    }

    /**
     * @param \App\Client\Type\DummyResponse $FEXDummyResult
     * @return FEXDummyResponse
     */
    public function withFEXDummyResult($FEXDummyResult)
    {
        $new = clone $this;
        $new->FEXDummyResult = $FEXDummyResult;

        return $new;
    }


}

