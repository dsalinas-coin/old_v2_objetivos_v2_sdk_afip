<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ClsFEXRequest implements RequestInterface
{

    /**
     * @var int
     */
    private $Id = null;

    /**
     * @var string
     */
    private $Fecha_cbte = null;

    /**
     * @var int
     */
    private $Cbte_Tipo = null;

    /**
     * @var int
     */
    private $Punto_vta = null;

    /**
     * @var int
     */
    private $Cbte_nro = null;

    /**
     * @var int
     */
    private $Tipo_expo = null;

    /**
     * @var string
     */
    private $Permiso_existente = null;

    /**
     * @var \App\Client\Type\ArrayOfPermiso
     */
    private $Permisos = null;

    /**
     * @var int
     */
    private $Dst_cmp = null;

    /**
     * @var string
     */
    private $Cliente = null;

    /**
     * @var int
     */
    private $Cuit_pais_cliente = null;

    /**
     * @var string
     */
    private $Domicilio_cliente = null;

    /**
     * @var string
     */
    private $Id_impositivo = null;

    /**
     * @var string
     */
    private $Moneda_Id = null;

    /**
     * @var float
     */
    private $Moneda_ctz = null;

    /**
     * @var string
     */
    private $Obs_comerciales = null;

    /**
     * @var float
     */
    private $Imp_total = null;

    /**
     * @var string
     */
    private $Obs = null;

    /**
     * @var \App\Client\Type\ArrayOfCmpAsoc
     */
    private $Cmps_asoc = null;

    /**
     * @var string
     */
    private $Forma_pago = null;

    /**
     * @var string
     */
    private $Incoterms = null;

    /**
     * @var string
     */
    private $Incoterms_Ds = null;

    /**
     * @var int
     */
    private $Idioma_cbte = null;

    /**
     * @var \App\Client\Type\ArrayOfItem
     */
    private $Items = null;

    /**
     * @var \App\Client\Type\ArrayOfOpcional
     */
    private $Opcionales = null;

    /**
     * Constructor
     *
     * @var int $Id
     * @var string $Fecha_cbte
     * @var int $Cbte_Tipo
     * @var int $Punto_vta
     * @var int $Cbte_nro
     * @var int $Tipo_expo
     * @var string $Permiso_existente
     * @var \App\Client\Type\ArrayOfPermiso $Permisos
     * @var int $Dst_cmp
     * @var string $Cliente
     * @var int $Cuit_pais_cliente
     * @var string $Domicilio_cliente
     * @var string $Id_impositivo
     * @var string $Moneda_Id
     * @var float $Moneda_ctz
     * @var string $Obs_comerciales
     * @var float $Imp_total
     * @var string $Obs
     * @var \App\Client\Type\ArrayOfCmpAsoc $Cmps_asoc
     * @var string $Forma_pago
     * @var string $Incoterms
     * @var string $Incoterms_Ds
     * @var int $Idioma_cbte
     * @var \App\Client\Type\ArrayOfItem $Items
     * @var \App\Client\Type\ArrayOfOpcional $Opcionales
     */
    public function __construct($Id, $Fecha_cbte, $Cbte_Tipo, $Punto_vta, $Cbte_nro, $Tipo_expo, $Permiso_existente, $Permisos, $Dst_cmp, $Cliente, $Cuit_pais_cliente, $Domicilio_cliente, $Id_impositivo, $Moneda_Id, $Moneda_ctz, $Obs_comerciales, $Imp_total, $Obs, $Cmps_asoc, $Forma_pago, $Incoterms, $Incoterms_Ds, $Idioma_cbte, $Items, $Opcionales)
    {
        $this->Id = $Id;
        $this->Fecha_cbte = $Fecha_cbte;
        $this->Cbte_Tipo = $Cbte_Tipo;
        $this->Punto_vta = $Punto_vta;
        $this->Cbte_nro = $Cbte_nro;
        $this->Tipo_expo = $Tipo_expo;
        $this->Permiso_existente = $Permiso_existente;
        $this->Permisos = $Permisos;
        $this->Dst_cmp = $Dst_cmp;
        $this->Cliente = $Cliente;
        $this->Cuit_pais_cliente = $Cuit_pais_cliente;
        $this->Domicilio_cliente = $Domicilio_cliente;
        $this->Id_impositivo = $Id_impositivo;
        $this->Moneda_Id = $Moneda_Id;
        $this->Moneda_ctz = $Moneda_ctz;
        $this->Obs_comerciales = $Obs_comerciales;
        $this->Imp_total = $Imp_total;
        $this->Obs = $Obs;
        $this->Cmps_asoc = $Cmps_asoc;
        $this->Forma_pago = $Forma_pago;
        $this->Incoterms = $Incoterms;
        $this->Incoterms_Ds = $Incoterms_Ds;
        $this->Idioma_cbte = $Idioma_cbte;
        $this->Items = $Items;
        $this->Opcionales = $Opcionales;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return ClsFEXRequest
     */
    public function withId($Id)
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }

    /**
     * @return string
     */
    public function getFecha_cbte()
    {
        return $this->Fecha_cbte;
    }

    /**
     * @param string $Fecha_cbte
     * @return ClsFEXRequest
     */
    public function withFecha_cbte($Fecha_cbte)
    {
        $new = clone $this;
        $new->Fecha_cbte = $Fecha_cbte;

        return $new;
    }

    /**
     * @return int
     */
    public function getCbte_Tipo()
    {
        return $this->Cbte_Tipo;
    }

    /**
     * @param int $Cbte_Tipo
     * @return ClsFEXRequest
     */
    public function withCbte_Tipo($Cbte_Tipo)
    {
        $new = clone $this;
        $new->Cbte_Tipo = $Cbte_Tipo;

        return $new;
    }

    /**
     * @return int
     */
    public function getPunto_vta()
    {
        return $this->Punto_vta;
    }

    /**
     * @param int $Punto_vta
     * @return ClsFEXRequest
     */
    public function withPunto_vta($Punto_vta)
    {
        $new = clone $this;
        $new->Punto_vta = $Punto_vta;

        return $new;
    }

    /**
     * @return int
     */
    public function getCbte_nro()
    {
        return $this->Cbte_nro;
    }

    /**
     * @param int $Cbte_nro
     * @return ClsFEXRequest
     */
    public function withCbte_nro($Cbte_nro)
    {
        $new = clone $this;
        $new->Cbte_nro = $Cbte_nro;

        return $new;
    }

    /**
     * @return int
     */
    public function getTipo_expo()
    {
        return $this->Tipo_expo;
    }

    /**
     * @param int $Tipo_expo
     * @return ClsFEXRequest
     */
    public function withTipo_expo($Tipo_expo)
    {
        $new = clone $this;
        $new->Tipo_expo = $Tipo_expo;

        return $new;
    }

    /**
     * @return string
     */
    public function getPermiso_existente()
    {
        return $this->Permiso_existente;
    }

    /**
     * @param string $Permiso_existente
     * @return ClsFEXRequest
     */
    public function withPermiso_existente($Permiso_existente)
    {
        $new = clone $this;
        $new->Permiso_existente = $Permiso_existente;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfPermiso
     */
    public function getPermisos()
    {
        return $this->Permisos;
    }

    /**
     * @param \App\Client\Type\ArrayOfPermiso $Permisos
     * @return ClsFEXRequest
     */
    public function withPermisos($Permisos)
    {
        $new = clone $this;
        $new->Permisos = $Permisos;

        return $new;
    }

    /**
     * @return int
     */
    public function getDst_cmp()
    {
        return $this->Dst_cmp;
    }

    /**
     * @param int $Dst_cmp
     * @return ClsFEXRequest
     */
    public function withDst_cmp($Dst_cmp)
    {
        $new = clone $this;
        $new->Dst_cmp = $Dst_cmp;

        return $new;
    }

    /**
     * @return string
     */
    public function getCliente()
    {
        return $this->Cliente;
    }

    /**
     * @param string $Cliente
     * @return ClsFEXRequest
     */
    public function withCliente($Cliente)
    {
        $new = clone $this;
        $new->Cliente = $Cliente;

        return $new;
    }

    /**
     * @return int
     */
    public function getCuit_pais_cliente()
    {
        return $this->Cuit_pais_cliente;
    }

    /**
     * @param int $Cuit_pais_cliente
     * @return ClsFEXRequest
     */
    public function withCuit_pais_cliente($Cuit_pais_cliente)
    {
        $new = clone $this;
        $new->Cuit_pais_cliente = $Cuit_pais_cliente;

        return $new;
    }

    /**
     * @return string
     */
    public function getDomicilio_cliente()
    {
        return $this->Domicilio_cliente;
    }

    /**
     * @param string $Domicilio_cliente
     * @return ClsFEXRequest
     */
    public function withDomicilio_cliente($Domicilio_cliente)
    {
        $new = clone $this;
        $new->Domicilio_cliente = $Domicilio_cliente;

        return $new;
    }

    /**
     * @return string
     */
    public function getId_impositivo()
    {
        return $this->Id_impositivo;
    }

    /**
     * @param string $Id_impositivo
     * @return ClsFEXRequest
     */
    public function withId_impositivo($Id_impositivo)
    {
        $new = clone $this;
        $new->Id_impositivo = $Id_impositivo;

        return $new;
    }

    /**
     * @return string
     */
    public function getMoneda_Id()
    {
        return $this->Moneda_Id;
    }

    /**
     * @param string $Moneda_Id
     * @return ClsFEXRequest
     */
    public function withMoneda_Id($Moneda_Id)
    {
        $new = clone $this;
        $new->Moneda_Id = $Moneda_Id;

        return $new;
    }

    /**
     * @return float
     */
    public function getMoneda_ctz()
    {
        return $this->Moneda_ctz;
    }

    /**
     * @param float $Moneda_ctz
     * @return ClsFEXRequest
     */
    public function withMoneda_ctz($Moneda_ctz)
    {
        $new = clone $this;
        $new->Moneda_ctz = $Moneda_ctz;

        return $new;
    }

    /**
     * @return string
     */
    public function getObs_comerciales()
    {
        return $this->Obs_comerciales;
    }

    /**
     * @param string $Obs_comerciales
     * @return ClsFEXRequest
     */
    public function withObs_comerciales($Obs_comerciales)
    {
        $new = clone $this;
        $new->Obs_comerciales = $Obs_comerciales;

        return $new;
    }

    /**
     * @return float
     */
    public function getImp_total()
    {
        return $this->Imp_total;
    }

    /**
     * @param float $Imp_total
     * @return ClsFEXRequest
     */
    public function withImp_total($Imp_total)
    {
        $new = clone $this;
        $new->Imp_total = $Imp_total;

        return $new;
    }

    /**
     * @return string
     */
    public function getObs()
    {
        return $this->Obs;
    }

    /**
     * @param string $Obs
     * @return ClsFEXRequest
     */
    public function withObs($Obs)
    {
        $new = clone $this;
        $new->Obs = $Obs;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfCmpAsoc
     */
    public function getCmps_asoc()
    {
        return $this->Cmps_asoc;
    }

    /**
     * @param \App\Client\Type\ArrayOfCmpAsoc $Cmps_asoc
     * @return ClsFEXRequest
     */
    public function withCmps_asoc($Cmps_asoc)
    {
        $new = clone $this;
        $new->Cmps_asoc = $Cmps_asoc;

        return $new;
    }

    /**
     * @return string
     */
    public function getForma_pago()
    {
        return $this->Forma_pago;
    }

    /**
     * @param string $Forma_pago
     * @return ClsFEXRequest
     */
    public function withForma_pago($Forma_pago)
    {
        $new = clone $this;
        $new->Forma_pago = $Forma_pago;

        return $new;
    }

    /**
     * @return string
     */
    public function getIncoterms()
    {
        return $this->Incoterms;
    }

    /**
     * @param string $Incoterms
     * @return ClsFEXRequest
     */
    public function withIncoterms($Incoterms)
    {
        $new = clone $this;
        $new->Incoterms = $Incoterms;

        return $new;
    }

    /**
     * @return string
     */
    public function getIncoterms_Ds()
    {
        return $this->Incoterms_Ds;
    }

    /**
     * @param string $Incoterms_Ds
     * @return ClsFEXRequest
     */
    public function withIncoterms_Ds($Incoterms_Ds)
    {
        $new = clone $this;
        $new->Incoterms_Ds = $Incoterms_Ds;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdioma_cbte()
    {
        return $this->Idioma_cbte;
    }

    /**
     * @param int $Idioma_cbte
     * @return ClsFEXRequest
     */
    public function withIdioma_cbte($Idioma_cbte)
    {
        $new = clone $this;
        $new->Idioma_cbte = $Idioma_cbte;

        return $new;
    }

    /**
     * @return \App\Client\Type\ArrayOfItem
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * @param \App\Client\Type\ArrayOfItem $Items
     * @return ClsFEXRequest
     */
    public function withItems($Items)
    {
        $new = clone $this;
        $new->Items = $Items;

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
     * @return ClsFEXRequest
     */
    public function withOpcionales($Opcionales)
    {
        $new = clone $this;
        $new->Opcionales = $Opcionales;

        return $new;
    }


}

