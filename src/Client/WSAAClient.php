<?php

namespace App\Client;

use App\Client\Type\LoginCms;
use App\Client\Type\LoginCmsResponse;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\ResultInterface;


class WSAAClient
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
     * @param LoginCms $parameters
     * @return LoginCmsResponse
     */
    public function loginCms(LoginCms $parameters) : ResultInterface
    {
       return ($this->caller)('loginCms', $parameters);
    }


}

