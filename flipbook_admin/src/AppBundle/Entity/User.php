<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $fName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $lName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $company;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $mobile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $address;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getfName() {
        return $this->fName;
    }

    public function getlName() {
        return $this->lName;
    }

    public function gettitle() {
        return $this->title;
    }

    public function getcompany() {
        return $this->company;
    }

    public function getphone() {
        return $this->phone;
    }

    public function getmobile() {
        return $this->mobile;
    }

    public function getaddress() {
        return $this->address;
    }

    /**
     * Set fName
     *
     * @param string $fName
     *
     * @return User
     */
    public function setFName($fName)
    {
        $this->fName = $fName;

        return $this;
    }

    /**
     * Set lName
     *
     * @param string $lName
     *
     * @return User
     */
    public function setLName($lName)
    {
        $this->lName = $lName;

        return $this;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return User
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return User
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return User
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}
