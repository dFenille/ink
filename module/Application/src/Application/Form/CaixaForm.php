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
class CaixaForm extends Form implements InputFilterProviderInterface {

    /**

     * @var EntityManager
     *      */
    private $entityManager;
    
    public function __construct(EntityManager $entityManager, $edit = false) {
        
        $this->entityManager = $entityManager;
        
        parent::__construct('caixa');
        if($edit){
            $this->setHydrator(new DoctrineHydrator($entityManager))->setObject(new \Application\Entity\Caixa()); 
       }
        
        $this->add(array(
            'name' => 'caixa',
            'type' => 'text',
            'attributes' => array(
                'class' => 'form-control'
            )
        ));
        $this->add(array(
            'name' => 'valor',
            'type' => 'text',
            'attributes' => array(
                'class'     => 'form-control',
            ),
            
        ));
        
        $this->add(array(
           'name' => 'tipoCaixa',
           'type' => 'DoctrineModule\Form\Element\ObjectSelect',
           'options' => array(
                'object_manager'     => $this->entityManager,
                'target_class'       => 'Application\Entity\TabTipoCaixa',
                'property' => 'tipoCaixa',
                'is_method' => true,
            ), 
            'attributes' => array(
                'class'     => 'form-control',
            ),
        ));
        
        $this->add(array(
             'type' => 'Zend\Form\Element\Select',
             'name' => 'mes',
             'options' => array(
                     'value_options' => array(
                             '1' => 'Janeiro',
                             '2' => 'Fevereiro',
                             '3' => 'Março',
                             '4' => 'Abril',
                             '5' => 'Maio',
                             '6' => 'Junho',
                             '7' => 'Julho',
                             '8' => 'Agosto',
                             '9' => 'Setembro',
                             '10' => 'Outubro',
                             '11' => 'Novembro',
                             '12' => 'Dezembro',
                         
                     ),
             ),
            'attributes' => array(
                'class' => 'form-control',
            )
     ));
        
        $this->add(array(
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => array(
                'value' => 'Salvar',
                'id'    => 'submit',
                'class' => 'btn blue'
                
            )
        ));
        
                
    }
    
    public function getInputFilterSpecification() {
        return array(
            'caixa' => array(
                'required' => true
            ),
            'valor' => array(
                'required' => true
            ),
            'tipoCaixa' => array(
                'required' => true
            )
        );
    }

}
