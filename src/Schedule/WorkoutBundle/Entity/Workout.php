<?php

namespace Schedule\WorkoutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workout
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Schedule\WorkoutBundle\Entity\WorkoutRepository")
 */
class Workout
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="activity", type="string", length=255)
     */
    private $activity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ocurrenceDate", type="date")
     */
    private $ocurrenceDate;

    /**
     *
     * @ORM\Column(name="hours", type="float")
     */
    private $hours;


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
     * Set activity
     *
     * @param string $activity
     * @return Workout
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
    
        return $this;
    }

    /**
     * Set ocurrenceDate
     *
     * @param \DateTime $ocurrenceDate
     * @return Workout
     */
    public function setOcurrenceDate($ocurrenceDate)
    {
        $this->ocurrenceDate = $ocurrenceDate;

        return $this;
    }

    /**
     * Set hours
     *
     * @param float $hours
     * @return Workout
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get activity
     *
     * @return string 
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Get ocurrenceDate
     *
     * @return \DateTime 
     */
    public function getOcurrenceDate()
    {
        return $this->ocurrenceDate;
    }

    /**
     * Get hours
     *
     * @return \float
     */
    public function getHours()
    {
        return $this->hours;
    }
}
