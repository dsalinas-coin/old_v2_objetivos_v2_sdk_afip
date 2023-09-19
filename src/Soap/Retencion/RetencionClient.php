<?php

namespace App\Soap\Retencion;

use App\Soap\Retencion\Type;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class RetencionClient
{

    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }


    /**
     * @param RequestInterface|Type\Dummy $parameters
     * @return ResultInterface|Type\DummyResponse
     * @throws SoapException
     */
    public function dummy(\App\Soap\Retencion\Type\Dummy $parameters) : \App\Soap\Retencion\Type\DummyResponse
    {
        return ($this->caller)('dummy', $parameters);
    }

    /**
     * @param RequestInterface|Type\Emitir $parameters
     * @return ResultInterface|Type\EmitirResponse
     * @throws SoapException
     */
    public function emitir(\App\Soap\Retencion\Type\Emitir $parameters) : \App\Soap\Retencion\Type\EmitirResponse
    {
        return ($this->caller)('emitir', $parameters);
    }

    /**
     * @param RequestInterface|Type\Anular $parameters
     * @return ResultInterface|Type\AnularResponse
     * @throws SoapException
     */
    public function anular(\App\Soap\Retencion\Type\Anular $parameters) : \App\Soap\Retencion\Type\AnularResponse
    {
        return ($this->caller)('anular', $parameters);
    }


}

