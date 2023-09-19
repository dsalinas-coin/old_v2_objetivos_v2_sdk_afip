<?php

namespace App\Client\Type;

class FECAEARegInformativo
{

    /**
     * @var \App\Client\Type\FEAuthRequest
     */
    private $Auth = null;

    /**
     * @var \App\Client\Type\FECAEARequest
     */
    private $FeCAEARegInfReq = null;

    /**
     * @return \App\Client\Type\FEAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\FEAuthRequest $Auth
     * @return FECAEARegInformativo
     */
    public function withAuth($Auth)
    {
        $new = clone $this;
        $new->Auth = $Auth;

        return $new;
    }

    /**
     * @return \App\Client\Type\FECAEARequest
     */
    public function getFeCAEARegInfReq()
    {
        return $this->FeCAEARegInfReq;
    }

    /**
     * @param \App\Client\Type\FECAEARequest $FeCAEARegInfReq
     * @return FECAEARegInformativo
     */
    public function withFeCAEARegInfReq($FeCAEARegInfReq)
    {
        $new = clone $this;
        $new->FeCAEARegInfReq = $FeCAEARegInfReq;

        return $new;
    }


}

