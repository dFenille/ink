<?php
namespace Application\Hydrator;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use DoctrineModule\Stdlib\Hydrator\DoctrineObject;
/**
 * Description of newPHPClass
 *
 * @author diego
 */
class MyCustomHydrator extends DoctrineObject{
    
    protected function handleTypeConversions($value, $typeOfField) {
        if($typeOfField == 'date'){
            return \DateTime::createFromFormat('d/m/Y', $value);
        }
        
        parent::handleTypeConversions($value, $typeOfField);
    }
}
