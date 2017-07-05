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
    private $trackId;

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
    public function setTrackId($trackId)
    {
        $this->trackId = $trackId;

        return $this;
    }

    /**
     * Get trackId
     *
     * @return integer
     */
    public function getTrackId()
    {
        return $this->trackId;
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
