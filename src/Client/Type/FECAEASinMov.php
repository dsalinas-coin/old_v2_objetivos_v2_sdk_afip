<?php

namespace App\Client\Type;

class FECAEASinMov
{

    /**
     * @var string
     */
    private $CAEA = null;

    /**
     * @var string
     */
    private $FchProceso = null;

    /**
     * @var int
     */
    private $PtoVta = null;

    /**
     * @return string
     */
    public function getCAEA()
    {
        return $this->CAEA;
    }

    /**
     * @param string $CAEA
     * @return FECAEASinMov
     */
    public function withCAEA($CAEA)
    {
        $new = clone $this;
        $new->CAEA = $CAEA;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchProceso()
    {
        return $this->FchProceso;
    }

    /**
     * @param string $FchProceso
     * @return FECAEASinMov
     */
    public function withFchProceso($FchProceso)
    {
        $new = clone $this;
        $new->FchProceso = $FchProceso;

        return $new;
    }

    /**
     * @return int
     */
    public function getPtoVta()
    {
        return $this->PtoVta;
    }

    /**
     * @param int $PtoVta
     * @return FECAEASinMov
     */
    public function withPtoVta($PtoVta)
    {
        $new = clone $this;
        $new->PtoVta = $PtoVta;

        return $new;
    }


}

