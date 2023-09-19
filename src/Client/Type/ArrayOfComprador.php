<?php

namespace App\Client\Type;

class ArrayOfComprador
{

    /**
     * @var \App\Client\Type\Comprador
     */
    private $Comprador = null;

    /**
     * @return \App\Client\Type\Comprador
     */
    public function getComprador()
    {
        return $this->Comprador;
    }

    /**
     * @param \App\Client\Type\Comprador $Comprador
     * @return ArrayOfComprador
     */
    public function withComprador($Comprador)
    {
        $new = clone $this;
        $new->Comprador = $Comprador;

        return $new;
    }


}

