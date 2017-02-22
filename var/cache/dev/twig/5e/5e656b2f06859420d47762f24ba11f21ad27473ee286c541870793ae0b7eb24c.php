<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c77f1ec3db1d241ec74821bf3638517286e3991bef0b170432a39d181b3d29da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c53e3cbf6ca92945fb5f086dc5e009fa39cee8ef0c841bf659c66daa80beb1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c53e3cbf6ca92945fb5f086dc5e009fa39cee8ef0c841bf659c66daa80beb1d->enter($__internal_0c53e3cbf6ca92945fb5f086dc5e009fa39cee8ef0c841bf659c66daa80beb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0bd2ea567ce68433eb1535411421ad06e6ab47f71219869bd3a2311459a2f4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd2ea567ce68433eb1535411421ad06e6ab47f71219869bd3a2311459a2f4ed->enter($__internal_0bd2ea567ce68433eb1535411421ad06e6ab47f71219869bd3a2311459a2f4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c53e3cbf6ca92945fb5f086dc5e009fa39cee8ef0c841bf659c66daa80beb1d->leave($__internal_0c53e3cbf6ca92945fb5f086dc5e009fa39cee8ef0c841bf659c66daa80beb1d_prof);

        
        $__internal_0bd2ea567ce68433eb1535411421ad06e6ab47f71219869bd3a2311459a2f4ed->leave($__internal_0bd2ea567ce68433eb1535411421ad06e6ab47f71219869bd3a2311459a2f4ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_55c22e5d362e52d9e19da43c391b8a11bccda648a2cb150a523efb5d6f37a02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c22e5d362e52d9e19da43c391b8a11bccda648a2cb150a523efb5d6f37a02b->enter($__internal_55c22e5d362e52d9e19da43c391b8a11bccda648a2cb150a523efb5d6f37a02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bcf329d144540b49cd4818f755c6d544a208fe1f8c62311e08f1b8a477f5b77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf329d144540b49cd4818f755c6d544a208fe1f8c62311e08f1b8a477f5b77f->enter($__internal_bcf329d144540b49cd4818f755c6d544a208fe1f8c62311e08f1b8a477f5b77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bcf329d144540b49cd4818f755c6d544a208fe1f8c62311e08f1b8a477f5b77f->leave($__internal_bcf329d144540b49cd4818f755c6d544a208fe1f8c62311e08f1b8a477f5b77f_prof);

        
        $__internal_55c22e5d362e52d9e19da43c391b8a11bccda648a2cb150a523efb5d6f37a02b->leave($__internal_55c22e5d362e52d9e19da43c391b8a11bccda648a2cb150a523efb5d6f37a02b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f118ec89c05825fb9ebc9d5ed1fa1ac27a64f22bdb41cb3fa3e679c74fe8471c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f118ec89c05825fb9ebc9d5ed1fa1ac27a64f22bdb41cb3fa3e679c74fe8471c->enter($__internal_f118ec89c05825fb9ebc9d5ed1fa1ac27a64f22bdb41cb3fa3e679c74fe8471c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a70c4342f91d3b4a889dd7d15e26910513a1e93113357240ccfbd24270669e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70c4342f91d3b4a889dd7d15e26910513a1e93113357240ccfbd24270669e91->enter($__internal_a70c4342f91d3b4a889dd7d15e26910513a1e93113357240ccfbd24270669e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_a70c4342f91d3b4a889dd7d15e26910513a1e93113357240ccfbd24270669e91->leave($__internal_a70c4342f91d3b4a889dd7d15e26910513a1e93113357240ccfbd24270669e91_prof);

        
        $__internal_f118ec89c05825fb9ebc9d5ed1fa1ac27a64f22bdb41cb3fa3e679c74fe8471c->leave($__internal_f118ec89c05825fb9ebc9d5ed1fa1ac27a64f22bdb41cb3fa3e679c74fe8471c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
