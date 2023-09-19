<?php


namespace App\Repository;

use App\Client\WSAA;
use App\Util\AfipWebService;
use DateTime;
use Exception;
use SimpleXMLElement;
use SoapClient;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\NativeHttpClient;
use Symfony\Component\HttpClient\RetryableHttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Doctrine\ORM\EntityManagerInterface;


class BaseRepository
{

    protected $client;
    protected $serializer;
    protected $logger;
    protected $translator;
    protected $authInfo;
    protected $wsaa;
    protected $em;


    public function __construct($urls, $serializer, $logger, $translator, $factory, WSAA $wsaa)
    {


        $this->client = $factory::factory($urls['wsdl']);

        $options = [
            'verify_peer' => false,
            'verify_host' => false,
        ];

        $httpClient = new NativeHttpClient($options);
        $retryableHttpClient = new RetryableHttpClient($httpClient);


        // $response = $retryableHttpClient->request('GET', $urls['token']);
        //aca en lugar de hacer la request a la url del token, deberia hacer la autenticacion a afip


        //
        //        //    dump($response);
        //        //recibo un 403. AD
        //
        //        //  $data = json_decode($response->raw_body, true);
        //
        //        // Obtener el cuerpo de la respuesta
        // $body = $response->getContent();

// Decodificar el cuerpo de la respuesta JSON en un array asociativo
        //  $data = json_decode($body, true);
        /*
                $options = array(
                    'CUIT' => '20378307288', // Valor del CUIT
                    'production' => false, // Valor del entorno
                );
                $afip = new \Afip($options);


                // Obtener el token de acceso con servicio autorizado
                $ta = $afip->GetServiceTA('ws_sr_padron_a13');
        */

        $ws = $wsaa->getCredentials();


        $data = [
            'wsaa_sign' => $ws->getWsaaSign(),
            'wsaa_token' => $ws->getWsaaToken(),
        ];




        $valid = ['wsaa_sign', 'wsaa_token'];
        //  echo "Esto pertenece a la variable valid que tiene el wsaa_sign y el wsaa_token";
        // dump($valid = ['wsaa_sign', 'wsaa_token']);


        $data = array_filter(
            $data,
            function ($key) use ($valid) {
                return in_array($key, $valid);
            },
            ARRAY_FILTER_USE_KEY
        );


        /*
         * ^ data:2 [▼
  "wsaa_sign" => "DH+M55T0TH6xo9ZqTHa3Iyz5pgngSvjsTEAfT8yqs/COQFWz4cQ2T7QWM8gGL+nmXQFjLu2D2CR3+KMuFhV7xxI79XUIBMwzlx9aYQa+y5L1B8JbJ4psh1PzrSPQu4Pr3BqK8MnZlhzdGzG8qWPLHKEF+q6EQidP ▶"
  "wsaa_token" => "PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/Pgo8c3NvIHZlcnNpb249IjIuMCI+CiAgICA8aWQgc3JjPSJDTj13c2FhLCBPPUFGSVAsIEM9QVIsIFNFUklBTE5V ▶"
]
         *
         */
        $this->authInfo = $data;
        //echo "Esta es la info que trae auth";
        //dump($this->authInfo=$data);
        $this->serializer = $serializer;
        $this->logger = $logger;
        $this->translator = $translator;

    }

    public function autenticar(WSAA $wsaa)
    {
        $wsaa->getCredentials();


    }


}
