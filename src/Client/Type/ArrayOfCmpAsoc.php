<?php

namespace App\Client\Type;

class ArrayOfCmpAsoc
{

    /**
     * @var \App\Client\Type\CmpAsoc
     */
    private $Cmp_asoc = null;

    /**
     * @return \App\Client\Type\CmpAsoc
     */
    public function getCmp_asoc()
    {
        return $this->Cmp_asoc;
    }

    /**
     * @param \App\Client\Type\CmpAsoc $Cmp_asoc
     * @return ArrayOfCmpAsoc
     */
    public function withCmp_asoc($Cmp_asoc)
    {
        $new = clone $this;
        $new->Cmp_asoc = $Cmp_asoc;

        return $new;
    }


}

