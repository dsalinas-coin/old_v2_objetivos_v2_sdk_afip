<?php

namespace App\Client\Type;

class FEXGetLastCMP
{

    /**
     * @var \App\Client\Type\ClsFEXLastCMP
     */
    private $Auth = null;

    /**
     * @return \App\Client\Type\ClsFEXLastCMP
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\ClsFEXLastCMP $Auth
     * @return FEXGetLastCMP
     */
    public function withAuth($Auth)
    {
        $new = clone $this;
        $new->Auth = $Auth;

        return $new;
    }


}

