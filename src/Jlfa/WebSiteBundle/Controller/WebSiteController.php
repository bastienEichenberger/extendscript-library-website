<?php

namespace Jlfa\WebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WebSiteController extends Controller
{
    public function homeAction()
    {
        return $this->render('JlfaWebSiteBundle:webpage:home.html.twig');
    }
    
    public function startAction(){
        return $this->render('JlfaWebSiteBundle:webpage:start.html.twig');
    }
    
    public function participateAction(){
        return $this->render('JlfaWebSiteBundle:webpage:participate.html.twig');
    }
    
    
    public function contributorsAction(){
        return $this->render('JlfaWebSiteBundle:webpage:contributors.html.twig');
    }
    
    public function licencesAction(){
        return $this->render('JlfaWebSiteBundle:webpage:licences.html.twig');
    }
    
    public function jsDocAction(){
        return new Response('JlfaWebSiteBundle:jsdoc:index.html');
    }
    
    
}
