<?php

namespace StandAppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class StandAppBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
