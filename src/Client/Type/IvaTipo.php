<?php

namespace App\Client\Type;

class IvaTipo
{

    /**
     * @var string
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
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return IvaTipo
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
     * @return IvaTipo
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
     * @return IvaTipo
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
     * @return IvaTipo
     */
    public function withFchHasta($FchHasta)
    {
        $new = clone $this;
        $new->FchHasta = $FchHasta;

        return $new;
    }


}

