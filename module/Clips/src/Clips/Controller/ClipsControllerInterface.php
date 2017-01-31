<?php
/**
 * Created by PhpStorm.
 * User: ked
 * Date: 31/01/17
 * Time: 15:27
 */

namespace Clips\Controller;

/**
 * Interface ClipsControllerInterface
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @category    Clips
 * @package Clips\Controller
 * @subpackage ClipsControllerInterface
 */
interface ClipsControllerInterface
{
    /**
     * GET /path
     *
     * @return mixed
     */
    public function indexAction();

    /**
     * GET /path/create
     *
     * @return mixed
     */
    public function createAction();

    /**
     * POST /path
     *
     * @return mixed
     */
    public function storeAction();

    /**
     * GET /path/{id}
     *
     * @return mixed
     */
    public function showAction();

    /**
     * GET /path/{id}/edit
     *
     * @return mixed
     */
    public function editAction();

    /**
     * PUT or PATCH /path/{id}/update
     *
     * @return mixed
     */
    public function updateAction();

    /**
     * DELETE /path/{id}
     *
     * @return mixed
     */
    public function destroyAction();
}