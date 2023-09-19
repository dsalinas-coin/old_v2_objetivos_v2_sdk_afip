<?php

namespace App\Client\Type;

class PtoVenta
{

    /**
     * @var int
     */
    private $Nro = null;

    /**
     * @var string
     */
    private $EmisionTipo = null;

    /**
     * @var string
     */
    private $Bloqueado = null;

    /**
     * @var string
     */
    private $FchBaja = null;

    /**
     * @return int
     */
    public function getNro()
    {
        return $this->Nro;
    }

    /**
     * @param int $Nro
     * @return PtoVenta
     */
    public function withNro($Nro)
    {
        $new = clone $this;
        $new->Nro = $Nro;

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
     * @return PtoVenta
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
    public function getBloqueado()
    {
        return $this->Bloqueado;
    }

    /**
     * @param string $Bloqueado
     * @return PtoVenta
     */
    public function withBloqueado($Bloqueado)
    {
        $new = clone $this;
        $new->Bloqueado = $Bloqueado;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchBaja()
    {
        return $this->FchBaja;
    }

    /**
     * @param string $FchBaja
     * @return PtoVenta
     */
    public function withFchBaja($FchBaja)
    {
        $new = clone $this;
        $new->FchBaja = $FchBaja;

        return $new;
    }


}

