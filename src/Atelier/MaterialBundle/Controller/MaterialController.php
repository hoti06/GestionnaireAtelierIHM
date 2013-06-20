<?php
namespace Atelier\MaterialBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Atelier\MaterialBundle\Entity\Material;
use Atelier\ProductBundle\Entity\Product;
use Atelier\CategoryBundle\Entity\Category;
use Atelier\MaterialBundle\Form\MaterialType;
use Atelier\MaterialBundle\Form\MaterialAddType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Form as Form;
use Symfony\Component\Form\FormInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;

class MaterialController extends Controller
{ 
	public function newAction()
	{
		$form = $this->createForm(new MaterialAddType);
		
		
		//$form->bind(array('description' => "HELLO"));
		//$form->updateObject();
		
		$request = $this->get('request');

		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			
			$nbArticles=$form->get('numberOfArticles')->getData();
																	
			if ($form->isValid()) {
				for($i=0;$i<$nbArticles;$i++)
				{
					$material = new Material;
					$material->setDescription($form->get('description')->getData());
					
					if($form->get('product')->getData() != null)
						$material->setProduct($form->get('product')->getData());
					else if($form->get('productAdd')->getData() != null)
						$material->setProduct($form->get('productAdd')->getData());
					
					$em = $this->getDoctrine()->getManager();
					$em->persist($material);
				}
				
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info', 'The material has been correctly added');
				
				return $this->redirect($this->generateUrl('atelier_material_dispAll'/*, array('id' => $material->getId())*/));
			}
		}

		return $this->render('AtelierMaterialBundle:Material:add.html.twig', array(
			'form' => $form->createView(),
			));
	}
	
	public function editAction(Material $material)
	{
		$form = $this->createForm(new MaterialType(), $material);
		$form->get('product')->setData($material->getProduct());
		
		$request = $this->getRequest();
		
		
		if ($request->getMethod() == 'POST') {
		  $form->bind($request);
	 
		  if ($form->isValid()) {
			
			
			$material->setDescription($form->get('description')->getData());
					
			if($form->get('product')->getData() != null)
				$material->setProduct($form->get('product')->getData());
			else if($form->get('productAdd')->getData() != null)
				$material->setProduct($form->get('productAdd')->getData());
			
			$em = $this->getDoctrine()->getManager();
			
			$em->persist($material);
			$em->flush();
	 
	 
			$this->get('session')->getFlashBag()->add('info', 'The material has been correctly modified');
	 
	
			return $this->redirect($this->generateUrl('atelier_material_disp', array('id' => $material->getId())));
		  }
		}
	 
		return $this->render('AtelierMaterialBundle:Material:edit.html.twig', array(
		  'form'    => $form->createView(),
		  'material' => $material
		));
	}
	
  public function deleteAction(Material $material)
  {
    $form = $this->createFormBuilder()->getForm();
 
    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
 
      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($material);
        $em->flush();
 
        $this->get('session')->getFlashBag()->add('info', 'The material has been correctly deleted');
 
        return $this->redirect($this->generateUrl('atelier_material_dispAll'));
      }
    }
 
    return $this->render('AtelierMaterialBundle:Material:delete.html.twig', array(
      'material' => $material,
      'form'    => $form->createView()
    ));
  }	

	
	
	public function dispAction($id)
	{
		$material = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository('AtelierMaterialBundle:Material')
                                   ->find($id);
		if ($material == null) {
			throw $this->createNotFoundException('The material [id='.$id.'] doesn\'t exist');
		}
    
		return $this->render('AtelierMaterialBundle:Material:disp.html.twig', array(
		  'material' => $material
		));
	}
	public function dispAllAction($page)
	{
		$repository = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository('AtelierMaterialBundle:Material');
                                   
		
		
		$listMaterials = $repository->getMaterials(10, $page);
		
		$nbPage=ceil(count($listMaterials)/10);
		if($nbPage<1)
			$nbPage=1;
		
		return $this->render('AtelierMaterialBundle:Material:dispAll.html.twig', array(
		  'list_materials' => $listMaterials,
		  'page'       => $page,
		  'nbPage' => $nbPage
		));
	}
	
	public function dispAllByProductAction($page,Product $product)
	{
		$repository = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository('AtelierMaterialBundle:Material');
                                   
		
		
		$listMaterials = $repository->getMaterialsByProduct(10, $page,$product);
		
		$nbPage=ceil(count($listMaterials)/10);
		if($nbPage<1)
			$nbPage=1;
		
		return $this->render('AtelierMaterialBundle:Material:dispAllByProduct.html.twig', array(
		  'list_materials' => $listMaterials,
		  'page'       => $page,
		  'nbPage' => $nbPage,
		  'product' => $product
		));
	}
	
	public function dispAllByCategoryAction($page,Category $category)
	{
		$repository = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository('AtelierMaterialBundle:Material');
                                   
		
		
		$listMaterials = $repository->getMaterialsByCategory(10, $page,$category);
		
		$nbPage=ceil(count($listMaterials)/10);
		if($nbPage<1)
			$nbPage=1;
		
		return $this->render('AtelierMaterialBundle:Material:dispAllByCategory.html.twig', array(
		  'list_materials' => $listMaterials,
		  'page'       => $page,
		  'nbPage' => $nbPage,
		  'category' => $category
		));
	}
	
	public function dispBarcodeAction(Material $material)
    {   
        $bb = new \Barcode_Barcode();
        
		 $html= $this->renderView('AtelierMaterialBundle:Material:barcode.html.twig', array(
			'material' => $material,
			'bb' => $bb,
			'height_' => 50,
			'height' => 35
			));
	
	
		$pdfGenerator = $this->get('spraed.pdf.generator');

		$response = new Response($pdfGenerator->generatePDF($html, 'UTF-8'),
                    200,
                    array(
                        'Content-Type' => 'application/pdf',
                        'Content-Disposition' => 'inline; filename="out.pdf"'
                    ));
                    
       foreach(glob('img/barcode/*.png') as $file) {
			unlink($file);
		}
		
		return $response;
     
	}
	
}
