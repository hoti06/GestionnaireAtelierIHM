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

  public function forbiddenAction()
  {
    return $this->render('AtelierUserBundle:User:forbidden.html.twig');
  }


  public function deleteAction($id)
  {
    $em = $this->getDoctrine()->getManager();
    $repository = $em
               ->getRepository('AtelierUserBundle:User');
    //$email = $this->container->get('session')->get('fos_user_send_confirmation_email/email');
    //$userManager = $this->container->get('fos_user.user_manager');
    $user = $repository->find($id);
         
    if ($user === null) {
        return $this->render('AtelierUserBundle:User:delete.html.twig', array('info'=>"user not exists"
    ));
    }
    else {
        $em->remove($user);
	$em->flush();
    }
    
    return $this->render('AtelierUserBundle:User:delete.html.twig', array('info'=>"success"
    ));
  }  


  public function removeAdminAction($id)
  {
    $em = $this->getDoctrine()->getManager();
    $repository = $em
                ->getRepository('AtelierUserBundle:User');
    $user = $repository->find($id);
    $user->removeRole('ROLE_ADMIN');
    $em->flush();
    return $this->redirect($this->generateUrl('fos_user_profile_show'));
  }

  public function addAdminAction($id)
  {
    $em = $this->getDoctrine()->getManager();
    $repository = $em
                ->getRepository('AtelierUserBundle:User');
    $user = $repository->find($id);
    $user->addRole('ROLE_ADMIN');
    $em->flush();
    return $this->redirect($this->generateUrl('fos_user_profile_show'));
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
                 ->add('password',  'text')
     		 ->add('email',     'text')
                 ->getForm();
    $form->get('password')->setData($user->getPassword());
    $form->get('email')->setData($user->getEmail());

    $request = $this->get('request');
    
    if ($request->getMethod() == 'POST') {
      $form->bind($request);
      if ($form->isValid()) {
        
	$users = $this->getDoctrine()->getManager()->getRepository('AtelierUserBundle:User')->findAllOrderedByID();
    
	$password=$formulaire->getPassword();
        $encoder = $factory->getEncoder($user);
        $newpassword = $encoder->encodePassword($password, $user->getSalt());
	$user->setPassword($newpassword);
	$user->setEmail($formulaire->getEmail());
        $em->flush();
        return $this->render('AtelierUserBundle:User:list.html.twig', array('list' => $users,
    ));
      }
    }
    return $this->render('AtelierUserBundle:User:editAdmin.html.twig', array('form' => $form->createView(), 
    ));
  }

  public function showAction($id){
    $em = $this->getDoctrine()->getManager();
    $repository = $em
                ->getRepository('AtelierUserBundle:User');
    $user = $repository->find($id);
    if ($user === null){ 
        return $this->render('AtelierUserBundle:User:show.html.twig', array('user' => null
    ));	
    }
    return $this->render('AtelierUserBundle:User:show.html.twig', array('user' => $user
    ));
  }

  public function listAction(){
    $users = $this->getDoctrine()->getManager()->getRepository('AtelierUserBundle:User')->findAllOrderedByID();
    
    return $this->render('AtelierUserBundle:User:list.html.twig', array('list' => $users,
    ));
  }
}
