<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEDetResponse implements ResultInterface
{

    /**
     * @var int
     */
    protected $Concepto = null;

    /**
     * @var int
     */
    protected $DocTipo = null;

    /**
     * @var int
     */
    protected $DocNro = null;

    /**
     * @var int
     */
    protected $CbteDesde = null;

    /**
     * @var int
     */
    protected $CbteHasta = null;

    /**
     * @var string
     */
    protected $CbteFch = null;

    /**
     * @var string
     */
    protected $Resultado = null;

    /**
     * @var \App\Client\Type\ArrayOfObs
     */
    private $Observaciones = null;

    /**
     * @return int
     */
    public function getConcepto()
    {
        return $this->Concepto;
    }

    /**
     * @param int $Concepto
     * @return FEDetResponse
     */
    public function withConcepto($Concepto)
    {
        $new = clone $this;
        $new->Concepto = $Concepto;

        return $new;
    }

    /**
     * @return int
     */
    public function getDocTipo()
    {
        return $this->DocTipo;
    }

    /**
     * @param int $DocTipo
     * @return FEDetResponse
     */
    public function withDocTipo($DocTipo)
    {
        $new = clone $this;
        $new->DocTipo = $DocTipo;

        return $new;
    }

    /**
     * @return int
     */
    public function getDocNro()
    {
        return $this->DocNro;
    }

    /**
     * @param int $DocNro
     * @return FEDetResponse
     */
    public function withDocNro($DocNro)
    {
        $new = clone $this;
        $new->DocNro = $DocNro;

        return $new;
    }

    /**
     * @return int
     */
    public function getCbteDesde()
    {
        return $this->CbteDesde;
    }

    /**
     * @param int $CbteDesde
     * @return FEDetResponse
     */
    public function withCbteDesde($CbteDesde)
    {
        $new = clone $this;
        $new->CbteDesde = $CbteDesde;

        return $new;
    }

    /**
     * @return int
     */
    public function getCbteHasta()
    {
        return $this->CbteHasta;
    }

    /**
     * @param int $CbteHasta
     * @return FEDetResponse
     */
    public function withCbteHasta($CbteHasta)
    {
        $new = clone $this;
        $new->CbteHasta = $CbteHasta;

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
     * @return FEDetResponse
     */
    public function withCbteFch($CbteFch)
    {
        $new = clone $this;
        $new->CbteFch = $CbteFch;

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
     * @return FEDetResponse
     */
    public function withResultado($Resultado)
    {
        $new = clone $this;
        $new->Resultado = $Resultado;

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
     * @return FEDetResponse
     */
    public function withObservaciones($Observaciones)
    {
        $new = clone $this;
        $new->Observaciones = $Observaciones;

        return $new;
    }


}

