<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponseCtz implements ResultInterface
{

    /**
     * @var float
     */
    private $Mon_ctz = null;

    /**
     * @var string
     */
    private $Mon_fecha = null;

    /**
     * @return float
     */
    public function getMon_ctz()
    {
        return $this->Mon_ctz;
    }

    /**
     * @param float $Mon_ctz
     * @return ClsFEXResponseCtz
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
    public function getMon_fecha()
    {
        return $this->Mon_fecha;
    }

    /**
     * @param string $Mon_fecha
     * @return ClsFEXResponseCtz
     */
    public function withMon_fecha($Mon_fecha)
    {
        $new = clone $this;
        $new->Mon_fecha = $Mon_fecha;

        return $new;
    }


}

