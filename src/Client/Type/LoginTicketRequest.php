<?php
/**
 * Created by PhpStorm.
 * User: mtejada
 * Date: 22/3/2017
 * Time: 5:01 PM
 */

namespace App\Client\Type;


class LoginTicketRequest
{

    /*
    <?xml version="1.0" encoding="UTF­8"?>
    <loginTicketRequest version="1.0">
        <header>
            <source>[datosorigen]</source>
            <destination>cn=wsaa,o=afip,c=ar,serialNumber=CUIT 33693450239</destination>
            <uniqueId>[uniqueid]</uniqueId>
            <generationTime>[fechaorigen]</generationTime>
            <expirationTime>[fechafin]</expirationTime>
        </header>
        <service>[servicio]</service>
    </loginTicketRequest>

     *
     * */
    private $uniqueid;
    private $fechaorigen;
    private $fechafin;
    private $template;
    private $servicio;

    public function getSalida(){
        $this->setTemplate(str_replace('[uniqueid]',$this->getUniqueid(),$this->getTemplate()));
        $this->setTemplate(str_replace('[fechaorigen]',$this->getFechaorigen(),$this->getTemplate()));
        $this->setTemplate(str_replace('[fechafin]',$this->getFechafin(),$this->getTemplate()));
        $this->setTemplate(str_replace('[servicio]',$this->getServicio(),$this->getTemplate()));
        return $this->getTemplate();
    }
    public function  __construct($template)
    {
        $this->template = $template;
    }
    /**
     * @return mixed
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * @param mixed $servicio
     */
    public function setServicio($servicio)
    {
        $this->servicio = $servicio;
    }




    /**
     * @return mixed
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * @param mixed $fechafin
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;
    }

    /**
     * @return mixed
     */
    public function getFechaorigen()
    {
        return $this->fechaorigen;
    }

    /**
     * @param mixed $fechaorigen
     */
    public function setFechaorigen($fechaorigen)
    {
        $this->fechaorigen = $fechaorigen;
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @return mixed
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * @param mixed $uniqueid
     */
    public function setUniqueid($uniqueid)
    {
        $this->uniqueid = $uniqueid;
    }


}