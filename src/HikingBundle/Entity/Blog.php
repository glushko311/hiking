<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 03.07.2017
 * Time: 22:28
 */

namespace HikingBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Blog
 * @package HikingBundle\Entity
 * @ORM\Table(name="blog")
 * @ORM\Entity
 */


class Blog
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */

    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $summary;
    /**
     * @ORM\Column(type="text")
     */
    private $body;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created;



    public function __construct(){
        $this->created = new \DateTime();
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
     * @return Blog
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
     * Set summary
     *
     * @param string $summary
     *
     * @return Blog
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Blog
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
    public function getCreated()
    {
        return $this->created;
    }
}

