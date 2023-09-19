<?php

namespace App\Client\Type;


class FEAuthRequest
{

    /**
     * @var string
     */
    private $Token = null;

    /**
     * @var string
     */
    private $Sign = null;

    /**
     * @var int
     */
    private $Cuit = null;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $Sign
     * @var int $Cuit
     */
    public function __construct($Token, $Sign, $Cuit)
    {
        $this->Token = $Token;
        $this->Sign = $Sign;
        $this->Cuit = $Cuit;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return FEAuthRequest
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return string
     */
    public function getSign()
    {
        return $this->Sign;
    }

    /**
     * @param string $Sign
     * @return FEAuthRequest
     */
    public function withSign($Sign)
    {
        $new = clone $this;
        $new->Sign = $Sign;

        return $new;
    }

    /**
     * @return int
     */
    public function getCuit()
    {
        return $this->Cuit;
    }

    /**
     * @param int $Cuit
     * @return FEAuthRequest
     */
    public function withCuit($Cuit)
    {
        $new = clone $this;
        $new->Cuit = $Cuit;

        return $new;
    }


}

