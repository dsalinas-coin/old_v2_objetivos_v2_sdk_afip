<?php

namespace App\Soap\Padron;

use App\Soap\Padron\Type;
use App\Soap\Padron\Type\Dummy;
use App\Soap\Padron\Type\DummyResponse;
use App\Soap\Padron\Type\GetPersona;
use App\Soap\Padron\Type\GetPersonaList;
use App\Soap\Padron\Type\GetPersonaListResponse;
use App\Soap\Padron\Type\GetPersonaListV2;
use App\Soap\Padron\Type\GetPersonaListV2Response;
use App\Soap\Padron\Type\GetPersonaResponse;
use App\Soap\Padron\Type\GetPersonaV2;
use App\Soap\Padron\Type\GetPersonaV2Response;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class PadronClient
{

    /**
     * @var Caller
     */
    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|GetPersona $parameters
     * @return ResultInterface|GetPersonaResponse
     * @throws SoapException
     */
    public function getPersona(GetPersona $parameters) : GetPersonaResponse
    {
        return ($this->caller)('getPersona', $parameters);
    }

    /**
     * @param RequestInterface|GetPersonaList $parameters
     * @return ResultInterface|GetPersonaListResponse
     * @throws SoapException
     */
    public function getPersonaList(GetPersonaList $parameters) : GetPersonaListResponse
    {
        return ($this->caller)('getPersonaList', $parameters);
    }

    /**
     * @param RequestInterface|GetPersonaV2 $parameters
     * @return ResultInterface|GetPersonaV2Response
     * @throws SoapException
     */
    public function getPersona_v2(GetPersonaV2 $parameters) : GetPersonaV2Response
    {
        return ($this->caller)('getPersona_v2', $parameters);
    }

    /**
     * @param RequestInterface|Dummy $parameters
     * @return ResultInterface|DummyResponse
     * @throws SoapException
     */
    public function dummy(Dummy $parameters) : DummyResponse
    {
        return ($this->caller)('dummy', $parameters);
    }

    /**
     * @param RequestInterface|GetPersonaListV2 $parameters
     * @return ResultInterface|GetPersonaListV2Response
     * @throws SoapException
     */
    public function getPersonaList_v2(GetPersonaListV2 $parameters) : GetPersonaListV2Response
    {
        return ($this->caller)('getPersonaList_v2', $parameters);
    }


}

