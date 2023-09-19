<?php

namespace App\Client;


use App\Client\Type\LoginCms;
use App\Repository\CertificadoRepository;
use App\Repository\CompanyWebServiceRepository;
use App\Repository\WebServiceRepository;
use App\Util\LoginTicketRequest;
use DateTime;
use DateTimeInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpKernel\KernelInterface;

class WSAA
{
    protected $logger;
    protected $wsdlUrls;

    protected $template;
    protected $serializer;
    /** @var \FacturacionApiBundle\Util\ApiConnector $facturationConnector */
    protected $facturationConnector;
    protected $kernel;
    protected $companyWebServiceRepository;

    public function __construct(KernelInterface $kernel, ParameterBagInterface $parameterBag, LoggerInterface $logger, CompanyWebServiceRepository $companyWebServiceRepository)
    {
        $this->logger = $logger;
        $this->wsdlUrls = $parameterBag->get('urls')['wsdl']['wsaa'];;
        $this->kernel = $kernel;
        $this->companyWebServiceRepository = $companyWebServiceRepository;
    }

    public function getCredentials()
    {
        /** @var LoggerInterface $logger */
        set_time_limit(0);

        //  try {
        $this->template = file_get_contents($this->kernel->getProjectDir() . '/src/Util/xml/' . 'LoginTicketRequest.xml');


        $client = WSAAClientFactory::factory($this->wsdlUrls);
        $hoy = new \DateTime();


        // Obtener el último certificado
        $webService = $this->companyWebServiceRepository->findOneBy([], ['id' => 'DESC']);
        $hoy = new \DateTime($hoy->format('Y-m-d'));

        //si el token no expira hoy o no esta expirado, lo devuelvo, sino lo actualizamos
        if ($webService->getTokenExpireDate()->format('Y-m-d') > $hoy->format('Y-m-d')) {
            return $webService;
        }

        $objLoginCms = $this->prepareLoginCmsObj($webService);


        try {
            $response = $client->loginCms($objLoginCms);

            $objResponse = simplexml_load_string($response->getLoginCmsReturn());
            $webService->setWsaaSign($objResponse->credentials->sign);
            $webService->setWsaaToken($objResponse->credentials->token);
            $webService->setWsaaErrorCode(null);
            $webService->setWsaaErrorDescription(null);
            $vencimiento = \DateTime::createFromFormat('Y-m-d\TH:i:s+', $objResponse->header->expirationTime);
            $webService->setTokenExpireDate($vencimiento);
        } catch (\Exception  $e) {

            $webService->setWsaaErrorCode($e->getCode());
            $webService->setWsaaErrorDescription($e->getMessage());
        }
        // $this->facturationConnector->getApiRepository('CompanyWebService')->persist($webService);
        $this->companyWebServiceRepository->save($webService, true);


        return $webService;
        /*  } catch (\Exception $exception) {
              echo get_class($exception);

              dd('Error ' . $exception->getMessage());
          }*/
    }


    private function prepareLoginCmsObj($webService)
    {
        /** @var CompanyWebService $webService */
        ini_set("display_errors", "on");
        error_reporting(E_ALL);
        $obj = new LoginCms();
        $templatelogin = $this->template;
        $ticketLogin = new LoginTicketRequest($templatelogin);
        $ticketLogin->setFechaorigen(date('c', date('U') - 3600));
        $ticketLogin->setFechafin(date('c', date('U') + 3600));
        $ticketLogin->setServicio($webService->getService()->getWsaaCode());
        $ticketLogin->setUniqueid(date('U'));

        //dump($webService);
        $cert = "file://" . $this->kernel->getProjectDir() . '/src/Util/key/' . $webService->getCertificateFile()->getFileName();
        $key = "file://" . $this->kernel->getProjectDir() . '/src/Util/key/' . $webService->getPrivatekeyFile()->getFileName();

        //   dd($ticketLogin->getSalida());

        $filenameTRA = $this->kernel->getProjectDir() . '/var/' . $ticketLogin->getServicio() . "2_TRA.tmp";
        file_put_contents($filenameTRA, $ticketLogin->getSalida());
        // $filenameKey = $this->rootDir .'../var/'. $ticketLogin->getServicio() . "_" . $webService->getCompany()->getTaxId() . "_KEY.tmp";
        // file_put_contents($filenameKey, $empresaServicio['key']);
        /*$filenameCert = $this->rootDir .'../var/'. $ticketLogin->getServicio() . "_" . $webService->getCompany()->getTaxId() . "_Cert.tmp";
        file_put_contents($filenameCert, $cert);*/
        echo $webService->getKeyPassword();
        $STATUS = openssl_pkcs7_sign($filenameTRA, $filenameTRA . ".signed", $cert,
            array($key, $webService->getKeyPassword()),
            array(),
            !PKCS7_DETACHED
        );

        if (!$STATUS) {
        }
        $requestFirmado = fopen($filenameTRA . ".signed", "r");
        $i = 0;
        $CMS = "";
        while (!feof($requestFirmado)) {
            $buffer = fgets($requestFirmado);
            if ($i++ >= 4) {
                $CMS .= $buffer;
            }
        }
        fclose($requestFirmado);
        unlink($filenameTRA . ".signed");
        unlink($filenameTRA);
        //unlink($filenameKey);
        //unlink($filenameCert);

        $obj->setIn0($CMS);

        return $obj;

    }


    /**
     * @return mixed
     */
    public function getRootDir()
    {
        return $this->rootDir;
    }

    /**
     * @param mixed $rootDir
     */
    public function setRootDir($rootDir)
    {
        $this->rootDir = $rootDir;
    }


    /**
     * @return mixed
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param mixed $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    function getSerializer()
    {
        return $this->serializer;
    }

    function setSerializer($serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @return mixed
     */
    public function getWsdlUrls()
    {
        return $this->wsdlUrls;
    }

    /**
     * @param mixed $wsdlUrls
     */
    public function setWsdlUrls($wsdlUrls)
    {
        $this->wsdlUrls = $wsdlUrls;
    }


    /**
     * @return mixed
     */
    public function getFacturationConnector()
    {
        return $this->facturationConnector;
    }

    /**
     * @param mixed $facturationConnector
     */
    public function setFacturationConnector($facturationConnector)
    {
        $this->facturationConnector = $facturationConnector;
    }


}