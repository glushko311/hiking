<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 05.07.2017
 * Time: 13:27
 */

namespace HikingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class MemberTrack
 * @package HikingBundle\Entity
 * @ORM\Table(name="t_member_track")
 * @ORM\Entity
 */
class MemberTrack
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $memberTrackId;

    /**
     * @ORM\Column(type="integer")
     */
    private $track_Id;

    /**
     * @ORM\Column(type="integer")
     */
    private $memberId;

    /**
     * Get memberTrackId
     *
     * @return integer
     */
    public function getMemberTrackId()
    {
        return $this->memberTrackId;
    }

    /**
     * Set trackId
     *
     * @param integer $trackId
     *
     * @return MemberTrack
     */
    public function setTrack_Id($trackId)
    {
        $this->track_id = $trackId;

        return $this;
    }

    /**
     * Get trackId
     *
     * @return integer
     */
    public function getTrack_Id()
    {
        return $this->track_Id;
    }

    public function getTrackId()
    {
        return $this->track_Id;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return MemberTrack
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get memberId
     *
     * @return integer
     */
    public function getMemberId()
    {
        return $this->memberId;
    }
}
