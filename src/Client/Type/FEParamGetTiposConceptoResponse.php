<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEParamGetTiposConceptoResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\ConceptoTipoResponse
     */
    private $FEParamGetTiposConceptoResult = null;

    /**
     * @return \App\Client\Type\ConceptoTipoResponse
     */
    public function getFEParamGetTiposConceptoResult()
    {
        return $this->FEParamGetTiposConceptoResult;
    }

    /**
     * @param \App\Client\Type\ConceptoTipoResponse
     * $FEParamGetTiposConceptoResult
     * @return FEParamGetTiposConceptoResponse
     */
    public function withFEParamGetTiposConceptoResult($FEParamGetTiposConceptoResult)
    {
        $new = clone $this;
        $new->FEParamGetTiposConceptoResult = $FEParamGetTiposConceptoResult;

        return $new;
    }


}

