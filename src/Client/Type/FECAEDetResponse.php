<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FECAEDetResponse extends FEDetResponse
{

    /**
     * @var string
     */
    private $CAE = null;

    /**
     * @var string
     */
    private $CAEFchVto = null;

    /**
     * @return string
     */
    public function getCAE()
    {
        return $this->CAE;
    }

    /**
     * @param string $CAE
     * @return FECAEDetResponse
     */
    public function withCAE($CAE)
    {
        $new = clone $this;
        $new->CAE = $CAE;

        return $new;
    }

    /**
     * @return string
     */
    public function getCAEFchVto()
    {
        return $this->CAEFchVto;
    }

    /**
     * @param string $CAEFchVto
     * @return FECAEDetResponse
     */
    public function withCAEFchVto($CAEFchVto)
    {
        $new = clone $this;
        $new->CAEFchVto = $CAEFchVto;

        return $new;
    }


}

