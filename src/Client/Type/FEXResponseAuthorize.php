<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXResponseAuthorize implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXOutAuthorize
     */
    private $FEXResultAuth = null;

    /**
     * @var \App\Client\Type\ClsFEXErr
     */
    private $FEXErr = null;

    /**
     * @var \App\Client\Type\ClsFEXEvents
     */
    private $FEXEvents = null;

    /**
     * @return \App\Client\Type\ClsFEXOutAuthorize
     */
    public function getFEXResultAuth()
    {
        return $this->FEXResultAuth;
    }

    /**
     * @param \App\Client\Type\ClsFEXOutAuthorize $FEXResultAuth
     * @return FEXResponseAuthorize
     */
    public function withFEXResultAuth($FEXResultAuth)
    {
        $new = clone $this;
        $new->FEXResultAuth = $FEXResultAuth;

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
     * @return FEXResponseAuthorize
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
     * @return FEXResponseAuthorize
     */
    public function withFEXEvents($FEXEvents)
    {
        $new = clone $this;
        $new->FEXEvents = $FEXEvents;

        return $new;
    }


}

