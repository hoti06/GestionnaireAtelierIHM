<?php

namespace Atelier\MaterialBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Form as Form; // Mendatory
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Validator\Constraints\Range;

class MaterialAddType extends MaterialType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    parent::buildForm($builder, $options);
     $builder->add('numberOfArticles', 'number', array('mapped' => false,
														'constraints' => new Range(array(					'min'        => 1,
																	'minMessage' => 'There must be at least 1 material',
																	))
													)); 
  }
 
  public function getName()
  {
    return 'atelier_materialbundle_materialaddtype';
  }
}
