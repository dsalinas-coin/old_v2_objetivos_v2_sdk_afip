<?php

namespace App\Client\Type;

class ArrayOfIvaTipo
{

    /**
     * @var \App\Client\Type\IvaTipo
     */
    private $IvaTipo = null;

    /**
     * @return \App\Client\Type\IvaTipo
     */
    public function getIvaTipo()
    {
        return $this->IvaTipo;
    }

    /**
     * @param \App\Client\Type\IvaTipo $IvaTipo
     * @return ArrayOfIvaTipo
     */
    public function withIvaTipo($IvaTipo)
    {
        $new = clone $this;
        $new->IvaTipo = $IvaTipo;

        return $new;
    }


}

