<?php

namespace Jlfa\TwigBundle\Twig;

class JlfaExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('rot13', 'str_rot13'),
            new \Twig_SimpleFilter('replace_at', array($this, 'replaceAtFilter')),
        );
    }
    
    public function replaceAtFilter($mail){
        return str_replace("@", "(at)", $mail);
    }


    public function getName()
    {
        return 'jlfa_extension';
    }
}

?>
