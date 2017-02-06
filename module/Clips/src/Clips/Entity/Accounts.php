<?php

namespace Clips\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accounts
 *
 * @ORM\Table(name="accounts", indexes={@ORM\Index(name="key", columns={"key"}), @ORM\Index(name="username", columns={"username"})})
 * @ORM\Entity
 */
class Accounts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=64, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=64, nullable=false)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=64, nullable=false)
     */
    private $secret;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
     */
    private $active;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Accounts
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Accounts
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return Accounts
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set secret
     *
     * @param string $secret
     *
     * @return Accounts
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return Accounts
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
    }



}
