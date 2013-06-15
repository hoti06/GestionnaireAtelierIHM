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
        $form = $this->createForm(new BookingType, $reservation);
        $request = $this->get('request');
	$user = $this->get('security.context')->getToken()->getUser();
	$date = new \DateTime('now'); 
        if ($request->getMethod() == 'POST') {
        	$reservation->setUser($user);
		$form->bind($request);
		if ($form->isValid()) {
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
				return $this->render('AtelierReservationBundle:Reservation:appointement.html.twig',array('info'=> "Your booking is saved"));
			}
			return $this->render('AtelierReservationBundle:Reservation:appointement.html.twig',array('info'=>"not possible"));
		}
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

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
	$repository = $em->getRepository('AtelierReservationBundle:Reservation');
        $reservation=$repository->find($id);
	$em->remove($reservation);
	$em->flush();
	return $this->redirect($this->generateUrl('atelier_reservation_list', array('page' => 1)));
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
		if ($form->isValid()) {
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
				return $this->render('AtelierReservationBundle:Reservation:appointement.html.twig',array('info'=> "Your booking is saved"));
			}
			return $this->render('AtelierReservationBundle:Reservation:appointement.html.twig',array('info'=>"not possible"));
		}
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
        
		
		 $html = $this->renderView('AtelierReservationBundle:Reservation:barcode.html.php', array(
			'reservation' => $reservation,
			));
			
		$pdfGenerator = $this->get('spraed.pdf.generator');

		return new Response($pdfGenerator->generatePDF($html, 'UTF-8'),
                    200,
                    array(
                        'Content-Type' => 'application/pdf',
                        'Content-Disposition' => 'inline; filename="out.pdf"'
                    ));
        
	}
}
