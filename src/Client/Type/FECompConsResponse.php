<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECompConsResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $Resultado = null;

    /**
     * @var string
     */
    private $CodAutorizacion = null;

    /**
     * @var string
     */
    private $EmisionTipo = null;

    /**
     * @var string
     */
    private $FchVto = null;

    /**
     * @var string
     */
    private $FchProceso = null;

    /**
     * @var \App\Client\Type\ArrayOfObs
     */
    private $Observaciones = null;

    /**
     * @var int
     */
    private $PtoVta = null;

    /**
     * @var int
     */
    private $CbteTipo = null;

    /**
     * @return string
     */
    public function getResultado()
    {
        return $this->Resultado;
    }

    /**
     * @param string $Resultado
     * @return FECompConsResponse
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
    public function getCodAutorizacion()
    {
        return $this->CodAutorizacion;
    }

    /**
     * @param string $CodAutorizacion
     * @return FECompConsResponse
     */
    public function withCodAutorizacion($CodAutorizacion)
    {
        $new = clone $this;
        $new->CodAutorizacion = $CodAutorizacion;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmisionTipo()
    {
        return $this->EmisionTipo;
    }

    /**
     * @param string $EmisionTipo
     * @return FECompConsResponse
     */
    public function withEmisionTipo($EmisionTipo)
    {
        $new = clone $this;
        $new->EmisionTipo = $EmisionTipo;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchVto()
    {
        return $this->FchVto;
    }

    /**
     * @param string $FchVto
     * @return FECompConsResponse
     */
    public function withFchVto($FchVto)
    {
        $new = clone $this;
        $new->FchVto = $FchVto;

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
     * @return FECompConsResponse
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
     * @return FECompConsResponse
     */
    public function withObservaciones($Observaciones)
    {
        $new = clone $this;
        $new->Observaciones = $Observaciones;

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
     * @return FECompConsResponse
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
     * @return FECompConsResponse
     */
    public function withCbteTipo($CbteTipo)
    {
        $new = clone $this;
        $new->CbteTipo = $CbteTipo;

        return $new;
    }


}

