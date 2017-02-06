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

use Doctrine\DBAL\Schema\View;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Clips\Service\UserService;

//use Clips\Form\Register\Form;

/**
 * Class AccountController
 *
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @category    Clips
 * @package Clips\Controller
 * @subpackage AccountController
 */
class AccountController extends AbstractActionController
{
    /** 
     * @var $accounts \Clips\Entity\Accounts 
     **/
    private $accounts = null;

    /**
     * @var $userService \Clips\Service\UserService
     */
    private $userService = null;


    /**
     * The main action of the homepage, shows basic page
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $this->accounts = $this->getServiceLocator()
            ->get('doctrine.entitymanager.orm_default')
            ->getRepository('Clips\Entity\Accounts')->findBy([], ['reportOrder' => 'ASC']);

        $config = [
            'form' => new QuestionForm(),
            'sections' => $this->accounts
        ];
        // GET /path
        return new ViewModel($config);
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


    //FIXME REFACTOR TO Abstract Controller
    private function init()
    {
        $this->serviceManager = $this->getServiceLocator();
        $this->entityManager = $this->serviceManager->get('Doctrine\ORM\EntityManager');
        $this->userService = new UserService($this->serviceManager, $this->entityManager);
        return $this;
    }

    //FIXME REFACTOR TO FOLLOWING LOGIC TO SERVICE

    /**
     * @return ViewModel
     */
    public function passwordResetAction()
    {
        //TODO FFS! Form Factory Service
        return new ViewModel();
    }

    public function loginAction() {
        $this->init();
        $userModel = [];
        if ($this->getRequest()->isPost()) {
            // Log the user in, which sets the currentUser with api_key and api_secret
            $userModel = $this->userService->checkLogin(
                $this->getRequest()->getPost("email", false),
                $this->getRequest()->getPost("password", false)
            );
        }

        //FIXME want a headless CMS possiblity, need logic for swapping from ViewModel to JsonModel
        $view = new ViewModel();
        if (!empty($userModel)) {
            //TODO check if profile is completed
            $view->setVariables(array(
                    'account' => $userModel
                )
            );
            $view->setTemplate("clips/account/welcome");
        }

        return $view;
    }

    /**
     * Log the user out, clearing all session variables and divert to homepage
     * 
     * @return ViewModel
     */
    public function logoutAction()
    {
        $this->init();
        $this->userService->logout();
        return $this->redirect()->toRoute("home");
    }

    /**
     * 
     * 
     * @return ViewModel
     */
    public function registerAction()
    {
        //TODO FFS! Form Factory Service
        return new ViewModel();
    }
    

}
