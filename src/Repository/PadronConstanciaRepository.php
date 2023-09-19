<?php

namespace App\Repository;

use App\Client\WSAA;
use App\Entity\Consulta;
use App\Soap\Padron as Padron;

class PadronConstanciaRepository extends BaseRepository
{

    const factory = '\App\Soap\Padron\PadronClientFactory';


    public function __construct($urls, $serializer, $logger, $translator, WSAA $wsaa)
    {
        parent::__construct($urls, $serializer, $logger, $translator, self::factory, $wsaa);
    }


    /**
     *
     * Utiliza el metodo del ws de AFIP getPersonaList_v2() Consulta a Padron nivel 5, obtiene datos de las personas con sus actividades
     *
     * Respuesta ejemplo de getDatosRegimenGeneral:
     * +"datosRegimenGeneral": {
     * +"actividad": {
     * +"descripcionActividad": "SERVICIOS DE LA BANCA MINORISTA"
     * +"idActividad": 641930
     * +"nomenclador": 883
     * +"orden": 1
     * +"periodo": 201311
     * }
     * +"impuesto": array:12 [
     * 0 => {
     * +"descripcionImpuesto": "GANANCIAS SOCIEDADES"
     * +"idImpuesto": 10
     * +"periodo": 197802
     * }
     * 1 => {
     * +"descripcionImpuesto": "IVA"
     * +"idImpuesto": 30
     * +"periodo": 199206
     * }...............
     * Despues tiene un array de regimen, dejo uno de ejemplo.
     *    0 => {#560
     * +"descripcionRegimen": "USUARIOS DE SISTEMAS DE PAGO ELECTRONICO - INSCRIPTOS EN IVA - PAGOS EFECTUADOS POR CUALQUIER MEDIO EXCEPTO TARJETAS DE CREDITO"
     * +"idImpuesto": 216
     * +"idRegimen": 15
     * +"periodo": 201901
     * +"tipoRegimen": "RETENCION"
     * }
     *
     */
    public function getData(array $cuitsSinLimite)
    {


        $info = array();
        $gruposCuit = array_chunk($cuitsSinLimite, 100);

        foreach ($gruposCuit as $cuits) {


            $request = new Padron\Type\GetPersonaListV2($this->authInfo['wsaa_token'], $this->authInfo['wsaa_sign'], "33714189919", $cuits);
            $client = $this->client;
            /** @var Padron\PadronClient $client */


            // Devuelve idénticos datos que el método getPersona_v2, pero
            //para una lista de hasta 250 claves tributarias


            $response = $client->getPersonaList_v2($request)->getPersonaListReturn();


            foreach ($response->getPersona() as $persona) {

                /** @var Padron\Type\Persona $persona */

                //errorConstancia se genera si por ejemplo, el cuit esta inactivo
                if ($persona->getErrorConstancia() == null && $persona->getErrorMonotributo() == null && $persona->getErrorRegimenGeneral() == null) {

                    //yo no figuro aca, vendra de otro padron?
                    if ($persona->getDatosMonotributo() == null) {
                        $impuestoEncontrado = null;
                        $i = 0;
                        // foreach($persona->getDatosRegimenGeneral()->getImpuesto() as $impuesto){


                        if ($persona->getDatosRegimenGeneral() == null) {
                            // dump($persona->getDatosRegimenGeneral());

                            $info[$this->getCuit($persona)] = array(
                                "status" => "super_error"
                            );
                        } else {

                            //Iteramos hasta encontrar la condicion del cuit, al encontrar alguno, sale del bucle.
                            while ($i < sizeof($persona->getDatosRegimenGeneral()->getImpuesto()) && $impuestoEncontrado == null) {
                                $impuesto = $persona->getDatosRegimenGeneral()->getImpuesto()[$i];
                                /** @var Padron\Type\Impuesto $impuesto */

                                //  echo $this->getCuit($persona)." > ".$impuesto->getIdImpuesto() . "_exento" . "\n";

                                switch ($impuesto->getIdImpuesto()) {
                                    case 32:
                                        $impuestoEncontrado = $impuesto->getIdImpuesto() . "_exento";
                                        break;
                                    case 30:
                                        $impuestoEncontrado = $impuesto->getIdImpuesto() . "_iva";
                                        break;
                                }
                                $i++;
                            }
                            $info[$this->getCuit($persona)] = array(
                                "status" => $impuestoEncontrado
                            );
                        }
                    } else {
                        $info[$this->getCuit($persona)] = array(
                            "status" => "mono"
                        );
                    }

                    $domicilioFiscal = $persona->getDatosGenerales()->getDomicilioFiscal();

                    if ($domicilioFiscal != null) {
                        $info[$this->getCuit($persona)]["provincia"] = $domicilioFiscal->getIdProvincia();
                        $info[$this->getCuit($persona)]["descripcionProvincia"] = $domicilioFiscal->getDescripcionProvincia();
                    }


                } else {
                    $errorDetail = array();
                    switch (true) {
                        case $persona->getErrorRegimenGeneral() != null:

                            $errorDetail = $persona->getErrorRegimenGeneral();
                            break;
                        case $persona->getErrorConstancia() != null:
                            $errorDetail = $persona->getErrorConstancia();
                            break;
                        case $persona->getErrorMonotributo() != null:
                            $errorDetail = $persona->getErrorMonotributo();
                            break;
                    }

                    //   dump($info[$this->getCuit($persona)]);

                    $info[$this->getCuit($persona)] = array(
                        "status" => "cert_error",
                        "detail" => $errorDetail,
                        "provincia" => 0,
                        "descripcionProvincia" => "CABA"
                    );
                    //  var_dump($info[$this->getCuit($persona)]);
                }
            }
        }


        return $info;
    }


