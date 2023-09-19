<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfClsFEXResponseTex implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXResponseTex
     */
    private $ClsFEXResponse_Tex = null;

    /**
     * @return \App\Client\Type\ClsFEXResponseTex
     */
    public function getClsFEXResponse_Tex()
    {
        return $this->ClsFEXResponse_Tex;
    }

    /**
     * @param \App\Client\Type\ClsFEXResponseTex $ClsFEXResponse_Tex
     * @return ArrayOfClsFEXResponseTex
     */
    public function withClsFEXResponse_Tex($ClsFEXResponse_Tex)
    {
        $new = clone $this;
        $new->ClsFEXResponse_Tex = $ClsFEXResponse_Tex;

        return $new;
    }


}

