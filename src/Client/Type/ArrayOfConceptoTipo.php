<?php

namespace App\Client\Type;

class ArrayOfConceptoTipo
{

    /**
     * @var \App\Client\Type\ConceptoTipo
     */
    private $ConceptoTipo = null;

    /**
     * @return \App\Client\Type\ConceptoTipo
     */
    public function getConceptoTipo()
    {
        return $this->ConceptoTipo;
    }

    /**
     * @param \App\Client\Type\ConceptoTipo $ConceptoTipo
     * @return ArrayOfConceptoTipo
     */
    public function withConceptoTipo($ConceptoTipo)
    {
        $new = clone $this;
        $new->ConceptoTipo = $ConceptoTipo;

        return $new;
    }


}

