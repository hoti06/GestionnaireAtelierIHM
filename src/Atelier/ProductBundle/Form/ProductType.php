<?php

namespace Atelier\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
      ->add('name',       'text')
      ->add('description',       'textarea', array('required' => false))
      ->add('category', 'entity', array(
	  'class'    => 'AtelierCategoryBundle:Category',
	  'property' => 'name',
	  'multiple' => false))
    ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Atelier\ProductBundle\Entity\Product'
        ));
    }

    public function getName()
    {
        return 'atelier_productbundle_producttype';
    }
}
