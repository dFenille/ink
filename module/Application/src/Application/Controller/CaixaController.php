<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\Controller;

use Zend\View\Model\ViewModel;
//use Zend\View\Model\JsonModel;
use Application\Form\CaixaForm;

/**
 * Description of newPHPClass
 *
 * @author diego
 */
class CaixaController extends AbstractAppController {
    
    public function indexAction()
    {
        
        $caixaModel = new \Application\Model\CaixaModel($this->getEntityManager());
        $caixas = $caixaModel->getCaixas(date('m'));
        return new ViewModel(array('caixas'=>$caixas));
    }
    
    
    public function filtroCaixaAction()
    {   
        $request = $this->getRequest();
        $data = $request->getPost();
        $caixaModel = new \Application\Model\CaixaModel($this->getEntityManager());
        $caixas = $caixaModel->getCaixas($data['mes-filtro']);
        
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true)->setVariables(array('caixas' => $caixas));
        return $viewModel;
    }
    public function createAction()
    {
        $request = $this->getRequest();
        $form = new CaixaForm($this->getEntityManager());
        $success = false;
        if($request->isPost()){
            $data = $request->getPost();
            $form->setData($data);
            if($form->isValid()){
                $caixaModel = new \Application\Model\CaixaModel($this->getEntityManager());
                $caixaModel->add($data);
                $this->redirect()->toRoute('caixa',array('action'=>'edit','id'=>$caixaModel->getCaixaObject()->getIdCaixa()));
                $success = true;
            }
        }
        return new ViewModel(array('form' => $form, 'success' => $success));
    }
    
    public function editAction(){
        $request = $this->getRequest();
        $id = $this->params()->fromRoute('id',0);
                
        $form = new CaixaForm($this->getEntityManager(),true);
        $success = false;
        
        $caixaModel = new \Application\Model\CaixaModel($this->getEntityManager());
        $caixaModel->setCaixa($id);
        $caixa = $caixaModel->getCaixaObject();
        
        $form->bind($caixa);
        
        if($request->isPost()){
            $data = $request->getPost();
            $form->setData($data);
            if($form->isValid()){
                $caixaModel->edit($data);
                $success = true;
            }
        }
        return new ViewModel(array('form' => $form, 'success' => $success));
    }
    
}
 