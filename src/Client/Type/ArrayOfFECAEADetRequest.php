<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ArrayOfFECAEADetRequest implements RequestInterface
{

    /**
     * @var \App\Client\Type\FECAEADetRequest
     */
    private $FECAEADetRequest = null;

    /**
     * Constructor
     *
     * @var \App\Client\Type\FECAEADetRequest $FECAEADetRequest
     */
    public function __construct($FECAEADetRequest)
    {
        $this->FECAEADetRequest = $FECAEADetRequest;
    }

    /**
     * @return \App\Client\Type\FECAEADetRequest
     */
    public function getFECAEADetRequest()
    {
        return $this->FECAEADetRequest;
    }

    /**
     * @param \App\Client\Type\FECAEADetRequest $FECAEADetRequest
     * @return ArrayOfFECAEADetRequest
     */
    public function withFECAEADetRequest($FECAEADetRequest)
    {
        $new = clone $this;
        $new->FECAEADetRequest = $FECAEADetRequest;

        return $new;
    }


}

