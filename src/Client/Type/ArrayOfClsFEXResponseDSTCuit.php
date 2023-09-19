<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfClsFEXResponseDSTCuit implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXResponseDSTCuit
     */
    private $ClsFEXResponse_DST_cuit = null;

    /**
     * @return \App\Client\Type\ClsFEXResponseDSTCuit
     */
    public function getClsFEXResponse_DST_cuit()
    {
        return $this->ClsFEXResponse_DST_cuit;
    }

    /**
     * @param \App\Client\Type\ClsFEXResponseDSTCuit $ClsFEXResponse_DST_cuit
     * @return ArrayOfClsFEXResponseDSTCuit
     */
    public function withClsFEXResponse_DST_cuit($ClsFEXResponse_DST_cuit)
    {
        $new = clone $this;
        $new->ClsFEXResponse_DST_cuit = $ClsFEXResponse_DST_cuit;

        return $new;
    }


}

