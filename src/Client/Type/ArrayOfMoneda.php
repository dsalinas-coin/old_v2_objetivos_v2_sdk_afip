<?php

namespace App\Client\Type;

class ArrayOfMoneda
{

    /**
     * @var \App\Client\Type\Moneda
     */
    private $Moneda = null;

    /**
     * @return \App\Client\Type\Moneda
     */
    public function getMoneda()
    {
        return $this->Moneda;
    }

    /**
     * @param \App\Client\Type\Moneda $Moneda
     * @return ArrayOfMoneda
     */
    public function withMoneda($Moneda)
    {
        $new = clone $this;
        $new->Moneda = $Moneda;

        return $new;
    }


}

