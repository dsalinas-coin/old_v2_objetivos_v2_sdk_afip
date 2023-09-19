<?php

namespace App\Client\Type;

class FEParamGetTiposIva
{

    /**
     * @var \App\Client\Type\FEAuthRequest
     */
    private $Auth = null;

    /**
     * @return \App\Client\Type\FEAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\FEAuthRequest $Auth
     * @return FEParamGetTiposIva
     */
    public function withAuth($Auth)
    {
        $new = clone $this;
        $new->Auth = $Auth;

        return $new;
    }


}

