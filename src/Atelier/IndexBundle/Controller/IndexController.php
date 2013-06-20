<?php
namespace Atelier\IndexBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class indexController extends Controller
{ 
	public function indexAction()
	{
		return $this->render('AtelierIndexBundle:Index:index.html.twig');
	}
	public function aboutAction()
	{
		return $this->render('AtelierIndexBundle:Index:about.html.twig');
	}
	
}
