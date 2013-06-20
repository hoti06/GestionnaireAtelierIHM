<?php
namespace Atelier\ProductBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Atelier\ProductBundle\Entity\Product;
use Atelier\CategoryBundle\Entity\Category;
use Atelier\ProductBundle\Form\ProductType;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{ /*
	public function newAction()
	{
		
		$product = new Product;
		$form = $this->createForm(new ProductType, $product);

		$request = $this->get('request');

		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($product);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info', 'The product has been correctly added');
				
				return $this->redirect($this->generateUrl('atelier_product_disp', array('id' => $product->getId())));
			}
		}

		return $this->render('AtelierProductBundle:Product:add.html.twig', array(
			'form' => $form->createView(),
			));
	}
	*/
	public function editAction(Product $product)
	{
		$form = $this->createForm(new ProductType(), $product);
 
		$request = $this->getRequest();
		
		
		if ($request->getMethod() == 'POST') {
		  $form->bind($request);
	 
		  if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($product);
			$em->flush();
	 
	 
			$this->get('session')->getFlashBag()->add('info', 'The product has been correctly modified');
	 
	
			return $this->redirect($this->generateUrl('atelier_product_disp', array('id' => $product->getId())));
		  }
		}
	 
		return $this->render('AtelierProductBundle:Product:edit.html.twig', array(
		  'form'    => $form->createView(),
		  'product' => $product
		));
	}
	
  public function deleteAction(Product $product)
  {
    $form = $this->createFormBuilder()->getForm();
 
    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
 
      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();
 
        $this->get('session')->getFlashBag()->add('info', 'The product has been correctly deleted');
 
        return $this->redirect($this->generateUrl('atelier_product_dispAll'));
      }
    }
 
    return $this->render('AtelierProductBundle:Product:delete.html.twig', array(
      'product' => $product,
      'form'    => $form->createView()
    ));
  }	

	
	
	public function dispAction($id)
	{
		$product = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository('AtelierProductBundle:Product')
                                   ->find($id);
		if ($product == null) {
			throw $this->createNotFoundException('The product [id='.$id.'] doesn\'t exist');
		}
    
		return $this->render('AtelierProductBundle:Product:disp.html.twig', array(
		  'product' => $product
		));
	}
	public function dispAllAction($page)
	{
		$repository = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository('AtelierProductBundle:Product');
                                   
		
		
		$listProducts = $repository->getProducts(10, $page);
		
		$nbPage=ceil(count($listProducts)/10);
		if($nbPage<1)
			$nbPage=1;
			
		return $this->render('AtelierProductBundle:Product:dispAll.html.twig', array(
		  'list_products' => $listProducts,
		  'page'       => $page,
		  'nbPage' => $nbPage
		));
	}
	
	public function dispAllByCategoryAction($page,Category $category)
	{
		$repository = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository('AtelierProductBundle:Product');
                                   
		
		
		$listProducts = $repository->getProductsbyCategory(10, $page,$category);
		
		$nbPage=ceil(count($listProducts)/10);
		if($nbPage<1)
			$nbPage=1;
			
		return $this->render('AtelierProductBundle:Product:dispAllByCategory.html.twig', array(
		  'list_products' => $listProducts,
		  'page'       => $page,
		  'nbPage' => $nbPage,
		  'category' => $category
		));
	}
	
	
	public function dispBarcodeAction(Product $product)
    {   
        $bb = new \Barcode_Barcode();
        
		 $html= $this->renderView('AtelierProductBundle:Product:barcode.html.twig', array(
			'materials' => $product->getMaterials(),
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
