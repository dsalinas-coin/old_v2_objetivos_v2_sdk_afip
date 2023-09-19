<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEDummyResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\DummyResponse
     */
    private $FEDummyResult = null;

    /**
     * @return \App\Client\Type\DummyResponse
     */
    public function getFEDummyResult()
    {
        return $this->FEDummyResult;
    }

    /**
     * @param \App\Client\Type\DummyResponse $FEDummyResult
     * @return FEDummyResponse
     */
    public function withFEDummyResult($FEDummyResult)
    {
        $new = clone $this;
        $new->FEDummyResult = $FEDummyResult;

        return $new;
    }


}

