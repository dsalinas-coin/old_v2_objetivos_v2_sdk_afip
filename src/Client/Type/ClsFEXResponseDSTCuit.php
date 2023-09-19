<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponseDSTCuit implements ResultInterface
{

    /**
     * @var int
     */
    private $DST_CUIT = null;

    /**
     * @var string
     */
    private $DST_Ds = null;

    /**
     * @return int
     */
    public function getDST_CUIT()
    {
        return $this->DST_CUIT;
    }

    /**
     * @param int $DST_CUIT
     * @return ClsFEXResponseDSTCuit
     */
    public function withDST_CUIT($DST_CUIT)
    {
        $new = clone $this;
        $new->DST_CUIT = $DST_CUIT;

        return $new;
    }

    /**
     * @return string
     */
    public function getDST_Ds()
    {
        return $this->DST_Ds;
    }

    /**
     * @param string $DST_Ds
     * @return ClsFEXResponseDSTCuit
     */
    public function withDST_Ds($DST_Ds)
    {
        $new = clone $this;
        $new->DST_Ds = $DST_Ds;

        return $new;
    }


}

