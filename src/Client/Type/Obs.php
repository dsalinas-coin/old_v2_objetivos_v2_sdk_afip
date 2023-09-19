<?php

namespace App\Client\Type;

class Obs
{

    /**
     * @var int
     */
    private $Code = null;

    /**
     * @var string
     */
    private $Msg = null;

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return Obs
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getMsg()
    {
        return $this->Msg;
    }

    /**
     * @param string $Msg
     * @return Obs
     */
    public function withMsg($Msg)
    {
        $new = clone $this;
        $new->Msg = $Msg;

        return $new;
    } 


}

