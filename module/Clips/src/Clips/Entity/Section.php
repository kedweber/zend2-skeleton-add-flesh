<?php

namespace Clips\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Clips\Entity\Question;

/**
 * Section
 *
 * @ORM\Table(name="sections")
 * @ORM\Entity
 */
class Section extends ClipsAbstractEntity
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
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title = 'Missing Title';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

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
     * @var integer
     *
     * @ORM\Column(name="report_id", type="integer", nullable=false)
     */
    private $reportId = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="report_order", type="integer", nullable=false)
     */
    private $reportOrder = '1';

    /**
     * One Section has Many Questions.
     * @!ORM\OneToMany(targetEntity="Clips\Entity\Question", mappedBy="section")
     *
     */
    private $questions;

    public function __construct($that = [])
    {
        parent::__construct($that);
       
        $this->questions = new ArrayCollection();
    }

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
     * Set title
     *
     * @param string $title
     *
     * @return Section
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
     * Set description
     *
     * @param string $description
     *
     * @return Sectios
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set ageMin
     *
     * @param integer $ageMin
     *
     * @return Section
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
     * @return Section
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
     * Set reportId
     *
     * @param integer $reportId
     *
     * @return Section
     */
    public function setReportId($reportId)
    {
        $this->reportId = $reportId;

        return $this;
    }

    /**
     * Get reportId
     *
     * @return integer
     */
    public function getReportId()
    {
        return $this->reportId;
    }

    /**
     * Set reportOrder
     *
     * @param integer $reportOrder
     *
     * @return Sectios
     */
    public function setReportOrder($reportOrder)
    {
        $this->reportOrder = $reportOrder;

        return $this;
    }

    /**
     * Get reportOrder
     *
     * @return integer
     */
    public function getReportOrder()
    {
        return $this->reportOrder;
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