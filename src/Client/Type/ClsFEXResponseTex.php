<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponseTex implements ResultInterface
{

    /**
     * @var int
     */
    private $Tex_Id = null;

    /**
     * @var string
     */
    private $Tex_Ds = null;

    /**
     * @var string
     */
    private $Tex_vig_desde = null;

    /**
     * @var string
     */
    private $Tex_vig_hasta = null;

    /**
     * @return int
     */
    public function getTex_Id()
    {
        return $this->Tex_Id;
    }

    /**
     * @param int $Tex_Id
     * @return ClsFEXResponseTex
     */
    public function withTex_Id($Tex_Id)
    {
        $new = clone $this;
        $new->Tex_Id = $Tex_Id;

        return $new;
    }

    /**
     * @return string
     */
    public function getTex_Ds()
    {
        return $this->Tex_Ds;
    }

    /**
     * @param string $Tex_Ds
     * @return ClsFEXResponseTex
     */
    public function withTex_Ds($Tex_Ds)
    {
        $new = clone $this;
        $new->Tex_Ds = $Tex_Ds;

        return $new;
    }

    /**
     * @return string
     */
    public function getTex_vig_desde()
    {
        return $this->Tex_vig_desde;
    }

    /**
     * @param string $Tex_vig_desde
     * @return ClsFEXResponseTex
     */
    public function withTex_vig_desde($Tex_vig_desde)
    {
        $new = clone $this;
        $new->Tex_vig_desde = $Tex_vig_desde;

        return $new;
    }

    /**
     * @return string
     */
    public function getTex_vig_hasta()
    {
        return $this->Tex_vig_hasta;
    }

    /**
     * @param string $Tex_vig_hasta
     * @return ClsFEXResponseTex
     */
    public function withTex_vig_hasta($Tex_vig_hasta)
    {
        $new = clone $this;
        $new->Tex_vig_hasta = $Tex_vig_hasta;

        return $new;
    }


}

