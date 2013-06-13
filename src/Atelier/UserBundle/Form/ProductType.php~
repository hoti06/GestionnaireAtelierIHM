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
                 ->add('password',  'text')
     		 ->add('email',     'text')
                 ->add('foo_choices', 'choice', array(
    			'choices' => array('foo' => 'Foo', 'bar' => 'Bar', 'baz' => 'Baz'),))
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
