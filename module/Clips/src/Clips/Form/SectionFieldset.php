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

use Clips\Entity\Section;
use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;
use DoctrineORMModule\Stdlib\Hydrator\DoctrineEntity;

class SectionFieldset extends Fieldset implements InputFilterProviderInterface
{
    public function __construct($name = 'section')
    {
        parent::__construct($name);

//        $em = Registry::get('entityManager');
//        $this->setHydrator(new DoctrineEntity($em))
//            ->setObject(new User());
//        $this->setLabel('Post');


        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => '',
                'data-json' => '{}',
            )
        ));
        $this->add(array(
            'name' => 'report_id',
            'attributes' => array(
                'type' => 'hidden',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => '',
                'data-json' => '{}',
            )
        ));
        $this->add(array(
            'name' => 'title',
            'options' => array(
                'label' => 'Section Title'
            ),
            'attributes' => array(
                //'type' => 'text',
                'type' => 'Zend\Form\Element\Text',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => 'Section Title',
                'required' => 'required',
                'data-json' => '{}',
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
                'data-json' => '{}',
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
                'data-json' => '{}',
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
                'data-json' => '{}',
            )
        ));


        return;


        
        $this->add(array(
            'name' => 'age_max',
            'options' => array(
                'label' => 'Ordinal Position in Report' //TODO use translations
            ),
            'attributes' => array(
                'type' => 'select',
                'class' => 'clips-form clips-'.$name,
                'placeholder' => 'Max',
                'required' => 'required',
                'data-json' => '{}',
            )
        ));

    }
    /**
     * Define InputFilterSpecifications
     *
     * @access public
     * @return array
     */
    public function getInputFilterSpecification()
    {
        return array(
            'title' => array(
                'required' => true,
                'filters' => array(
                    array('name' => 'StringTrim'),
                    array('name' => 'StripTags')
                ),
                'properties' => array(
                    'required' => true
                )
            ),
            'description' => array(
                'required' => true,
                'filters' => array(
                    array('name' => 'StringTrim'),
                    array('name' => 'StripTags')
                ),
                'properties' => array(
                    'required' => true
                )
            )
        );
    }
}