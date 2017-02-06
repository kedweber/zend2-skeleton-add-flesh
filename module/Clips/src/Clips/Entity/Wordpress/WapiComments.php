<?php

namespace Clips\Entity\Wordpress;

use Doctrine\ORM\Mapping as ORM;

/**
 * WapiComments
 *
 * @ORM\Table(name="wapi_comments", indexes={@ORM\Index(name="comment_post_ID", columns={"comment_post_ID"}), @ORM\Index(name="comment_approved_date_gmt", columns={"comment_approved", "comment_date_gmt"}), @ORM\Index(name="comment_date_gmt", columns={"comment_date_gmt"}), @ORM\Index(name="comment_parent", columns={"comment_parent"}), @ORM\Index(name="comment_author_email", columns={"comment_author_email"})})
 * @ORM\Entity
 */
class WapiComments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comment_ID", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_post_ID", type="bigint", nullable=false)
     */
    private $commentPostId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author", type="text", length=255, nullable=false)
     */
    private $commentAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author_email", type="string", length=100, nullable=false)
     */
    private $commentAuthorEmail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author_url", type="string", length=200, nullable=false)
     */
    private $commentAuthorUrl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author_IP", type="string", length=100, nullable=false)
     */
    private $commentAuthorIp = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date", type="datetime", nullable=false)
     */
    private $commentDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date_gmt", type="datetime", nullable=false)
     */
    private $commentDateGmt = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="comment_content", type="text", length=65535, nullable=false)
     */
    private $commentContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_karma", type="integer", nullable=false)
     */
    private $commentKarma = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment_approved", type="string", length=20, nullable=false)
     */
    private $commentApproved = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="comment_agent", type="string", length=255, nullable=false)
     */
    private $commentAgent = '';

    /**
     * @var string
     *
     * @ORM\Column(name="comment_type", type="string", length=20, nullable=false)
     */
    private $commentType = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_parent", type="bigint", nullable=false)
     */
    private $commentParent = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId = '0';


}

