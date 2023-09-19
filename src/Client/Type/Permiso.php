<?php

namespace App\Client\Type;

class Permiso
{

    /**
     * @var string
     */
    private $Id_permiso = null;

    /**
     * @var int
     */
    private $Dst_merc = null;

    /**
     * @return string
     */
    public function getId_permiso()
    {
        return $this->Id_permiso;
    }

    /**
     * @param string $Id_permiso
     * @return Permiso
     */
    public function withId_permiso($Id_permiso)
    {
        $new = clone $this;
        $new->Id_permiso = $Id_permiso;

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
     * @return Permiso
     */
    public function withDst_merc($Dst_merc)
    {
        $new = clone $this;
        $new->Dst_merc = $Dst_merc;

        return $new;
    }


}

