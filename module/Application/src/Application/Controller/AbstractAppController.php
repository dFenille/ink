<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Controller;
use \Zend\Mvc\Controller\AbstractActionController;
/**
 * Description of AbstractAppController
 *
 * @author diego
 */
class AbstractAppController extends AbstractActionController{
    
    /**
     * @var \Doctrine\ORM\EntityManager
     *      */
    protected $entityManager;
    
    /**
     *  @var \Zend\View\Renderer\PhpRenderer
     *      */
    protected  $renderer;
    
    
    public function getEntityManager(){
        if(! $this->entityManager)
            $this->entityManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        
        return $this->entityManager;
    }
    
    public function getServiceRenderer(){
        if(!$this->renderer)
            $this->renderer = $this->getServiceLocator ()->get ('Zend\View\Renderer\PhpRenderer');
        
        return $this->renderer;
    }
    
}
