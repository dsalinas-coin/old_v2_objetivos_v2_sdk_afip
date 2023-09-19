<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfClsFEXResponseInc implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXResponseInc
     */
    private $ClsFEXResponse_Inc = null;

    /**
     * @return \App\Client\Type\ClsFEXResponseInc
     */
    public function getClsFEXResponse_Inc()
    {
        return $this->ClsFEXResponse_Inc;
    }

    /**
     * @param \App\Client\Type\ClsFEXResponseInc $ClsFEXResponse_Inc
     * @return ArrayOfClsFEXResponseInc
     */
    public function withClsFEXResponse_Inc($ClsFEXResponse_Inc)
    {
        $new = clone $this;
        $new->ClsFEXResponse_Inc = $ClsFEXResponse_Inc;

        return $new;
    }


}

