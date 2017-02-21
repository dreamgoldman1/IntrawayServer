<?php

namespace GOL\ContentBundle\Entity;

/**
 * Profile
 */
class Profile
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $profile;

    /**
     * @var string
     */
    private $profession;

    /**
     * @var string
     */
    private $hobby1;

    /**
     * @var string
     */
    private $hobby2;

    /**
     * @var string
     */
    private $hobby3;
    
    /**
     * @var string
     */
    private $percent1;

    /**
     * @var string
     */
    private $percent2;

    /**
     * @var string
     */
    private $percent3;


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
     * Set name
     *
     * @param string $name
     *
     * @return Profile
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
     * Set image
     *
     * @param string $image
     *
     * @return Profile
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Profile
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Profile
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
     * Set profile
     *
     * @param string $profile
     *
     * @return Profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return Profile
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set hobby1
     *
     * @param string $hobby1
     *
     * @return Profile
     */
    public function setHobby1($hobby1)
    {
        $this->hobby1 = $hobby1;

        return $this;
    }

    /**
     * Get hobby1
     *
     * @return string
     */
    public function getHobby1()
    {
        return $this->hobby1;
    }

    /**
     * Set hobby2
     *
     * @param string $hobby2
     *
     * @return Profile
     */
    public function setHobby2($hobby2)
    {
        $this->hobby2 = $hobby2;

        return $this;
    }

    /**
     * Get hobby2
     *
     * @return string
     */
    public function getHobby2()
    {
        return $this->hobby2;
    }

    /**
     * Set hobby3
     *
     * @param string $hobby3
     *
     * @return Profile
     */
    public function setHobby3($hobby3)
    {
        $this->hobby3 = $hobby3;

        return $this;
    }

    /**
     * Get hobby3
     *
     * @return string
     */
    public function getHobby3()
    {
        return $this->hobby3;
    }
    
    function getPercent1() {
        return $this->percent1;
    }

    function getPercent2() {
        return $this->percent2;
    }

    function getPercent3() {
        return $this->percent3;
    }

    function setPercent1($percent1) {
        $this->percent1 = $percent1;
    }

    function setPercent2($percent2) {
        $this->percent2 = $percent2;
    }

    function setPercent3($percent3) {
        $this->percent3 = $percent3;
    }
}

