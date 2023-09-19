<?php

namespace App\Client\Type;

class Tributo
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
     * @var float
     */
    private $BaseImp = null;

    /**
     * @var float
     */
    private $Alic = null;

    /**
     * @var float
     */
    private $Importe = null;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return Tributo
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
     * @return Tributo
     */
    public function withDesc($Desc)
    {
        $new = clone $this;
        $new->Desc = $Desc;

        return $new;
    }

    /**
     * @return float
     */
    public function getBaseImp()
    {
        return $this->BaseImp;
    }

    /**
     * @param float $BaseImp
     * @return Tributo
     */
    public function withBaseImp($BaseImp)
    {
        $new = clone $this;
        $new->BaseImp = $BaseImp;

        return $new;
    }

    /**
     * @return float
     */
    public function getAlic()
    {
        return $this->Alic;
    }

    /**
     * @param float $Alic
     * @return Tributo
     */
    public function withAlic($Alic)
    {
        $new = clone $this;
        $new->Alic = $Alic;

        return $new;
    }

    /**
     * @return float
     */
    public function getImporte()
    {
        return $this->Importe;
    }

    /**
     * @param float $Importe
     * @return Tributo
     */
    public function withImporte($Importe)
    {
        $new = clone $this;
        $new->Importe = $Importe;

        return $new;
    }


}

