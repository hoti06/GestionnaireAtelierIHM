<?php

namespace Atelier\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Atelier\ReservationBundle\Entity\Reservation;
use Atelier\ReservationBundle\Form\BookingType;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{
    public function bookingAction()
    {
        
        $reservation = new Reservation;
        $form = $this->createForm($this->get('atelier.form.reservation'), $reservation);
        $request = $this->get('request');
	$user = $this->get('security.context')->getToken()->getUser();
	$date = new \DateTime('now'); 
        if ($request->getMethod() == 'POST') {
        	$reservation->setUser($user);
		$form->bind($request);
		//if ($form->isValid()) {
			$repositoryReservation = $this->getDoctrine()->getManager()->getRepository('AtelierReservationBundle:Reservation');
			$listReservation = $repositoryReservation->getAllReservation(10, 1);
			$bool = true;	
			$mat=$reservation->getMaterials();
			foreach ($listReservation as $re)
			{
				$materials = $re->getMaterials();
				$datebegin = $re->getDateBegin();
				$dateend = $re->getDateEnd();
				if (($reservation->getDateBegin()<=$dateend && $reservation->getDateEnd()>=$dateend)
					|| ($reservation->getDateEnd()>=$datebegin && $reservation->getDateBegin()<=$datebegin)
					|| ($reservation->getDateEnd()<=$dateend && $reservation->getDateBegin()>=$datebegin))
				{
					foreach ($materials as $a)
					{
						foreach ($mat as $b)
						{
							if ($a->getId() == $b->getId()){
								$bool = false;
								break;
							}
						}
					}	
				}
			}
			if ($bool)
			{
				$em = $this->getDoctrine()->getManager();
				$em->persist($reservation);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info', 'Your booking has been correctly saved');
				
				return $this->redirect($this->generateUrl('atelier_reservation_list'));
			}
			$this->get('session')->getFlashBag()->add('info', 'Your booking has not been correctly saved');
			
			return $this->redirect($this->generateUrl('atelier_reservation_list'));
		//}
	}   
        return $this->render('AtelierReservationBundle:Reservation:booking.html.twig', array(
			'form' => $form->createView(),
			));
    }
    
    public function listAction($page)
    {
        $request = $this->get('request');
	$user = $this->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()->getManager()->getRepository('AtelierReservationBundle:Reservation');
        $listReservation = $repository->getReservation(10, $page,$user);
	$nbPage=ceil(count($listReservation)/10);
        if($nbPage<1)  $nbPage=1;
        return $this->render('AtelierReservationBundle:Reservation:disp.html.twig', array(
		  'list_reservations' => $listReservation,
		  'page'       => $page,
		  'nbPage' => $nbPage
	));
    }

    public function alllistAction($page)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('AtelierReservationBundle:Reservation');
        $listReservation = $repository->getAllReservation(10, $page);
	$nbPage=ceil(count($listReservation)/10);
        if($nbPage<1)  $nbPage=1;
        return $this->render('AtelierReservationBundle:Reservation:dispAll.html.twig', array(
		  'list_reservations' => $listReservation,
		  'page'       => $page,
		  'nbPage' => $nbPage
	));
    }

    public function deleteAction(Reservation $reservation)
    {
	//return $this->redirect($this->generateUrl('atelier_reservation_list', array('page' => 1)));
    $form = $this->createFormBuilder()->getForm();
 
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
		  $form->bind($request);
	 
		  if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->remove($reservation);
			$em->flush();
	 
			$this->get('session')->getFlashBag()->add('info', 'The reservation has been correctly deleted');
	 
			return $this->redirect($this->generateUrl('atelier_reservation_list'));
		  }
		}
	 
		return $this->render('AtelierReservationBundle:Reservation:delete.html.twig', array(
		  'reservation' => $reservation,
		  'form'    => $form->createView()
		));
    }

    public function changeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
	$repository = $em->getRepository('AtelierReservationBundle:Reservation');
        $reservation=$repository->find($id);
        $form = $this->createForm(new BookingType, $reservation);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
		$form->bind($request);
		//if ($form->isValid()) {
			$repositoryReservation = $this->getDoctrine()->getManager()->getRepository('AtelierReservationBundle:Reservation');
			$listReservation = $repositoryReservation->getAllReservation(10, 1);
			$bool = true;	
			$mat=$reservation->getMaterials();
			foreach ($listReservation as $re)
			{
				if ($re->getId() != $reservation->getId())
				{
				$materials = $re->getMaterials();
				$datebegin = $re->getDateBegin();
				$dateend = $re->getDateEnd();
				if (($reservation->getDateBegin()<=$dateend && $reservation->getDateEnd()>=$dateend)
					|| ($reservation->getDateEnd()>=$datebegin && $reservation->getDateBegin()<=$datebegin)
					|| ($reservation->getDateEnd()<=$dateend && $reservation->getDateBegin()>=$datebegin))
				{
					foreach ($materials as $a)
					{
						foreach ($mat as $b)
						{
							if ($a->getId() == $b->getId()){
								$bool = false;
								break;
							}
						}
					}	
				}
				}
			}
			if ($bool)
			{
				$em = $this->getDoctrine()->getManager();
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info', 'Your booking has been correctly changed');
				
				return $this->redirect($this->generateUrl('atelier_reservation_list'));
			}
			$this->get('session')->getFlashBag()->add('info', 'Your booking has not been correctly changed');
			
			return $this->redirect($this->generateUrl('atelier_reservation_list'));
			
		//}
	}  
        return $this->render('AtelierReservationBundle:Reservation:booking.html.twig', array(
			'form' => $form->createView(),
			));
    }
    
    
    public function dispBarcodeAction($id)
    {
		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('AtelierReservationBundle:Reservation');
        $reservation=$repository->find($id);
        
        $bb = new \Barcode_Barcode();
        
		 $html= $this->renderView('AtelierReservationBundle:Reservation:barcode.html.twig', array(
			'reservation' => $reservation,
			'bb' => $bb,
			'height_' => 50,
			'height' => 35
			));
		//return $html;	
			
	
	
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
	
	
	//locality=>product
	//province=>category
	
	public function getByCategoryIdAction()
	{
		$this->em = $this->get('doctrine')->getEntityManager();
		$this->repository = $this->em->getRepository('AtelierProductBundle:Product');
		$categoryId = $this->get('request')->query->get('data');
	 
		$products = $this->repository->findByCategory($categoryId);
	 
		$html = '';
		foreach($products as $product)
		{
			$html = $html . sprintf("<option value=\"%d\">%s</option>",$product->getId(), $product->getName());
		}
	 
		return new Response($html);
	}
	
	public function getMaterialByCategoryIdAction()
	{
		$this->em = $this->get('doctrine')->getEntityManager();
		$this->repository = $this->em->getRepository('AtelierProductBundle:Product');
		$categoryId = $this->get('request')->query->get('data');
	 
		$products = $this->repository->findByCategory($categoryId);
	 
	 
	 
		$this->repository = $this->em->getRepository('AtelierMaterialBundle:Material');
	 
		$materials = $this->repository->findByProduct($products[0]);
	 
		$html = '';
		foreach($materials as $material)
		{
			$html = $html . sprintf("<option value=\"%d\">%s</option>",$material->getId(), $material->getId());
		}
	 
		
	 
		return new Response($html);
	}
	
	//category->product
	//product->material
	public function getByProductIdAction()
	{
		$this->em = $this->get('doctrine')->getEntityManager();
		$this->repository = $this->em->getRepository('AtelierMaterialBundle:Material');
		$productId = $this->get('request')->query->get('data');
	 
		$materials = $this->repository->findByProduct($productId);
	 
		$html = '';
		foreach($materials as $material)
		{
			$html = $html . sprintf("<option value=\"%d\">%s</option>",$material->getId(), $material->getId());
		}
	 
		return new Response($html);
	}
}
