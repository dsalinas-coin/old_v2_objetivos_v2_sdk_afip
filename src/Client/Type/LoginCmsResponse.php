<?php

namespace App\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LoginCmsResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $loginCmsReturn = null;

    /**
     * @return string
     */
    public function getLoginCmsReturn()
    {
        return $this->loginCmsReturn;
    }

    /**
     * @param string $loginCmsReturn
     * @return LoginCmsResponse
     */
    public function withLoginCmsReturn($loginCmsReturn)
    {
        $new = clone $this;
        $new->loginCmsReturn = $loginCmsReturn;

        return $new;
    }


}

