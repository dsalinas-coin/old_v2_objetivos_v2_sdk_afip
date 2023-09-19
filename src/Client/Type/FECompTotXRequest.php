<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FECompTotXRequest implements RequestInterface
{

    /**
     * @var \App\Client\Type\FEAuthRequest
     */
    private $Auth = null;

    /**
     * Constructor
     *
     * @var \App\Client\Type\FEAuthRequest $Auth
     */
    public function __construct($Auth)
    {
        $this->Auth = $Auth;
    }

    /**
     * @return \App\Client\Type\FEAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\FEAuthRequest $Auth
     * @return FECompTotXRequest
     */
    public function withAuth($Auth)
    {
        $new = clone $this;
        $new->Auth = $Auth;

        return $new;
    }


}

