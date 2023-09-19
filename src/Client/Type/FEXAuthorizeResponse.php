<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXAuthorizeResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseAuthorize
     */
    private $FEXAuthorizeResult = null;

    /**
     * @return \App\Client\Type\FEXResponseAuthorize
     */
    public function getFEXAuthorizeResult()
    {
        return $this->FEXAuthorizeResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseAuthorize $FEXAuthorizeResult
     * @return FEXAuthorizeResponse
     */
    public function withFEXAuthorizeResult($FEXAuthorizeResult)
    {
        $new = clone $this;
        $new->FEXAuthorizeResult = $FEXAuthorizeResult;

        return $new;
    }


}

