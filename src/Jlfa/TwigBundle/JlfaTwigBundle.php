<?php

namespace Jlfa\TwigBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JlfaTwigBundle extends Bundle
{
    public function getParent() {
        return 'TwigBundle';
    }
}

