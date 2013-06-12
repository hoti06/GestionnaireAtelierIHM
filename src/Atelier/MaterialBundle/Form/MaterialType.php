<?php

namespace Atelier\MaterialBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Atelier\ProductBundle\Form\ProductType;

class MaterialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
      ->add('productAdd', new ProductType(), array('mapped' => false,'required' => true))
                                              
      ->add('product', 'entity', array(
	  'class'    => 'AtelierProductBundle:Product',
	  'property' => 'name',
	  'multiple' => false,
	  'required' => true))
	  
	  ->add('description',       'textarea', array('required' => false))
;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Atelier\MaterialBundle\Entity\Material'
        ));
    }

    public function getName()
    {
        return 'atelier_materialbundle_materialtype';
    }
}
