<?php
/**
 * Created by PhpStorm.
 * User: ked
 * Date: 02/02/17
 * Time: 14:48
 */

namespace Clips\Form;

use Zend\Form\Form as ZendForm;
use Zend\InputFilter\InputFilter;
use Zend\Stdlib\Hydrator\ClassMethods;
use Doctrine\Common\Persistence\ObjectManager;
//use Doctrine\Common\Persistence\ObjectManagerAware;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;
// Replaces depricated DoctrineEntity
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
//use DoctrineORMModule\Form\Element\DoctrineEntity;


abstract class ClipsAbstractForm extends ZendForm implements ObjectManagerAwareInterface
{
    protected $objectManager;


    /**
     * Set the object manager
     *
     * @param ObjectManager $objectManager
     */
    public function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Get the object manager
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }

    public function __construct(ObjectManager $objectManager, $name = null)
    {
        $this->setObjectManager($objectManager);
        $h = $this->setHydrator(new DoctrineHydrator($objectManager,'\Clips\Entity\Sections'));
    }
}