<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECAESolicitarResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECAEResponse
     */
    private $FECAESolicitarResult = null;

    /**
     * @return \App\Client\Type\FECAEResponse
     */
    public function getFECAESolicitarResult()
    {
        return $this->FECAESolicitarResult;
    }

    /**
     * @param \App\Client\Type\FECAEResponse $FECAESolicitarResult
     * @return FECAESolicitarResponse
     */
    public function withFECAESolicitarResult($FECAESolicitarResult)
    {
        $new = clone $this;
        $new->FECAESolicitarResult = $FECAESolicitarResult;

        return $new;
    }


}

