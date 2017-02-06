<?php

namespace Clips\Entity\Wordpress;

use Doctrine\ORM\Mapping as ORM;

/**
 * WapiTermTaxonomy
 *
 * @ORM\Table(name="wapi_term_taxonomy", uniqueConstraints={@ORM\UniqueConstraint(name="term_id_taxonomy", columns={"term_id", "taxonomy"})}, indexes={@ORM\Index(name="taxonomy", columns={"taxonomy"})})
 * @ORM\Entity
 */
class WapiTermTaxonomy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="term_taxonomy_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $termTaxonomyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="term_id", type="bigint", nullable=false)
     */
    private $termId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="taxonomy", type="string", length=32, nullable=false)
     */
    private $taxonomy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="bigint", nullable=false)
     */
    private $parent = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="bigint", nullable=false)
     */
    private $count = '0';


}

