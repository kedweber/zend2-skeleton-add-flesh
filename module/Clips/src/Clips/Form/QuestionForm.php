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
use Zend\InputFilter\InputFilterProviderInterface;
use Doctrine\ORM\EntityManager;
//use Zend\Form\Annotation;

/**
 * Class QuestionForm
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @category Clips
 * @package Clips\Form
 * @subpackage QuestionForm
 *
 * @Annotation\Name("questionAnno")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
 */
class QuestionForm extends Form implements InputFilterProviderInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $entityManager = null;

    /**
     *
     * @var int
     * @Annotation\Exclude()
     */
    public $id;

    public function __construct(EntityManager $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    public function init()
    {
        $this->add(array(
            'name' => 'question',
//            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'type' => 'Zend\Form\Element\Text',
            'attributes' => array(
                'placeholder' => 'text', //$this->translate('')
                'required' => 'required'
            ),
            'options' => array(
                'object_manager'     => $this->entityManager,
                'target_class'       => 'Clips\Entity\Questions',
                'property' => 'continent',
                'is_method' => true,
                'find_method'        => array(
                    'name'   => 'getQuestions',
                ),
            ),
        ));
    }

    public function getInputFilterSpecification()
    {
        return array(); // filter and validation here
    }

}