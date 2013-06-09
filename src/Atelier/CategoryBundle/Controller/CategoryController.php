<?php
namespace Atelier\CategoryBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Atelier\CategoryBundle\Entity\Category;
use Atelier\CategoryBundle\Form\CategoryType;

class CategoryController extends Controller
{ 
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
				
				$this->get('session')->getFlashBag()->add('info', 'Catégorie bien ajoutée');
				
				return $this->redirect($this->generateUrl('atelier_category_disp', array('id' => $category->getId())));
			}
		}

		return $this->render('AtelierCategoryBundle:Category:ajouter.html.twig', array(
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
	 
	 
			$this->get('session')->getFlashBag()->add('info', 'Catégorie bien modifié');
	 
	
			return $this->redirect($this->generateUrl('atelier_category_disp', array('id' => $category->getId())));
		  }
		}
	 
		return $this->render('AtelierCategoryBundle:Category:modifier.html.twig', array(
		  'form'    => $form->createView(),
		  'category' => $category
		));
	}
	
	
	public function modifierAction(Article $article)
  {
    // On utiliser le ArticleEditType
    $form = $this->createForm(new ArticleEditType(), $article);
 
    $request = $this->getRequest();
 
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
 
      if ($form->isValid()) {
        // On enregistre l'article
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();
 
        // On définit un message flash
        $this->get('session')->getFlashBag()->add('info', 'Article bien modifié');
 
        return $this->redirect($this->generateUrl('sdzblog_voir', array('id' => $article->getId())));
      }
    }
 
    return $this->render('SdzBlogBundle:Blog:modifier.html.twig', array(
      'form'    => $form->createView(),
      'article' => $article
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
	public function dispAllAction($page)
	{
		$repository = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository('AtelierCategoryBundle:Category');
                                   
		
		
		$listeCategories = $repository->getCategories(10, $page);
		
		return $this->render('AtelierCategoryBundle:Category:listCategories.html.twig', array(
		  'liste_categories' => $listeCategories,
		  'page'       => $page,
		  'nombrePage' => ceil(count($listeCategories)/10)
		));
	}
	
}
