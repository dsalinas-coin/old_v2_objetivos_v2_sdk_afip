<?php

namespace App\Client\Type;

class ClsFEXErr
{

    /**
     * @var int
     */
    private $ErrCode = null;

    /**
     * @var string
     */
    private $ErrMsg = null;

    /**
     * @return int
     */
    public function getErrCode()
    {
        return $this->ErrCode;
    }

    /**
     * @param int $ErrCode
     * @return ClsFEXErr
     */
    public function withErrCode($ErrCode)
    {
        $new = clone $this;
        $new->ErrCode = $ErrCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrMsg()
    {
        return $this->ErrMsg;
    }

    /**
     * @param string $ErrMsg
     * @return ClsFEXErr
     */
    public function withErrMsg($ErrMsg)
    {
        $new = clone $this;
        $new->ErrMsg = $ErrMsg;

        return $new;
    }


}

