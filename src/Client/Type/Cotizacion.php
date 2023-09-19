<?php

namespace App\Client\Type;

class Cotizacion
{

    /**
     * @var string
     */
    private $MonId = null;

    /**
     * @var float
     */
    private $MonCotiz = null;

    /**
     * @var string
     */
    private $FchCotiz = null;

    /**
     * @return string
     */
    public function getMonId()
    {
        return $this->MonId;
    }

    /**
     * @param string $MonId
     * @return Cotizacion
     */
    public function withMonId($MonId)
    {
        $new = clone $this;
        $new->MonId = $MonId;

        return $new;
    }

    /**
     * @return float
     */
    public function getMonCotiz()
    {
        return $this->MonCotiz;
    }

    /**
     * @param float $MonCotiz
     * @return Cotizacion
     */
    public function withMonCotiz($MonCotiz)
    {
        $new = clone $this;
        $new->MonCotiz = $MonCotiz;

        return $new;
    }

    /**
     * @return string
     */
    public function getFchCotiz()
    {
        return $this->FchCotiz;
    }

    /**
     * @param string $FchCotiz
     * @return Cotizacion
     */
    public function withFchCotiz($FchCotiz)
    {
        $new = clone $this;
        $new->FchCotiz = $FchCotiz;

        return $new;
    }


}

