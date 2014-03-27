<?php

namespace EnhancedProxy84a8fd18_d946947553b7cbf9f4e7ff596a57ff3b311e10bd\__CG__\Sdz\BlogBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class BlogController extends \Sdz\BlogBundle\Controller\BlogController
{
    private $__CGInterception__loader;

    public function supprimerAction(\Sdz\BlogBundle\Entity\Article $article)
    {
        $ref = new \ReflectionMethod('Sdz\\BlogBundle\\Controller\\BlogController', 'supprimerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($article));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($article), $interceptors);

        return $invocation->proceed();
    }

    public function editAction(\Sdz\BlogBundle\Entity\Article $article)
    {
        $ref = new \ReflectionMethod('Sdz\\BlogBundle\\Controller\\BlogController', 'editAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($article));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($article), $interceptors);

        return $invocation->proceed();
    }

    public function addPostAction()
    {
        $ref = new \ReflectionMethod('Sdz\\BlogBundle\\Controller\\BlogController', 'addPostAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}