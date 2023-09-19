<?php

namespace App\Client\Type;
use Phpro\SoapClient\Type\RequestInterface;

class LoginCms implements RequestInterface
{

    /**
     * @var string
     */
    private $in0 = null;

    /**
     * @return string
     */
    public function getIn0()
    {
        return $this->in0;
    }

    /**
     * @param string $in0
     * @return LoginCms
     */
    public function withIn0($in0)
    {
        $new = clone $this;
        $new->in0 = $in0;

        return $new;
    }

    /**
     * @param string $in0
     */
    public function setIn0($in0)
    {
        $this->in0 = $in0;
    }


}

