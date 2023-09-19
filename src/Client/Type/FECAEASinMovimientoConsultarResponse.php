<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECAEASinMovimientoConsultarResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECAEASinMovConsResponse
     */
    private $FECAEASinMovimientoConsultarResult = null;

    /**
     * @return \App\Client\Type\FECAEASinMovConsResponse
     */
    public function getFECAEASinMovimientoConsultarResult()
    {
        return $this->FECAEASinMovimientoConsultarResult;
    }

    /**
     * @param \App\Client\Type\FECAEASinMovConsResponse
     * $FECAEASinMovimientoConsultarResult
     * @return FECAEASinMovimientoConsultarResponse
     */
    public function withFECAEASinMovimientoConsultarResult($FECAEASinMovimientoConsultarResult)
    {
        $new = clone $this;
        $new->FECAEASinMovimientoConsultarResult = $FECAEASinMovimientoConsultarResult;

        return $new;
    }


}

