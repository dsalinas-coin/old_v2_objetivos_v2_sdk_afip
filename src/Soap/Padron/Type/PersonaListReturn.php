<?php

namespace App\Soap\Padron\Type;

class PersonaListReturn
{

    /**
     * @var \App\Soap\Padron\Type\Metadata
     */
    private $metadata = null;

    /**
     * @var \App\Soap\Padron\Type\Persona
     */
    private $persona = null;

    /**
     * @return \App\Soap\Padron\Type\Metadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param \App\Soap\Padron\Type\Metadata $metadata
     * @return PersonaListReturn
     */
    public function withMetadata($metadata)
    {
        $new = clone $this;
        $new->metadata = $metadata;

        return $new;
    }

    /**
     * @return \App\Soap\Padron\Type\Persona
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * @param \App\Soap\Padron\Type\Persona $persona
     * @return PersonaListReturn
     */
    public function withPersona($persona)
    {
        $new = clone $this;
        $new->persona = $persona;

        return $new;
    }


}

