<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECAEASolicitarResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECAEAGetResponse
     */
    private $FECAEASolicitarResult = null;

    /**
     * @return \App\Client\Type\FECAEAGetResponse
     */
    public function getFECAEASolicitarResult()
    {
        return $this->FECAEASolicitarResult;
    }

    /**
     * @param \App\Client\Type\FECAEAGetResponse $FECAEASolicitarResult
     * @return FECAEASolicitarResponse
     */
    public function withFECAEASolicitarResult($FECAEASolicitarResult)
    {
        $new = clone $this;
        $new->FECAEASolicitarResult = $FECAEASolicitarResult;

        return $new;
    }


}

