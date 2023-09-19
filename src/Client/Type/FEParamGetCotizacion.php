<?php

namespace App\Client\Type;

class FEParamGetCotizacion
{

    /**
     * @var \App\Client\Type\FEAuthRequest
     */
    private $Auth = null;

    /**
     * @var string
     */
    private $MonId = null;

    /**
     * @return \App\Client\Type\FEAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\FEAuthRequest $Auth
     * @return FEParamGetCotizacion
     */
    public function withAuth($Auth)
    {
        $new = clone $this;
        $new->Auth = $Auth;

        return $new;
    }

    /**
     * @return string
     */
    public function getMonId()
    {
        return $this->MonId;
    }

    /**
     * @param string $MonId
     * @return FEParamGetCotizacion
     */
    public function withMonId($MonId)
    {
        $new = clone $this;
        $new->MonId = $MonId;

        return $new;
    }


}

