<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 05.07.2017
 * Time: 12:17
 */

namespace HikingBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Member
 * @package HikingBundle\Entity
 * @ORM\Table(name="t_member")
 * @ORM\Entity
 */
class Member
{
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $member_id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $lastName;

    /**
     * @ORM\Column(type="text")
     */
    private $about;

    

    /**
     * Get memberId
     *
     * @return integer
     */
    public function getMember_Id()
    {
        return $this->member_id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Member
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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Member
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set about
     *
     * @param string $about
     *
     * @return Member
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }
}
