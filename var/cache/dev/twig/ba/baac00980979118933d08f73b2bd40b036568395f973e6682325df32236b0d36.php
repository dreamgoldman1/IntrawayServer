<?php

/* GOLMenuBundle:Menu:menu.html.twig */
class __TwigTemplate_b61cd704acb413e138ed2cc71d9d002de4ac5dd543b7993414d7388246586468 extends Twig_Template
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
        $__internal_50577076a9d65b1601fe4675132491f6ec42feb6fb46c462c1e122fd48d560a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50577076a9d65b1601fe4675132491f6ec42feb6fb46c462c1e122fd48d560a7->enter($__internal_50577076a9d65b1601fe4675132491f6ec42feb6fb46c462c1e122fd48d560a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLMenuBundle:Menu:menu.html.twig"));

        $__internal_4773aa5b2ae757d5b74e070a8ccb4f65493e4805cefa9c9ace7bb4e9c6d46c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4773aa5b2ae757d5b74e070a8ccb4f65493e4805cefa9c9ace7bb4e9c6d46c1c->enter($__internal_4773aa5b2ae757d5b74e070a8ccb4f65493e4805cefa9c9ace7bb4e9c6d46c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLMenuBundle:Menu:menu.html.twig"));

        // line 1
        echo "<div class=\"page-header-menu\">
        <div class=\"container\">
            <!-- BEGIN MEGA MENU -->
            <div class=\"hor-menu  \">
                <ul class=\"nav navbar-nav\">
                    <li class=\"menu-dropdown classic-menu-dropdown \">
                        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "perfiles\"> Ver perfiles</a>
                    </li>
                    <li class=\"menu-dropdown mega-menu-dropdown  \">
                        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "crear-perfil\"> Crear perfil</a>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->";
        
        $__internal_50577076a9d65b1601fe4675132491f6ec42feb6fb46c462c1e122fd48d560a7->leave($__internal_50577076a9d65b1601fe4675132491f6ec42feb6fb46c462c1e122fd48d560a7_prof);

        
        $__internal_4773aa5b2ae757d5b74e070a8ccb4f65493e4805cefa9c9ace7bb4e9c6d46c1c->leave($__internal_4773aa5b2ae757d5b74e070a8ccb4f65493e4805cefa9c9ace7bb4e9c6d46c1c_prof);

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
        return array (  39 => 10,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-header-menu\">
        <div class=\"container\">
            <!-- BEGIN MEGA MENU -->
            <div class=\"hor-menu  \">
                <ul class=\"nav navbar-nav\">
                    <li class=\"menu-dropdown classic-menu-dropdown \">
                        <a href=\"{{ env }}perfiles\"> Ver perfiles</a>
                    </li>
                    <li class=\"menu-dropdown mega-menu-dropdown  \">
                        <a href=\"{{ env }}crear-perfil\"> Crear perfil</a>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->", "GOLMenuBundle:Menu:menu.html.twig", "/var/www/IntrawayServer/src/GOL/MenuBundle/Resources/views/Menu/menu.html.twig");
    }
}
