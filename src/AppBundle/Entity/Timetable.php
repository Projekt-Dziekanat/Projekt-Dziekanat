<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timetable
 *
 * @ORM\Table(name="timetable", indexes={@ORM\Index(name="fk_timetable_add_lecturer_idx", columns={"add_lecturer_id"}), @ORM\Index(name="fk_timetable_add_class1_idx", columns={"add_class_id"}), @ORM\Index(name="fk_timetable_add_subject1_idx", columns={"add_subject_id"}), @ORM\Index(name="fk_timetable_add_group1_idx", columns={"add_group_id"})})
 * @ORM\Entity
 */
class Timetable
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
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="time", nullable=false)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="time", nullable=false)
     */
    private $endTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="day_of_week", type="integer", nullable=false)
     */
    private $dayOfWeek;

    /**
     * @var \AddClass
     *
     * @ORM\ManyToOne(targetEntity="AddClass")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="add_class_id", referencedColumnName="id")
     * })
     */
    private $addClass;

    /**
     * @var \AddGroup
     *
     * @ORM\ManyToOne(targetEntity="AddGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="add_group_id", referencedColumnName="id")
     * })
     */
    private $addGroup;

    /**
     * @var \AddLecturer
     *
     * @ORM\ManyToOne(targetEntity="AddLecturer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="add_lecturer_id", referencedColumnName="id")
     * })
     */
    private $addLecturer;

    /**
     * @var \AddSubject
     *
     * @ORM\ManyToOne(targetEntity="AddSubject")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="add_subject_id", referencedColumnName="id")
     * })
     */
    private $addSubject;



    /**
     * Get idtimetable
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return Timetable
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return Timetable
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set dayOfWeek
     *
     * @param integer $dayOfWeek
     *
     * @return Timetable
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Get dayOfWeek
     *
     * @return integer
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Set addClass
     *
     * @param \AppBundle\Entity\AddClass $addClass
     *
     * @return Timetable
     */
    public function setAddClass(\AppBundle\Entity\AddClass $addClass = null)
    {
        $this->addClass = $addClass;

        return $this;
    }

    /**
     * Get addClass
     *
     * @return \AppBundle\Entity\AddClass
     */
    public function getAddClass()
    {
        return $this->addClass;
    }

    /**
     * Set addGroup
     *
     * @param \AppBundle\Entity\AddGroup $addGroup
     *
     * @return Timetable
     */
    public function setAddGroup(\AppBundle\Entity\AddGroup $addGroup = null)
    {
        $this->addGroup = $addGroup;

        return $this;
    }

    /**
     * Get addGroup
     *
     * @return \AppBundle\Entity\AddGroup
     */
    public function getAddGroup()
    {
        return $this->addGroup;
    }

    /**
     * Set addLecturer
     *
     * @param \AppBundle\Entity\AddLecturer $addLecturer
     *
     * @return Timetable
     */
    public function setAddLecturer(\AppBundle\Entity\AddLecturer $addLecturer = null)
    {
        $this->addLecturer = $addLecturer;

        return $this;
    }

    /**
     * Get addLecturer
     *
     * @return \AppBundle\Entity\AddLecturer
     */
    public function getAddLecturer()
    {
        return $this->addLecturer;
    }

    /**
     * Set addSubject
     *
     * @param \AppBundle\Entity\AddSubject $addSubject
     *
     * @return Timetable
     */
    public function setAddSubject(\AppBundle\Entity\AddSubject $addSubject = null)
    {
        $this->addSubject = $addSubject;

        return $this;
    }

    /**
     * Get addSubject
     *
     * @return \AppBundle\Entity\AddSubject
     */
    public function getAddSubject()
    {
        return $this->addSubject;
    }
}
