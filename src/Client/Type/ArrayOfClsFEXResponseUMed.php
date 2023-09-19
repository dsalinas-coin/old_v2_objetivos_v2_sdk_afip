<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfClsFEXResponseUMed implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXResponseUMed
     */
    private $ClsFEXResponse_UMed = null;

    /**
     * @return \App\Client\Type\ClsFEXResponseUMed
     */
    public function getClsFEXResponse_UMed()
    {
        return $this->ClsFEXResponse_UMed;
    }

    /**
     * @param \App\Client\Type\ClsFEXResponseUMed $ClsFEXResponse_UMed
     * @return ArrayOfClsFEXResponseUMed
     */
    public function withClsFEXResponse_UMed($ClsFEXResponse_UMed)
    {
        $new = clone $this;
        $new->ClsFEXResponse_UMed = $ClsFEXResponse_UMed;

        return $new;
    }


}

