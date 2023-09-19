<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXLastCMPResponse implements ResultInterface
{

    /**
     * @var int
     */
    private $Cbte_nro = null;

    /**
     * @var string
     */
    private $Cbte_fecha = null;

    /**
     * @return int
     */
    public function getCbte_nro()
    {
        return $this->Cbte_nro;
    }

    /**
     * @param int $Cbte_nro
     * @return ClsFEXLastCMPResponse
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
    public function getCbte_fecha()
    {
        return $this->Cbte_fecha;
    }

    /**
     * @param string $Cbte_fecha
     * @return ClsFEXLastCMPResponse
     */
    public function withCbte_fecha($Cbte_fecha)
    {
        $new = clone $this;
        $new->Cbte_fecha = $Cbte_fecha;

        return $new;
    }


}

