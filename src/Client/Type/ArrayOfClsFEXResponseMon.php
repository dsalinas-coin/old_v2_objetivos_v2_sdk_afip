<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfClsFEXResponseMon implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXResponseMon
     */
    private $ClsFEXResponse_Mon = null;

    /**
     * @return \App\Client\Type\ClsFEXResponseMon
     */
    public function getClsFEXResponse_Mon()
    {
        return $this->ClsFEXResponse_Mon;
    }

    /**
     * @param \App\Client\Type\ClsFEXResponseMon $ClsFEXResponse_Mon
     * @return ArrayOfClsFEXResponseMon
     */
    public function withClsFEXResponse_Mon($ClsFEXResponse_Mon)
    {
        $new = clone $this;
        $new->ClsFEXResponse_Mon = $ClsFEXResponse_Mon;

        return $new;
    }


}

