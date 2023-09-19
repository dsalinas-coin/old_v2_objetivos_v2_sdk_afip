<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponseUMed implements ResultInterface
{

    /**
     * @var int
     */
    private $Umed_Id = null;

    /**
     * @var string
     */
    private $Umed_Ds = null;

    /**
     * @var string
     */
    private $Umed_vig_desde = null;

    /**
     * @var string
     */
    private $Umed_vig_hasta = null;

    /**
     * @return int
     */
    public function getUmed_Id()
    {
        return $this->Umed_Id;
    }

    /**
     * @param int $Umed_Id
     * @return ClsFEXResponseUMed
     */
    public function withUmed_Id($Umed_Id)
    {
        $new = clone $this;
        $new->Umed_Id = $Umed_Id;

        return $new;
    }

    /**
     * @return string
     */
    public function getUmed_Ds()
    {
        return $this->Umed_Ds;
    }

    /**
     * @param string $Umed_Ds
     * @return ClsFEXResponseUMed
     */
    public function withUmed_Ds($Umed_Ds)
    {
        $new = clone $this;
        $new->Umed_Ds = $Umed_Ds;

        return $new;
    }

    /**
     * @return string
     */
    public function getUmed_vig_desde()
    {
        return $this->Umed_vig_desde;
    }

    /**
     * @param string $Umed_vig_desde
     * @return ClsFEXResponseUMed
     */
    public function withUmed_vig_desde($Umed_vig_desde)
    {
        $new = clone $this;
        $new->Umed_vig_desde = $Umed_vig_desde;

        return $new;
    }

    /**
     * @return string
     */
    public function getUmed_vig_hasta()
    {
        return $this->Umed_vig_hasta;
    }

    /**
     * @param string $Umed_vig_hasta
     * @return ClsFEXResponseUMed
     */
    public function withUmed_vig_hasta($Umed_vig_hasta)
    {
        $new = clone $this;
        $new->Umed_vig_hasta = $Umed_vig_hasta;

        return $new;
    }


}

