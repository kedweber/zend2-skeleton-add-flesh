<?php

namespace Clips\Entity\Wordpress;

use Doctrine\ORM\Mapping as ORM;

/**
 * WapiTermRelationships
 *
 * @ORM\Table(name="wapi_term_relationships", indexes={@ORM\Index(name="term_taxonomy_id", columns={"term_taxonomy_id"})})
 * @ORM\Entity
 */
class WapiTermRelationships
{
    /**
     * @var integer
     *
     * @ORM\Column(name="object_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $objectId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="term_taxonomy_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $termTaxonomyId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="term_order", type="integer", nullable=false)
     */
    private $termOrder = '0';


}

