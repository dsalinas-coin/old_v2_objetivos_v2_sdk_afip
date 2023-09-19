<?php

namespace App\Soap\Padron\Type;

class DatosRegimenGeneral
{

    /**
     * @var \App\Soap\Padron\Type\Actividad
     */
    private $actividad = null;

    /**
     * @var \App\Soap\Padron\Type\Categoria
     */
    private $categoriaAutonomo = null;

    /**
     * @var \App\Soap\Padron\Type\Impuesto
     */
    private $impuesto = null;

    /**
     * @var \App\Soap\Padron\Type\Regimen
     */
    private $regimen = null;

    /**
     * @return \App\Soap\Padron\Type\Actividad
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * @param \App\Soap\Padron\Type\Actividad $actividad
     * @return DatosRegimenGeneral
     */
    public function withActividad($actividad)
    {
        $new = clone $this;
        $new->actividad = $actividad;

        return $new;
    }

    /**
     * @return \App\Soap\Padron\Type\Categoria
     */
    public function getCategoriaAutonomo()
    {
        return $this->categoriaAutonomo;
    }

    /**
     * @param \App\Soap\Padron\Type\Categoria $categoriaAutonomo
     * @return DatosRegimenGeneral
     */
    public function withCategoriaAutonomo($categoriaAutonomo)
    {
        $new = clone $this;
        $new->categoriaAutonomo = $categoriaAutonomo;

        return $new;
    }

    /**
     * @return \App\Soap\Padron\Type\Impuesto
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * @param \App\Soap\Padron\Type\Impuesto $impuesto
     * @return DatosRegimenGeneral
     */
    public function withImpuesto($impuesto)
    {
        $new = clone $this;
        $new->impuesto = $impuesto;

        return $new;
    }

    /**
     * @return \App\Soap\Padron\Type\Regimen
     */
    public function getRegimen()
    {
        return $this->regimen;
    }

    /**
     * @param \App\Soap\Padron\Type\Regimen $regimen
     * @return DatosRegimenGeneral
     */
    public function withRegimen($regimen)
    {
        $new = clone $this;
        $new->regimen = $regimen;

        return $new;
    }


}

