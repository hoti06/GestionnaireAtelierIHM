<?php

namespace Atelier\ReservationBundle\EventListener;


use Symfony\Component\Form\FormFactoryInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\FormEvent;

class FormEvent implements EventSubscriberInterface
{
    /**
     * @var FormFactoryInterface
     */
    private $factory;

    /**
     * @var EntityManager
     */
    private $om;

    /**
     * @param factory FormFactoryInterface
     */
    public function __construct(FormFactoryInterface $factory, EntityManager $om)
    {
        $this->factory = $factory;
        $this->om = $om;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SUBMIT => 'preSubmit',
            FormEvents::PRE_SET_DATA => 'preSetData',
        );
    }

    /**
     * @param event FormEvent
     */
    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
		$form = $event->getForm();
	
        // Before SUBMITing the form, the "meetup" will be null
        if (null == $data) {
            return;
        }

    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $id = $data['category'];
        $meetup = $this->om
            ->getRepository('AtelierProductBundle:Product')
            ->findByCategory($id);
/*
        if ($meetup === null) {
            $msg = 'The event %s could not be found for you registration';
            throw new \Exception(sprintf($msg, $id));
        }*/
        
        $form = $event->getForm();
        //$positions = $meetup->getSport()->getPositions();

		$form->get('product')->setData($meetup);

    }

}
