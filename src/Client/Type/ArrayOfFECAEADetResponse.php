<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfFECAEADetResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FECAEADetResponse
     */
    private $FECAEADetResponse = null;

    /**
     * @return \App\Client\Type\FECAEADetResponse
     */
    public function getFECAEADetResponse()
    {
        return $this->FECAEADetResponse;
    }

    /**
     * @param \App\Client\Type\FECAEADetResponse $FECAEADetResponse
     * @return ArrayOfFECAEADetResponse
     */
    public function withFECAEADetResponse($FECAEADetResponse)
    {
        $new = clone $this;
        $new->FECAEADetResponse = $FECAEADetResponse;

        return $new;
    }


}

