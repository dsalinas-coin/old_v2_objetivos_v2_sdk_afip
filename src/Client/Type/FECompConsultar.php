<?php

namespace App\Client\Type;

class FECompConsultar
{

    /**
     * @var \App\Client\Type\FEAuthRequest
     */
    private $Auth = null;

    /**
     * @var \App\Client\Type\FECompConsultaReq
     */
    private $FeCompConsReq = null;

    /**
     * @return \App\Client\Type\FEAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\FEAuthRequest $Auth
     * @return FECompConsultar
     */
    public function withAuth($Auth)
    {
        $new = clone $this;
        $new->Auth = $Auth;

        return $new;
    }

    /**
     * @return \App\Client\Type\FECompConsultaReq
     */
    public function getFeCompConsReq()
    {
        return $this->FeCompConsReq;
    }

    /**
     * @param \App\Client\Type\FECompConsultaReq $FeCompConsReq
     * @return FECompConsultar
     */
    public function withFeCompConsReq($FeCompConsReq)
    {
        $new = clone $this;
        $new->FeCompConsReq = $FeCompConsReq;

        return $new;
    }


}

