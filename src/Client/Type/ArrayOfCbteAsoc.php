<?php

namespace App\Client\Type;

class ArrayOfCbteAsoc
{

    /**
     * @var \App\Client\Type\CbteAsoc
     */
    private $CbteAsoc = null;

    /**
     * @return \App\Client\Type\CbteAsoc
     */
    public function getCbteAsoc()
    {
        return $this->CbteAsoc;
    }

    /**
     * @param \App\Client\Type\CbteAsoc $CbteAsoc
     * @return ArrayOfCbteAsoc
     */
    public function withCbteAsoc($CbteAsoc)
    {
        $new = clone $this;
        $new->CbteAsoc = $CbteAsoc;

        return $new;
    }


}

