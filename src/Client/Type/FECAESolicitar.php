<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FECAESolicitar implements RequestInterface
{

    /**
     * @var \App\Client\Type\FEAuthRequest
     */
    private $Auth = null;

    /**
     * @var \App\Client\Type\FECAERequest
     */
    private $FeCAEReq = null;

    /**
     * @return \App\Client\Type\FEAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\FEAuthRequest $Auth
     * @return FECAESolicitar
     */
    public function withAuth($Auth)
    {
        $new = clone $this;
        $new->Auth = $Auth;

        return $new;
    }

    /**
     * @return \App\Client\Type\FECAERequest
     */
    public function getFeCAEReq()
    {
        return $this->FeCAEReq;
    }

    /**
     * @param \App\Client\Type\FECAERequest $FeCAEReq
     * @return FECAESolicitar
     */
    public function withFeCAEReq($FeCAEReq)
    {
        $new = clone $this;
        $new->FeCAEReq = $FeCAEReq;

        return $new;
    }


}

