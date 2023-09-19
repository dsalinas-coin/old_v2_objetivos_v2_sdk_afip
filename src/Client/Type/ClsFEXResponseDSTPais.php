<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponseDSTPais implements ResultInterface
{

    /**
     * @var string
     */
    private $DST_Codigo = null;

    /**
     * @var string
     */
    private $DST_Ds = null;

    /**
     * @return string
     */
    public function getDST_Codigo()
    {
        return $this->DST_Codigo;
    }

    /**
     * @param string $DST_Codigo
     * @return ClsFEXResponseDSTPais
     */
    public function withDST_Codigo($DST_Codigo)
    {
        $new = clone $this;
        $new->DST_Codigo = $DST_Codigo;

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
     * @return ClsFEXResponseDSTPais
     */
    public function withDST_Ds($DST_Ds)
    {
        $new = clone $this;
        $new->DST_Ds = $DST_Ds;

        return $new;
    }


}

