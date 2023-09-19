<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class FECompTotXRequestResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \App\Client\Type\FERegXReqResponse
     */
    private $FECompTotXRequestResult = null;

    /**
     * Constructor
     *
     * @var \App\Client\Type\FERegXReqResponse $FECompTotXRequestResult
     */
    public function __construct($FECompTotXRequestResult)
    {
        $this->FECompTotXRequestResult = $FECompTotXRequestResult;
    }

    /**
     * @return \App\Client\Type\FERegXReqResponse
     */
    public function getFECompTotXRequestResult()
    {
        return $this->FECompTotXRequestResult;
    }

    /**
     * @param \App\Client\Type\FERegXReqResponse $FECompTotXRequestResult
     * @return FECompTotXRequestResponse
     */
    public function withFECompTotXRequestResult($FECompTotXRequestResult)
    {
        $new = clone $this;
        $new->FECompTotXRequestResult = $FECompTotXRequestResult;

        return $new;
    }


}

