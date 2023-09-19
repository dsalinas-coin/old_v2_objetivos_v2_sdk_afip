<?php

namespace App\Controller;

use App\Client\WSAA;
use App\Entity\Consulta;
use App\Repository\ConsultaRepository;
use App\Soap\Retencion\RetencionClassmap;
use App\Soap\Retencion\RetencionClientFactory;
use Doctrine\ORM\EntityManagerInterface;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Soap\Padron\PadronClient;
use App\Util\Connector;
use App\Soap\Padron as Padron;

class ConsultaController extends AbstractController
{


    protected $connector;
    protected $factory = '\App\Soap\Padron\PadronClientFactory';
    protected $cuitEmpresa;

    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
        $this->cuitEmpresa = $_ENV['CUIT_EMPRESA'];

    }

    #[Route('/info', name: 'app_consulta_todo')]
    public function consultaTodo(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {

        $cuits = $request->query->get('cuits');

        // Verificar si se proporcionaron cuits
        if (empty($cuits)) {
            return new JsonResponse(['error' => 'No se proporcionaron cuits'], 400);
        }

        // Convertir la cadena en un array de cuits
        $cuitsArray = explode(',', $cuits);

        // Eliminar espacios en blanco si es necesario
        $cuitsArray = array_map('trim', $cuitsArray);

        $repoPadron = $this->connector->getApiRepository("PadronConstancia");

        $infoAfip = $repoPadron->getAllData($cuitsArray,$this->cuitEmpresa); // Pasar el array de cuits


        foreach ($infoAfip as $key => $persona) {

            $consulta = new Consulta();
            $consulta->setCuit($key);
            $consulta->setRazonSocial($persona['razonSocial']);
            $consulta->setNombre($persona['nombre']);
            $consulta->setApellido($persona['apellido']);
            $consulta->setTipoPersona($persona['tipoPersona']);
            $consulta->setTipoClave($persona['tipoClave']);
            $consulta->setEstadoClave($persona['estadoClave']);
            $consulta->setStatus($persona['status']);
            $consulta->setProvinciaId($persona['provincia']);
            $consulta->setProvinciaNombre($persona['descripcionProvincia']);
            $consulta->setCategoria($persona['categoria']);
            $entityManager->persist($consulta);
        }



        $entityManager->flush();
        return new JsonResponse($infoAfip);

    }

    #[Route('/retenciones', name: 'app_consulta_retencion')]
    public function consultaRepo(Request $request): JsonResponse
    {

        $cuits = $request->query->get('cuits');

        // Verificar si se proporcionaron cuits
        if (empty($cuits)) {
            return new JsonResponse(['error' => 'No se proporcionaron cuits'], 400);
        }

        // Convertir la cadena en un array de cuits
        $cuitsArray = explode(',', $cuits);

        // Eliminar espacios en blanco si es necesario
        $cuitsArray = array_map('trim', $cuitsArray);

        $repoPadron = $this->connector->getApiRepository("PadronConstancia");

        $infoAfip = $repoPadron->getData($cuitsArray); // Pasar el array de cuits

        return new JsonResponse($infoAfip);

    }

}
