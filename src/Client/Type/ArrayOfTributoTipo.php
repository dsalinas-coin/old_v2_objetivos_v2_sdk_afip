<?php

namespace App\Client\Type;

class ArrayOfTributoTipo
{

    /**
     * @var \App\Client\Type\TributoTipo
     */
    private $TributoTipo = null;

    /**
     * @return \App\Client\Type\TributoTipo
     */
    public function getTributoTipo()
    {
        return $this->TributoTipo;
    }

    /**
     * @param \App\Client\Type\TributoTipo $TributoTipo
     * @return ArrayOfTributoTipo
     */
    public function withTributoTipo($TributoTipo)
    {
        $new = clone $this;
        $new->TributoTipo = $TributoTipo;

        return $new;
    }


}

