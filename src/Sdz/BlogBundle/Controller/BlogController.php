<?php
// src/Sdz/BlogBundle/Controller/BlogController.php
 
namespace Sdz\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class BlogController extends Controller
{
  // … ici la méthode indexAction() que l'on a déjà créée
 
  public function indexAction()
  {
    return $this->render('SdzBlogBundle:Blog:index.html.twig');
  }
  // La route fait appel à SdzBlogBundle:Blog:voir, on doit donc définir la méthode voirAction
  // On donne à cette méthode l'argument $id, pour correspondre au paramètre {id} de la route
  public function voirAction($id)
  {
    // $id vaut 5 si l'on a appelé l'URL /blog/article/5
         
    // Ici, on récupèrera depuis la base de données l'article correspondant à l'id $id
    // Puis on passera l'article à la vue pour qu'elle puisse l'afficher
 
    $request = $this->getRequest();
 
    // On récupère notre paramètre tag
    $tag = $request->query->get('tag');
 
    return new Response("Affichage de l'article d'id : ".$id.", avec le tag : ".$tag);
  }

  public function voirSlugAction($slug, $annee, $format)
  {
    // Ici le contenu de la méthode
    return new Response("On pourrait afficher l'article correspondant au slug '".$slug."', créé en ".$annee." et au format ".$format.".");
  }

  public function menuAction()
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    $liste = array(
      array('id' => 2, 'titre' => 'Mon dernier weekend !'),
      array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
      array('id' => 9, 'titre' => 'Petit test')
    );
         
    return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
  }
}
