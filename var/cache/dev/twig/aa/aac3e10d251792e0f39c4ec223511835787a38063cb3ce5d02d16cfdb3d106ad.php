<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c3a8cc0a856cfc97696db6110e2121966be42ae9c78833835026fa87ea9109ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a8cc0a856cfc97696db6110e2121966be42ae9c78833835026fa87ea9109ec->enter($__internal_c3a8cc0a856cfc97696db6110e2121966be42ae9c78833835026fa87ea9109ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_40634643f777683b0d3ad6164092bbd4ab49467ae8b34def708ccaa0d5a12d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40634643f777683b0d3ad6164092bbd4ab49467ae8b34def708ccaa0d5a12d58->enter($__internal_40634643f777683b0d3ad6164092bbd4ab49467ae8b34def708ccaa0d5a12d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3a8cc0a856cfc97696db6110e2121966be42ae9c78833835026fa87ea9109ec->leave($__internal_c3a8cc0a856cfc97696db6110e2121966be42ae9c78833835026fa87ea9109ec_prof);

        
        $__internal_40634643f777683b0d3ad6164092bbd4ab49467ae8b34def708ccaa0d5a12d58->leave($__internal_40634643f777683b0d3ad6164092bbd4ab49467ae8b34def708ccaa0d5a12d58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2d0c5222dcba16c6c700160f4e815e341fccedb5c1e8867a8c06d5bce0bfe15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d0c5222dcba16c6c700160f4e815e341fccedb5c1e8867a8c06d5bce0bfe15->enter($__internal_d2d0c5222dcba16c6c700160f4e815e341fccedb5c1e8867a8c06d5bce0bfe15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5db03819b92ec562f4e8fa63ecdb1d131e66e7ec5d08b0c39ad504621ef57d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db03819b92ec562f4e8fa63ecdb1d131e66e7ec5d08b0c39ad504621ef57d4f->enter($__internal_5db03819b92ec562f4e8fa63ecdb1d131e66e7ec5d08b0c39ad504621ef57d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5db03819b92ec562f4e8fa63ecdb1d131e66e7ec5d08b0c39ad504621ef57d4f->leave($__internal_5db03819b92ec562f4e8fa63ecdb1d131e66e7ec5d08b0c39ad504621ef57d4f_prof);

        
        $__internal_d2d0c5222dcba16c6c700160f4e815e341fccedb5c1e8867a8c06d5bce0bfe15->leave($__internal_d2d0c5222dcba16c6c700160f4e815e341fccedb5c1e8867a8c06d5bce0bfe15_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73f2b2d6b7c4c5729c2ba427e4588ec9db226ff1623f0cea8e87c1442e2eef7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f2b2d6b7c4c5729c2ba427e4588ec9db226ff1623f0cea8e87c1442e2eef7e->enter($__internal_73f2b2d6b7c4c5729c2ba427e4588ec9db226ff1623f0cea8e87c1442e2eef7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_758c74f106b5f1ba16f8beffad135ff064923d8c5076613cead077c1ce0e63f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758c74f106b5f1ba16f8beffad135ff064923d8c5076613cead077c1ce0e63f0->enter($__internal_758c74f106b5f1ba16f8beffad135ff064923d8c5076613cead077c1ce0e63f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_758c74f106b5f1ba16f8beffad135ff064923d8c5076613cead077c1ce0e63f0->leave($__internal_758c74f106b5f1ba16f8beffad135ff064923d8c5076613cead077c1ce0e63f0_prof);

        
        $__internal_73f2b2d6b7c4c5729c2ba427e4588ec9db226ff1623f0cea8e87c1442e2eef7e->leave($__internal_73f2b2d6b7c4c5729c2ba427e4588ec9db226ff1623f0cea8e87c1442e2eef7e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_364ee26637f618b0ae43e8b0b572b1a5d6a72a1727645af33972af21e8fbcd04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364ee26637f618b0ae43e8b0b572b1a5d6a72a1727645af33972af21e8fbcd04->enter($__internal_364ee26637f618b0ae43e8b0b572b1a5d6a72a1727645af33972af21e8fbcd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2b69853631d1f661fe7e9dd67ddb27a7a0df57236adef5347d0c717975da8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b69853631d1f661fe7e9dd67ddb27a7a0df57236adef5347d0c717975da8e3->enter($__internal_d2b69853631d1f661fe7e9dd67ddb27a7a0df57236adef5347d0c717975da8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d2b69853631d1f661fe7e9dd67ddb27a7a0df57236adef5347d0c717975da8e3->leave($__internal_d2b69853631d1f661fe7e9dd67ddb27a7a0df57236adef5347d0c717975da8e3_prof);

        
        $__internal_364ee26637f618b0ae43e8b0b572b1a5d6a72a1727645af33972af21e8fbcd04->leave($__internal_364ee26637f618b0ae43e8b0b572b1a5d6a72a1727645af33972af21e8fbcd04_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
