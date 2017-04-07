<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\Controller;

use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Application\Form\AgendamentoForm;
use Application\Model\AgendamentoModel;
/**
 * Description of newPHPClass
 *
 * @author diego
 */
class AgendamentoController extends AbstractAppController {
    
    public function indexAction() {
        
        return new ViewModel();
    }
    
    public function agendamentoAjaxAction(){
        $request = $this->getRequest();
        $form = new AgendamentoForm($this->getEntityManager());
        $success = false;
        if($request->isPost()){
            $data = $request->getPost();
            $form->setData($data);
            if($form->isValid()){
                $agendamentoModel = new AgendamentoModel($this->getEntityManager());
                $agendamentoModel->add($data);
                $success = true;
            }
        }
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true)->setVariables(array('success'=>$success,'formAgendamento'=>$form));
        return $viewModel;
        
    }
    
    public function createAction(){
        $request = $this->getRequest();
        $form = new AgendamentoForm($this->getEntityManager());
        $success = false;
        if($request->isPost()){
            $data = $request->getPost();
            $form->setData($data);
            if($form->isValid()){
                $agendamentoModel = new AgendamentoModel($this->getEntityManager());
                $agendamentoModel->add($data);
                $success = true;
            }
        }
        return new ViewModel(array('formAgendamento' => $form, 'success' => $success));
    }
    
    public function editAction(){
        $success = false;
        $request = $this->getRequest();
        $form = new AgendamentoForm($this->getEntityManager(),true);
        
        $data = $request->getPost();
        $dataGet = $request->getQuery();
        
        
        $agendamentoModel = new AgendamentoModel($this->getEntityManager()); 
        $agendamento = $agendamentoModel->setAgendamento($data['idAgendamento']);
        $form->get('nomeCliente')->setValue($agendamento->getNomeCliente());
        $form->get('valor')->setValue($agendamento->getValor());
        $form->get('dataInicial')->setValue($agendamento->getDataInicial()->format('Y-m-d H:i'));
        $form->get('dataFinal')->setValue($agendamento->getDataFinal()->format('Y-m-d H:i'));
        
        $form->setData($data);
//        if($form->isValid()){
//                 $agendamentoModel->edit($data);
//                 $success = "Data Atualizada com Sucesso";
//        }
        
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true)->setVariables(array('formAgendamento' => $form,'success' => $success,'idAgendamento'=>$data['idAgendamento']));
        return $viewModel;
    }
    
    
    public function getAgendamentosAction(){
        $data = array();
        
        $agendamentoModel = new AgendamentoModel($this->getEntityManager());
        $agendamentos = $agendamentoModel->getAgendamentos();
       
        $i = 0;
        foreach ($agendamentos as $agendamento) {
            $data[$i]['id'] = $agendamento['idAgendamento'];
            $data[$i]['title'] = $agendamento['nomeCliente'];
            $data[$i]['valor'] = $agendamento['valor'];
            $data[$i]['start'] = $agendamento['dataInicial']->format('Y-m-d h:i');
            $data[$i]['end'] = $agendamento['dataFinal']->format('Y-m-d h:i');
            $i++;
        }
        
        return new JsonModel($data);

    }
    
    
    public function calendarAction(){
        
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        return $viewModel;
        
    }
}
 