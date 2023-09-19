<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ArrayOfFECAEDetRequest implements RequestInterface
{

    /**
     * @var \App\Client\Type\FECAEDetRequest
     */
    private $FECAEDetRequest = null;

    /**
     * Constructor
     *
     * @var \App\Client\Type\FECAEDetRequest $FECAEDetRequest
     */
    public function __construct($FECAEDetRequest)
    {
        $this->FECAEDetRequest = $FECAEDetRequest;
    }

    /**
     * @return \App\Client\Type\FECAEDetRequest
     */
    public function getFECAEDetRequest()
    {
        return $this->FECAEDetRequest;
    }

    /**
     * @param \App\Client\Type\FECAEDetRequest $FECAEDetRequest
     * @return ArrayOfFECAEDetRequest
     */
    public function withFECAEDetRequest($FECAEDetRequest)
    {
        $new = clone $this;
        $new->FECAEDetRequest = $FECAEDetRequest;

        return $new;
    }


}

