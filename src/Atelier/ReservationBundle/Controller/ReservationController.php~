<?php

namespace Atelier\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Atelier\ReservationBundle\Entity\Reservation;
use Atelier\ReservationBundle\Form\BookingType;
use Symfony\Component\DependencyInjection\ContainerAware;

class ReservationController extends Controller
{
    public function bookingAction()
    {
        
        $reservation = new Reservation;
        $form = $this->createForm(new BookingType, $reservation);
        $request = $this->get('request');
	$user = $this->get('security.context')->getToken()->getUser();
        
            
        if ($request->getMethod() == 'POST') {
        	$reservation->setUser($user);
		$form->bind($request);
		if ($form->isValid()) {
        		$repositoryMaterial = $this->getDoctrine()->getManager()->getRepository('AtelierMaterialBundle:Material');
			$listMaterial = $repositoryMaterial->getProductMateirals($reservation->getProduct());
			$repositoryReservation = $this->getDoctrine()->getManager()->getRepository('AtelierReservationBundle:Reservation');
			$listReservation = $repositoryReservation->getProductReservation(10, 1, $reservation->getProduct());
			$nomber=$reservation->getNomber();
			$nomberMax=count($listMaterial);
			foreach ($listReservation as $re)
			{
				$datebegin = $re->getDateBegin();
				$dateend = $re->getDateEnd();
				if ($reservation->getDateBegin()>$dateend || $reservation->getDateEnd()<$datebegin) {
					$nomber -= $re->getNomber();
				} else {
					$nomberMax -= $re->getNomber();
				}
			}
			if ($nomber<=0 || $nomberMax>=$nomber)
			{
				$em = $this->getDoctrine()->getManager();
				$em->persist($reservation);
				$em->flush();
				return $this->render('AtelierReservationBundle:Reservation:appointement.html.twig',array('info'=> "Your appointement is saved"));
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
	$user = $this->get('security.context')->getToken()->getUser();
        
        return $this->render('AtelierReservationBundle:Reservation:booking.html.twig', array(
			'form' => $form->createView(),
			));
    }
}
