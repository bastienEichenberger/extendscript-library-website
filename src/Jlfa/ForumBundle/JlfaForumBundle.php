<?php

namespace Jlfa\ForumBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JlfaForumBundle extends Bundle
{
    public function getParent()
    {
      return 'CCDNForumForumBundle';
    }
}
