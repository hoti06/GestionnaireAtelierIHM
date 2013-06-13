<?php
namespace Atelier\MaterialBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Atelier\MaterialBundle\Entity\Material;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RemoveProduct
{
    public function postRemove(LifecycleEventArgs $args)
    {
		$entity = $args->getEntity();
		$repository = $args
                   ->getEntityManager();
		
		if ($entity instanceof Material) {
			if($entity->getProduct()->nbMaterials()==0)
			{
				$repository->remove($entity->getProduct());
			}
		}
    }
}
