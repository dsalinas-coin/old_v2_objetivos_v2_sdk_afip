<?php

namespace App\Client\Type;

class ArrayOfFECAEASinMov
{

    /**
     * @var \App\Client\Type\FECAEASinMov
     */
    private $FECAEASinMov = null;

    /**
     * @return \App\Client\Type\FECAEASinMov
     */
    public function getFECAEASinMov()
    {
        return $this->FECAEASinMov;
    }

    /**
     * @param \App\Client\Type\FECAEASinMov $FECAEASinMov
     * @return ArrayOfFECAEASinMov
     */
    public function withFECAEASinMov($FECAEASinMov)
    {
        $new = clone $this;
        $new->FECAEASinMov = $FECAEASinMov;

        return $new;
    }


}

