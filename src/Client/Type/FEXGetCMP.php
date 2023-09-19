<?php

namespace App\Client\Type;

class FEXGetCMP
{

    /**
     * @var \App\Client\Type\ClsFEXAuthRequest
     */
    private $Auth = null;

    /**
     * @var \App\Client\Type\ClsFEXGetCMP
     */
    private $Cmp = null;

    /**
     * @return \App\Client\Type\ClsFEXAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\ClsFEXAuthRequest $Auth
     * @return FEXGetCMP
     */
    public function withAuth($Auth)
    {
        $new = clone $this;
        $new->Auth = $Auth;

        return $new;
    }

    /**
     * @return \App\Client\Type\ClsFEXGetCMP
     */
    public function getCmp()
    {
        return $this->Cmp;
    }

    /**
     * @param \App\Client\Type\ClsFEXGetCMP $Cmp
     * @return FEXGetCMP
     */
    public function withCmp($Cmp)
    {
        $new = clone $this;
        $new->Cmp = $Cmp;

        return $new;
    }


}

