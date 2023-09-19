<?php

namespace App\Client\Type;

class FECAEAGet
{

    /**
     * @var string
     */
    private $CAEA = null;

    /**
     * @var int
     */
    private $Periodo = null;

    /**
     * @var int
     */
    private $Orden = null;

    /**
     * @var string
     */
    private $FchVigDesde = null;

    /**
     * @var string
     */
    private $FchVigHasta = null;

    /**
     * @var string
     */
    private $FchTopeInf = null;

    /**
     * @var string
     */
    private $FchProceso = null;

    /**
     * @var \App\Client\Type\ArrayOfObs
     */
    private $Observaciones = null;

    /**
     * @return string
     */
    public function getCAEA()
    {
        return $this->CAEA;
    }

    /**
     * @param string $CAEA
     * @return FECAEAGet
     */
    public function withCAEA($CAEA)
    {
        $new = clone $this;
        $new->CAEA = $CAEA;

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
     * @return FECAEAGet
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
     * @return FECAEAGet
     */
    public function withOrden($Orden)
    {
        $new = clone $this;
        $new->Orden = $Orden;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchVigDesde()
    {
        return $this->FchVigDesde;
    }

    /**
     * @param string $FchVigDesde
     * @return FECAEAGet
     */
    public function withFchVigDesde($FchVigDesde)
    {
        $new = clone $this;
        $new->FchVigDesde = $FchVigDesde;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchVigHasta()
    {
        return $this->FchVigHasta;
    }

    /**
     * @param string $FchVigHasta
     * @return FECAEAGet
     */
    public function withFchVigHasta($FchVigHasta)
    {
        $new = clone $this;
        $new->FchVigHasta = $FchVigHasta;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchTopeInf()
    {
        return $this->FchTopeInf;
    }

    /**
     * @param string $FchTopeInf
     * @return FECAEAGet
     */
    public function withFchTopeInf($FchTopeInf)
    {
        $new = clone $this;
        $new->FchTopeInf = $FchTopeInf;

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
     * @return FECAEAGet
     */
    public function withFchProceso($FchProceso)
    {
        $new = clone $this;
        $new->FchProceso = $FchProceso;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfObs
     */
    public function getObservaciones()
    {
        return $this->Observaciones;
    }

    /**
     * @param \App\Client\Type\ArrayOfObs $Observaciones
     * @return FECAEAGet
     */
    public function withObservaciones($Observaciones)
    {
        $new = clone $this;
        $new->Observaciones = $Observaciones;

        return $new;
    }


}

