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
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use Clips\Form\SectionFieldset;

/**
 * Class SectionForm
 * @package Clips\Form
 * @subpackage SectionForm
 */
class SectionForm extends Form
{
    public function __construct(ObjectManager $name = null)
    {
        //TODO  test $name for ObjectManager
        parent::__construct('section');
        $fieldset = new SectionFieldset('section',$name);
        $fieldset->setUseAsBaseFieldset(true);
        $this->add($fieldset);
//print_r($fieldset);die();
        $this->add(array(
            'name' => 'submit',
            'type'  => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));

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
