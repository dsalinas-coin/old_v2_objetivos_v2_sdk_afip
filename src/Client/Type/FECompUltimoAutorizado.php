<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FECompUltimoAutorizado implements RequestInterface
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
     * @var int
     */
    private $CbteTipo = null;

    /**
     * @return \App\Client\Type\FEAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\FEAuthRequest $Auth
     * @return FECompUltimoAutorizado
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
     * @return FECompUltimoAutorizado
     */
    public function withPtoVta($PtoVta)
    {
        $new = clone $this;
        $new->PtoVta = $PtoVta;

        return $new;
    }

    /**
     * @return int
     */
    public function getCbteTipo()
    {
        return $this->CbteTipo;
    }

    /**
     * @param int $CbteTipo
     * @return FECompUltimoAutorizado
     */
    public function withCbteTipo($CbteTipo)
    {
        $new = clone $this;
        $new->CbteTipo = $CbteTipo;

        return $new;
    }


}

