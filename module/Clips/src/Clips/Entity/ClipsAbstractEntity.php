<?php
/**
 * Created by PhpStorm.
 * User: ked
 * Date: 03/02/17
 * Time: 04:40
 */

namespace Clips\Entity;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Repository;


abstract class ClipsAbstractEntity
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
    protected $entityManagerConfigPath = 'doctrine.entitymanager.orm_default';

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
