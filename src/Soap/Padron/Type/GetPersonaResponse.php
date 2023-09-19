<?php

namespace App\Soap\Padron\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonaResponse implements ResultInterface
{

    /**
     * @var \App\Soap\Padron\Type\PersonaReturn
     */
    private $personaReturn = null;

    /**
     * @return \App\Soap\Padron\Type\PersonaReturn
     */
    public function getPersonaReturn()
    {
        return $this->personaReturn;
    }

    /**
     * @param \App\Soap\Padron\Type\PersonaReturn $personaReturn
     * @return GetPersonaResponse
     */
    public function withPersonaReturn($personaReturn)
    {
        $new = clone $this;
        $new->personaReturn = $personaReturn;

        return $new;
    }


}

