<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfClsFEXResponseDSTPais implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXResponseDSTPais
     */
    private $ClsFEXResponse_DST_pais = null;

    /**
     * @return \App\Client\Type\ClsFEXResponseDSTPais
     */
    public function getClsFEXResponse_DST_pais()
    {
        return $this->ClsFEXResponse_DST_pais;
    }

    /**
     * @param \App\Client\Type\ClsFEXResponseDSTPais $ClsFEXResponse_DST_pais
     * @return ArrayOfClsFEXResponseDSTPais
     */
    public function withClsFEXResponse_DST_pais($ClsFEXResponse_DST_pais)
    {
        $new = clone $this;
        $new->ClsFEXResponse_DST_pais = $ClsFEXResponse_DST_pais;

        return $new;
    }


}

