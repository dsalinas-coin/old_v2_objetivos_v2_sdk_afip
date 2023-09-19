<?php

namespace App\Client\Type;


use Phpro\SoapClient\Type\ResultInterface;

class DummyResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $AppServer = null;

    /**
     * @var string
     */
    private $DbServer = null;

    /**
     * @var string
     */
    private $AuthServer = null;

    /**
     * @return string
     */
    public function getAppServer()
    {
        return $this->AppServer;
    }

    /**
     * @param string $AppServer
     * @return DummyResponse
     */
    public function withAppServer($AppServer)
    {
        $new = clone $this;
        $new->AppServer = $AppServer;

        return $new;
    }

    /**
     * @return string
     */
    public function getDbServer()
    {
        return $this->DbServer;
    }

    /**
     * @param string $DbServer
     * @return DummyResponse
     */
    public function withDbServer($DbServer)
    {
        $new = clone $this;
        $new->DbServer = $DbServer;

        return $new;
    }

    /**
     * @return string
     */
    public function getAuthServer()
    {
        return $this->AuthServer;
    }

    /**
     * @param string $AuthServer
     * @return DummyResponse
     */
    public function withAuthServer($AuthServer)
    {
        $new = clone $this;
        $new->AuthServer = $AuthServer;

        return $new;
    }


}

