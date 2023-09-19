<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfClsFEXResponseCbteTipo implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXResponseCbteTipo
     */
    private $ClsFEXResponse_Cbte_Tipo = null;

    /**
     * @return \App\Client\Type\ClsFEXResponseCbteTipo
     */
    public function getClsFEXResponse_Cbte_Tipo()
    {
        return $this->ClsFEXResponse_Cbte_Tipo;
    }

    /**
     * @param \App\Client\Type\ClsFEXResponseCbteTipo $ClsFEXResponse_Cbte_Tipo
     * @return ArrayOfClsFEXResponseCbteTipo
     */
    public function withClsFEXResponse_Cbte_Tipo($ClsFEXResponse_Cbte_Tipo)
    {
        $new = clone $this;
        $new->ClsFEXResponse_Cbte_Tipo = $ClsFEXResponse_Cbte_Tipo;

        return $new;
    }


}

