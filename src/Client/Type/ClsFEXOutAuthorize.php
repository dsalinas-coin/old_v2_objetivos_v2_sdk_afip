<?php

namespace App\Client\Type;

class ClsFEXOutAuthorize
{

    /**
     * @var int
     */
    private $Id = null;

    /**
     * @var int
     */
    private $Cuit = null;

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
     * @var string
     */
    private $Cae = null;

    /**
     * @var string
     */
    private $Fch_venc_Cae = null;

    /**
     * @var string
     */
    private $Fch_cbte = null;

    /**
     * @var string
     */
    private $Resultado = null;

    /**
     * @var string
     */
    private $Reproceso = null;

    /**
     * @var string
     */
    private $Motivos_Obs = null;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return ClsFEXOutAuthorize
     */
    public function withId($Id)
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }

    /**
     * @return int
     */
    public function getCuit()
    {
        return $this->Cuit;
    }

    /**
     * @param int $Cuit
     * @return ClsFEXOutAuthorize
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
    public function getCbte_tipo()
    {
        return $this->Cbte_tipo;
    }

    /**
     * @param int $Cbte_tipo
     * @return ClsFEXOutAuthorize
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
     * @return ClsFEXOutAuthorize
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
     * @return ClsFEXOutAuthorize
     */
    public function withCbte_nro($Cbte_nro)
    {
        $new = clone $this;
        $new->Cbte_nro = $Cbte_nro;

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
     * @return ClsFEXOutAuthorize
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
    public function getFch_venc_Cae()
    {
        return $this->Fch_venc_Cae;
    }

    /**
     * @param string $Fch_venc_Cae
     * @return ClsFEXOutAuthorize
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
    public function getFch_cbte()
    {
        return $this->Fch_cbte;
    }

    /**
     * @param string $Fch_cbte
     * @return ClsFEXOutAuthorize
     */
    public function withFch_cbte($Fch_cbte)
    {
        $new = clone $this;
        $new->Fch_cbte = $Fch_cbte;

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
     * @return ClsFEXOutAuthorize
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
     * @return ClsFEXOutAuthorize
     */
    public function withReproceso($Reproceso)
    {
        $new = clone $this;
        $new->Reproceso = $Reproceso;

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
     * @return ClsFEXOutAuthorize
     */
    public function withMotivos_Obs($Motivos_Obs)
    {
        $new = clone $this;
        $new->Motivos_Obs = $Motivos_Obs;

        return $new;
    }


}

