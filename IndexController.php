<?php namespace App\Controller; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\HttpFoundation\Response; 

class IndexController extends AbstractController 
{ 
    
    public function home($name) { 
        return $this->render('index.html.twig',['name' => $name]);
    }
 }