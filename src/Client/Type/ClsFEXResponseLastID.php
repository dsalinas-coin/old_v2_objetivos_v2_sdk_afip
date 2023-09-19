<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClsFEXResponseLastID implements ResultInterface
{

    /**
     * @var int
     */
    private $Id = null;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return ClsFEXResponseLastID
     */
    public function withId($Id)
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }


}

