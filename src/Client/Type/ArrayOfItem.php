<?php

namespace App\Client\Type;

class ArrayOfItem
{

    /**
     * @var \App\Client\Type\Item
     */
    private $Item = null;

    /**
     * @return \App\Client\Type\Item
     */
    public function getItem()
    {
        return $this->Item;
    }

    /**
     * @param \App\Client\Type\Item $Item
     * @return ArrayOfItem
     */
    public function withItem($Item)
    {
        $new = clone $this;
        $new->Item = $Item;

        return $new;
    }


}

