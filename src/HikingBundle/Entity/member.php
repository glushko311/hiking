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
 * Class member
 * @package HikingBundle\Entity
 * @ORM\Table(name="t_member")
 * @ORM\Entity
 */
class member
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

}