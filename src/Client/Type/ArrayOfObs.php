<?php

namespace App\Client\Type;

class ArrayOfObs
{

    /**
     * @var \App\Client\Type\Obs
     */
    private $Obs = null;

    /**
     * @return \App\Client\Type\Obs
     */
    public function getObs()
    {
        return $this->Obs;
    }

    /**
     * @param \App\Client\Type\Obs $Obs
     * @return ArrayOfObs
     */
    public function withObs($Obs)
    {
        $new = clone $this;
        $new->Obs = $Obs;

        return $new;
    }


}

