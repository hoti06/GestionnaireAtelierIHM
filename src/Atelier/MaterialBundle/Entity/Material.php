<?php

namespace Atelier\MaterialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Atelier\MaterialBundle\EventListener\RemoveProduct;

/**
 * Material
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Atelier\MaterialBundle\Entity\MaterialRepository")
 */
class Material
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


	protected $container = NULL;

	/**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", nullable=false)
     */
	private $uuid;


	/**
     * @var text
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
	
	/**
	* @ORM\ManyToOne(targetEntity="Atelier\ProductBundle\Entity\Product", inversedBy="materials", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
	*/
	private $product;
	

/**
   * @ORM\ManyToMany(targetEntity="Atelier\ReservationBundle\Entity\Reservation", mappedBy="materials")
   */
  private $bookings; 
 	
	
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    public function getUuid()
    {
        return $this->uuid;
    }
    
    public function getContainer()
    {
        return $this->container;
    }
    /**
     * Set description
     *
     * @param string $description
     * @return Material
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
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



    /**
     * Set product
     *
     * @param \Atelier\ProductBundle\Entity\Product $product
     * @return Material
     */
    public function setProduct(\Atelier\ProductBundle\Entity\Product $product)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \Atelier\ProductBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * Constructor
     */
    public function __construct(/*$container*/)
    {
        $this->bookings = new \Doctrine\Common\Collections\ArrayCollection();
		//$this->container = $container;
		
    //    $this->uuid = $this->get('atelier_material.uuid')->genererUUID();
    }
    
    /**
     * Add bookings
     *
     * @param \Atelier\ReservationBundle\Entity\Reservation $bookings
     * @return Material
     */
    public function addBooking(\Atelier\ReservationBundle\Entity\Reservation $bookings)
    {
        $this->bookings[] = $bookings;
    
        return $this;
    }

    /**
     * Remove bookings
     *
     * @param \Atelier\ReservationBundle\Entity\Reservation $bookings
     */
    public function removeBooking(\Atelier\ReservationBundle\Entity\Reservation $bookings)
    {
        $this->bookings->removeElement($bookings);
    }

    /**
     * Get bookings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBookings()
    {
        return $this->bookings;
    }
    

    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    
        return $this;
    }
}
