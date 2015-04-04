<?php

namespace Smart\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SmartUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
