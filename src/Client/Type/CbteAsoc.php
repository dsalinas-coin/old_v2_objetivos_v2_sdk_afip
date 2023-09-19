<?php

namespace App\Client\Type;

class CbteAsoc
{

    /**
     * @var int
     */
    private $Tipo = null;

    /**
     * @var int
     */
    private $PtoVta = null;

    /**
     * @var int
     */
    private $Nro = null;

    /**
     * @var string
     */
    private $Cuit = null;

    /**
     * @var string
     */
    private $CbteFch = null;

    /**
     * @return int
     */
    public function getTipo()
    {
        return $this->Tipo;
    }

    /**
     * @param int $Tipo
     * @return CbteAsoc
     */
    public function withTipo($Tipo)
    {
        $new = clone $this;
        $new->Tipo = $Tipo;

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
     * @return CbteAsoc
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
    public function getNro()
    {
        return $this->Nro;
    }

    /**
     * @param int $Nro
     * @return CbteAsoc
     */
    public function withNro($Nro)
    {
        $new = clone $this;
        $new->Nro = $Nro;

        return $new;
    }

    /**
     * @return string
     */
    public function getCuit()
    {
        return $this->Cuit;
    }

    /**
     * @param string $Cuit
     * @return CbteAsoc
     */
    public function withCuit($Cuit)
    {
        $new = clone $this;
        $new->Cuit = $Cuit;

        return $new;
    }

    /**
     * @return string
     */
    public function getCbteFch()
    {
        return $this->CbteFch;
    }

    /**
     * @param string $CbteFch
     * @return CbteAsoc
     */
    public function withCbteFch($CbteFch)
    {
        $new = clone $this;
        $new->CbteFch = $CbteFch;

        return $new;
    }


}

