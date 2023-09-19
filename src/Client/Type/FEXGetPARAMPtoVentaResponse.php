<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetPARAMPtoVentaResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponsePtoVenta
     */
    private $FEXGetPARAM_PtoVentaResult = null;

    /**
     * @return \App\Client\Type\FEXResponsePtoVenta
     */
    public function getFEXGetPARAM_PtoVentaResult()
    {
        return $this->FEXGetPARAM_PtoVentaResult;
    }

    /**
     * @param \App\Client\Type\FEXResponsePtoVenta $FEXGetPARAM_PtoVentaResult
     * @return FEXGetPARAMPtoVentaResponse
     */
    public function withFEXGetPARAM_PtoVentaResult($FEXGetPARAM_PtoVentaResult)
    {
        $new = clone $this;
        $new->FEXGetPARAM_PtoVentaResult = $FEXGetPARAM_PtoVentaResult;

        return $new;
    }


}

