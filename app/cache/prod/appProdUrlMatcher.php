<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/log')) {
                // atelier_user_login
                if ($pathinfo === '/user/login') {
                    return array (  '_controller' => 'Atelier\\UserBundle\\Controller\\UserController::loginAction',  '_route' => 'atelier_user_login',);
                }

                // atelier_user_logout
                if ($pathinfo === '/user/logout') {
                    return array (  '_controller' => 'Atelier\\UserBundle\\Controller\\UserController::logoutAction',  '_route' => 'atelier_user_logout',);
                }

            }

            // atelier_user_signup
            if ($pathinfo === '/user/signup') {
                return array (  '_controller' => 'Atelier\\UserBundle\\Controller\\UserController::signupAction',  '_route' => 'atelier_user_signup',);
            }

            // atelier_user_edit
            if ($pathinfo === '/user/edit') {
                return array (  '_controller' => 'Atelier\\UserBundle\\Controller\\UserController::editAction',  '_route' => 'atelier_user_edit',);
            }

            // atelier_user_editAdmin
            if (preg_match('#^/user/(?P<login>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_user_editAdmin')), array (  '_controller' => 'Atelier\\UserBundle\\Controller\\UserController::editAdminAction',));
            }

            // atelier_user_loginCheck
            if ($pathinfo === '/user/loginCheck') {
                return array('_route' => 'atelier_user_loginCheck');
            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            if (0 === strpos($pathinfo, '/blog/hello')) {
                // sdz_blog_homepage
                if (preg_match('#^/blog/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdz_blog_homepage')), array (  '_controller' => 'SdzBlogBundle:Default:index',));
                }

                // HelloTheWorld
                if ($pathinfo === '/blog/hello-world') {
                    return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'HelloTheWorld',);
                }

            }

            // sdzblog_accueil
            if (preg_match('#^/blog(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_accueil')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // sdzblog_voir
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_voir')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::voirAction',));
                }

                // sdzblog_ajouter
                if ($pathinfo === '/blog/ajouter') {
                    return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'sdzblog_ajouter',);
                }

            }

            // sdzblog_modifier
            if (0 === strpos($pathinfo, '/blog/modifier') && preg_match('#^/blog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_modifier')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::modifierAction',));
            }

            // sdzblog_supprimer
            if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_supprimer')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::supprimerAction',));
            }

            // sdzblog_voir_slug
            if (0 === strpos($pathinfo, '/blog/blog') && preg_match('#^/blog/blog/(?P<annee>\\d{4})/(?P<slug>[^/\\.]++)\\.(?P<format>html|xml)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_voir_slug')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::voirSlugAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
