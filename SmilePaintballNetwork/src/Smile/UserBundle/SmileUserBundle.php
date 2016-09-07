<?php

namespace Smile\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SmileUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
