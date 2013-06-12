<?php

namespace Atelier\CategoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Atelier\CategoryBundle\Entity\CategoryRepository")
 * @UniqueEntity(fields="name", message="There is already a category with this name.")
 */
class Category
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     * @Assert\NotBlank() 
     */
    private $name;

	/**
	* @ORM\OneToMany(targetEntity="Atelier\ProductBundle\Entity\Product", mappedBy="category", cascade={"remove"})
	*/
	private $products; 


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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add products
     *
     * @param \Atelier\ProductBundle\Entity\Product $products
     * @return Category
     */
    public function addProduct(\Atelier\ProductBundle\Entity\Product $products)
    {
        $this->products[] = $products;
    
        return $this;
    }

    /**
     * Remove products
     *
     * @param \Atelier\ProductBundle\Entity\Product $products
     */
    public function removeProduct(\Atelier\ProductBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }
    
    public function nbProducts()
	{
		return count($this->getProducts());
	}
	public function nbMaterials()
	{
		$allProducts=$this->getProducts();
		$somme=0;
		foreach ($allProducts as $product) {
			$somme+=$product->nbMaterials();
		}
		return $somme;
	}
}
