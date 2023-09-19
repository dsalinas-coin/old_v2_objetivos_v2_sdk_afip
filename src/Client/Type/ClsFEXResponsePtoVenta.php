<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponsePtoVenta implements ResultInterface
{

    /**
     * @var int
     */
    private $Pve_Nro = null;

    /**
     * @var string
     */
    private $Pve_Bloqueado = null;

    /**
     * @var string
     */
    private $Pve_FchBaja = null;

    /**
     * @return int
     */
    public function getPve_Nro()
    {
        return $this->Pve_Nro;
    }

    /**
     * @param int $Pve_Nro
     * @return ClsFEXResponsePtoVenta
     */
    public function withPve_Nro($Pve_Nro)
    {
        $new = clone $this;
        $new->Pve_Nro = $Pve_Nro;

        return $new;
    }

    /**
     * @return string
     */
    public function getPve_Bloqueado()
    {
        return $this->Pve_Bloqueado;
    }

    /**
     * @param string $Pve_Bloqueado
     * @return ClsFEXResponsePtoVenta
     */
    public function withPve_Bloqueado($Pve_Bloqueado)
    {
        $new = clone $this;
        $new->Pve_Bloqueado = $Pve_Bloqueado;

        return $new;
    }

    /**
     * @return string
     */
    public function getPve_FchBaja()
    {
        return $this->Pve_FchBaja;
    }

    /**
     * @param string $Pve_FchBaja
     * @return ClsFEXResponsePtoVenta
     */
    public function withPve_FchBaja($Pve_FchBaja)
    {
        $new = clone $this;
        $new->Pve_FchBaja = $Pve_FchBaja;

        return $new;
    }


}

