<?php

/* GOLMenuBundle:Menu:menu.html.twig */
class __TwigTemplate_476ac0e79a77151ad40f328b7d0ead5303767b60d9c0e6fa0b31b9d95dac6d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"page-header-menu\">
        <div class=\"container\">
            <!-- BEGIN MEGA MENU -->
            <div class=\"hor-menu  \">
                <ul class=\"nav navbar-nav\">
                    <li class=\"menu-dropdown classic-menu-dropdown \">
                        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "perfiles\"> Ver perfiles</a>
                    </li>
                    <li class=\"menu-dropdown mega-menu-dropdown  \">
                        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "crear-perfil\"> Crear perfil</a>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->";
    }

    public function getTemplateName()
    {
        return "GOLMenuBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLMenuBundle:Menu:menu.html.twig", "/var/www/IntrawayServer/src/GOL/MenuBundle/Resources/views/Menu/menu.html.twig");
    }
}
