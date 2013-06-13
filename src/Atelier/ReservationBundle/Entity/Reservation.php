<?php

namespace Atelier\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Resrvation
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Atelier\ReservationBundle\Entity\ReservationRepository")
 */
class Reservation
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
     * @var text
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
	
   
    /**
     * @var datetime $date
     *
     * @ORM\Column(name="datebegin", type="datetime")
     */
    private $datebegin;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="dateend",  type="datetime")
     */
    private $dateend;
	/**
	* @ORM\ManyToOne(targetEntity="Atelier\MaterialBundle\Entity\Material")
        * @ORM\JoinColumn(nullable=false)
	*/
    private $material; 
    /**
	* @ORM\ManyToOne(targetEntity="Atelier\UserBundle\Entity\User")
        * @ORM\JoinColumn(nullable=false)
	*/
    private $user; 


	
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

   
    public function setDateBegin(\Datetime $date)
    {
      $this->datebegin = $date;
    }
 
    /**
     * @return datetime
     */
    public function getDateBegin()
    {
      return $this->datebegin;
    }
    /**
     * @return datetime
     */
    public function getDateEnd()
    {
      return $this->dateend;
    }

    public function setDateEnd(\Datetime $date)
    {
      $this->dateend = $date;
    }
 
   
    
    public function setDescription($description)
    {
        $this->description = $description;
    
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial(\Atelier\MaterialBundle\Entity\Material $material)
    {
        $this->material=$material;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser(\Atelier\UserBundle\Entity\User $user)
    {
        $this->user=$user;
    }
}
