<?php

namespace App\Client\Type;

class FEXAuthorize
{

    /**
     * @var \App\Client\Type\ClsFEXAuthRequest
     */
    private $Auth = null;

    /**
     * @var \App\Client\Type\ClsFEXRequest
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
     * @return FEXAuthorize
     */
    public function withAuth($Auth)
    {
        $new = clone $this;
        $new->Auth = $Auth;

        return $new;
    }

    /**
     * @return \App\Client\Type\ClsFEXRequest
     */
    public function getCmp()
    {
        return $this->Cmp;
    }

    /**
     * @param \App\Client\Type\ClsFEXRequest $Cmp
     * @return FEXAuthorize
     */
    public function withCmp($Cmp)
    {
        $new = clone $this;
        $new->Cmp = $Cmp;

        return $new;
    }


}

