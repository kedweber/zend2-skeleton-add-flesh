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
//
//use Zend\Form\Annotation\AnnotationBuilder;
//use Zend\Mvc\Controller\AbstractActionController;
//use Zend\ServiceManager\ServiceManager;
//use Zend\View\Model\ViewModel;
use Clips\Entity\Questions;
use Clips\Form\QuestionForm;
//use Zend\Form\FormInterface;

use Clips\Controller\ClipsAbstractController;
use Clips\Form\SectionForm;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

use Clips\Entity\Sections as ESections;

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
class QuestionController extends ClipsAbstractController
{
    /** @var Sections */
    protected $sections = null;

    protected $section = null;

    /**
     * @var QuestionForm
     */
    protected $form = null;
//
//    /**
//     * @var \Zend\ServiceManager\ServiceManager
//     */
//    protected $serviceManager = null;
//    /**
//     * @var \Doctrine\ORM\EntityManager
//     */
//    protected $entityManager = null;
    /**
     * @param array $criteria
     * @param array $orderBy
     * @param null $limit
     * @param null $offset
     * @return array|Sections
     */
    protected function getSectionCollection(array $criteria = [], array $orderBy = [], $limit = null, $offset = null) 
    {
        $this->sections = $this->repository('Clips\Entity\Sections')
            ->findBy($criteria, $orderBy, $limit, $offset);
        return $this->sections;
    }
    
    public function indexAction()
    {
        parent::indexAction();
//        $this->form = new QuestionForm($this->entityManager);
        $section = $this->getSectionCollection([],['reportOrder' => 'ASC'],1);

        $entity = new ESections($this->entityManager);
        $entity->getRepository();
        // $this->params('id')

        $section = $this->entityManager->getRepository('Clips\Entity\Sections')->find(5);
//var_dump($section);die();

        $this->section = $section;
        $this->form = new SectionForm($this->entityManager, 'section');
        $hydrator = new DoctrineHydrator($this->entityManager, get_class($section));

        $this->form->setHydrator($hydrator);
        $results = $this->form->bind($section);
//        var_dump($results);
        //$results = $hydrator->hydrate($this->form->getFieldsets(), get_class($section));

//        $article = new Article();
//        $request = $this->getRequest();
//        $hydrator = new DoctrineHydrator($this->getObjectManager(), get_class($article));
//        $form->setHydrator($hydrator);
//        $form->bind($article);

        // TODO remove below when Doctrine Hydrator works
        // $this->form = new SectionForm('Section');

        //  Cannot access protected property Clips\Form\SectionForm::$elements
        //$this->form->getHydrator()->hydrate($this->form->elements, $this->section);

//        $this->form->bind($this->section);
        //$this->form->setHydrator(new DoctrineEntity($this->entityManager,'Clips\Entity\Sections'));

        return $this->viewModel([
            'form' => $this->form,
            'section' => $this->section,
            'sections' => $this->getSectionCollection([],['reportOrder' => 'ASC'])
        ]);

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