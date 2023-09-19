<?php

namespace App\Client\Type;

class ArrayOfPermiso
{

    /**
     * @var \App\Client\Type\Permiso
     */
    private $Permiso = null;

    /**
     * @return \App\Client\Type\Permiso
     */
    public function getPermiso()
    {
        return $this->Permiso;
    }

    /**
     * @param \App\Client\Type\Permiso $Permiso
     * @return ArrayOfPermiso
     */
    public function withPermiso($Permiso)
    {
        $new = clone $this;
        $new->Permiso = $Permiso;

        return $new;
    }


}

