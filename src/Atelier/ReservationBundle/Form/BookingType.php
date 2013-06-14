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
	  'multiple' => true,
	  'mapped' => true))
        
       /*
       ->add('category', 'entity', array(
	  'class'    => 'AtelierCategoryBundle:Category',
	  'property' => 'name',
	  'multiple' => false,
	  'mapped' => true))
	  
	   ->add('product', 'choice', array(
    'choices'   => array(),//AtelierProductBundle:Product
    'required'  => false,
    'mapped' => false, 
    'multiple'  => false
	))
	->add('material', 'choice', array(
    'choices'   => array(),//AtelierMaterialBundle:Material
    'required'  => false,
    'mapped' => false, 
    'multiple'  => true
	))*/
	  
	  
      /*->add('category', 'entity', array(
	  'class'    => 'AtelierCategoryBundle:Category',
	  'property' => 'name',
	  'multiple' => false,
	  'mapped' => false))
	  
      ->add('product', 'entity', array(
	  'class'    => 'AtelierProductBundle:Product',
	  'property' => 'name',
	  'multiple' => false,
	  'mapped' => false))
	  */
      /*->add('material', 'entity', array(
	  'class'    => 'AtelierMaterialBundle:Material',
	  'property' => 'id',
	  'multiple' => true))*/
	  ->add('dateBegin',      'date')
          ->add('dateEnd',      'date')
          ->add('description',       'textarea', array('required' => false))
    ;
    /*
    
     $factory = $builder->getFormFactory();

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function(FormEvent $event) use($factory){
                 $data = $event->getData();
				$form = $event->getForm();
				if (null === $data) {
					return;
				}
				
				
				$form->get('product')->setData($data->getCategory()->getProducts());
				//array(
				//'choices'   => array('a' => 'b'),//AtelierProductBundle:Product
				//'required'  => false,
				//'mapped' => false, 
				//'multiple'  => false
				//)
				
				//$data->getCity()->getRegion()

            }
        );
    */
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
