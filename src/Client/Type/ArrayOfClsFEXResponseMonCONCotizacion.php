<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfClsFEXResponseMonCONCotizacion implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXResponseMonCONCotizacion
     */
    private $ClsFEXResponse_Mon_CON_Cotizacion = null;

    /**
     * @return \App\Client\Type\ClsFEXResponseMonCONCotizacion
     */
    public function getClsFEXResponse_Mon_CON_Cotizacion()
    {
        return $this->ClsFEXResponse_Mon_CON_Cotizacion;
    }

    /**
     * @param \App\Client\Type\ClsFEXResponseMonCONCotizacion
     * $ClsFEXResponse_Mon_CON_Cotizacion
     * @return ArrayOfClsFEXResponseMonCONCotizacion
     */
    public function withClsFEXResponse_Mon_CON_Cotizacion($ClsFEXResponse_Mon_CON_Cotizacion)
    {
        $new = clone $this;
        $new->ClsFEXResponse_Mon_CON_Cotizacion = $ClsFEXResponse_Mon_CON_Cotizacion;

        return $new;
    }


}

