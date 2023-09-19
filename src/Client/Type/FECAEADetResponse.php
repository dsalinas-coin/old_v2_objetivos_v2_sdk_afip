<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECAEADetResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $CAEA = null;

    /**
     * @return string
     */
    public function getCAEA()
    {
        return $this->CAEA;
    }

    /**
     * @param string $CAEA
     * @return FECAEADetResponse
     */
    public function withCAEA($CAEA)
    {
        $new = clone $this;
        $new->CAEA = $CAEA;

        return $new;
    }


}

