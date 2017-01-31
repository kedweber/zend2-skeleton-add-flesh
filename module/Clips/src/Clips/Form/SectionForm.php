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

/**
 * Class SectionForm
 * @package Clips\Form
 * @subpackage SectionForm
 */
class SectionForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('section');

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