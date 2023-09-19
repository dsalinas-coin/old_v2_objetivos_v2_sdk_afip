<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfFECAEDetResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECAEDetResponse
     */
    private $FECAEDetResponse = null;

    /**
     * @return \App\Client\Type\FECAEDetResponse
     */
    public function getFECAEDetResponse()
    {
        return $this->FECAEDetResponse;
    }

    /**
     * @param \App\Client\Type\FECAEDetResponse $FECAEDetResponse
     * @return ArrayOfFECAEDetResponse
     */
    public function withFECAEDetResponse($FECAEDetResponse)
    {
        $new = clone $this;
        $new->FECAEDetResponse = $FECAEDetResponse;

        return $new;
    }


}

