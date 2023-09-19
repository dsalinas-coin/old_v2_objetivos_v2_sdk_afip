<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXGetPARAMMONCONCOTIZACIONResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseMonCONCOTIZACION
     */
    private $FEXGetPARAM_MON_CON_COTIZACIONResult = null;

    /**
     * @return \App\Client\Type\FEXResponseMonCONCOTIZACION
     */
    public function getFEXGetPARAM_MON_CON_COTIZACIONResult()
    {
        return $this->FEXGetPARAM_MON_CON_COTIZACIONResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseMonCONCOTIZACION
     * $FEXGetPARAM_MON_CON_COTIZACIONResult
     * @return FEXGetPARAMMONCONCOTIZACIONResponse
     */
    public function withFEXGetPARAM_MON_CON_COTIZACIONResult($FEXGetPARAM_MON_CON_COTIZACIONResult)
    {
        $new = clone $this;
        $new->FEXGetPARAM_MON_CON_COTIZACIONResult = $FEXGetPARAM_MON_CON_COTIZACIONResult;

        return $new;
    }


}

