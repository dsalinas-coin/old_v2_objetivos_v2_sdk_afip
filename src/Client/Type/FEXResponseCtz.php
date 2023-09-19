<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXResponseCtz implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXResponseCtz
     */
    private $FEXResultGet = null;

    /**
     * @var \App\Client\Type\ClsFEXErr
     */
    private $FEXErr = null;

    /**
     * @var \App\Client\Type\ClsFEXEvents
     */
    private $FEXEvents = null;

    /**
     * @return \App\Client\Type\ClsFEXResponseCtz
     */
    public function getFEXResultGet()
    {
        return $this->FEXResultGet;
    }

    /**
     * @param \App\Client\Type\ClsFEXResponseCtz $FEXResultGet
     * @return FEXResponseCtz
     */
    public function withFEXResultGet($FEXResultGet)
    {
        $new = clone $this;
        $new->FEXResultGet = $FEXResultGet;

        return $new;
    }

    /**
     * @return \App\Client\Type\ClsFEXErr
     */
    public function getFEXErr()
    {
        return $this->FEXErr;
    }

    /**
     * @param \App\Client\Type\ClsFEXErr $FEXErr
     * @return FEXResponseCtz
     */
    public function withFEXErr($FEXErr)
    {
        $new = clone $this;
        $new->FEXErr = $FEXErr;

        return $new;
    }

    /**
     * @return \App\Client\Type\ClsFEXEvents
     */
    public function getFEXEvents()
    {
        return $this->FEXEvents;
    }

    /**
     * @param \App\Client\Type\ClsFEXEvents $FEXEvents
     * @return FEXResponseCtz
     */
    public function withFEXEvents($FEXEvents)
    {
        $new = clone $this;
        $new->FEXEvents = $FEXEvents;

        return $new;
    }


}

