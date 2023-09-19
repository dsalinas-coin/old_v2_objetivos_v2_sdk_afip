<?php

namespace App\Client\Type;

class ArrayOfPaisTipo
{

    /**
     * @var \App\Client\Type\PaisTipo
     */
    private $PaisTipo = null;

    /**
     * @return \App\Client\Type\PaisTipo
     */
    public function getPaisTipo()
    {
        return $this->PaisTipo;
    }

    /**
     * @param \App\Client\Type\PaisTipo $PaisTipo
     * @return ArrayOfPaisTipo
     */
    public function withPaisTipo($PaisTipo)
    {
        $new = clone $this;
        $new->PaisTipo = $PaisTipo;

        return $new;
    }


}

