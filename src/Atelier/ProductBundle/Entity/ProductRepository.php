<?php

namespace Atelier\ProductBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository
{
	
	public function getProducts($nbByPage, $page)
  {
    if ($page < 1) {
      throw new \InvalidArgumentException('The $page argument cannot be less than 1 (value : "'.$page.'").');
    }
 
    $query = $this->createQueryBuilder('a')
                  ->orderBy('a.name', 'ASC')
                  ->getQuery();
                  
                  
    $query->setFirstResult(($page-1) * $nbByPage)
          ->setMaxResults($nbByPage);
 
    return new Paginator($query);
  }
  
  public function getProductsbyCategory($nbByPage, $page,$category)
  {
    if ($page < 1) {
      throw new \InvalidArgumentException('The $page argument cannot be less than 1 (value : "'.$page.'").');
    }
 
    $query = $this->createQueryBuilder('a')
				  ->where('a.category = '.$category->getId())
                  ->orderBy('a.name', 'ASC')
                  ->getQuery();
                  
                  
    $query->setFirstResult(($page-1) * $nbByPage)
          ->setMaxResults($nbByPage);
 
    return new Paginator($query);
  }
  
}
