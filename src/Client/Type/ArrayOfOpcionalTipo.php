<?php

namespace App\Client\Type;

class ArrayOfOpcionalTipo
{

    /**
     * @var \App\Client\Type\OpcionalTipo
     */
    private $OpcionalTipo = null;

    /**
     * @return \App\Client\Type\OpcionalTipo
     */
    public function getOpcionalTipo()
    {
        return $this->OpcionalTipo;
    }

    /**
     * @param \App\Client\Type\OpcionalTipo $OpcionalTipo
     * @return ArrayOfOpcionalTipo
     */
    public function withOpcionalTipo($OpcionalTipo)
    {
        $new = clone $this;
        $new->OpcionalTipo = $OpcionalTipo;

        return $new;
    }


}

