<?php

namespace App\Client\Type;

class CmpAsoc
{

    /**
     * @var int
     */
    private $Cbte_tipo = null;

    /**
     * @var int
     */
    private $Cbte_punto_vta = null;

    /**
     * @var int
     */
    private $Cbte_nro = null;

    /**
     * @var int
     */
    private $Cbte_cuit = null;

    /**
     * @return int
     */
    public function getCbte_tipo()
    {
        return $this->Cbte_tipo;
    }

    /**
     * @param int $Cbte_tipo
     * @return CmpAsoc
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
    public function getCbte_punto_vta()
    {
        return $this->Cbte_punto_vta;
    }

    /**
     * @param int $Cbte_punto_vta
     * @return CmpAsoc
     */
    public function withCbte_punto_vta($Cbte_punto_vta)
    {
        $new = clone $this;
        $new->Cbte_punto_vta = $Cbte_punto_vta;

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
     * @return CmpAsoc
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
    public function getCbte_cuit()
    {
        return $this->Cbte_cuit;
    }

    /**
     * @param int $Cbte_cuit
     * @return CmpAsoc
     */
    public function withCbte_cuit($Cbte_cuit)
    {
        $new = clone $this;
        $new->Cbte_cuit = $Cbte_cuit;

        return $new;
    }


}

