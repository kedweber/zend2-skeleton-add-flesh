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

use Doctrine\ORM\Mapping as ORM;

/**
 * WapiOptions
 *
 * @ORM\Table(name="wapi_options", uniqueConstraints={@ORM\UniqueConstraint(name="option_name", columns={"option_name"})})
 * @ORM\Entity
 */
class WapiOptions extends WordpressAbstractEntity
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



    /**
     * Get optionId
     *
     * @return integer
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * Set optionName
     *
     * @param string $optionName
     *
     * @return WapiOptions
     */
    public function setOptionName($optionName)
    {
        $this->optionName = $optionName;

        return $this;
    }

    /**
     * Get optionName
     *
     * @return string
     */
    public function getOptionName()
    {
        return $this->optionName;
    }

    /**
     * Set optionValue
     *
     * @param string $optionValue
     *
     * @return WapiOptions
     */
    public function setOptionValue($optionValue)
    {
        $this->optionValue = $optionValue;

        return $this;
    }

    /**
     * Get optionValue
     *
     * @return string
     */
    public function getOptionValue()
    {
        return $this->optionValue;
    }

    /**
     * Set autoload
     *
     * @param string $autoload
     *
     * @return WapiOptions
     */
    public function setAutoload($autoload)
    {
        $this->autoload = $autoload;

        return $this;
    }

    /**
     * Get autoload
     *
     * @return string
     */
    public function getAutoload()
    {
        return $this->autoload;
    }
}
