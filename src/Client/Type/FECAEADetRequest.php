<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FECAEADetRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $CAEA = null;

    /**
     * @var string
     */
    private $CbteFchHsGen = null;

    /**
     * Constructor
     *
     * @var string $CAEA
     * @var string $CbteFchHsGen
     */
    public function __construct($CAEA, $CbteFchHsGen)
    {
        $this->CAEA = $CAEA;
        $this->CbteFchHsGen = $CbteFchHsGen;
    }

    /**
     * @return string
     */
    public function getCAEA()
    {
        return $this->CAEA;
    }

    /**
     * @param string $CAEA
     * @return FECAEADetRequest
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
    public function getCbteFchHsGen()
    {
        return $this->CbteFchHsGen;
    }

    /**
     * @param string $CbteFchHsGen
     * @return FECAEADetRequest
     */
    public function withCbteFchHsGen($CbteFchHsGen)
    {
        $new = clone $this;
        $new->CbteFchHsGen = $CbteFchHsGen;

        return $new;
    }


}

