<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\Model;
/**
 * Description of newPHPClass
 *
 * @author diego
 */
class AgendamentoModel {
    
    
     /**
     * @var \Doctrine\ORM\EntityManager
     *      */
    protected $entityManager;
    public function __construct(\DoctrineORMModule\Options\EntityManager $entityManager) {
        $this->entityManager = $entityManager;  
    }
    
    public function setAgendamento($id){
        $this->agendamento = $this->entityManager->getRepository('Application\Entity\Agenda')->findOneBy(array('idAgendamento'=>$id));
        
        if(! $this->agendamento)
            throw new \Exception("Nao foi possivel encontrar o agendamento");
        
        return $this->agendamento;
    }
    
    public function getAgendamento(){
        
        return $this->agendamento;
    }
    
    public function getAgendamentos(){
        $agendamentos = $this->entityManager->getRepository('Application\Entity\Agenda')->findBy(array('status' => 1));
        
        return $agendamentos;
        
    }
   
}
