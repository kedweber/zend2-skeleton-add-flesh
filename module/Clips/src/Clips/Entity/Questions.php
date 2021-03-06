<?php

namespace Clips\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions", indexes={@ORM\Index(name="fk_section_id", columns={"section_id"})})
 * @ORM\Entity(repositoryClass="Clips\Repository\QuestionsRepository")
 */
class Questions
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
     * @ORM\Column(name="original_text", type="text", length=65535, nullable=false)
     */
    private $originalText;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="rating_text", type="string", length=10, nullable=false)
     */
    private $ratingText = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="age_min", type="integer", nullable=false)
     */
    private $ageMin = '4';

    /**
     * @var integer
     *
     * @ORM\Column(name="age_max", type="integer", nullable=false)
     */
    private $ageMax = '6';

    /**
     * @var \Clips\Entity\Sections
     *
     * @ORM\ManyToOne(targetEntity="Clips\Entity\Sections")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="section_id", referencedColumnName="id")
     * })
     */
    private $section;


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
     * Set originalText
     *
     * @param string $originalText
     *
     * @return Questions
     */
    public function setOriginalText($originalText)
    {
        $this->originalText = $originalText;

        return $this;
    }

    /**
     * Get originalText
     *
     * @return string
     */
    public function getOriginalText()
    {
        return $this->originalText;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Questions
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return Questions
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set ratingText
     *
     * @param string $ratingText
     *
     * @return Questions
     */
    public function setRatingText($ratingText)
    {
        $this->ratingText = $ratingText;

        return $this;
    }

    /**
     * Get ratingText
     *
     * @return string
     */
    public function getRatingText()
    {
        return $this->ratingText;
    }

    /**
     * Set ageMin
     *
     * @param integer $ageMin
     *
     * @return Questions
     */
    public function setAgeMin($ageMin)
    {
        $this->ageMin = $ageMin;

        return $this;
    }

    /**
     * Get ageMin
     *
     * @return integer
     */
    public function getAgeMin()
    {
        return $this->ageMin;
    }

    /**
     * Set ageMax
     *
     * @param integer $ageMax
     *
     * @return Questions
     */
    public function setAgeMax($ageMax)
    {
        $this->ageMax = $ageMax;

        return $this;
    }

    /**
     * Get ageMax
     *
     * @return integer
     */
    public function getAgeMax()
    {
        return $this->ageMax;
    }

    /**
     * Set section
     *
     * @param \Clips\Entity\Sections $section
     *
     * @return Questions
     */
    public function setSection(\Clips\Entity\Sections $section = null)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return \Clips\Entity\Sections
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Return named property
     * 
     * @param $property
     * @return mixed
     */
    public function get($property)
    {
        return $this->$property;
    }
}
