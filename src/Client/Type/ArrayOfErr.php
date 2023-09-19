<?php

namespace App\Client\Type;

class ArrayOfErr
{

    /**
     * @var \App\Client\Type\Err
     */
    private $Err = null;

    /**
     * @return \App\Client\Type\Err
     */
    public function getErr()
    {
        return $this->Err;
    }

    /**
     * @param \App\Client\Type\Err $Err
     * @return ArrayOfErr
     */
    public function withErr($Err)
    {
        $new = clone $this;
        $new->Err = $Err;

        return $new;
    }


}

