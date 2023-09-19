<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfClsFEXResponseOpc implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXResponseOpc
     */
    private $ClsFEXResponse_Opc = null;

    /**
     * @return \App\Client\Type\ClsFEXResponseOpc
     */
    public function getClsFEXResponse_Opc()
    {
        return $this->ClsFEXResponse_Opc;
    }

    /**
     * @param \App\Client\Type\ClsFEXResponseOpc $ClsFEXResponse_Opc
     * @return ArrayOfClsFEXResponseOpc
     */
    public function withClsFEXResponse_Opc($ClsFEXResponse_Opc)
    {
        $new = clone $this;
        $new->ClsFEXResponse_Opc = $ClsFEXResponse_Opc;

        return $new;
    }


}

