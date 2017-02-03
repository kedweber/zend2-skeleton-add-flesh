<?php
/**
 * Created by PhpStorm.
 * User: ked
 * Date: 03/02/17
 * Time: 04:40
 */

namespace Clips\Entity;



abstract class ClipsAbstractEntity
{
    protected $entityManager = null;

    protected $repository = null;

    public function getRepository() {
        return $this->entityManager->getRepository(get_class($this));
//        var_dump(get_class($this));
    }
}