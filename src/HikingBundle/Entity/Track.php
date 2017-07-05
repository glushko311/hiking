<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 04.07.2017
 * Time: 21:39
 */



namespace HikingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Track
 * @package HikingBundle\Entity
 * @ORM\Table(name="t_track")
 * @ORM\Entity
 */


class Track
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $track_id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="smallint")
     */
    private $days;

    /**
     * @ORM\Column(type="smallint")
     */
    private $difficult;

    /**
     * @ORM\Column(type="text")
     */
    private $track;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    



    /**
     * Get trackId
     *
     * @return integer
     */
    public function getTrack_id()
    {
        return $this->track_id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Track
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set days
     *
     * @param integer $days
     *
     * @return Track
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get days
     *
     * @return integer
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Set difficult
     *
     * @param integer $difficult
     *
     * @return Track
     */
    public function setDifficult($difficult)
    {
        $this->difficult = $difficult;

        return $this;
    }

    /**
     * Get difficult
     *
     * @return integer
     */
    public function getDifficult()
    {
        return $this->difficult;
    }

    /**
     * Set track
     *
     * @param string $track
     *
     * @return Track
     */
    public function setTrack($track)
    {
        $this->track = $track;

        return $this;
    }

    /**
     * Get track
     *
     * @return string
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Track
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }
}
