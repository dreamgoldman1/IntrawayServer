<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cd34df332c1aa6fbb3a88b07fb913014cd167fb7d99c7e664ce607d60ae2293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd34df332c1aa6fbb3a88b07fb913014cd167fb7d99c7e664ce607d60ae2293->enter($__internal_5cd34df332c1aa6fbb3a88b07fb913014cd167fb7d99c7e664ce607d60ae2293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d1159c8672679f94b3d5a6de5f07cb3fba936c1f31d2165d8f7d1cd9ba1f811b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1159c8672679f94b3d5a6de5f07cb3fba936c1f31d2165d8f7d1cd9ba1f811b->enter($__internal_d1159c8672679f94b3d5a6de5f07cb3fba936c1f31d2165d8f7d1cd9ba1f811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cd34df332c1aa6fbb3a88b07fb913014cd167fb7d99c7e664ce607d60ae2293->leave($__internal_5cd34df332c1aa6fbb3a88b07fb913014cd167fb7d99c7e664ce607d60ae2293_prof);

        
        $__internal_d1159c8672679f94b3d5a6de5f07cb3fba936c1f31d2165d8f7d1cd9ba1f811b->leave($__internal_d1159c8672679f94b3d5a6de5f07cb3fba936c1f31d2165d8f7d1cd9ba1f811b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c125434eb60d629f887bd6d059117faf3510689b1f2cd7d2b6f9e20f8232e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c125434eb60d629f887bd6d059117faf3510689b1f2cd7d2b6f9e20f8232e2b->enter($__internal_0c125434eb60d629f887bd6d059117faf3510689b1f2cd7d2b6f9e20f8232e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4a68207304d2abaa13996705f81b33cac358934b0c25d38d1f92f79b70b676ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a68207304d2abaa13996705f81b33cac358934b0c25d38d1f92f79b70b676ac->enter($__internal_4a68207304d2abaa13996705f81b33cac358934b0c25d38d1f92f79b70b676ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a68207304d2abaa13996705f81b33cac358934b0c25d38d1f92f79b70b676ac->leave($__internal_4a68207304d2abaa13996705f81b33cac358934b0c25d38d1f92f79b70b676ac_prof);

        
        $__internal_0c125434eb60d629f887bd6d059117faf3510689b1f2cd7d2b6f9e20f8232e2b->leave($__internal_0c125434eb60d629f887bd6d059117faf3510689b1f2cd7d2b6f9e20f8232e2b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4c2121a82bef7840d9b536c83f87aa3ec7042b000ffc2c90a018ed39dd9bd495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2121a82bef7840d9b536c83f87aa3ec7042b000ffc2c90a018ed39dd9bd495->enter($__internal_4c2121a82bef7840d9b536c83f87aa3ec7042b000ffc2c90a018ed39dd9bd495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f49e00b3346173f299ad761864e281fdc274e7f81c6e8a5da0c8f9d26256aff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49e00b3346173f299ad761864e281fdc274e7f81c6e8a5da0c8f9d26256aff6->enter($__internal_f49e00b3346173f299ad761864e281fdc274e7f81c6e8a5da0c8f9d26256aff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f49e00b3346173f299ad761864e281fdc274e7f81c6e8a5da0c8f9d26256aff6->leave($__internal_f49e00b3346173f299ad761864e281fdc274e7f81c6e8a5da0c8f9d26256aff6_prof);

        
        $__internal_4c2121a82bef7840d9b536c83f87aa3ec7042b000ffc2c90a018ed39dd9bd495->leave($__internal_4c2121a82bef7840d9b536c83f87aa3ec7042b000ffc2c90a018ed39dd9bd495_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07941b52f28d4951cadb38d9fedc5d6a8206ce33f7bce343ba905e4befef71f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07941b52f28d4951cadb38d9fedc5d6a8206ce33f7bce343ba905e4befef71f9->enter($__internal_07941b52f28d4951cadb38d9fedc5d6a8206ce33f7bce343ba905e4befef71f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bfcad79f44f86df8fec40e7a7bb746d48b70ce197c37a37f42bb2fbc66124890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcad79f44f86df8fec40e7a7bb746d48b70ce197c37a37f42bb2fbc66124890->enter($__internal_bfcad79f44f86df8fec40e7a7bb746d48b70ce197c37a37f42bb2fbc66124890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bfcad79f44f86df8fec40e7a7bb746d48b70ce197c37a37f42bb2fbc66124890->leave($__internal_bfcad79f44f86df8fec40e7a7bb746d48b70ce197c37a37f42bb2fbc66124890_prof);

        
        $__internal_07941b52f28d4951cadb38d9fedc5d6a8206ce33f7bce343ba905e4befef71f9->leave($__internal_07941b52f28d4951cadb38d9fedc5d6a8206ce33f7bce343ba905e4befef71f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
