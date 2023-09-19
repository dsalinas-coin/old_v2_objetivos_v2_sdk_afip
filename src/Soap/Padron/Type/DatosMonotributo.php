<?php

namespace App\Soap\Padron\Type;

class DatosMonotributo
{

    /**
     * @var \App\Soap\Padron\Type\Actividad
     */
    private $actividad = null;

    /**
     * @var \App\Soap\Padron\Type\Actividad
     */
    private $actividadMonotributista = null;

    /**
     * @var \App\Soap\Padron\Type\Categoria
     */
    private $categoriaMonotributo = null;

    /**
     * @var \App\Soap\Padron\Type\Relacion
     */
    private $componenteDeSociedad = null;

    /**
     * @var \App\Soap\Padron\Type\Impuesto
     */
    private $impuesto = null;

    /**
     * @return \App\Soap\Padron\Type\Actividad
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * @param \App\Soap\Padron\Type\Actividad $actividad
     * @return DatosMonotributo
     */
    public function withActividad($actividad)
    {
        $new = clone $this;
        $new->actividad = $actividad;

        return $new;
    }

    /**
     * @return \App\Soap\Padron\Type\Actividad
     */
    public function getActividadMonotributista()
    {
        return $this->actividadMonotributista;
    }

    /**
     * @param \App\Soap\Padron\Type\Actividad $actividadMonotributista
     * @return DatosMonotributo
     */
    public function withActividadMonotributista($actividadMonotributista)
    {
        $new = clone $this;
        $new->actividadMonotributista = $actividadMonotributista;

        return $new;
    }

    /**
     * @return \App\Soap\Padron\Type\Categoria
     */
    public function getCategoriaMonotributo()
    {
        return $this->categoriaMonotributo;
    }

    /**
     * @param \App\Soap\Padron\Type\Categoria $categoriaMonotributo
     * @return DatosMonotributo
     */
    public function withCategoriaMonotributo($categoriaMonotributo)
    {
        $new = clone $this;
        $new->categoriaMonotributo = $categoriaMonotributo;

        return $new;
    }

    /**
     * @return \App\Soap\Padron\Type\Relacion
     */
    public function getComponenteDeSociedad()
    {
        return $this->componenteDeSociedad;
    }

    /**
     * @param \App\Soap\Padron\Type\Relacion $componenteDeSociedad
     * @return DatosMonotributo
     */
    public function withComponenteDeSociedad($componenteDeSociedad)
    {
        $new = clone $this;
        $new->componenteDeSociedad = $componenteDeSociedad;

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
     * @return DatosMonotributo
     */
    public function withImpuesto($impuesto)
    {
        $new = clone $this;
        $new->impuesto = $impuesto;

        return $new;
    }


}

