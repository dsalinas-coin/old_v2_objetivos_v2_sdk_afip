<?php

namespace App\Client\Type;


class FECabRequest 
{

    /**
     * @var int
     */
    protected $CantReg = null;

    /**
     * @var int
     */
    protected $PtoVta = null;

    /**
     * @var int
     */ 
    protected $CbteTipo = null;

    /**
     * Constructor
     *
     * @var int $CantReg
     * @var int $PtoVta
     * @var int $CbteTipo
     */
    public function __construct($CantReg, $PtoVta, $CbteTipo)
    {
        $this->CantReg = $CantReg;
        $this->PtoVta = $PtoVta;
        $this->CbteTipo = $CbteTipo;
    }

    /**
     * @return int
     */
    public function getCantReg()
    {
        return $this->CantReg;
    }

    /**
     * @param int $CantReg
     * @return FECabRequest
     */
    public function withCantReg($CantReg)
    {
        $new = clone $this;
        $new->CantReg = $CantReg;

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
     * @return FECabRequest
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
     * @return FECabRequest
     */
    public function withCbteTipo($CbteTipo)
    {
        $new = clone $this;
        $new->CbteTipo = $CbteTipo;

        return $new;
    }


}

