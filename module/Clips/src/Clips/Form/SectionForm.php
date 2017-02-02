<?php
/**
 * CLiPs - WEBerStudio.net
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @license   All rights reserved
 */

namespace Clips\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
use Zend\Stdlib\Hydrator\ClassMethods;
//use Doctrine\Common\Persistence\ObjectManager;
//use Doctrine\Common\Persistence\ObjectManagerAware;
//use DoctrineModule\Persistence\ObjectManagerAwareInterface;
// Replaces depricated DoctrineEntity
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
//use DoctrineORMModule\Form\Element\DoctrineEntity;


use Clips\Form\SectionFieldset;
use Clips\Form\ClipsAbstractForm;

/**
 * Class SectionForm
 * @package Clips\Form
 * @subpackage SectionForm
 */
class SectionForm extends ClipsAbstractForm
{
    public function __construct(ObjectManager $objectManager, $name = null)
    {
        //TODO  test $name for ObjectManager
        parent::__construct($objectManager, $name = null);
//        parent::__construct('section');
//        $fieldset = new SectionFieldset($name, 'section');
        //$fieldset = new SectionFieldset('section',$name);
//        $fieldset->bindValues($name);
//        $fieldset->setUseAsBaseFieldset(true);
        //$this->add($fieldset);
//print_r($fieldset->getElements());die();
        $this->add(array(
            'name' => 'submit',
            'type'  => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));

        $this->add(array(
            'name' => 'id',
            'type' => 'Zend\Form\Element\Hidden',
//            'type' => 'DoctrineORMModule\Form\Element\DoctrineEntity',
            'options' => array(
                'label' => 'Choose a MyEntity',
                'object_manager' => $objectManager,
                'target_class' => 'Clips\Entity\Sections',
                'property' => 'id'
            ),
            'attributes' => array(
                'type' => 'hidden',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => '',
                'data-json' => ''
            )
        ));

        $this->add(array(
            'name' => 'report_id',
            'type' => 'DoctrineORMModule\Form\Element\DoctrineEntity',
            'options' => array(
                'label' => 'Report Id',
                'object_manager' => $objectManager,
                'target_class' => 'Clips\Entity\Sections',
                'property' => 'report_id'
            ),
            'attributes' => array(
                'type' => 'hidden',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => '',
                'data-json' => '',
            )
        ));
        $this->add(array(
            'name' => 'title',
            'type' => 'DoctrineORMModule\Form\Element\DoctrineEntity',
            'options' => array(
                'label' => 'Section Title',
                'object_manager' => $objectManager,
                'target_class' => 'Clips\Entity\Sections',
                'property' => 'title'
            ),
            'attributes' => array(
                //'type' => 'text',
                'type' => 'Zend\Form\Element\Text',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => 'Section Title',
                'required' => 'required',
                'data-json' => '',
            )
        ));
        $this->add(array(
            'name' => 'description',
            'options' => array(
                'label' => 'Section Description'
            ),
            'attributes' => array(
                //'type' => 'text',
                'type' => 'Zend\Form\Element\TextArea',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => 'Section Title',
                'data-json' => '',
            )
        ));
        // TODO SELECT
        $this->add(array(
            'name' => 'age_min',
            'options' => array(
                'label' => 'Minimum Age' //TODO use translations
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => 'Min',
                'required' => 'required',
                'data-json' => '',
            )
        ));
        $this->add(array(
            'name' => 'age_max',
            'options' => array(
                'label' => 'Maximum Age' //TODO use translations
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => 'Max',
                'required' => 'required',
                'data-json' => '',
            )
        ));







        
//print_r($h, false);die();







        return; // under is without Doctrine
        $this->setAttribute('method', 'post')
            ->setHydrator(new ClassMethods())
            ->setInputFilter(new InputFilter());

        $this->add(array(
            'type' => 'Clips\Form\SectionFieldset',
            'options' => array(
                'use_as_base_fieldset' => true
            )
        ));
    }
}
