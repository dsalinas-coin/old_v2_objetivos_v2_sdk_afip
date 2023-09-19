<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECAEAConsultarResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECAEAGetResponse
     */
    private $FECAEAConsultarResult = null;

    /**
     * @return \App\Client\Type\FECAEAGetResponse
     */
    public function getFECAEAConsultarResult()
    {
        return $this->FECAEAConsultarResult;
    }

    /**
     * @param \App\Client\Type\FECAEAGetResponse $FECAEAConsultarResult
     * @return FECAEAConsultarResponse
     */
    public function withFECAEAConsultarResult($FECAEAConsultarResult)
    {
        $new = clone $this;
        $new->FECAEAConsultarResult = $FECAEAConsultarResult;

        return $new;
    }


}

