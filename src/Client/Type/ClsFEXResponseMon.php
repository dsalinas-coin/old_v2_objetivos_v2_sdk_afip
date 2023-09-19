<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponseMon implements ResultInterface
{

    /**
     * @var string
     */
    private $Mon_Id = null;

    /**
     * @var string
     */
    private $Mon_Ds = null;

    /**
     * @var string
     */
    private $Mon_vig_desde = null;

    /**
     * @var string
     */
    private $Mon_vig_hasta = null;

    /**
     * @return string
     */
    public function getMon_Id()
    {
        return $this->Mon_Id;
    }

    /**
     * @param string $Mon_Id
     * @return ClsFEXResponseMon
     */
    public function withMon_Id($Mon_Id)
    {
        $new = clone $this;
        $new->Mon_Id = $Mon_Id;

        return $new;
    }

    /**
     * @return string
     */
    public function getMon_Ds()
    {
        return $this->Mon_Ds;
    }

    /**
     * @param string $Mon_Ds
     * @return ClsFEXResponseMon
     */
    public function withMon_Ds($Mon_Ds)
    {
        $new = clone $this;
        $new->Mon_Ds = $Mon_Ds;

        return $new;
    }

    /**
     * @return string
     */
    public function getMon_vig_desde()
    {
        return $this->Mon_vig_desde;
    }

    /**
     * @param string $Mon_vig_desde
     * @return ClsFEXResponseMon
     */
    public function withMon_vig_desde($Mon_vig_desde)
    {
        $new = clone $this;
        $new->Mon_vig_desde = $Mon_vig_desde;

        return $new;
    }

    /**
     * @return string
     */
    public function getMon_vig_hasta()
    {
        return $this->Mon_vig_hasta;
    }

    /**
     * @param string $Mon_vig_hasta
     * @return ClsFEXResponseMon
     */
    public function withMon_vig_hasta($Mon_vig_hasta)
    {
        $new = clone $this;
        $new->Mon_vig_hasta = $Mon_vig_hasta;

        return $new;
    }


}

