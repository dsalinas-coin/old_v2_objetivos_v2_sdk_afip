<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXResponseLastCMP implements ResultInterface
{

    /**
     * @var \App\Client\Type\ClsFEXLastCMPResponse
     */
    private $FEXResult_LastCMP = null;

    /**
     * @var \App\Client\Type\ClsFEXErr
     */
    private $FEXErr = null;

    /**
     * @var \App\Client\Type\ClsFEXEvents
     */
    private $FEXEvents = null;

    /**
     * @return \App\Client\Type\ClsFEXLastCMPResponse
     */
    public function getFEXResult_LastCMP()
    {
        return $this->FEXResult_LastCMP;
    }

    /**
     * @param \App\Client\Type\ClsFEXLastCMPResponse $FEXResult_LastCMP
     * @return FEXResponseLastCMP
     */
    public function withFEXResult_LastCMP($FEXResult_LastCMP)
    {
        $new = clone $this;
        $new->FEXResult_LastCMP = $FEXResult_LastCMP;

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
     * @return FEXResponseLastCMP
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
     * @return FEXResponseLastCMP
     */
    public function withFEXEvents($FEXEvents)
    {
        $new = clone $this;
        $new->FEXEvents = $FEXEvents;

        return $new;
    }


}

