<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfClsFEXResponseIdi implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXResponseIdi
     */
    private $ClsFEXResponse_Idi = null;

    /**
     * @return \App\Client\Type\ClsFEXResponseIdi
     */
    public function getClsFEXResponse_Idi()
    {
        return $this->ClsFEXResponse_Idi;
    }

    /**
     * @param \App\Client\Type\ClsFEXResponseIdi $ClsFEXResponse_Idi
     * @return ArrayOfClsFEXResponseIdi
     */
    public function withClsFEXResponse_Idi($ClsFEXResponse_Idi)
    {
        $new = clone $this;
        $new->ClsFEXResponse_Idi = $ClsFEXResponse_Idi;

        return $new;
    }


}

