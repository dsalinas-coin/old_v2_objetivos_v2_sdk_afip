<?php

namespace App\Client\Type;

class ArrayOfEvt
{

    /**
     * @var \App\Client\Type\Evt
     */
    private $Evt = null;

    /**
     * @return \App\Client\Type\Evt
     */
    public function getEvt()
    {
        return $this->Evt;
    }

    /**
     * @param \App\Client\Type\Evt $Evt
     * @return ArrayOfEvt
     */
    public function withEvt($Evt)
    {
        $new = clone $this;
        $new->Evt = $Evt;

        return $new;
    }


}

