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
        $__internal_64caa8f0fcc141fe18c6c1709beef06cd05729999ed6735f38598dccadffac5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64caa8f0fcc141fe18c6c1709beef06cd05729999ed6735f38598dccadffac5c->enter($__internal_64caa8f0fcc141fe18c6c1709beef06cd05729999ed6735f38598dccadffac5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d1e89efa2254e2c3493cf02f473da5be28c0ff82282ee8bab260e94549b1d388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e89efa2254e2c3493cf02f473da5be28c0ff82282ee8bab260e94549b1d388->enter($__internal_d1e89efa2254e2c3493cf02f473da5be28c0ff82282ee8bab260e94549b1d388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64caa8f0fcc141fe18c6c1709beef06cd05729999ed6735f38598dccadffac5c->leave($__internal_64caa8f0fcc141fe18c6c1709beef06cd05729999ed6735f38598dccadffac5c_prof);

        
        $__internal_d1e89efa2254e2c3493cf02f473da5be28c0ff82282ee8bab260e94549b1d388->leave($__internal_d1e89efa2254e2c3493cf02f473da5be28c0ff82282ee8bab260e94549b1d388_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea243f32162e35c34044bb12fe23e60ab27837fdfd962e341cc0f9af6dc6bac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea243f32162e35c34044bb12fe23e60ab27837fdfd962e341cc0f9af6dc6bac4->enter($__internal_ea243f32162e35c34044bb12fe23e60ab27837fdfd962e341cc0f9af6dc6bac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9b724f96bd7ee263777ac817c29d34de580945655af4ca6c17ccefa1be20036f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b724f96bd7ee263777ac817c29d34de580945655af4ca6c17ccefa1be20036f->enter($__internal_9b724f96bd7ee263777ac817c29d34de580945655af4ca6c17ccefa1be20036f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b724f96bd7ee263777ac817c29d34de580945655af4ca6c17ccefa1be20036f->leave($__internal_9b724f96bd7ee263777ac817c29d34de580945655af4ca6c17ccefa1be20036f_prof);

        
        $__internal_ea243f32162e35c34044bb12fe23e60ab27837fdfd962e341cc0f9af6dc6bac4->leave($__internal_ea243f32162e35c34044bb12fe23e60ab27837fdfd962e341cc0f9af6dc6bac4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_296bfdf18fe137486ffad59603ead880d79f739140b7d542fac477e31f3235a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296bfdf18fe137486ffad59603ead880d79f739140b7d542fac477e31f3235a8->enter($__internal_296bfdf18fe137486ffad59603ead880d79f739140b7d542fac477e31f3235a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_84ab3c13ea3a678338ca1b95f969dcc49e2d55f24017be36bd4fec9635fe48de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ab3c13ea3a678338ca1b95f969dcc49e2d55f24017be36bd4fec9635fe48de->enter($__internal_84ab3c13ea3a678338ca1b95f969dcc49e2d55f24017be36bd4fec9635fe48de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84ab3c13ea3a678338ca1b95f969dcc49e2d55f24017be36bd4fec9635fe48de->leave($__internal_84ab3c13ea3a678338ca1b95f969dcc49e2d55f24017be36bd4fec9635fe48de_prof);

        
        $__internal_296bfdf18fe137486ffad59603ead880d79f739140b7d542fac477e31f3235a8->leave($__internal_296bfdf18fe137486ffad59603ead880d79f739140b7d542fac477e31f3235a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2050d8a2b7a26c5beaef18a085d9b401bcb00fed5dd3f3ed43bd504c3ea6e7f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2050d8a2b7a26c5beaef18a085d9b401bcb00fed5dd3f3ed43bd504c3ea6e7f8->enter($__internal_2050d8a2b7a26c5beaef18a085d9b401bcb00fed5dd3f3ed43bd504c3ea6e7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1185ab25ac1015b61106f3da494f68166e45da5850d530c4a1f2f2978e24a666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1185ab25ac1015b61106f3da494f68166e45da5850d530c4a1f2f2978e24a666->enter($__internal_1185ab25ac1015b61106f3da494f68166e45da5850d530c4a1f2f2978e24a666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1185ab25ac1015b61106f3da494f68166e45da5850d530c4a1f2f2978e24a666->leave($__internal_1185ab25ac1015b61106f3da494f68166e45da5850d530c4a1f2f2978e24a666_prof);

        
        $__internal_2050d8a2b7a26c5beaef18a085d9b401bcb00fed5dd3f3ed43bd504c3ea6e7f8->leave($__internal_2050d8a2b7a26c5beaef18a085d9b401bcb00fed5dd3f3ed43bd504c3ea6e7f8_prof);

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
