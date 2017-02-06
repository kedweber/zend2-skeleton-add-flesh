<?php
/**
 * CLiPs - WEBerStudio.net
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @license   All rights reserved
 */

namespace Clips\Controller;

use Zend\Form\Annotation\AnnotationBuilder;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\ServiceManager\ServiceManager;
use Zend\View\Model\ViewModel;
use Zend\Form\FormInterface;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Repository;


abstract class ClipsAbstractController extends AbstractActionController implements ClipsControllerInterface
{
    /** @var Sections */
    protected $sections = null;

    /**
     * @var QuestionForm
     */
    protected $form = null;

    /**
     * @var \Zend\ServiceManager\ServiceManager
     */
    protected $serviceManager = null;

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $entityManager = null;

    /**
     * @var \Zend\View\Model\ViewModel
     */
    protected $objViewModel = null;

    /**
     *
     * @var \Doctrine\ORM\Repository
     */
    protected $objRepository = null;

    protected function init()
    {
//        $this->objViewModel = new ViewModel();
        $this->serviceManager = $this->getServiceLocator();
        //$this->entityManager = $this->serviceManager->get('Doctrine\ORM\EntityManager');
        $this->entityManager = $this->serviceManager->get('doctrine.entitymanager.orm_default');
        return $this;
    }

    /**
     * @param string $fullyQualifiedName
     * @return \Doctrine\ORM\EntityRepository|Repository
     */
    protected function repository($fullyQualifiedName = '')
    {
        //TODO store the main repository but return requested
        if($fullyQualifiedName !== '') {
            $this->objRepository = $this->entityManager->getRepository($fullyQualifiedName);
        }
        return $this->objRepository;
    }

    /**
     * Get the ViewModel
     * 
     * @param array $config
     * @return ViewModel
     */
    protected function viewModel($config = [])
    {
        if(is_null($this->objViewModel)) {
            $this->objViewModel = new ViewModel($config);
        }
        return $this->objViewModel;
    }

    /**
     * Sets the EntityManager
     *
     * @param EntityManager $em
     * @access protected
     * @return UserController
     */
    protected function setEntityManager(EntityManager $em)
    {
        $this->entityManager = $em;
        return $this;
    }

    public function indexAction()
    {
        $this->init();
        return $this;
    }

    public function createAction()
    {
        // GET /path/create
    }

    public function storeAction()
    {
        // POST /path
    }

    public function showAction()
    {
        // GET /path/{id}
    }

    public function editAction()
    {
        // GET /path/{id}/edit
    }

    public function updateAction()
    {
        // PUT or PATCH /path/{id}/update
    }

    public function destroyAction()
    {
        // DELETE /path/{id}
    }


}