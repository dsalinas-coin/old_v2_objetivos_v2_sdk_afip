<?php

namespace App\Client\Type;

class FEXGetPARAMMONCONCOTIZACION
{

    /**
     * @var \App\Client\Type\ClsFEXAuthRequest
     */
    private $Auth = null;

    /**
     * @var string
     */
    private $Fecha_CTZ = null;

    /**
     * @return \App\Client\Type\ClsFEXAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\ClsFEXAuthRequest $Auth
     * @return FEXGetPARAMMONCONCOTIZACION
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
    public function getFecha_CTZ()
    {
        return $this->Fecha_CTZ;
    }

    /**
     * @param string $Fecha_CTZ
     * @return FEXGetPARAMMONCONCOTIZACION
     */
    public function withFecha_CTZ($Fecha_CTZ)
    {
        $new = clone $this;
        $new->Fecha_CTZ = $Fecha_CTZ;

        return $new;
    }


}

