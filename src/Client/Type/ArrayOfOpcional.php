<?php

namespace App\Client\Type;

class ArrayOfOpcional
{

    /**
     * @var \App\Client\Type\Opcional
     */
    private $Opcional = null;

    /**
     * @return \App\Client\Type\Opcional
     */
    public function getOpcional()
    {
        return $this->Opcional;
    }

    /**
     * @param  $Opcional
     * @return ArrayOfOpcional
     */
    public function withOpcional($Opcional)
    {
        $new = clone $this;
        $new->Opcional = $Opcional;

        return $new;
    }


}

