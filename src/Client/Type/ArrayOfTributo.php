<?php

namespace App\Client\Type;

class ArrayOfTributo
{

    /**
     * @var \App\Client\Type\Tributo
     */
    private $Tributo = null;

    /**
     * @return \App\Client\Type\Tributo
     */
    public function getTributo()
    {
        return $this->Tributo;
    }

    /**
     * @param \App\Client\Type\Tributo $Tributo
     * @return ArrayOfTributo
     */
    public function withTributo($Tributo)
    {
        $new = clone $this;
        $new->Tributo = $Tributo;

        return $new;
    }


}

