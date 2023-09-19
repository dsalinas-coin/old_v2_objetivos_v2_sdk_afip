<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponseInc implements ResultInterface
{

    /**
     * @var string
     */
    private $Inc_Id = null;

    /**
     * @var string
     */
    private $Inc_Ds = null;

    /**
     * @var string
     */
    private $Inc_vig_desde = null;

    /**
     * @var string
     */
    private $Inc_vig_hasta = null;

    /**
     * @return string
     */
    public function getInc_Id()
    {
        return $this->Inc_Id;
    }

    /**
     * @param string $Inc_Id
     * @return ClsFEXResponseInc
     */
    public function withInc_Id($Inc_Id)
    {
        $new = clone $this;
        $new->Inc_Id = $Inc_Id;

        return $new;
    }

    /**
     * @return string
     */
    public function getInc_Ds()
    {
        return $this->Inc_Ds;
    }

    /**
     * @param string $Inc_Ds
     * @return ClsFEXResponseInc
     */
    public function withInc_Ds($Inc_Ds)
    {
        $new = clone $this;
        $new->Inc_Ds = $Inc_Ds;

        return $new;
    }

    /**
     * @return string
     */
    public function getInc_vig_desde()
    {
        return $this->Inc_vig_desde;
    }

    /**
     * @param string $Inc_vig_desde
     * @return ClsFEXResponseInc
     */
    public function withInc_vig_desde($Inc_vig_desde)
    {
        $new = clone $this;
        $new->Inc_vig_desde = $Inc_vig_desde;

        return $new;
    }

    /**
     * @return string
     */
    public function getInc_vig_hasta()
    {
        return $this->Inc_vig_hasta;
    }

    /**
     * @param string $Inc_vig_hasta
     * @return ClsFEXResponseInc
     */
    public function withInc_vig_hasta($Inc_vig_hasta)
    {
        $new = clone $this;
        $new->Inc_vig_hasta = $Inc_vig_hasta;

        return $new;
    }


}

