<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FEXCheckPermisoResponse implements ResultInterface
{

    /**
     * @var \App\Client\Type\FEXResponseCheckPermiso
     */
    private $FEXCheck_PermisoResult = null;

    /**
     * @return \App\Client\Type\FEXResponseCheckPermiso
     */
    public function getFEXCheck_PermisoResult()
    {
        return $this->FEXCheck_PermisoResult;
    }

    /**
     * @param \App\Client\Type\FEXResponseCheckPermiso $FEXCheck_PermisoResult
     * @return FEXCheckPermisoResponse
     */
    public function withFEXCheck_PermisoResult($FEXCheck_PermisoResult)
    {
        $new = clone $this;
        $new->FEXCheck_PermisoResult = $FEXCheck_PermisoResult;

        return $new;
    }


}

