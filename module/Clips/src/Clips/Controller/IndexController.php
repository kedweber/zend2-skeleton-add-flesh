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

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


/**
 * Class IndexController
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @category    Clips
 * @package Clips\Controller
 * @subpackage IndexController
 */
class IndexController extends AbstractActionController
{
    /**
     * The main action of the homepage, shows basic page
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        return new ViewModel();
    }

    //STUB functions similar to Laraval's RESTful implementation
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
