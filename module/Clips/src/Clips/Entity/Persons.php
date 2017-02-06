<?php

namespace Clips\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persons
 *
 * @ORM\Table(name="persons")
 * @ORM\Entity
 */
class Persons
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
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean", nullable=false)
     */
    private $gender = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="name_first", type="string", length=50, nullable=false)
     */
    private $nameFirst;

    /**
     * @var string
     *
     * @ORM\Column(name="name_middle", type="string", length=50, nullable=true)
     */
    private $nameMiddle;

    /**
     * @var string
     *
     * @ORM\Column(name="name_last", type="string", length=50, nullable=false)
     */
    private $nameLast;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth", type="date", nullable=false)
     */
    private $birth;

    /**
     * @var string
     *
     * @ORM\Column(name="languages", type="string", length=50, nullable=false)
     */
    private $languages = 'en';



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
     * Set gender
     *
     * @param boolean $gender
     *
     * @return Persons
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Persons
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set nameFirst
     *
     * @param string $nameFirst
     *
     * @return Persons
     */
    public function setNameFirst($nameFirst)
    {
        $this->nameFirst = $nameFirst;

        return $this;
    }

    /**
     * Get nameFirst
     *
     * @return string
     */
    public function getNameFirst()
    {
        return $this->nameFirst;
    }

    /**
     * Set nameMiddle
     *
     * @param string $nameMiddle
     *
     * @return Persons
     */
    public function setNameMiddle($nameMiddle)
    {
        $this->nameMiddle = $nameMiddle;

        return $this;
    }

    /**
     * Get nameMiddle
     *
     * @return string
     */
    public function getNameMiddle()
    {
        return $this->nameMiddle;
    }

    /**
     * Set nameLast
     *
     * @param string $nameLast
     *
     * @return Persons
     */
    public function setNameLast($nameLast)
    {
        $this->nameLast = $nameLast;

        return $this;
    }

    /**
     * Get nameLast
     *
     * @return string
     */
    public function getNameLast()
    {
        return $this->nameLast;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Persons
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set birth
     *
     * @param \DateTime $birth
     *
     * @return Persons
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set languages
     *
     * @param string $languages
     *
     * @return Persons
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return string
     */
    public function getLanguages()
    {
        return $this->languages;
    }
}
