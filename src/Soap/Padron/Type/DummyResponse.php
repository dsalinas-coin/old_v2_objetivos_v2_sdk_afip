<?php

namespace App\Soap\Padron\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DummyResponse implements ResultInterface
{

    /**
     * @var \App\Soap\Padron\Type\DummyReturn
     */
    private $return = null;

    /**
     * @return \App\Soap\Padron\Type\DummyReturn
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \App\Soap\Padron\Type\DummyReturn $return
     * @return DummyResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

