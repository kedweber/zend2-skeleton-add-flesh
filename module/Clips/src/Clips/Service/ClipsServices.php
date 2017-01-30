<?php
/**
 * CLiPs - WEBerStudio.net
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @license   All rights reserved
 */
namespace Clips\Service;

use Zend\Db\Adapter\Adapter;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceManager;
use Doctrine\ORM\EntityManager;

/**
 * ClipsServices - Abstract
 *
 * An Abstract Service as boilerplate for other services
 *
 * @category    Clips
 * @package     Service
 * @subpackage  ClipsServices
 */
abstract class ClipsServices implements ServiceLocatorAwareInterface {

    /**
     * The database adapter
     *
     * @var \Zend\Db\Adapter\Adapter
     **/
    protected $db;

    /**
     * The ORM Entity Manager
     *
     * @var \Doctrine\ORM\EntityManager
     */
    protected $entityManager;

    /**
     * The Zend Service Manager for easy access to other services
     *
     * @var \Zend\ServiceManager\ServiceManager
     */
    protected $servicemanager;

    /**
     * ClipsServices constructor.
     * 
     * @param ServiceManager $serviceManager
     * @param EntityManager $entityManager
     */
    public function __construct(ServiceManager $serviceManager, EntityManager $entityManager) {
        $this->entityManager = $entityManager;
        $this->servicemanager = $serviceManager;
    }

    /**
     * The constructor set the database adapter and servicemanager for global usage
     *
     * @param Adapter $dbAdapter
     * @param ServiceManager $sm
     */
    public function dis__construct(Adapter $dbAdapter, ServiceManager $sm) {
        $this->db = $dbAdapter;
        $this->servicemanager = $sm;
    }

    /**
     * Return the servicemanager
     *
     * @return \Zend\ServiceManager\ServiceManager
     */
    public function getServiceLocator() {
        return $this->servicemanager;
    }


    /**
     * Set service locator
     *
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
     * @return void
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator) {
        $this->servicemanager = $serviceLocator;
    }
}
