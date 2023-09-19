<?php

namespace App\Client\Type;

class FECompConsultaReq
{

    /**
     * @var int
     */
    private $CbteTipo = null;

    /**
     * @var int
     */
    private $CbteNro = null;

    /**
     * @var int
     */
    private $PtoVta = null;

    /**
     * @return int
     */
    public function getCbteTipo()
    {
        return $this->CbteTipo;
    }

    /**
     * @param int $CbteTipo
     * @return FECompConsultaReq
     */
    public function withCbteTipo($CbteTipo)
    {
        $new = clone $this;
        $new->CbteTipo = $CbteTipo;

        return $new;
    }

    /**
     * @return int
     */
    public function getCbteNro()
    {
        return $this->CbteNro;
    }

    /**
     * @param int $CbteNro
     * @return FECompConsultaReq
     */
    public function withCbteNro($CbteNro)
    {
        $new = clone $this;
        $new->CbteNro = $CbteNro;

        return $new;
    }

    /**
     * @return int
     */
    public function getPtoVta()
    {
        return $this->PtoVta;
    }

    /**
     * @param int $PtoVta
     * @return FECompConsultaReq
     */
    public function withPtoVta($PtoVta)
    {
        $new = clone $this;
        $new->PtoVta = $PtoVta;

        return $new;
    }


}

