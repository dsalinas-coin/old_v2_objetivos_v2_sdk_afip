<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECAEASinMovimientoInformarResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECAEASinMovResponse
     */
    private $FECAEASinMovimientoInformarResult = null;

    /**
     * @return \App\Client\Type\FECAEASinMovResponse
     */
    public function getFECAEASinMovimientoInformarResult()
    {
        return $this->FECAEASinMovimientoInformarResult;
    }

    /**
     * @param \App\Client\Type\FECAEASinMovResponse
     * $FECAEASinMovimientoInformarResult
     * @return FECAEASinMovimientoInformarResponse
     */
    public function withFECAEASinMovimientoInformarResult($FECAEASinMovimientoInformarResult)
    {
        $new = clone $this;
        $new->FECAEASinMovimientoInformarResult = $FECAEASinMovimientoInformarResult;

        return $new;
    }


}

