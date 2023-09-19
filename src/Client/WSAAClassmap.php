<?php

namespace App\Client;

use App\Client\Type\LoginCms;
use App\Client\Type\LoginCmsResponse;
use App\Client\Type\LoginFault;
use App\Client\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class WSAAClassmap
{

    public static function getCollection() : ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('loginCms', LoginCms::class),
            new ClassMap('loginCmsResponse', LoginCmsResponse::class),
            new ClassMap('LoginFault', LoginFault::class),
        );
    }


}

