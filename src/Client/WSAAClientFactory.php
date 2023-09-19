<?php

namespace App\Client;


use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Symfony\Component\EventDispatcher\EventDispatcher;

class WSAAClientFactory
{

    public static function factory(string $wsdl) : WSAAClient
    {

        $opts = array(
            'ssl' => array('ciphers'=>'TLSv1', 'verify_peer'=>false)
        );
        // SOAP 1.2 client
        $params = array ('encoding' => 'UTF-8', 'soap_version' => SOAP_1_1, 'trace' => true, 'exceptions' => true, "connection_timeout" => 180, 'stream_context' => stream_context_create($opts) );

        $soapOptions = ['cache_wsdl' => WSDL_CACHE_NONE];

        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, array_merge($soapOptions,$params))
                ->withClassMap(WSAAClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new WSAAClient($caller);


    }


}

