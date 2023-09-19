<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponseCbteTipo implements ResultInterface
{

    /**
     * @var int
     */
    private $Cbte_Id = null;

    /**
     * @var string
     */
    private $Cbte_Ds = null;

    /**
     * @var string
     */
    private $Cbte_vig_desde = null;

    /**
     * @var string
     */
    private $Cbte_vig_hasta = null;

    /**
     * @return int
     */
    public function getCbte_Id()
    {
        return $this->Cbte_Id;
    }

    /**
     * @param int $Cbte_Id
     * @return ClsFEXResponseCbteTipo
     */
    public function withCbte_Id($Cbte_Id)
    {
        $new = clone $this;
        $new->Cbte_Id = $Cbte_Id;

        return $new;
    }

    /**
     * @return string
     */
    public function getCbte_Ds()
    {
        return $this->Cbte_Ds;
    }

    /**
     * @param string $Cbte_Ds
     * @return ClsFEXResponseCbteTipo
     */
    public function withCbte_Ds($Cbte_Ds)
    {
        $new = clone $this;
        $new->Cbte_Ds = $Cbte_Ds;

        return $new;
    }

    /**
     * @return string
     */
    public function getCbte_vig_desde()
    {
        return $this->Cbte_vig_desde;
    }

    /**
     * @param string $Cbte_vig_desde
     * @return ClsFEXResponseCbteTipo
     */
    public function withCbte_vig_desde($Cbte_vig_desde)
    {
        $new = clone $this;
        $new->Cbte_vig_desde = $Cbte_vig_desde;

        return $new;
    }

    /**
     * @return string
     */
    public function getCbte_vig_hasta()
    {
        return $this->Cbte_vig_hasta;
    }

    /**
     * @param string $Cbte_vig_hasta
     * @return ClsFEXResponseCbteTipo
     */
    public function withCbte_vig_hasta($Cbte_vig_hasta)
    {
        $new = clone $this;
        $new->Cbte_vig_hasta = $Cbte_vig_hasta;

        return $new;
    }


}

