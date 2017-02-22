<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_24831c6ba30ce9f4a261116c59c41da6bba0bae7ad183a78fd8b747b290e5c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f399d929449b8dd83bbf8f664a82e9c5fa52f22d55e2b09970b0e33cdaeb95a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f399d929449b8dd83bbf8f664a82e9c5fa52f22d55e2b09970b0e33cdaeb95a->enter($__internal_7f399d929449b8dd83bbf8f664a82e9c5fa52f22d55e2b09970b0e33cdaeb95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8388dcb7bc79f83dd912df94ec5458906b7d0a8e0896187a4eec658d836ac7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8388dcb7bc79f83dd912df94ec5458906b7d0a8e0896187a4eec658d836ac7be->enter($__internal_8388dcb7bc79f83dd912df94ec5458906b7d0a8e0896187a4eec658d836ac7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f399d929449b8dd83bbf8f664a82e9c5fa52f22d55e2b09970b0e33cdaeb95a->leave($__internal_7f399d929449b8dd83bbf8f664a82e9c5fa52f22d55e2b09970b0e33cdaeb95a_prof);

        
        $__internal_8388dcb7bc79f83dd912df94ec5458906b7d0a8e0896187a4eec658d836ac7be->leave($__internal_8388dcb7bc79f83dd912df94ec5458906b7d0a8e0896187a4eec658d836ac7be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab29de80b1e302d2984e0b429edaef3efd996e347aeddd6abf7fe31e732c1375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab29de80b1e302d2984e0b429edaef3efd996e347aeddd6abf7fe31e732c1375->enter($__internal_ab29de80b1e302d2984e0b429edaef3efd996e347aeddd6abf7fe31e732c1375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c0cc0c7ab56f48821754716b62d3646d07041aed782a3e159e790b64f0926e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0cc0c7ab56f48821754716b62d3646d07041aed782a3e159e790b64f0926e5->enter($__internal_4c0cc0c7ab56f48821754716b62d3646d07041aed782a3e159e790b64f0926e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4c0cc0c7ab56f48821754716b62d3646d07041aed782a3e159e790b64f0926e5->leave($__internal_4c0cc0c7ab56f48821754716b62d3646d07041aed782a3e159e790b64f0926e5_prof);

        
        $__internal_ab29de80b1e302d2984e0b429edaef3efd996e347aeddd6abf7fe31e732c1375->leave($__internal_ab29de80b1e302d2984e0b429edaef3efd996e347aeddd6abf7fe31e732c1375_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0f0cfa902c3efb72b3dbabac639af9f3c3cf5955582fe216298b347f41757c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f0cfa902c3efb72b3dbabac639af9f3c3cf5955582fe216298b347f41757c7->enter($__internal_f0f0cfa902c3efb72b3dbabac639af9f3c3cf5955582fe216298b347f41757c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_914f8a3c00bba59c2d1de123d12961ef33505a0794f2bc60ebabef0eaf35a519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914f8a3c00bba59c2d1de123d12961ef33505a0794f2bc60ebabef0eaf35a519->enter($__internal_914f8a3c00bba59c2d1de123d12961ef33505a0794f2bc60ebabef0eaf35a519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_914f8a3c00bba59c2d1de123d12961ef33505a0794f2bc60ebabef0eaf35a519->leave($__internal_914f8a3c00bba59c2d1de123d12961ef33505a0794f2bc60ebabef0eaf35a519_prof);

        
        $__internal_f0f0cfa902c3efb72b3dbabac639af9f3c3cf5955582fe216298b347f41757c7->leave($__internal_f0f0cfa902c3efb72b3dbabac639af9f3c3cf5955582fe216298b347f41757c7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
