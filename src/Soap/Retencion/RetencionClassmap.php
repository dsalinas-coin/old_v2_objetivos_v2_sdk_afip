<?php

namespace App\Soap\Retencion;

use App\Soap\Retencion\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class RetencionClassmap
{

    public static function getCollection() : ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('HeaderInfo', Type\HeaderInfo::class),
            new ClassMap('dummy', Type\Dummy::class),
            new ClassMap('dummyResponse', Type\DummyResponse::class),
            new ClassMap('emitir', Type\Emitir::class),
            new ClassMap('certificado', Type\Certificado::class),
            new ClassMap('emitirResponse', Type\EmitirResponse::class),
            new ClassMap('certificadoAnulacion', Type\CertificadoAnulacion::class),
            new ClassMap('anular', Type\Anular::class),
            new ClassMap('anularResponse', Type\AnularResponse::class),
            new ClassMap('Exception', Type\Exception::class),
        );
    }


}

