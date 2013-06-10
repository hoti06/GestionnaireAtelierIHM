<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/material')) {
            // atelier_material_new
            if ($pathinfo === '/material/new') {
                return array (  '_controller' => 'Atelier\\MaterialBundle\\Controller\\MaterialController::newAction',  '_route' => 'atelier_material_new',);
            }

            // atelier_material_edit
            if (preg_match('#^/material/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_material_edit')), array (  '_controller' => 'Atelier\\MaterialBundle\\Controller\\MaterialController::editAction',));
            }

            // atelier_material_delete
            if (preg_match('#^/material/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_material_delete')), array (  '_controller' => 'Atelier\\MaterialBundle\\Controller\\MaterialController::deleteAction',));
            }

            // atelier_material_disp
            if (preg_match('#^/material/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_material_disp')), array (  '_controller' => 'Atelier\\MaterialBundle\\Controller\\MaterialController::dispAction',));
            }

            // atelier_material_index
            if (rtrim($pathinfo, '/') === '/material') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'atelier_material_index');
                }

                return array (  '_controller' => 'Atelier\\MaterialBundle\\Controller\\MaterialController::dispAllAction',  'page' => 1,  '_route' => 'atelier_material_index',);
            }

            // atelier_material_dispAll
            if (0 === strpos($pathinfo, '/material/index') && preg_match('#^/material/index(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_material_dispAll')), array (  '_controller' => 'Atelier\\MaterialBundle\\Controller\\MaterialController::dispAllAction',  'page' => 1,));
            }

        }

        if (0 === strpos($pathinfo, '/product')) {
            // atelier_product_new
            if ($pathinfo === '/product/new') {
                return array (  '_controller' => 'Atelier\\ProductBundle\\Controller\\ProductController::newAction',  '_route' => 'atelier_product_new',);
            }

            // atelier_product_edit
            if (preg_match('#^/product/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_product_edit')), array (  '_controller' => 'Atelier\\ProductBundle\\Controller\\ProductController::editAction',));
            }

            // atelier_product_delete
            if (preg_match('#^/product/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_product_delete')), array (  '_controller' => 'Atelier\\ProductBundle\\Controller\\ProductController::deleteAction',));
            }

            // atelier_product_disp
            if (preg_match('#^/product/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_product_disp')), array (  '_controller' => 'Atelier\\ProductBundle\\Controller\\ProductController::dispAction',));
            }

            // atelier_product_index
            if (rtrim($pathinfo, '/') === '/product') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'atelier_product_index');
                }

                return array (  '_controller' => 'Atelier\\ProductBundle\\Controller\\ProductController::dispAllAction',  'page' => 1,  '_route' => 'atelier_product_index',);
            }

            // atelier_product_dispAll
            if (0 === strpos($pathinfo, '/product/index') && preg_match('#^/product/index(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_product_dispAll')), array (  '_controller' => 'Atelier\\ProductBundle\\Controller\\ProductController::dispAllAction',  'page' => 1,));
            }

        }

        if (0 === strpos($pathinfo, '/category')) {
            // atelier_category_new
            if ($pathinfo === '/category/new') {
                return array (  '_controller' => 'Atelier\\CategoryBundle\\Controller\\CategoryController::newAction',  '_route' => 'atelier_category_new',);
            }

            // atelier_category_edit
            if (preg_match('#^/category/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_category_edit')), array (  '_controller' => 'Atelier\\CategoryBundle\\Controller\\CategoryController::editAction',));
            }

            // atelier_category_delete
            if (preg_match('#^/category/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_category_delete')), array (  '_controller' => 'Atelier\\CategoryBundle\\Controller\\CategoryController::deleteAction',));
            }

            // atelier_category_disp
            if (preg_match('#^/category/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_category_disp')), array (  '_controller' => 'Atelier\\CategoryBundle\\Controller\\CategoryController::dispAction',));
            }

            // atelier_category_index
            if (rtrim($pathinfo, '/') === '/category') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'atelier_category_index');
                }

                return array (  '_controller' => 'Atelier\\CategoryBundle\\Controller\\CategoryController::dispAllAction',  'page' => 1,  '_route' => 'atelier_category_index',);
            }

            // atelier_category_dispAll
            if (0 === strpos($pathinfo, '/category/index') && preg_match('#^/category/index(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_category_dispAll')), array (  '_controller' => 'Atelier\\CategoryBundle\\Controller\\CategoryController::dispAllAction',  'page' => 1,));
            }

        }

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
