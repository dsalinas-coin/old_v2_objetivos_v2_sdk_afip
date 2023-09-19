<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponseMonCONCotizacion implements ResultInterface
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
    private $Mon_ctz = null;

    /**
     * @var string
     */
    private $Fecha_ctz = null;

    /**
     * @return string
     */
    public function getMon_Id()
    {
        return $this->Mon_Id;
    }

    /**
     * @param string $Mon_Id
     * @return ClsFEXResponseMonCONCotizacion
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
     * @return ClsFEXResponseMonCONCotizacion
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
    public function getMon_ctz()
    {
        return $this->Mon_ctz;
    }

    /**
     * @param string $Mon_ctz
     * @return ClsFEXResponseMonCONCotizacion
     */
    public function withMon_ctz($Mon_ctz)
    {
        $new = clone $this;
        $new->Mon_ctz = $Mon_ctz;

        return $new;
    }

    /**
     * @return string
     */
    public function getFecha_ctz()
    {
        return $this->Fecha_ctz;
    }

    /**
     * @param string $Fecha_ctz
     * @return ClsFEXResponseMonCONCotizacion
     */
    public function withFecha_ctz($Fecha_ctz)
    {
        $new = clone $this;
        $new->Fecha_ctz = $Fecha_ctz;

        return $new;
    }


}

