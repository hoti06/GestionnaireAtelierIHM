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
	* @ORM\ManyToMany(targetEntity="Atelier\MaterialBundle\Entity\Material", inversedBy="bookings")
        * @ORM\JoinColumn(nullable=false)
	*/
    private $materials; 
    
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


	
    public function getUser()
    {
        return $this->user;
    }

    public function setUser(\Atelier\UserBundle\Entity\User $user)
    {
        $this->user=$user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->materials = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set datebegin
     *
     * @param \DateTime $datebegin
     * @return Reservation
     */
    public function setDatebegin($datebegin)
    {
        $this->datebegin = $datebegin;
    
        return $this;
    }

    /**
     * Get datebegin
     *
     * @return \DateTime 
     */
    public function getDatebegin()
    {
        return $this->datebegin;
    }

    /**
     * Set dateend
     *
     * @param \DateTime $dateend
     * @return Reservation
     */
    public function setDateend($dateend)
    {
        $this->dateend = $dateend;
    
        return $this;
    }

    /**
     * Get dateend
     *
     * @return \DateTime 
     */
    public function getDateend()
    {
        return $this->dateend;
    }

    /**
     * Add materials
     *
     * @param \Atelier\MaterialBundle\Entity\Material $materials
     * @return Reservation
     */
    public function addMaterial(\Atelier\MaterialBundle\Entity\Material $materials)
    {
        $this->materials[] = $materials;
    
        return $this;
    }

    /**
     * Remove materials
     *
     * @param \Atelier\MaterialBundle\Entity\Material $materials
     */
    public function removeMaterial(\Atelier\MaterialBundle\Entity\Material $materials)
    {
        $this->materials->removeElement($materials);
    }

    /**
     * Get materials
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMaterials()
    {
        return $this->materials;
    }
    
}
