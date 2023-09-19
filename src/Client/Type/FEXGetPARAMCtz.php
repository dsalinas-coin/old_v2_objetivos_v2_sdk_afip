<?php

namespace App\Client\Type;

class FEXGetPARAMCtz
{

    /**
     * @var \App\Client\Type\ClsFEXAuthRequest
     */
    private $Auth = null;

    /**
     * @var string
     */
    private $Mon_id = null;

    /**
     * @return \App\Client\Type\ClsFEXAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\ClsFEXAuthRequest $Auth
     * @return FEXGetPARAMCtz
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
    public function getMon_id()
    {
        return $this->Mon_id;
    }

    /**
     * @param string $Mon_id
     * @return FEXGetPARAMCtz
     */
    public function withMon_id($Mon_id)
    {
        $new = clone $this;
        $new->Mon_id = $Mon_id;

        return $new;
    }


}

