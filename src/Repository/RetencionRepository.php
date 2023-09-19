<?php

namespace App\Repository;


use App\Client\WSAA;
use App\Soap\Retencion as Retencion;

class RetencionRepository extends BaseRepository
{

    const factory = '\App\Soap\Retencion\RetencionClientFactory';


    public function __construct($urls, $serializer, $logger, $translator, WSAA $wsaa)
    {
        parent::__construct($urls, $serializer, $logger, $translator, self::factory, $wsaa);
    }

    public function addRetencion($retencion){
        $request = new Retencion\Type\Emitir($this->authInfo['wsaa_token'], $this->authInfo['wsaa_sign'], "33714189919",$retencion);
        $client = $this->client;
        /** @var Retencion\RetencionClient $client */
        $response = $client->emitir($request);
    }


}
