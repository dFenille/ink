<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Form;
use Zend\Form\Form;
use Zend\InputFilter\InputFilterProviderInterface;
use Application\Hydrator\MyCustomHydrator as DoctrineHydrator;
use Doctrine\ORM\EntityManager;
/**
 * Description of newPHPClass
 *
 * @author diego
 */
class AgendamentoForm extends Form implements InputFilterProviderInterface {

    public function __construct(EntityManager $entityManager, $edit = false) {
        
        parent::__construct('agendamento');
        if($edit){
            $this->setHydrator(new DoctrineHydrator($entityManager)); 
       }
        
        $this->add(array(
            'name' => 'nomeCliente',
            'type' => 'text',
            'attributes' => array(
                'class' => 'form-control'
            )
        ));
        $this->add(array(
            'name' => 'dataInicial',
            'type' => 'text',
            'attributes' => array(
                'class'     => 'form-control',
                'readonly'  => true
            ),
            
        ));
        $this->add(array(
            'name' => 'dataFinal',
            'type' => 'text',
            'attributes'    => array(
                'class' => 'form-control'
            ),
            
        ));
        
        $this->add(array(
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => array(
                'value' => 'Salvar Agendamento',
                'id'    => 'submit-agendamento',
                'class' => 'btn blue'
                
            )
        ));
        
                
    }
    
    public function getInputFilterSpecification() {
        return array(
            'nomeCliente' => array(
                'required' => true
            ),
            'dataInicial' => array(
                'required' => true
            ),
            'dataFinal' => array(
                'required' => true
            )
        );
    }

}
