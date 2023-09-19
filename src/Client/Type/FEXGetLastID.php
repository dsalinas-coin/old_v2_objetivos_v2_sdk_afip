<?php

namespace App\Client\Type;

class FEXGetLastID
{

    /**
     * @var \App\Client\Type\ClsFEXAuthRequest
     */
    private $Auth = null;

    /**
     * @return \App\Client\Type\ClsFEXAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\ClsFEXAuthRequest $Auth
     * @return FEXGetLastID
     */
    public function withAuth($Auth)
    {
        $new = clone $this;
        $new->Auth = $Auth;

        return $new;
    }


}

