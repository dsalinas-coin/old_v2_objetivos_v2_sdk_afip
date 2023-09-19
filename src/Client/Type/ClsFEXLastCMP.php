<?php

namespace App\Client\Type;

class ClsFEXLastCMP
{

    /**
     * @var string
     */
    private $Token = null;

    /**
     * @var string
     */
    private $Sign = null;

    /**
     * @var int
     */
    private $Cuit = null;

    /**
     * @var int
     */
    private $Pto_venta = null;

    /**
     * @var int
     */
    private $Cbte_Tipo = null;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return ClsFEXLastCMP
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return string
     */
    public function getSign()
    {
        return $this->Sign;
    }

    /**
     * @param string $Sign
     * @return ClsFEXLastCMP
     */
    public function withSign($Sign)
    {
        $new = clone $this;
        $new->Sign = $Sign;

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
     * @return ClsFEXLastCMP
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
    public function getPto_venta()
    {
        return $this->Pto_venta;
    }

    /**
     * @param int $Pto_venta
     * @return ClsFEXLastCMP
     */
    public function withPto_venta($Pto_venta)
    {
        $new = clone $this;
        $new->Pto_venta = $Pto_venta;

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
     * @return ClsFEXLastCMP
     */
    public function withCbte_Tipo($Cbte_Tipo)
    {
        $new = clone $this;
        $new->Cbte_Tipo = $Cbte_Tipo;

        return $new;
    }


}

