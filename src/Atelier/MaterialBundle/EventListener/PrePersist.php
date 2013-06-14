<?php
namespace Atelier\MaterialBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Atelier\MaterialBundle\Entity\Material;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PrePersist
{
	protected $uuidService;
  public function __construct($uuidService)
  {
	  $this->uuidService=$uuidService;
  }
	
    public function prePersist(LifecycleEventArgs $args)
    {
		$entity = $args->getEntity();
		
		if ($entity instanceof Material) {
			$entity->setUuid($this->uuidService->genererUUID());
		}
	}
}
