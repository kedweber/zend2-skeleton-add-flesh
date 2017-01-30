<?php

namespace Clips\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Institutes
 *
 * @ORM\Table(name="institutes")
 * @ORM\Entity
 */
class Institutes
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=50, nullable=false)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="house_number", type="string", length=10, nullable=false)
     */
    private $houseNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=50, nullable=true)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=4, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="geolocation", type="string", length=50, nullable=true)
     */
    private $geolocation;

    /**
     * @var string
     *
     * @ORM\Column(name="postal1", type="string", length=50, nullable=true)
     */
    private $postal1;

    /**
     * @var string
     *
     * @ORM\Column(name="postal2", type="string", length=50, nullable=true)
     */
    private $postal2;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_number", type="string", length=10, nullable=true)
     */
    private $postalNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_country", type="string", length=4, nullable=true)
     */
    private $postalCountry;



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
     * Set name
     *
     * @param string $name
     *
     * @return Institutes
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address1
     *
     * @param string $address1
     *
     * @return Institutes
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set houseNumber
     *
     * @param string $houseNumber
     *
     * @return Institutes
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * Get houseNumber
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Set address2
     *
     * @param string $address2
     *
     * @return Institutes
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Institutes
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set geolocation
     *
     * @param string $geolocation
     *
     * @return Institutes
     */
    public function setGeolocation($geolocation)
    {
        $this->geolocation = $geolocation;

        return $this;
    }

    /**
     * Get geolocation
     *
     * @return string
     */
    public function getGeolocation()
    {
        return $this->geolocation;
    }

    /**
     * Set postal1
     *
     * @param string $postal1
     *
     * @return Institutes
     */
    public function setPostal1($postal1)
    {
        $this->postal1 = $postal1;

        return $this;
    }

    /**
     * Get postal1
     *
     * @return string
     */
    public function getPostal1()
    {
        return $this->postal1;
    }

    /**
     * Set postal2
     *
     * @param string $postal2
     *
     * @return Institutes
     */
    public function setPostal2($postal2)
    {
        $this->postal2 = $postal2;

        return $this;
    }

    /**
     * Get postal2
     *
     * @return string
     */
    public function getPostal2()
    {
        return $this->postal2;
    }

    /**
     * Set postalNumber
     *
     * @param string $postalNumber
     *
     * @return Institutes
     */
    public function setPostalNumber($postalNumber)
    {
        $this->postalNumber = $postalNumber;

        return $this;
    }

    /**
     * Get postalNumber
     *
     * @return string
     */
    public function getPostalNumber()
    {
        return $this->postalNumber;
    }

    /**
     * Set postalCountry
     *
     * @param string $postalCountry
     *
     * @return Institutes
     */
    public function setPostalCountry($postalCountry)
    {
        $this->postalCountry = $postalCountry;

        return $this;
    }

    /**
     * Get postalCountry
     *
     * @return string
     */
    public function getPostalCountry()
    {
        return $this->postalCountry;
    }
}
