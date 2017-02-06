<?php

namespace Clips\Entity\Wordpress;

use Doctrine\ORM\Mapping as ORM;

/**
 * WapiCommentmeta
 *
 * @ORM\Table(name="wapi_commentmeta", indexes={@ORM\Index(name="comment_id", columns={"comment_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity
 */
class WapiCommentmeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="meta_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $metaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_id", type="bigint", nullable=false)
     */
    private $commentId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="meta_key", type="string", length=255, nullable=true)
     */
    private $metaKey;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_value", type="text", nullable=true)
     */
    private $metaValue;


}

