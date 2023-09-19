<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECAEARegInformativoResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECAEAResponse
     */
    private $FECAEARegInformativoResult = null;

    /**
     * @return \App\Client\Type\FECAEAResponse
     */
    public function getFECAEARegInformativoResult()
    {
        return $this->FECAEARegInformativoResult;
    }

    /**
     * @param \App\Client\Type\FECAEAResponse $FECAEARegInformativoResult
     * @return FECAEARegInformativoResponse
     */
    public function withFECAEARegInformativoResult($FECAEARegInformativoResult)
    {
        $new = clone $this;
        $new->FECAEARegInformativoResult = $FECAEARegInformativoResult;

        return $new;
    }


}

