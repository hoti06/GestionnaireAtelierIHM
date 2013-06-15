<?php

namespace Atelier\ReservationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$today = new \DateTime('now');
		
        $builder
        ->add('category', 'entity', array(
			'class'    => 'AtelierCategoryBundle:Category',
			'property' => 'name',
			'multiple' => false,
			'mapped' => false))

		->add('product', 'choice', array(
			'choices'   => array(),//AtelierProductBundle:Product
			'required'  => false,
			'mapped' => false, 
			'multiple'  => false
		))
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
		->add('description',       'textarea', array('required' => false))
		;
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
