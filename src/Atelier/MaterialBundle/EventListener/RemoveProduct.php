<?php
namespace Atelier\MaterialBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Atelier\MaterialBundle\Entity\Material;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RemoveProduct
{
    public function preRemove(LifecycleEventArgs $args)
    {
		 $entity = $args->getEntity();
		$repository = $args
                   ->getEntityManager();
		
		
		 //$productRepository=$repository->getRepository('AtelierProductBundle:Product');
		//$gotProduct = $productRepository->findOneBy(array('id' => $entity->getProduct()));
		
		
		if($entity->getProduct()->nbMaterials()<=1)
		{

			if($entity->getProduct() !=null)
			{
				//$repository->persist($entity->getProduct());
				$repository->remove($entity->getProduct());
				$repository->flush();
			}
			else
			{
				throw new NotFoundHttpException("null");
			}
			
		}
		else
		{
			throw new NotFoundHttpException($entity->getProduct()->nbMaterials());
		}

    }
}
