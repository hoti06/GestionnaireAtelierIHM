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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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
    
}
