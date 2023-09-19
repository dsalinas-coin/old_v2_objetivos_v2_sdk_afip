<?php

namespace App\Client\Type;

class ArrayOfAlicIva
{

    /**
     * @var \App\Client\Type\AlicIva
     */
    private $AlicIva = null;

    /**
     * @return \App\Client\Type\AlicIva
     */
    public function getAlicIva()
    {
        return $this->AlicIva;
    }

    /**
     * @param \App\Client\Type\AlicIva $AlicIva
     * @return ArrayOfAlicIva
     */
    public function withAlicIva($AlicIva)
    {
        $new = clone $this;
        $new->AlicIva = $AlicIva;

        return $new;
    }


}

