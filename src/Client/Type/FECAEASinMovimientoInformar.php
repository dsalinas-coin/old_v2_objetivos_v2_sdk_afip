<?php

namespace App\Client\Type;

class FECAEASinMovimientoInformar
{

    /**
     * @var \App\Client\Type\FEAuthRequest
     */
    private $Auth = null;

    /**
     * @var int
     */
    private $PtoVta = null;

    /**
     * @var string
     */
    private $CAEA = null;

    /**
     * @return \App\Client\Type\FEAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\FEAuthRequest $Auth
     * @return FECAEASinMovimientoInformar
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
    public function getPtoVta()
    {
        return $this->PtoVta;
    }

    /**
     * @param int $PtoVta
     * @return FECAEASinMovimientoInformar
     */
    public function withPtoVta($PtoVta)
    {
        $new = clone $this;
        $new->PtoVta = $PtoVta;

        return $new;
    }

    /**
     * @return string
     */
    public function getCAEA()
    {
        return $this->CAEA;
    }

    /**
     * @param string $CAEA
     * @return FECAEASinMovimientoInformar
     */
    public function withCAEA($CAEA)
    {
        $new = clone $this;
        $new->CAEA = $CAEA;

        return $new;
    }


}

