<?php

namespace App\Util;

use App\Client\WSAA;
use App\Repository\PadronConstanciaRepository;
use App\Repository\RetencionRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route(service="app.connector")
 */
class Connector
{

    private $serializer;
    private $apiBaseUrl;
    private $logger;
    private $translator;

    private $wsaa;

    public function __construct($urls, $serializer, $logger, WSAA $wsaa)
    {
        $this->serializer = $serializer;
        $this->apiBaseUrl = $urls;
        $this->logger = $logger;
        $this->wsaa = $wsaa;
        //$this->translator = $translator;
    }

    public function getApiRepository($repositoryName)
    {
        $repository = null;
        switch ($repositoryName) {
            case "PadronConstancia":
            {
                $repository = new PadronConstanciaRepository($this->apiBaseUrl['padron'], $this->serializer, $this->logger, $this->translator, $this->wsaa);

                //dump($this->apiBaseUrl['padron']);
                break;
            }
            case "Retencion":
            {
                $repository = new RetencionRepository($this->apiBaseUrl['sire'], $this->serializer, $this->logger, $this->translator, $this->wsaa);
                break;
            }

            default:
            {
                throw new \Exception('ApiRepository not found: ' . $repositoryName, 500);
            }
        }

        return $repository;
    }

}
