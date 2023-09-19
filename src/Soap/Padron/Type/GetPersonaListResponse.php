<?php

namespace App\Soap\Padron\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonaListResponse implements ResultInterface
{

    /**
     * @var \App\Soap\Padron\Type\PersonaListReturn
     */
    private $personaListReturn = null;

    /**
     * @return \App\Soap\Padron\Type\PersonaListReturn
     */
    public function getPersonaListReturn()
    {
        return $this->personaListReturn;
    }

    /**
     * @param \App\Soap\Padron\Type\PersonaListReturn $personaListReturn
     * @return GetPersonaListResponse
     */
    public function withPersonaListReturn($personaListReturn)
    {
        $new = clone $this;
        $new->personaListReturn = $personaListReturn;

        return $new;
    }


}

