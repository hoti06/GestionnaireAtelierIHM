<?php

namespace Atelier\ReservationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
      ->add('product', 'entity', array(
	  'class'    => 'AtelierProductBundle:Product',
	  'property' => 'name',
	  'multiple' => false))
          ->add('nomber',      'text')
	  ->add('dateBegin',      'date')
          ->add('dateEnd',      'date')
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
