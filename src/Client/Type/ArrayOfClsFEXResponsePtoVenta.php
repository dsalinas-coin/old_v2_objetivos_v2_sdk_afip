<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfClsFEXResponsePtoVenta implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXResponsePtoVenta
     */
    private $ClsFEXResponse_PtoVenta = null;

    /**
     * @return \App\Client\Type\ClsFEXResponsePtoVenta
     */
    public function getClsFEXResponse_PtoVenta()
    {
        return $this->ClsFEXResponse_PtoVenta;
    }

    /**
     * @param \App\Client\Type\ClsFEXResponsePtoVenta $ClsFEXResponse_PtoVenta
     * @return ArrayOfClsFEXResponsePtoVenta
     */
    public function withClsFEXResponse_PtoVenta($ClsFEXResponse_PtoVenta)
    {
        $new = clone $this;
        $new->ClsFEXResponse_PtoVenta = $ClsFEXResponse_PtoVenta;

        return $new;
    }


}

