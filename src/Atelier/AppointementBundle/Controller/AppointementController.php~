<?php

namespace Atelier\AppointementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Atelier\AppointementBundle\Entity\Appointement;
use Atelier\AppointementBundle\Form\AppointementType;

class AppointementController extends Controller
{
    public function appointementAction($id)
    {
	$appointement=new Appointement;
	$em = $this->getDoctrine()->getManager();
	$repository = $em->getRepository('AtelierReservationBundle:Reservation');
        $reservation=$repository->find($id);
	$appointement->setReservation($reservation);
	$request = $this->get('request');
	$form = $this->createForm(new AppointementType, $appointement);
	if ($request->getMethod() == 'POST') {
		$form->bind($request);
		if ($form->isValid()) {
			$em->persist($appointement);
			$em->flush();
			return $this->render('AtelierAppointementBundle:Appointement:confirm.html.twig');
		}
	}
        return $this->render('AtelierAppointementBundle:Appointement:appointement.html.twig', array(
			'form' => $form->createView(),
			));
    }

    public function listAction($page)
    {
	$repository = $this->getDoctrine()->getManager()->getRepository('AtelierAppointementBundle:Appointement');
	$listAppointment = $repository->getAppointement(10, $page);
	$nbPage=ceil(count($listAppointment)/10);
        if($nbPage<1)  $nbPage=1;
        return $this->render('AtelierAppointementBundle:Appointement:disp.html.twig', array(
		  'list_appointement' => $listAppointment,
		  'page'       => $page,
		  'nbPage' => $nbPage
	));
    }

    public function changeAction($id)
    {
	$em = $this->getDoctrine()->getManager();
	$repository = $em->getRepository('AtelierAppointementBundle:Appointement');
        $appointement=$repository->find($id);
        $form = $this->createForm(new AppointementType, $appointement);
	$request = $this->get('request');
	if ($request->getMethod() == 'POST') {
		$form->bind($request);
		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->flush();
			return $this->render('AtelierAppointementBundle:Appointement:confirm.html.twig');
		}
	}
        return $this->render('AtelierAppointementBundle:Appointement:appointement.html.twig', array(
			'form' => $form->createView(),
			));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
	$repository = $em->getRepository('AtelierAppointementBundle:Appointement');
        $reservation=$repository->find($id);
	$em->remove($reservation);
	$em->flush();
	return $this->redirect($this->generateUrl('atelier_appointement_list', array('page' => 1)));
    }
}
