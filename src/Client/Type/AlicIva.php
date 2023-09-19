<?php

namespace App\Client\Type;

class AlicIva
{

    /**
     * @var int
     */
    private $Id = null;

    /**
     * @var float
     */
    private $BaseImp = null;

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
     * @return AlicIva
     */
    public function withId($Id)
    {
        $new = clone $this;
        $new->Id = $Id;

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
     * @return AlicIva
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
    public function getImporte()
    {
        return $this->Importe;
    }

    /**
     * @param float $Importe
     * @return AlicIva
     */
    public function withImporte($Importe)
    {
        $new = clone $this;
        $new->Importe = $Importe;

        return $new;
    }


}

