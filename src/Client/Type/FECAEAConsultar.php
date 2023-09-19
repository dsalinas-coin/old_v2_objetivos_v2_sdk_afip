<?php

namespace App\Client\Type;

class FECAEAConsultar
{

    /**
     * @var \App\Client\Type\FEAuthRequest
     */
    private $Auth = null;

    /**
     * @var int
     */
    private $Periodo = null;

    /**
     * @var int
     */
    private $Orden = null;

    /**
     * @return \App\Client\Type\FEAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\FEAuthRequest $Auth
     * @return FECAEAConsultar
     */
    public function withAuth($Auth)
    {
        $new = clone $this;
        $new->Auth = $Auth;

        return $new;
    }

    /**
     * @return int
     */
    public function getPeriodo()
    {
        return $this->Periodo;
    }

    /**
     * @param int $Periodo
     * @return FECAEAConsultar
     */
    public function withPeriodo($Periodo)
    {
        $new = clone $this;
        $new->Periodo = $Periodo;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrden()
    {
        return $this->Orden;
    }

    /**
     * @param int $Orden
     * @return FECAEAConsultar
     */
    public function withOrden($Orden)
    {
        $new = clone $this;
        $new->Orden = $Orden;

        return $new;
    }


}

