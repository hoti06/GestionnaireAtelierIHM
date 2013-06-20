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
  public function indexAction()
  {
    return $this->render('AtelierUserBundle:User:index.html.twig');
  }

  public function deleteAction(User $user)
  {
	  $form = $this->createFormBuilder()->getForm();
 
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
		  $form->bind($request);
	 
		  if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->remove($user);
			$em->flush();
	 
			$this->get('session')->getFlashBag()->add('info', 'The user has been correctly deleted');
	 
			return $this->redirect($this->generateUrl('atelier_user_list'));
		  }
		}
	 
		return $this->render('AtelierUserBundle:User:delete.html.twig', array(
		  'user' => $user,
		  'form'    => $form->createView()
		));
  }  
  
  
  public function unregisterAction()
  {
	  $form = $this->createFormBuilder()->getForm();
		$user = $this->container->get('security.context')->getToken()->getUser();
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
		  $form->bind($request);
	 
		  if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->remove($user);
			$em->flush();
	 
			$this->get('session')->getFlashBag()->add('info', 'You have been successfully unsuscribed');
	 
			return $this->redirect($this->generateUrl('atelier_index_index'));
		  }
		}
	 
		return $this->render('AtelierUserBundle:User:unregister.html.twig', array(
		  'user' => $user,
		  'form'    => $form->createView()
		));
  }


  public function removeAdminAction(User $user)
  {
	  $form = $this->createFormBuilder()->getForm();
 
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
		  $form->bind($request);
	 
		  if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$user->removeRole('ROLE_ADMIN');
			$em->flush();
	 
			$this->get('session')->getFlashBag()->add('info', 'The admin right has been correctly removed');
	 
			return $this->redirect($this->generateUrl('atelier_user_show', array('id' => $user->getId())));
		  }
		}
	 
		return $this->render('AtelierUserBundle:User:removeAdmin.html.twig', array(
		  'user' => $user,
		  'form'    => $form->createView()
		));	  
  }

  public function addAdminAction(User $user)
  {
	$form = $this->createFormBuilder()->getForm();

	$request = $this->getRequest();
	if ($request->getMethod() == 'POST') {
	  $form->bind($request);
 
	  if ($form->isValid()) {
		$em = $this->getDoctrine()->getManager();
		$user->addRole('ROLE_ADMIN');
		$em->flush();
 
		$this->get('session')->getFlashBag()->add('info', 'The admin right has been correctly added');
 
		return $this->redirect($this->generateUrl('atelier_user_show', array('id' => $user->getId())));
	  }
	}
 
	return $this->render('AtelierUserBundle:User:addAdmin.html.twig', array(
	  'user' => $user,
	  'form'    => $form->createView()
	));	 
  }

  public function editAdminAction($id)
  {
    $em = $this->getDoctrine()->getManager();
    $repository = $em
                ->getRepository('AtelierUserBundle:User');
    $user = $repository->find($id);
    $formulaire = new formulaire();
    $factory = $this->get('security.encoder_factory');
    $form = $this->createFormBuilder($formulaire)
                 //->add('password',  'text')
     		 ->add('email',     'text')
                 ->getForm();
    //$form->get('password')->setData($user->getPassword());
    $form->get('email')->setData($user->getEmail());

    $request = $this->get('request');
    
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
      if ($form->isValid()) {
        
	//$password=$formulaire->getPassword();
       // $encoder = $factory->getEncoder($user);
       // $newpassword = $encoder->encodePassword($password, $user->getSalt());
	//$user->setPassword($newpassword);
	$user->setEmail($formulaire->getEmail());
        $em->flush();
        
        //$users = $this->getDoctrine()->getManager()->getRepository('AtelierUserBundle:User')->findAllOrderedByID();
        
        $this->get('session')->getFlashBag()->add('info', 'The user has been correctly modified');
        
        
        return $this->redirect($this->generateUrl('atelier_user_show', array('id' => $user->getId())));
        
        //return $this->render('AtelierUserBundle:User:list.html.twig', array('list' => $users));
      }
    }
    return $this->render('AtelierUserBundle:User:editAdmin.html.twig', array('form' => $form->createView(), 'user' => $user
    ));
  }

  public function showAction(User $user){
    //$em = $this->getDoctrine()->getManager();
    //$repository = $em->getRepository('AtelierUserBundle:User');
    //$user = $repository->find($id);
    if ($user === null){ 
        return $this->render('AtelierUserBundle:User:show.html.twig', array('user' => null
    ));	
    }
    return $this->render('AtelierUserBundle:User:show.html.twig', array('user' => $user
    ));
  }
  public function showMyProfileAction(){
	$user = $this->container->get('security.context')->getToken()->getUser();
    if ($user === null){ 
        return $this->render('AtelierUserBundle:User:showMyProfile.html.twig', array('user' => null
    ));	
    }
    return $this->render('AtelierUserBundle:User:showMyProfile.html.twig', array('user' => $user
    ));
  }
  
  

  public function listAction(){
    $users = $this->getDoctrine()->getManager()->getRepository('AtelierUserBundle:User')->findAllOrderedByID();
    
    return $this->render('AtelierUserBundle:User:list.html.twig', array('list' => $users,
    ));
  }
}
