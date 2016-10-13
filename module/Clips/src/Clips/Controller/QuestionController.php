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
use Clips\Entity\Questions;
use Clips\Form\QuestionForm;
use Zend\Form\FormInterface;


/**
 * Class QuestionController
 *
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @category    Clips
 * @package Clips\Controller
 * @subpackage QuestionController
 */
class QuestionController extends AbstractActionController
{
    /** @var Sections */
    private $sections = null;

    /**
     * @var QuestionForm
     */
    private $form = null;

    /**
     * @var \Zend\ServiceManager\ServiceManager
     */
    private $serviceManager = null;
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager = null;



    private function init()
    {
        $this->serviceManager = $this->getServiceLocator();
        $this->entityManager = $this->serviceManager->get('Doctrine\ORM\EntityManager');
        return $this;
    }
    
    public function indexAction()
    {

        $this->init();
        $this->form = new QuestionForm($this->entityManager);

        $this->sections = $this->serviceManager->get('doctrine.entitymanager.orm_default')
            ->getRepository('Clips\Entity\Sections')->findBy([], ['reportOrder' => 'ASC']);
        $config = [
            'form' => $this->form,
            'sections' => $this->sections
        ];
        $vm = new ViewModel($config);
        return $vm;
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
