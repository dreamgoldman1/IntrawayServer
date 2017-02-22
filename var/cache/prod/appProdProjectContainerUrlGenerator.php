<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'gol_api_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_api_profiles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apigetallprofilesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api-profiles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_api_profile' => array (  0 =>   array (    0 => 'profileId',  ),  1 =>   array (    '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apigetprofilebyidAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'profileId',    ),    1 =>     array (      0 => 'text',      1 => '/api-profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_api_create_profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apicreateprofileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api-create-profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_api_edit_profile' => array (  0 =>   array (    0 => 'profileId',  ),  1 =>   array (    '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apieditprofileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'profileId',    ),    1 =>     array (      0 => 'text',      1 => '/api-edit-profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_api_delete_profile' => array (  0 =>   array (    0 => 'profileId',  ),  1 =>   array (    '_controller' => 'GOL\\ApiBundle\\Controller\\ApiController::apideleteprofileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'profileId',    ),    1 =>     array (      0 => 'text',      1 => '/api-delete-profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_menu_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\MenuBundle\\Controller\\MenuController::meuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_footer_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\FooterBundle\\Controller\\FooterController::footerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/footer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\PerfilController::perfilesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_perfiles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\PerfilController::perfilesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/perfiles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_perfil' => array (  0 =>   array (    0 => 'profileId',  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\PerfilController::perfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'profileId',    ),    1 =>     array (      0 => 'text',      1 => '/perfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_crear_perfil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\PerfilController::crearperfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/crear-perfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_editar_perfil' => array (  0 =>   array (    0 => 'profileId',  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\PerfilController::editarperfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'profileId',    ),    1 =>     array (      0 => 'text',      1 => '/editar-perfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_content_eliminar_perfil' => array (  0 =>   array (    0 => 'profileId',  ),  1 =>   array (    '_controller' => 'GOL\\ContentBundle\\Controller\\PerfilController::eliminarperfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'profileId',    ),    1 =>     array (      0 => 'text',      1 => '/eliminar-perfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gol_header_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GOL\\HeaderBundle\\Controller\\HeaderController::headerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/header',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
