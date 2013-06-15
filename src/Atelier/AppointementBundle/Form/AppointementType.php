<?php

namespace Atelier\AppointementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AppointementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
	  ->add('time',       'time', array(
		'hours' => range(8,17)))
	  ->add('salle',       'text')
    ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Atelier\AppointementBundle\Entity\Appointement'
        ));
    }

    public function getName()
    {
        return 'atelier_appointementbundle_appointementtype';
    }
}
