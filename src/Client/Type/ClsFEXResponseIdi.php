<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponseIdi implements ResultInterface
{

    /**
     * @var int
     */
    private $Idi_Id = null;

    /**
     * @var string
     */
    private $Idi_Ds = null;

    /**
     * @var string
     */
    private $Idi_vig_desde = null;

    /**
     * @var string
     */
    private $Idi_vig_hasta = null;

    /**
     * @return int
     */
    public function getIdi_Id()
    {
        return $this->Idi_Id;
    }

    /**
     * @param int $Idi_Id
     * @return ClsFEXResponseIdi
     */
    public function withIdi_Id($Idi_Id)
    {
        $new = clone $this;
        $new->Idi_Id = $Idi_Id;

        return $new;
    }

    /**
     * @return string
     */
    public function getIdi_Ds()
    {
        return $this->Idi_Ds;
    }

    /**
     * @param string $Idi_Ds
     * @return ClsFEXResponseIdi
     */
    public function withIdi_Ds($Idi_Ds)
    {
        $new = clone $this;
        $new->Idi_Ds = $Idi_Ds;

        return $new;
    }

    /**
     * @return string
     */
    public function getIdi_vig_desde()
    {
        return $this->Idi_vig_desde;
    }

    /**
     * @param string $Idi_vig_desde
     * @return ClsFEXResponseIdi
     */
    public function withIdi_vig_desde($Idi_vig_desde)
    {
        $new = clone $this;
        $new->Idi_vig_desde = $Idi_vig_desde;

        return $new;
    }

    /**
     * @return string
     */
    public function getIdi_vig_hasta()
    {
        return $this->Idi_vig_hasta;
    }

    /**
     * @param string $Idi_vig_hasta
     * @return ClsFEXResponseIdi
     */
    public function withIdi_vig_hasta($Idi_vig_hasta)
    {
        $new = clone $this;
        $new->Idi_vig_hasta = $Idi_vig_hasta;

        return $new;
    }


}

