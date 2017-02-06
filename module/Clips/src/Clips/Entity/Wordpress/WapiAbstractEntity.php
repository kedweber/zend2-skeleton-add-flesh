<?php
/**
 * CLiPs - WEBerStudio.net
 *
 * Doctrine Entity for Accessing the basic Core WordPress Tables
 *
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @license   All rights reserved
 */
namespace Clips\Entity\Wordpress;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Repository;


abstract class WapiAbstractEntity
{
    /**
     * @var  \Doctrine\ORM\EntityManager|null
     */
    protected $entityManager = null;

    /**
     * @var \Doctrine\ORM\Repository|null
     */
    protected $repository = null;


    /**
     * Denote which default connection this entity uses
     *
     * @var string
     */
    protected $entityManagerConfigPath = 'doctrine.entitymanager.orm_wordpress';

    public function __construct(EntityManager $entityManager)
    {
        if ($entityManager instanceof \Doctrine\ORM\EntityManager) {
            $this->entityManager = $entityManager;
        }
    }

    public function getRepository() {
        //TODO move to a factory
        return $this->entityManager->getRepository(get_class($this));
    }

    public function fetchById($id = 0)
    {
        return $this->getRepository()->find($id);
    }
}
