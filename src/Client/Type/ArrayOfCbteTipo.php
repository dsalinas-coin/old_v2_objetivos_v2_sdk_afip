<?php

namespace App\Client\Type;

class ArrayOfCbteTipo
{

    /**
     * @var \App\Client\Type\CbteTipo
     */
    private $CbteTipo = null;

    /**
     * @return \App\Client\Type\CbteTipo
     */
    public function getCbteTipo()
    {
        return $this->CbteTipo;
    }

    /**
     * @param \App\Client\Type\CbteTipo $CbteTipo
     * @return ArrayOfCbteTipo
     */
    public function withCbteTipo($CbteTipo)
    {
        $new = clone $this;
        $new->CbteTipo = $CbteTipo;

        return $new;
    }


}

