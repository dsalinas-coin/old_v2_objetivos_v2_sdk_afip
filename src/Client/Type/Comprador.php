<?php

namespace App\Client\Type;

class Comprador
{

    /**
     * @var int
     */
    private $DocTipo = null;

    /**
     * @var int
     */
    private $DocNro = null;

    /**
     * @var float
     */
    private $Porcentaje = null;

    /**
     * @return int
     */
    public function getDocTipo()
    {
        return $this->DocTipo;
    }

    /**
     * @param int $DocTipo
     * @return Comprador
     */
    public function withDocTipo($DocTipo)
    {
        $new = clone $this;
        $new->DocTipo = $DocTipo;

        return $new;
    }

    /**
     * @return int
     */
    public function getDocNro()
    {
        return $this->DocNro;
    }

    /**
     * @param int $DocNro
     * @return Comprador
     */
    public function withDocNro($DocNro)
    {
        $new = clone $this;
        $new->DocNro = $DocNro;

        return $new;
    }

    /**
     * @return float
     */
    public function getPorcentaje()
    {
        return $this->Porcentaje;
    }

    /**
     * @param float $Porcentaje
     * @return Comprador
     */
    public function withPorcentaje($Porcentaje)
    {
        $new = clone $this;
        $new->Porcentaje = $Porcentaje;

        return $new;
    }


}

