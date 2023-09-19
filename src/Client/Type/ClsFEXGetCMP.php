<?php

namespace App\Client\Type;

class ClsFEXGetCMP
{

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
     * @return int
     */
    public function getCbte_tipo()
    {
        return $this->Cbte_tipo;
    }

    /**
     * @param int $Cbte_tipo
     * @return ClsFEXGetCMP
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
     * @return ClsFEXGetCMP
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
     * @return ClsFEXGetCMP
     */
    public function withCbte_nro($Cbte_nro)
    {
        $new = clone $this;
        $new->Cbte_nro = $Cbte_nro;

        return $new;
    }


}

