<?php

/* GOLHeaderBundle:Header:header.html.twig */
class __TwigTemplate_c64b4d7f313d86513bded7073fb77608da9d84492e76dad887ba550ae9c52f08 extends Twig_Template
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
        $__internal_bcec4776b9826fb24aaade9d7ef927b5db325c6b5af626000ab3bbc020981459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcec4776b9826fb24aaade9d7ef927b5db325c6b5af626000ab3bbc020981459->enter($__internal_bcec4776b9826fb24aaade9d7ef927b5db325c6b5af626000ab3bbc020981459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLHeaderBundle:Header:header.html.twig"));

        $__internal_86444d46568fc5f7dd3841fd15c7bb751dd25ab651146afb596ea93f17658c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86444d46568fc5f7dd3841fd15c7bb751dd25ab651146afb596ea93f17658c49->enter($__internal_86444d46568fc5f7dd3841fd15c7bb751dd25ab651146afb596ea93f17658c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLHeaderBundle:Header:header.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
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
        
        $__internal_bcec4776b9826fb24aaade9d7ef927b5db325c6b5af626000ab3bbc020981459->leave($__internal_bcec4776b9826fb24aaade9d7ef927b5db325c6b5af626000ab3bbc020981459_prof);

        
        $__internal_86444d46568fc5f7dd3841fd15c7bb751dd25ab651146afb596ea93f17658c49->leave($__internal_86444d46568fc5f7dd3841fd15c7bb751dd25ab651146afb596ea93f17658c49_prof);

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
        return array (  53 => 22,  38 => 9,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- BEGIN HEADER -->
<div class=\"page-header\">
    <!-- BEGIN HEADER TOP -->
    <div class=\"page-header-top\">
        <div class=\"container\">
            <!-- BEGIN LOGO -->
            <div class=\"page-logo\">
                <a href=\"{{ env }}\">
                    <img src=\"{{ asset('logo-gilberto.png') }}\" alt=\"logo\" class=\"logo-default\">
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

    {# Render Header section #}
    {{ render(controller('GOLMenuBundle:Menu:menu')) }}
</div>
<!-- END HEADER -->", "GOLHeaderBundle:Header:header.html.twig", "/var/www/IntrawayServer/src/GOL/HeaderBundle/Resources/views/Header/header.html.twig");
    }
}
