<?php

namespace App\Client\Type;

class Opcional
{

    /**
     * @var string
     */
    private $Id = null;

    /**
     * @var string
     */
    private $Valor = null;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return Opcional
     */
    public function withId($Id)
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }

    /**
     * @return string
     */
    public function getValor()
    {
        return $this->Valor;
    }

    /**
     * @param string $Valor
     * @return Opcional
     */
    public function withValor($Valor)
    {
        $new = clone $this;
        $new->Valor = $Valor;

        return $new;
    }


}

