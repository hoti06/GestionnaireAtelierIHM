<?php

namespace Atelier\ReservationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;

class BookingType extends AbstractType
{
	/*
	private $reservationListener;
	
	public function __construct(Atelier\ReservationBundle\EventListener\FormEvent $reservationListener)
	{
		$this->reservationListener = $reservationListener;
	}*/
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		 $today = new \DateTime('now');
		$factory = $builder->getFormFactory();
		
        $builder
        ->add('category', 'entity', array(
			'class'    => 'AtelierCategoryBundle:Category',
			'property' => 'name',
			'multiple' => false,
			'mapped' => false,
			'required' => true,
			'empty_value'=> '== Choose category =='))
		->add('product', 'choice', array(
			'choices'   => array(),
			'required'  => true,
			'mapped' => false, 
			'multiple'  => false,
			'empty_value'=> '== Choose product =='
		))
		
		/*
		->add('materials', 'choice', array(
			'choices'   => array(),
			'required'  => true,
			'mapped' => false, 
			'multiple'  => true
		))*/
		
		
		->add('materials', 'entity', array(
			'class'    => 'AtelierMaterialBundle:Material',
			'property' => 'id',
			'multiple' => true))
		
		->add('dateBegin',      'date' , array(
			'widget' => 'single_text',
			'data' => $today))
		->add('dateEnd',      'date', array(
			'widget' => 'single_text',
			'data' => $today))
		->add('description',       'textarea', array('required' => false));
		
//		$builder->addEventSubscriber($this->reservationListener);
		
//		$subscriber = new AddNameFieldSubscriber($builder->getFormFactory());
 //       $builder->addEventSubscriber($subscriber);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Atelier\ReservationBundle\Entity\Reservation'
        ));
    }

    public function getName()
    {
        return 'atelier_reservationbundle_reservationtype';
    }
}
