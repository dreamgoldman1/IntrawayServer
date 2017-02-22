<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/api')) {
            // gol_api_homepage
            if ($pathinfo === '/api') {
                return array (  '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apiAction',  '_route' => 'gol_api_homepage',);
            }

            if (0 === strpos($pathinfo, '/api-')) {
                if (0 === strpos($pathinfo, '/api-profile')) {
                    // gol_api_profiles
                    if ($pathinfo === '/api-profiles') {
                        return array (  '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apigetallprofilesAction',  '_route' => 'gol_api_profiles',);
                    }

                    // gol_api_profile
                    if (preg_match('#^/api\\-profile/(?P<profileId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_api_profile')), array (  '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apigetprofilebyidAction',));
                    }

                }

                // gol_api_create_profile
                if ($pathinfo === '/api-create-profile') {
                    return array (  '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apicreateprofileAction',  '_route' => 'gol_api_create_profile',);
                }

                // gol_api_edit_profile
                if (0 === strpos($pathinfo, '/api-edit-profile') && preg_match('#^/api\\-edit\\-profile/(?P<profileId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_api_edit_profile')), array (  '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apieditprofileAction',));
                }

                // gol_api_delete_profile
                if (0 === strpos($pathinfo, '/api-delete-profile') && preg_match('#^/api\\-delete\\-profile/(?P<profileId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_api_delete_profile')), array (  '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apideleteprofileAction',));
                }

            }

        }

        // gol_menu_homepage
        if ($pathinfo === '/menu') {
            return array (  '_controller' => 'GOL\\MenuBundle\\Controller\\MenuController::meuAction',  '_route' => 'gol_menu_homepage',);
        }

        // gol_footer_homepage
        if ($pathinfo === '/footer') {
            return array (  '_controller' => 'GOL\\FooterBundle\\Controller\\FooterController::footerAction',  '_route' => 'gol_footer_homepage',);
        }

        // gol_content_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gol_content_homepage');
            }

            return array (  '_controller' => 'GOL\\ContentBundle\\Controller\\PerfilController::perfilesAction',  '_route' => 'gol_content_homepage',);
        }

        if (0 === strpos($pathinfo, '/perfil')) {
            // gol_content_perfiles
            if ($pathinfo === '/perfiles') {
                return array (  '_controller' => 'GOL\\ContentBundle\\Controller\\PerfilController::perfilesAction',  '_route' => 'gol_content_perfiles',);
            }

            // gol_content_perfil
            if (preg_match('#^/perfil/(?P<profileId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_content_perfil')), array (  '_controller' => 'GOL\\ContentBundle\\Controller\\PerfilController::perfilAction',));
            }

        }

        // gol_content_crear_perfil
        if ($pathinfo === '/crear-perfil') {
            return array (  '_controller' => 'GOL\\ContentBundle\\Controller\\PerfilController::crearperfilAction',  '_route' => 'gol_content_crear_perfil',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            // gol_content_editar_perfil
            if (0 === strpos($pathinfo, '/editar-perfil') && preg_match('#^/editar\\-perfil/(?P<profileId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_content_editar_perfil')), array (  '_controller' => 'GOL\\ContentBundle\\Controller\\PerfilController::editarperfilAction',));
            }

            // gol_content_eliminar_perfil
            if (0 === strpos($pathinfo, '/eliminar-perfil') && preg_match('#^/eliminar\\-perfil/(?P<profileId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gol_content_eliminar_perfil')), array (  '_controller' => 'GOL\\ContentBundle\\Controller\\PerfilController::eliminarperfilAction',));
            }

        }

        // gol_header_homepage
        if ($pathinfo === '/header') {
            return array (  '_controller' => 'GOL\\HeaderBundle\\Controller\\HeaderController::headerAction',  '_route' => 'gol_header_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
