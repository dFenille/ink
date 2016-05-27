<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\Model;

use Doctrine\ORM\EntityManager;
use Application\Entity\Agenda;
use Zend\Stdlib\DateTime;
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
    
    /**

     * @var Agenda
     *      */
    public $agendamento;
    
    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;  
    }
    
    public function setAgendamento($id){
        $this->agendamento = $this->entityManager->getRepository('Application\Entity\Agenda')->findOneBy(array('idAgendamento'=>$id));
        
        if(! $this->agendamento)
            throw new \Exception("Nao foi possivel encontrar o agendamento");
        
        return $this->agendamento;
    }
    
    public function add($post){
        $this->agendamento = new Agenda();
        $this->agendamento->setNomeCliente($post['nomeCliente']);
        $this->agendamento->setDataInicial(new DateTime($post['dataInicial']));
        $this->agendamento->setDataFinal(new DateTime($post['dataFinal']));
        $this->agendamento->setStatus(1);
        
        $this->entityManager->getConnection()->beginTransaction();
        try{
            $this->entityManager->persist($this->agendamento);
            $this->entityManager->flush();
            $this->entityManager->getConnection()->commit();
                    
        }  catch (\Exception $e){
            $this->entityManager->getConnection()->rollBack();
            throw new \Exception('Não foi possivel adicionar um novo agendamento.'.$e->getMessage());
        }
        return $this->agendamento;
    }
    
    public function edit($post){
        
        $this->setAgendamento($post['idAgendamento']);
        $this->agendamento->setNomeCliente($post['nomeCliente'])
                          ->setDataFinal($post['dataFinal'])
                          ->setDataInicial($post['dataInicial']);
        
        
        $this->entityManager->getConnection()->beginTransaction();
        
        try{
            $this->entityManager->persist($this->agendamento);
            $this->entityManager->flush();
            $this->entityManager->getConnection()->commit();
                    
        }  catch (\Exception $e){
            $this->entityManager->getConnection()->rollBack();
           echo $e->getMessage();
        }
        
        return $this->agendamento;
                          
    }
    
    public function getAgendamento(){
        
        return $this->agendamento;
    }
    
    public function getAgendamentos(){
        $query = $this->entityManager->createQueryBuilder();
        $query->select('agenda')
                ->from('Application\Entity\Agenda', 'agenda')
                ->where('agenda.status = 1');
        
        $agendamentos = $query->getQuery()->getArrayResult();
        
        return $agendamentos;
        
    }
   
}
