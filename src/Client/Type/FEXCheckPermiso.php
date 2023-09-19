<?php

namespace App\Client\Type;

class FEXCheckPermiso
{

    /**
     * @var \App\Client\Type\ClsFEXAuthRequest
     */
    private $Auth = null;

    /**
     * @var string
     */
    private $ID_Permiso = null;

    /**
     * @var int
     */
    private $Dst_merc = null;

    /**
     * @return \App\Client\Type\ClsFEXAuthRequest
     */
    public function getAuth()
    {
        return $this->Auth;
    }

    /**
     * @param \App\Client\Type\ClsFEXAuthRequest $Auth
     * @return FEXCheckPermiso
     */
    public function withAuth($Auth)
    {
        $new = clone $this;
        $new->Auth = $Auth;

        return $new;
    }

    /**
     * @return string
     */
    public function getID_Permiso()
    {
        return $this->ID_Permiso;
    }

    /**
     * @param string $ID_Permiso
     * @return FEXCheckPermiso
     */
    public function withID_Permiso($ID_Permiso)
    {
        $new = clone $this;
        $new->ID_Permiso = $ID_Permiso;

        return $new;
    }

    /**
     * @return int
     */
    public function getDst_merc()
    {
        return $this->Dst_merc;
    }

    /**
     * @param int $Dst_merc
     * @return FEXCheckPermiso
     */
    public function withDst_merc($Dst_merc)
    {
        $new = clone $this;
        $new->Dst_merc = $Dst_merc;

        return $new;
    }


}

