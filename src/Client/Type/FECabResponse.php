<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECabResponse implements ResultInterface
{

    /**
     * @var int
     */
    protected $Cuit = null;

    /**
     * @var int
     */
    protected $PtoVta = null;

    /**
     * @var int
     */
    protected $CbteTipo = null;

    /**
     * @var string
     */
    protected $FchProceso = null;

    /**
     * @var int
     */
    protected $CantReg = null;

    /**
     * @var string
     */
    protected $Resultado = null;

    /**
     * @var string
     */
    protected $Reproceso = null;

    /**
     * @return int
     */
    public function getCuit()
    {
        return $this->Cuit;
    }

    /**
     * @param int $Cuit
     * @return FECabResponse
     */
    public function withCuit($Cuit)
    {
        $new = clone $this;
        $new->Cuit = $Cuit;

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
     * @return FECabResponse
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
     * @return FECabResponse
     */
    public function withCbteTipo($CbteTipo)
    {
        $new = clone $this;
        $new->CbteTipo = $CbteTipo;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchProceso()
    {
        return $this->FchProceso;
    }

    /**
     * @param string $FchProceso
     * @return FECabResponse
     */
    public function withFchProceso($FchProceso)
    {
        $new = clone $this;
        $new->FchProceso = $FchProceso;

        return $new;
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
     * @return FECabResponse
     */
    public function withCantReg($CantReg)
    {
        $new = clone $this;
        $new->CantReg = $CantReg;

        return $new;
    }

    /**
     * @return string
     */
    public function getResultado()
    {
        return $this->Resultado;
    }

    /**
     * @param string $Resultado
     * @return FECabResponse
     */
    public function withResultado($Resultado)
    {
        $new = clone $this;
        $new->Resultado = $Resultado;

        return $new;
    }

    /**
     * @return string
     */
    public function getReproceso()
    {
        return $this->Reproceso;
    }

    /**
     * @param string $Reproceso
     * @return FECabResponse
     */
    public function withReproceso($Reproceso)
    {
        $new = clone $this;
        $new->Reproceso = $Reproceso;

        return $new;
    }


}

