<?php

namespace App\Client\Type;

class ArrayOfPtoVenta
{

    /**
     * @var \App\Client\Type\PtoVenta
     */
    private $PtoVenta = null;

    /**
     * @return \App\Client\Type\PtoVenta
     */
    public function getPtoVenta()
    {
        return $this->PtoVenta;
    }

    /**
     * @param \App\Client\Type\PtoVenta $PtoVenta
     * @return ArrayOfPtoVenta
     */
    public function withPtoVenta($PtoVenta)
    {
        $new = clone $this;
        $new->PtoVenta = $PtoVenta;

        return $new;
    }


}

