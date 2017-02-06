<?php
/**
 * CLiPs - WEBerStudio.net
 * 
 * Doctrine Entity for Accessing the basic Core WordPress Tables
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @license   All rights reserved
 */
namespace Clips\Entity\Wordpress;

use Doctrine\ORM\Mapping as ORM;
use Clips\Entity\Wordpress\WordpressAbstractEntity;

/**
 * WapiCommentmeta
 *
 * @ORM\Table(name="wapi_commentmeta", indexes={@ORM\Index(name="comment_id", columns={"comment_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity
 */
class WapiCommentmeta extends WordpressAbstractEntity
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



    /**
     * Get metaId
     *
     * @return integer
     */
    public function getMetaId()
    {
        return $this->metaId;
    }

    /**
     * Set commentId
     *
     * @param integer $commentId
     *
     * @return WapiCommentmeta
     */
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;

        return $this;
    }

    /**
     * Get commentId
     *
     * @return integer
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * Set metaKey
     *
     * @param string $metaKey
     *
     * @return WapiCommentmeta
     */
    public function setMetaKey($metaKey)
    {
        $this->metaKey = $metaKey;

        return $this;
    }

    /**
     * Get metaKey
     *
     * @return string
     */
    public function getMetaKey()
    {
        return $this->metaKey;
    }

    /**
     * Set metaValue
     *
     * @param string $metaValue
     *
     * @return WapiCommentmeta
     */
    public function setMetaValue($metaValue)
    {
        $this->metaValue = $metaValue;

        return $this;
    }

    /**
     * Get metaValue
     *
     * @return string
     */
    public function getMetaValue()
    {
        return $this->metaValue;
    }
}
