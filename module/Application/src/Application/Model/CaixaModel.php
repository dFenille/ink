<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\Model;

use Doctrine\ORM\EntityManager;
use Application\Entity\Caixa;
/**
 * Description of newPHPClass
 *
 * @author diego
 */
class CaixaModel {
    
    
     /**
     * @var \Doctrine\ORM\EntityManager
     *      */
    protected $entityManager;
    
    /**

     * @var Caixa
     *      */
    public $caixa;
    
    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;  
    }
    
    public function setCaixa($id){
        $this->caixa = $this->entityManager->getRepository('Application\Entity\Caixa')->findOneBy(array('idCaixa'=>$id));
        
        if(! $this->caixa)
            throw new \Exception("Nao foi possivel encontrar o caixa");
        
        return $this->caixa;
    }
    
    public function getCaixaObject(){
        if(!$this->caixa)
            throw new \Exception("Erro:".$e->getMessage());
        return $this->caixa;
    }
    
    public function add($post){
        $this->caixa = new Caixa();
        $this->caixa->setCaixa($post['caixa']);
        $this->caixa->setValor($post['valor']);
        $this->caixa->setTipoCaixa($post['tipoCaixa']);
        $this->caixa->setMes($post['mes']);
        
        $this->entityManager->getConnection()->beginTransaction();
        try{
            $this->entityManager->persist($this->caixa);
            $this->entityManager->flush();
            $this->entityManager->getConnection()->commit();
                    
        }  catch (\Exception $e){
            $this->entityManager->getConnection()->rollBack();
            throw new \Exception('Não foi possivel adicionar um novo caixa.'.$e->getMessage());
        }
        return $this->caixa;
    }
    
    public function edit($post){
        
        $this->caixa->setCaixa($post['caixa']);
        $this->caixa->setValor($post['valor']);
        $this->caixa->setTipoCaixa($post['tipoCaixa']);
        $this->caixa->setMes($post['mes']);
        
        $this->entityManager->getConnection()->beginTransaction();
        
        try{
            $this->entityManager->persist($this->caixa);
            $this->entityManager->flush();
            $this->entityManager->getConnection()->commit();
                    
        }  catch (\Exception $e){
            $this->entityManager->getConnection()->rollBack();
           throw new \Exceptipon($e->getMessage()) ;
        }
        
        return $this;
                          
    }
    
    
    public function getCaixas($mes){
        $query = $this->entityManager->createQueryBuilder();
        $query->select('caixas')
                ->from('Application\Entity\Caixa', 'caixas')
                ->where('caixas.mes = :idMes')->setParameter('idMes', $mes)
                ->orderBy('caixas.valor','DESC');
        
        $caixas = $query->getQuery()->getArrayResult();
        
        return $caixas;
        
    }
   
}
