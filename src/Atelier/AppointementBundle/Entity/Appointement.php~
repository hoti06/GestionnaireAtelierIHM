<?php

namespace Atelier\AppointementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Appointement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Atelier\AppointementBundle\Entity\AppointementRepository")
 */
class Appointement
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
    * @ORM\OneToOne(targetEntity="Atelier\ReservationBundle\Entity\Reservation", cascade={"remove"})
    */
    private $reservation; 
    
   /**
     * @var string
     *
     * @ORM\Column(name="salle", type="string", length=255)
     * @Assert\NotBlank() 
     */
    private $salle;	

   /**
     * @var time
     *
     * @ORM\Column(name="time", type="time")
     * @Assert\NotBlank() 
     */
    private $time;	
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function getReservation()
    {
        return $this->reservation;
    }
    
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;
    }
   
    public function getTime()
    {
        return $this->time;
    }
    
    public function setTime($time)
    {
        $this->time = $time;
    }

    public function getSalle()
    {
        return $this->salle;
    }
    
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }
}
