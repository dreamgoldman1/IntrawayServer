<?php

/* GOLHeaderBundle:Header:header.html.twig */
class __TwigTemplate_1182ca759c605590cbda29cd18a26d02349ad2a39d509eaae103ef99adfa7d38 extends Twig_Template
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
        echo "<!-- BEGIN HEADER -->
<div class=\"page-header\">
    <!-- BEGIN HEADER TOP -->
    <div class=\"page-header-top\">
        <div class=\"container\">
            <!-- BEGIN LOGO -->
            <div class=\"page-logo\">
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("logo-gilberto.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default\">
                </a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href=\"javascript:;\" class=\"menu-toggler\"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->

    ";
        // line 22
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GOLMenuBundle:Menu:menu"));
        echo "
</div>
<!-- END HEADER -->";
    }

    public function getTemplateName()
    {
        return "GOLHeaderBundle:Header:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 22,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLHeaderBundle:Header:header.html.twig", "/var/www/IntrawayServer/src/GOL/HeaderBundle/Resources/views/Header/header.html.twig");
    }
}
