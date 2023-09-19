<?php

namespace App\Client\Type;

class TributoTipo
{

    /**
     * @var int
     */
    private $Id = null;

    /**
     * @var string
     */
    private $Desc = null;

    /**
     * @var string
     */
    private $FchDesde = null;

    /**
     * @var string
     */
    private $FchHasta = null;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return TributoTipo
     */
    public function withId($Id)
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }

    /**
     * @return string
     */
    public function getDesc()
    {
        return $this->Desc;
    }

    /**
     * @param string $Desc
     * @return TributoTipo
     */
    public function withDesc($Desc)
    {
        $new = clone $this;
        $new->Desc = $Desc;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchDesde()
    {
        return $this->FchDesde;
    }

    /**
     * @param string $FchDesde
     * @return TributoTipo
     */
    public function withFchDesde($FchDesde)
    {
        $new = clone $this;
        $new->FchDesde = $FchDesde;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchHasta()
    {
        return $this->FchHasta;
    }

    /**
     * @param string $FchHasta
     * @return TributoTipo
     */
    public function withFchHasta($FchHasta)
    {
        $new = clone $this;
        $new->FchHasta = $FchHasta;

        return $new;
    }


}

