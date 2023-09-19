<?php

namespace App\Client\Type;

class ClsFEXGetCMPR
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
    private $Cbte_tipo = null;

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
     * @var string
     */
    private $Fecha_cbte_cae = null;

    /**
     * @var string
     */
    private $Fch_venc_Cae = null;

    /**
     * @var string
     */
    private $Cae = null;

    /**
     * @var string
     */
    private $Resultado = null;

    /**
     * @var string
     */
    private $Motivos_Obs = null;

    /**
     * @var \App\Client\Type\ArrayOfOpcional
     */
    private $Opcionales = null;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
    public function getCbte_tipo()
    {
        return $this->Cbte_tipo;
    }

    /**
     * @param int $Cbte_tipo
     * @return ClsFEXGetCMPR
     */
    public function withCbte_tipo($Cbte_tipo)
    {
        $new = clone $this;
        $new->Cbte_tipo = $Cbte_tipo;

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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
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
     * @return ClsFEXGetCMPR
     */
    public function withItems($Items)
    {
        $new = clone $this;
        $new->Items = $Items;

        return $new;
    }

    /**
     * @return string
     */
    public function getFecha_cbte_cae()
    {
        return $this->Fecha_cbte_cae;
    }

    /**
     * @param string $Fecha_cbte_cae
     * @return ClsFEXGetCMPR
     */
    public function withFecha_cbte_cae($Fecha_cbte_cae)
    {
        $new = clone $this;
        $new->Fecha_cbte_cae = $Fecha_cbte_cae;

        return $new;
    }

    /**
     * @return string
     */
    public function getFch_venc_Cae()
    {
        return $this->Fch_venc_Cae;
    }

    /**
     * @param string $Fch_venc_Cae
     * @return ClsFEXGetCMPR
     */
    public function withFch_venc_Cae($Fch_venc_Cae)
    {
        $new = clone $this;
        $new->Fch_venc_Cae = $Fch_venc_Cae;

        return $new;
    }

    /**
     * @return string
     */
    public function getCae()
    {
        return $this->Cae;
    }

    /**
     * @param string $Cae
     * @return ClsFEXGetCMPR
     */
    public function withCae($Cae)
    {
        $new = clone $this;
        $new->Cae = $Cae;

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
     * @return ClsFEXGetCMPR
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
    public function getMotivos_Obs()
    {
        return $this->Motivos_Obs;
    }

    /**
     * @param string $Motivos_Obs
     * @return ClsFEXGetCMPR
     */
    public function withMotivos_Obs($Motivos_Obs)
    {
        $new = clone $this;
        $new->Motivos_Obs = $Motivos_Obs;

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
     * @return ClsFEXGetCMPR
     */
    public function withOpcionales($Opcionales)
    {
        $new = clone $this;
        $new->Opcionales = $Opcionales;

        return $new;
    }


}

