<?php
// src/Sdz/BlogBundle/Controller/UserBundle.php
 
namespace Atelier\UserBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Atelier\UserBundle\Entity\User;
use Atelier\UserBundle\Entity\formulaire;
 
class UserController extends Controller
{ 
  public function loginAction()
  {
    $request = $this->getRequest();
    $session = $request->getSession();

    // get the login error if there is one
    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
        $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    } else {
        $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
    }
    $session->set('name', $session->get(SecurityContext::LAST_USERNAME));
    return $this->render('AtelierUserBundle:User:login.html.twig', array(
        // last username entered by the user
       	'last_username' => $session->get(SecurityContext::LAST_USERNAME),
        'error'         => $error,
    ));
  }
  public function logoutAction()
  {
    return $this->render('AtelierUserBundle:User:logout.html.twig');
  }

  public function signupAction()
  {
    // Ici le contenu de la méthode
    $user = new User();
    $request = $this->getRequest();
    $session = $request->getSession();
    $form = $this->createFormBuilder($user)
                 ->add('username',        'text')
     		 ->add('password',     'password')
		 ->add('email',        'text')
                 ->getForm();
    $request = $this->get('request');
 
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
	$repository = $em
                   ->getRepository('AtelierUserBundle:User');
	if ($repository->find($user->getUsername()) === null){ 
        	$em->persist($user);
        	$em->flush();
		return $this->redirect($this->generateUrl('atelier_user_login'));
	}
        return $this->redirect($this->generateUrl('atelier_user_logout'));
      }
    }
    return $this->render('AtelierUserBundle:User:signup.html.twig', array('form' => $form->createView(),
    ));
  }

  public function editAction()
  {
    $formulaire = new formulaire();
    $tmp = new User();
    $form = $this->createFormBuilder($formulaire)
                 ->add('password',        'text')
     		 ->add('email',     'text')
                 ->getForm();
    $request = $this->get('request');
 
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
	$repository = $em
                   ->getRepository('AtelierUserBundle:User');
	//$name = $session->get('name');
	
      }
    }
    return $this->render('AtelierUserBundle:User:edit.html.twig', array('form' => $form->createView(),
    ));
  }

  public function editAdminAction($login)
  {
    $formulaire = new formulaire();
 
    $form = $this->createFormBuilder($formulaire)
                 ->add('password',        'text')
     		 ->add('passwordDouble',     'text')
                 ->getForm();
    $request = $this->get('request');
 
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
	$repository = $em
                   ->getRepository('AtelierUserBundle:User');
	$tmp = $repository->find($login);
	if ($tmp === null){ 
        	
		return $this->redirect($this->generateUrl('atelier_user_Login'));
	}
	$tmp->setPassword($formulaire->getPassword());
        $em->flush();
        return $this->redirect($this->generateUrl('atelier_user_Logout'));
      }
    }
    return $this->render('AtelierUserBundle:User:editAdmin.html.twig', array('form' => $form->createView(),
    ));
  }

  public function loginCheck(){
    return $this->render('AtelierUserBundle:User:loginCheck.html.twig' );
  }
}
