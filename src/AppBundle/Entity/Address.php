<?php

namespace AppBundle\Entity;

use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Address
 */
class Address
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $streetAndName;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var BirthdayType
     */
    private $birthday;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     *
     * @Assert\Image(
     *     minWidth = 200,
     *     maxWidth = 400,
     *     minHeight = 200,
     *     maxHeight = 400
     * )
     */
    private $picture;
    /**
     * @var string
     *
     */
    private $pictureLoc;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Address
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function firstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastname
     *
     * @param string $lastName
     *
     * @return Address
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set street
     *
     * @param string $streetAndName
     *
     * @return Address
     */
    public function setStreetAndName($streetAndName)
    {
        $this->streetAndName = $streetAndName;

        return $this;
    }

    /**
     * Get streetAndName
     *
     * @return string
     */
    public function getStreetAndName()
    {
        return $this->streetAndName;
    }

    /**
     * Set zip
     *
     * @param string $zip
     *
     * @return Address
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Address
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
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Address
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set birthday
     *
     * @param BirthdayType $birthday
     *
     * @return Address
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday->format("Y-m-d");

        return $this;
    }

    /**
     * Get birthday
     *
     * @return DateTime
     */
    public function getBirthday()
    {
        return new \DateTime($this->birthday);
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Address
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
     * Set picture
     *
     * @param File $picture
     *
     * @return Address
     */
    public function setPicture($picture = null)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set pictureLoc
     *
     * @param string $pictureLoc
     *
     * @return Address
     */
    public function setPictureLoc($pictureLoc = null)
    {
        $this->pictureLoc = $pictureLoc;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPictureLoc()
    {
        return $this->pictureLoc;
    }
}