    public function getAllData(array $cuitsSinLimite,$cuitEmpresa)
    {


        $info = array();
        $gruposCuit = array_chunk($cuitsSinLimite, 100);

        foreach ($gruposCuit as $cuits) {



            $request = new Padron\Type\GetPersonaListV2($this->authInfo['wsaa_token'], $this->authInfo['wsaa_sign'], $cuitEmpresa, $cuits);
            $client = $this->client;
            /** @var Padron\PadronClient $client */


            // Devuelve idénticos datos que el método getPersona_v2, pero
            //para una lista de hasta 250 claves tributarias


            $response = $client->getPersonaList_v2($request)->getPersonaListReturn();


            foreach ($response->getPersona() as $persona) {


                /** @var Padron\Type\Persona $persona */

                //errorConstancia se genera si por ejemplo, el cuit esta inactivo
                if ($persona->getErrorConstancia() == null && $persona->getErrorMonotributo() == null && $persona->getErrorRegimenGeneral() == null) {

                    //yo no figuro aca, vendra de otro padron?
                    if ($persona->getDatosMonotributo() == null) {
                        $impuestoEncontrado = null;
                        $i = 0;
                        // foreach($persona->getDatosRegimenGeneral()->getImpuesto() as $impuesto){


                        if ($persona->getDatosRegimenGeneral() == null) {
                            // dump($persona->getDatosRegimenGeneral());

                            $info[$this->getCuit($persona)] = array(
                                "status" => "super_error"
                            );
                        } else {



                            //Iteramos hasta encontrar la condicion del cuit, al encontrar alguno, sale del bucle.
                            while ($i < sizeof($persona->getDatosRegimenGeneral()->getImpuesto()) && $impuestoEncontrado == null) {
                                $impuesto = $persona->getDatosRegimenGeneral()->getImpuesto()[$i];
                                /** @var Padron\Type\Impuesto $impuesto */

                                //  echo $this->getCuit($persona)." > ".$impuesto->getIdImpuesto() . "_exento" . "\n";

                                switch ($impuesto->getIdImpuesto()) {
                                    case 32:
                                        $impuestoEncontrado = $impuesto->getIdImpuesto() . "_exento";
                                        break;
                                    case 30:
                                        $impuestoEncontrado = $impuesto->getIdImpuesto() . "_iva";
                                        break;
                                }
                                $i++;
                            }

                            $info[$this->getCuit($persona)] = array(
                                "status" => $impuestoEncontrado,
                                "categoria" => $persona->getDatosRegimenGeneral()->getCategoriaAutonomo(),
                            );
                        }
                    } else {
                        $info[$this->getCuit($persona)] = array(
                            "status" => "mono",
                            "categoria" => $persona->getDatosMonotributo()->getCategoriaMonotributo()->getDescripcionCategoria(),
                        );
                    }

                    $info[$this->getCuit($persona)]["cuit"] = $this->getCuit($persona);
                    $info[$this->getCuit($persona)]["tipoPersona"] = $persona->getDatosGenerales()->getTipoPersona();
                    $info[$this->getCuit($persona)]["razonSocial"] = $persona->getDatosGenerales()->getRazonSocial();
                    $info[$this->getCuit($persona)]["apellido"] = $persona->getDatosGenerales()->getApellido();
                    $info[$this->getCuit($persona)]["nombre"] = $persona->getDatosGenerales()->getNombre();
                    $info[$this->getCuit($persona)]["estadoClave"] = $persona->getDatosGenerales()->getEstadoClave();
                    $info[$this->getCuit($persona)]["tipoClave"] = $persona->getDatosGenerales()->getTipoClave();

                    $domicilioFiscal = $persona->getDatosGenerales()->getDomicilioFiscal();
                    if ($domicilioFiscal != null) {
                        $info[$this->getCuit($persona)]["provincia"] = $domicilioFiscal->getIdProvincia();
                        $info[$this->getCuit($persona)]["descripcionProvincia"] = $domicilioFiscal->getDescripcionProvincia();

                    }


                } else {
                    $errorDetail = array();
                    switch (true) {
                        case $persona->getErrorRegimenGeneral() != null:

                            $errorDetail = $persona->getErrorRegimenGeneral();
                            break;
                        case $persona->getErrorConstancia() != null:
                            $errorDetail = $persona->getErrorConstancia();
                            break;
                        case $persona->getErrorMonotributo() != null:
                            $errorDetail = $persona->getErrorMonotributo();
                            break;
                    }

                    //   dump($info[$this->getCuit($persona)]);

                    $info[$this->getCuit($persona)] = array(
                        "status" => "cert_error",
                        "detail" => $errorDetail,
                        "provincia" => 0,
                        "descripcionProvincia" => "CABA"
                    );
                    //  var_dump($info[$this->getCuit($persona)]);
                }
            }
        }


        return $info;
    }

    /**
     * @param Padron\Type\Persona $persona
     * @return string
     */

    private function getCuit(Padron\Type\Persona $persona)
    {
        $cuit = "";
        if ($persona->getDatosGenerales() != null) {
            $cuit = $persona->getDatosGenerales()->getIdPersona();
        } elseif ($persona->getErrorConstancia() != null) {
            $cuit = $persona->getErrorConstancia()->getIdPersona();
        }
        //en teoría no hay mas casos
        return $cuit;
    }
}
