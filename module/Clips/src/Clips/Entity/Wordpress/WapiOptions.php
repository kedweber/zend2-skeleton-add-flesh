<?php

namespace Clips\Entity\Wordpress;

use Doctrine\ORM\Mapping as ORM;

/**
 * WapiOptions
 *
 * @ORM\Table(name="wapi_options", uniqueConstraints={@ORM\UniqueConstraint(name="option_name", columns={"option_name"})})
 * @ORM\Entity
 */
class WapiOptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="option_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optionId;

    /**
     * @var string
     *
     * @ORM\Column(name="option_name", type="string", length=191, nullable=false)
     */
    private $optionName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option_value", type="text", nullable=false)
     */
    private $optionValue;

    /**
     * @var string
     *
     * @ORM\Column(name="autoload", type="string", length=20, nullable=false)
     */
    private $autoload = 'yes';


}

