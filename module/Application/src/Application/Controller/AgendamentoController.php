<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\Controller;
/**
 * Description of newPHPClass
 *
 * @author diego
 */
class AgendamentoController extends Application\Controller\AbstractAppController {
    
    public function indexAction() {
        
        return new \Zend\View\Model\ViewModel();
    }
    
    public function createAction(){
        $request = $this->getRequest();
        
        if($request->isPost()){
            $data = $request->getPost();
            
            
        }
        return new \Zend\View\Model\ViewModel();
    }
    
    public function updateAction(){
        $request= $this->getRequest();
        $id      = $this->params()->fromRoute('id',null);
        if($request->isPost()){
            $data = $request->getPost();
            
            
        }
        return new \Zend\View\Model\ViewModel();
    }
    
    public function deleteAction(){
        
    }
    
    public function calendarAction(){
        $data = array();
                
        
        return new \Zend\View\Model\JsonModel($data);

    }
}
