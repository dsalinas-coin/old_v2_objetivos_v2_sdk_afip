<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FEDetRequest implements RequestInterface
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
     * @var float
     */
    protected $ImpTotal = null;

    /**
     * @var float
     */
    protected $ImpTotConc = null;

    /**
     * @var float
     */
    protected $ImpNeto = null;

    /**
     * @var float
     */
    protected $ImpOpEx = null;

    /**
     * @var float
     */
    protected $ImpTrib = null;

    /**
     * @var float
     */
    protected $ImpIVA = null;

    /**
     * @var string
     */
    protected $FchServDesde = null;

    /**
     * @var string
     */
    protected $FchServHasta = null;

    /**
     * @var string
     */
    protected $FchVtoPago = null;

    /**
     * @var string
     */
    protected $MonId = null;

    /**
     * @var float
     */
    protected $MonCotiz = null;

    /**
     * @var \App\Client\Type\ArrayOfCbteAsoc
     */
    protected $CbtesAsoc = null;

    /**
     * @var \App\Client\Type\ArrayOfTributo
     */
    protected $Tributos = null;

    /**
     * @var \App\Client\Type\ArrayOfAlicIva
     */
    protected $Iva = null;

    /**
     * @var \App\Client\Type\ArrayOfOpcional
     */
    protected $Opcionales = null;

    /**
     * @var \App\Client\Type\ArrayOfComprador
     */
    protected $Compradores = null;

    /**
     * Constructor
     *
     * @var int $Concepto
     * @var int $DocTipo
     * @var int $DocNro
     * @var int $CbteDesde
     * @var int $CbteHasta
     * @var string $CbteFch
     * @var float $ImpTotal
     * @var float $ImpTotConc
     * @var float $ImpNeto
     * @var float $ImpOpEx
     * @var float $ImpTrib
     * @var float $ImpIVA
     * @var string $FchServDesde
     * @var string $FchServHasta
     * @var string $FchVtoPago
     * @var string $MonId
     * @var float $MonCotiz
     * @var \App\Client\Type\ArrayOfCbteAsoc $CbtesAsoc
     * @var \App\Client\Type\ArrayOfTributo $Tributos
     * @var \App\Client\Type\ArrayOfAlicIva $Iva
     * @var \App\Client\Type\ArrayOfOpcional $Opcionales
     * @var \App\Client\Type\ArrayOfComprador $Compradores
     */
    public function __construct($Concepto, $DocTipo, $DocNro, $CbteDesde, $CbteHasta, $CbteFch, $ImpTotal, $ImpTotConc, $ImpNeto, $ImpOpEx, $ImpTrib, $ImpIVA, $FchServDesde, $FchServHasta, $FchVtoPago, $MonId, $MonCotiz, $CbtesAsoc, $Tributos, $Iva, $Opcionales, $Compradores)
    {
        $this->Concepto = $Concepto;
        $this->DocTipo = $DocTipo;
        $this->DocNro = $DocNro;
        $this->CbteDesde = $CbteDesde;
        $this->CbteHasta = $CbteHasta;
        $this->CbteFch = $CbteFch;
        $this->ImpTotal = $ImpTotal;
        $this->ImpTotConc = $ImpTotConc;
        $this->ImpNeto = $ImpNeto;
        $this->ImpOpEx = $ImpOpEx;
        $this->ImpTrib = $ImpTrib;
        $this->ImpIVA = $ImpIVA;
        $this->FchServDesde = $FchServDesde;
        $this->FchServHasta = $FchServHasta;
        $this->FchVtoPago = $FchVtoPago;
        $this->MonId = $MonId;
        $this->MonCotiz = $MonCotiz;
        $this->CbtesAsoc = $CbtesAsoc;
        $this->Tributos = $Tributos;
        $this->Iva = $Iva;
        $this->Opcionales = $Opcionales;
        $this->Compradores = $Compradores;
    }

    /**
     * @return int
     */
    public function getConcepto()
    {
        return $this->Concepto;
    }

    /**
     * @param int $Concepto
     * @return FEDetRequest
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
     * @return FEDetRequest
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
     * @return FEDetRequest
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
     * @return FEDetRequest
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
     * @return FEDetRequest
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
     * @return FEDetRequest
     */
    public function withCbteFch($CbteFch)
    {
        $new = clone $this;
        $new->CbteFch = $CbteFch;

        return $new;
    }

    /**
     * @return float
     */
    public function getImpTotal()
    {
        return $this->ImpTotal;
    }

    /**
     * @param float $ImpTotal
     * @return FEDetRequest
     */
    public function withImpTotal($ImpTotal)
    {
        $new = clone $this;
        $new->ImpTotal = $ImpTotal;

        return $new;
    }

    /**
     * @return float
     */
    public function getImpTotConc()
    {
        return $this->ImpTotConc;
    }

    /**
     * @param float $ImpTotConc
     * @return FEDetRequest
     */
    public function withImpTotConc($ImpTotConc)
    {
        $new = clone $this;
        $new->ImpTotConc = $ImpTotConc;

        return $new;
    }

    /**
     * @return float
     */
    public function getImpNeto()
    {
        return $this->ImpNeto;
    }

    /**
     * @param float $ImpNeto
     * @return FEDetRequest
     */
    public function withImpNeto($ImpNeto)
    {
        $new = clone $this;
        $new->ImpNeto = $ImpNeto;

        return $new;
    }

    /**
     * @return float
     */
    public function getImpOpEx()
    {
        return $this->ImpOpEx;
    }

    /**
     * @param float $ImpOpEx
     * @return FEDetRequest
     */
    public function withImpOpEx($ImpOpEx)
    {
        $new = clone $this;
        $new->ImpOpEx = $ImpOpEx;

        return $new;
    }

    /**
     * @return float
     */
    public function getImpTrib()
    {
        return $this->ImpTrib;
    }

    /**
     * @param float $ImpTrib
     * @return FEDetRequest
     */
    public function withImpTrib($ImpTrib)
    {
        $new = clone $this;
        $new->ImpTrib = $ImpTrib;

        return $new;
    }

    /**
     * @return float
     */
    public function getImpIVA()
    {
        return $this->ImpIVA;
    }

    /**
     * @param float $ImpIVA
     * @return FEDetRequest
     */
    public function withImpIVA($ImpIVA)
    {
        $new = clone $this;
        $new->ImpIVA = $ImpIVA;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchServDesde()
    {
        return $this->FchServDesde;
    }

    /**
     * @param string $FchServDesde
     * @return FEDetRequest
     */
    public function withFchServDesde($FchServDesde)
    {
        $new = clone $this;
        $new->FchServDesde = $FchServDesde;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchServHasta()
    {
        return $this->FchServHasta;
    }

    /**
     * @param string $FchServHasta
     * @return FEDetRequest
     */
    public function withFchServHasta($FchServHasta)
    {
        $new = clone $this;
        $new->FchServHasta = $FchServHasta;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchVtoPago()
    {
        return $this->FchVtoPago;
    }

    /**
     * @param string $FchVtoPago
     * @return FEDetRequest
     */
    public function withFchVtoPago($FchVtoPago)
    {
        $new = clone $this;
        $new->FchVtoPago = $FchVtoPago;

        return $new;
    }

    /**
     * @return string
     */
    public function getMonId()
    {
        return $this->MonId;
    }

    /**
     * @param string $MonId
     * @return FEDetRequest
     */
    public function withMonId($MonId)
    {
        $new = clone $this;
        $new->MonId = $MonId;

        return $new;
    }

    /**
     * @return float
     */
    public function getMonCotiz()
    {
        return $this->MonCotiz;
    }

    /**
     * @param float $MonCotiz
     * @return FEDetRequest
     */
    public function withMonCotiz($MonCotiz)
    {
        $new = clone $this;
        $new->MonCotiz = $MonCotiz;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfCbteAsoc
     */
    public function getCbtesAsoc()
    {
        return $this->CbtesAsoc;
    }

    /**
     * @param \App\Client\Type\ArrayOfCbteAsoc $CbtesAsoc
     * @return FEDetRequest
     */
    public function withCbtesAsoc($CbtesAsoc)
    {
        $new = clone $this;
        $new->CbtesAsoc = $CbtesAsoc;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfTributo
     */
    public function getTributos()
    {
        return $this->Tributos;
    }

    /**
     * @param \App\Client\Type\ArrayOfTributo $Tributos
     * @return FEDetRequest
     */
    public function withTributos($Tributos)
    {
        $new = clone $this;
        $new->Tributos = $Tributos;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfAlicIva
     */
    public function getIva()
    {
        return $this->Iva;
    }

    /**
     * @param \App\Client\Type\ArrayOfAlicIva $Iva
     * @return FEDetRequest
     */
    public function withIva($Iva)
    {
        $new = clone $this;
        $new->Iva = $Iva;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfOpcional
     */
    public function getOpcionales()
    {
        return $this->Opcionales;
    }

    /**
     * @param \App\Client\Type\ArrayOfOpcional $Opcionales
     * @return FEDetRequest
     */
    public function withOpcionales($Opcionales)
    {
        $new = clone $this;
        $new->Opcionales = $Opcionales;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfComprador
     */
    public function getCompradores()
    {
        return $this->Compradores;
    }

    /**
     * @param \App\Client\Type\ArrayOfComprador $Compradores
     * @return FEDetRequest
     */
    public function withCompradores($Compradores)
    {
        $new = clone $this;
        $new->Compradores = $Compradores;

        return $new;
    }
    function setConcepto($Concepto) {
        $this->Concepto = $Concepto;
    }

    function setDocTipo($DocTipo) {
        $this->DocTipo = $DocTipo;
    }

    function setDocNro($DocNro) {
        $this->DocNro = $DocNro;
    }

    function setCbteDesde($CbteDesde) {
        $this->CbteDesde = $CbteDesde;
    }

    function setCbteHasta($CbteHasta) {
        $this->CbteHasta = $CbteHasta;
    }

    function setCbteFch($CbteFch) {
        $this->CbteFch = $CbteFch;
    }

    function setImpTotal($ImpTotal) {
        $this->ImpTotal = $ImpTotal;
    }

    function setImpTotConc($ImpTotConc) {
        $this->ImpTotConc = $ImpTotConc;
    }

    function setImpNeto($ImpNeto) {
        $this->ImpNeto = $ImpNeto;
    }

    function setImpOpEx($ImpOpEx) {
        $this->ImpOpEx = $ImpOpEx;
    }

    function setImpTrib($ImpTrib) {
        $this->ImpTrib = $ImpTrib;
    }

    function setImpIVA($ImpIVA) {
        $this->ImpIVA = $ImpIVA;
    }

    function setFchServDesde($FchServDesde) {
        $this->FchServDesde = $FchServDesde;
    }

    function setFchServHasta($FchServHasta) {
        $this->FchServHasta = $FchServHasta;
    }

    function setFchVtoPago($FchVtoPago) {
        $this->FchVtoPago = $FchVtoPago;
    }

    function setMonId($MonId) {
        $this->MonId = $MonId;
    }

    function setMonCotiz($MonCotiz) {
        $this->MonCotiz = $MonCotiz;
    }

    function setCbtesAsoc(\App\Client\Type\ArrayOfCbteAsoc $CbtesAsoc) {
        $this->CbtesAsoc = $CbtesAsoc;
    }

    function setTributos(\App\Client\Type\ArrayOfTributo $Tributos) {
        $this->Tributos = $Tributos;
    }

    function setIva(\App\Client\Type\ArrayOfAlicIva $Iva) {
        $this->Iva = $Iva;
    }

    function setOpcionales(\App\Client\Type\ArrayOfOpcional $Opcionales) {
        $this->Opcionales = $Opcionales;
    }

    function setCompradores(\App\Client\Type\ArrayOfComprador $Compradores) {
        $this->Compradores = $Compradores;
    }

 

}

