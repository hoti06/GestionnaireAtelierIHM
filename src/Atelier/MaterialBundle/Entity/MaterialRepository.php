<?php

namespace Atelier\MaterialBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * MaterialRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MaterialRepository extends EntityRepository
{
	
    public function getMaterials($nbByPage, $page)
    {
      if ($page < 1) {
      throw new \InvalidArgumentException('The $page argument cannot be less than 1 (value : "'.$page.'").');
    }
 
    $query = $this->createQueryBuilder('a')
                  ->orderBy('a.id', 'ASC')
                  ->getQuery();
                  
                  
    $query->setFirstResult(($page-1) * $nbByPage)
          ->setMaxResults($nbByPage);
 
    return new Paginator($query);
  }
}
