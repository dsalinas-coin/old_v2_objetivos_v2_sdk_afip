<?php

namespace App\Client\Type;

class ArrayOfDocTipo
{

    /**
     * @var \App\Client\Type\DocTipo
     */
    private $DocTipo = null;

    /**
     * @return \App\Client\Type\DocTipo
     */
    public function getDocTipo()
    {
        return $this->DocTipo;
    }

    /**
     * @param \App\Client\Type\DocTipo $DocTipo
     * @return ArrayOfDocTipo
     */
    public function withDocTipo($DocTipo)
    {
        $new = clone $this;
        $new->DocTipo = $DocTipo;

        return $new;
    }


}

