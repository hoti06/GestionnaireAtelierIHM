<?php
namespace Atelier\CategoryBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Atelier\CategoryBundle\Entity\Category;
use Atelier\CategoryBundle\Form\ArticleType;

class CategoryController extends Controller
{ 
	public function newAction()
	{
		
		$category = new Category;
		$form = $this->createForm(new ArticleType, $category);

		$request = $this->get('request');

		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($category);
				$em->flush();
				
			
				return $this->redirect($this->generateUrl('atelier_category_disp', array('id' => 1)));
			}
		}

		return $this->render('AtelierCategoryBundle:Category:ajouter.html.twig', array(
			'form' => $form->createView(),
			));
	}
	
	public function dispAction($id)
	{
		$category = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository('AtelierCategoryBundle:Category')
                                   ->find($id);
		if ($category == null) {
			throw $this->createNotFoundException('Category[id='.$id.'] inexistante');
		}
    
		return $this->render('AtelierCategoryBundle:Category:voir.html.twig', array(
		  'category' => $category
		));
	}
}
