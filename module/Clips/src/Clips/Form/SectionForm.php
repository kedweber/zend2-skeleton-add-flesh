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
use Doctrine\Common\Persistence\ObjectManager;
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
    /**
     * SectionForm constructor.
     * @param ObjectManager $objectManager
     * @param string $name
     */
    public function __construct(ObjectManager $objectManager, $name)
    {
        //TODO  test $name for ObjectManager
        // Hydrator set in ClipsAbstractForm
        parent::__construct($objectManager, $name);


        $fieldset = new SectionFieldset($objectManager, $name);
//        $fieldset->setUseAsBaseFieldset(true);
//        $this->bind($fieldset->elements);
        $this->add($fieldset);
//        $fieldset->setObject(new ProductEntity())
//            ->setHydrator(new ClassMethods());
//        $this->getHydrator()->hydrate($this->elements, $this->sections);
        


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
                'property' => 'reportId'
            ),
            'attributes' => array(
                'type' => 'hidden',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => '',
                'data-json' => '',
            )
        ));

        // EDIT
//        $this->add(array(
//            'name' => 'title',
//            'type' => 'DoctrineORMModule\Form\Element\DoctrineEntity',
//            'options' => array(
//                'label' => 'Section Title',
//                'object_manager' => $this->getObjectManager(),
//                'target_class' => 'Clips\Entity\Sections',
//                'property' => 'title'
//            ),
//        //            'attributes' => array(
//        //                //'type' => 'text',
//        //                'type' => 'Zend\Form\Element\Text',
//        //                'class' => 'clips-form clips-'.$name,
//        //                'placeholder' => 'Section Title',
//        //                'required' => 'required',
//        //                'data-json' => '',
//        //            )
//        ));
        $this->add(array(
            'name' => 'title',
            'type' => 'Zend\Form\Element\Text',
            'object_manager' => $objectManager,
            'target_class' => 'Clips\Entity\Sections',
//
//            'options' => array(
//                'label' => 'Section Title',
//                'object_manager' => $objectManager,
//                'target_class' => 'Clips\Entity\Sections',
//                'property' => 'title',
//
//            ),
            'attributes' => array(
                //'type' => 'text',
//                'type' => 'Zend\Form\Element\Text',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => 'Section Title',
                'required' => 'required',
                'data-json' => '',
//                'data-id' => function (\Clips\Entity\Sections $entity) {
//                    return $entity->getId();
//                },
            )
        ));
        // http://stackoverflow.com/questions/14867567/how-to-create-custom-form-elements-that-extend-doctrine-entity-select-elements
        // SECTION TITLE LIST
        $this->add(array(
            'name' => 'id',
            'type' => 'DoctrineORMModule\Form\Element\DoctrineEntity',
            'attributes' => [
                'class' => 'section-list-item selectpicker',
                'data-live-search' => 'true',
            ],
            'options' => array(
                'label' => 'Section Title',
                'object_manager' => $this->getObjectManager(),
                'target_class' => 'Clips\Entity\Sections',
                'property' => 'title',
                'empty_option' => '- Undecided - ',
                'find_method' => array(
                    'name'   => 'findBy',
                    'params' => array(
                        'criteria' => [],
                        // Use key 'orderBy' if using ORM
                        'orderBy'  => ['reportOrder' => 'ASC'],
                        // Use key 'sort' if using ODM (viz. MongoDB
                        'sort'  => ['reportOrder' => 'ASC'],
                    ),
                ),
//                'options' => array(
//                    'empty_option' => 'Seleccione localidad...'
//                ),
                'option_attributes' => array(
                    'data-id' => function (\Clips\Entity\Sections $entity) {
                        return $entity->getId();
                    },
                    'data-tokens' => function (\Clips\Entity\Sections $entity) {
                        return $entity->getTitle();
                    },
                    'data-blubber' => function ($entity) {
                        return get_class($entity);
                        return $entity->getId();
                    },
                )
            ),
//            'attributes' => array(
//                //'type' => 'text',
//                'type' => 'Zend\Form\Element\Text',
//                'class' => 'clips-form clips-'.$name,
//                'placeholder' => 'Section Title',
//                'required' => 'required',
//                'data-json' => '',
//            )
        ));

//        $this->add(
//            array(
//                'name' => 'user_id',
//                'type' => 'DoctrineORMModule\Form\Element\DoctrineEntity',
//                'options' => array(
//                    'label'          => 'User',
//                    'object_manager' => $this->getObjectManager(),
//                    'target_class'   => 'Application\Entity\User',
//                    'property'       => 'name',
//                    'find_method' => array(
//                        'name'   => 'findBy',
//                        'params' => array(
//                            'criteria' => array('is_deleted' => 0),
//                            'orderBy'  => array('name' => 'ASC'),
//                        ),
//                    ),
//                ),
//            ),
//        );


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
                'id' => 'fuckit',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => 'Describe what this section in detail.',
                'data-json' => '',
            )
        ));
        // TODO SELECT
        $this->add(array(
            'name' => 'ageMin',
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
            'name' => 'ageMax',
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


    public function hydrateEntity($entity)
    {
        $hydrator = new DoctrineHydrator($this->entityManager, get_class($entity));

        $this->setHydrator($hydrator);
        $results = $this->form->bind($entity);
    }
}
