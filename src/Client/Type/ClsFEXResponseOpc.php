<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponseOpc implements ResultInterface
{

    /**
     * @var int
     */
    private $Opc_Id = null;

    /**
     * @var string
     */
    private $Opc_Ds = null;

    /**
     * @var string
     */
    private $Opc_vig_desde = null;

    /**
     * @var string
     */
    private $Opc_vig_hasta = null;

    /**
     * @return int
     */
    public function getOpc_Id()
    {
        return $this->Opc_Id;
    }

    /**
     * @param int $Opc_Id
     * @return ClsFEXResponseOpc
     */
    public function withOpc_Id($Opc_Id)
    {
        $new = clone $this;
        $new->Opc_Id = $Opc_Id;

        return $new;
    }

    /**
     * @return string
     */
    public function getOpc_Ds()
    {
        return $this->Opc_Ds;
    }

    /**
     * @param string $Opc_Ds
     * @return ClsFEXResponseOpc
     */
    public function withOpc_Ds($Opc_Ds)
    {
        $new = clone $this;
        $new->Opc_Ds = $Opc_Ds;

        return $new;
    }

    /**
     * @return string
     */
    public function getOpc_vig_desde()
    {
        return $this->Opc_vig_desde;
    }

    /**
     * @param string $Opc_vig_desde
     * @return ClsFEXResponseOpc
     */
    public function withOpc_vig_desde($Opc_vig_desde)
    {
        $new = clone $this;
        $new->Opc_vig_desde = $Opc_vig_desde;

        return $new;
    }

    /**
     * @return string
     */
    public function getOpc_vig_hasta()
    {
        return $this->Opc_vig_hasta;
    }

    /**
     * @param string $Opc_vig_hasta
     * @return ClsFEXResponseOpc
     */
    public function withOpc_vig_hasta($Opc_vig_hasta)
    {
        $new = clone $this;
        $new->Opc_vig_hasta = $Opc_vig_hasta;

        return $new;
    }


}

