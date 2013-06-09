<?php
namespace Atelier\CategoryBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Atelier\CategoryBundle\Entity\Category;
use Atelier\CategoryBundle\Form\CategoryType;

class CategoryController extends Controller
{ 
	public function indexAction($page)
  {
	  return $this->render('AtelierCategoryBundle:Category:index.html.twig');
  }
	
	public function newAction()
	{
		
		$category = new Category;
		$form = $this->createForm(new CategoryType, $category);

		$request = $this->get('request');

		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($category);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info', 'The category has been correctly added');
				
				return $this->redirect($this->generateUrl('atelier_category_disp', array('id' => $category->getId())));
			}
		}

		return $this->render('AtelierCategoryBundle:Category:add.html.twig', array(
			'form' => $form->createView(),
			));
	}
	
	public function editAction(Category $category)
	{
		$form = $this->createForm(new CategoryType(), $category);
 
		$request = $this->getRequest();
		
		
		if ($request->getMethod() == 'POST') {
		  $form->bind($request);
	 
		  if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($category);
			$em->flush();
	 
	 
			$this->get('session')->getFlashBag()->add('info', 'The category has been correctly modified');
	 
	
			return $this->redirect($this->generateUrl('atelier_category_disp', array('id' => $category->getId())));
		  }
		}
	 
		return $this->render('AtelierCategoryBundle:Category:edit.html.twig', array(
		  'form'    => $form->createView(),
		  'category' => $category
		));
	}
	
  public function deleteAction(Category $category)
  {
    $form = $this->createFormBuilder()->getForm();
 
    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
 
      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();
 
        $this->get('session')->getFlashBag()->add('info', 'The category has been correctly deleted');
 
        return $this->redirect($this->generateUrl('atelier_category_dispAll'));
      }
    }
 
    return $this->render('AtelierCategoryBundle:Category:delete.html.twig', array(
      'category' => $category,
      'form'    => $form->createView()
    ));
  }	

	
	
	public function dispAction($id)
	{
		$category = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository('AtelierCategoryBundle:Category')
                                   ->find($id);
		if ($category == null) {
			throw $this->createNotFoundException('The category [id='.$id.'] doesn\'t exist');
		}
    
		return $this->render('AtelierCategoryBundle:Category:disp.html.twig', array(
		  'category' => $category
		));
	}
	public function dispAllAction($page)
	{
		$repository = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository('AtelierCategoryBundle:Category');
                                   
		
		
		$listCategories = $repository->getCategories(10, $page);
		
		return $this->render('AtelierCategoryBundle:Category:dispAll.html.twig', array(
		  'list_categories' => $listCategories,
		  'page'       => $page,
		  'nbPage' => ceil(count($listCategories)/10)
		));
	}
	
}
