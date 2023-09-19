<?php

namespace App\Client\Type;

class ClsFEXEvents
{

    /**
     * @var int
     */
    private $EventCode = null;

    /**
     * @var string
     */
    private $EventMsg = null;

    /**
     * @return int
     */
    public function getEventCode()
    {
        return $this->EventCode;
    }

    /**
     * @param int $EventCode
     * @return ClsFEXEvents
     */
    public function withEventCode($EventCode)
    {
        $new = clone $this;
        $new->EventCode = $EventCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getEventMsg()
    {
        return $this->EventMsg;
    }

    /**
     * @param string $EventMsg
     * @return ClsFEXEvents
     */
    public function withEventMsg($EventMsg)
    {
        $new = clone $this;
        $new->EventMsg = $EventMsg;

        return $new;
    }


}

