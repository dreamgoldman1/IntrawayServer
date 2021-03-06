<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c2a257afc4df593fdbd94b33c6ee1d0de41746940c8ad30b81ac40689c8f7970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a1c0ff50319925ac49223b080f862a00abd76bede74e86ce02444049c0876d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1c0ff50319925ac49223b080f862a00abd76bede74e86ce02444049c0876d0->enter($__internal_5a1c0ff50319925ac49223b080f862a00abd76bede74e86ce02444049c0876d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_40898c820ca5f30e0162208cd5a6fb6536ffe942a72ec68d08dbed7bc63a7cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40898c820ca5f30e0162208cd5a6fb6536ffe942a72ec68d08dbed7bc63a7cb0->enter($__internal_40898c820ca5f30e0162208cd5a6fb6536ffe942a72ec68d08dbed7bc63a7cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a1c0ff50319925ac49223b080f862a00abd76bede74e86ce02444049c0876d0->leave($__internal_5a1c0ff50319925ac49223b080f862a00abd76bede74e86ce02444049c0876d0_prof);

        
        $__internal_40898c820ca5f30e0162208cd5a6fb6536ffe942a72ec68d08dbed7bc63a7cb0->leave($__internal_40898c820ca5f30e0162208cd5a6fb6536ffe942a72ec68d08dbed7bc63a7cb0_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8268e0a3c4c4fd3f7db2f3e533b1ccfa98713ef3d6f37866e663a2c564d4c492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8268e0a3c4c4fd3f7db2f3e533b1ccfa98713ef3d6f37866e663a2c564d4c492->enter($__internal_8268e0a3c4c4fd3f7db2f3e533b1ccfa98713ef3d6f37866e663a2c564d4c492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e13025aa503797bb9e53a945238ecd26e78d3f62785d6751196492a667d8db67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13025aa503797bb9e53a945238ecd26e78d3f62785d6751196492a667d8db67->enter($__internal_e13025aa503797bb9e53a945238ecd26e78d3f62785d6751196492a667d8db67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e13025aa503797bb9e53a945238ecd26e78d3f62785d6751196492a667d8db67->leave($__internal_e13025aa503797bb9e53a945238ecd26e78d3f62785d6751196492a667d8db67_prof);

        
        $__internal_8268e0a3c4c4fd3f7db2f3e533b1ccfa98713ef3d6f37866e663a2c564d4c492->leave($__internal_8268e0a3c4c4fd3f7db2f3e533b1ccfa98713ef3d6f37866e663a2c564d4c492_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_777f26a1200d0526265598c4b0f799b31f04c2aeb44753bdf42db57bb1dcb50b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777f26a1200d0526265598c4b0f799b31f04c2aeb44753bdf42db57bb1dcb50b->enter($__internal_777f26a1200d0526265598c4b0f799b31f04c2aeb44753bdf42db57bb1dcb50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_10624236bed8fcefd93fbff2553ca8eaa38f6d78824e2f2d9d2ec72d0240884d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10624236bed8fcefd93fbff2553ca8eaa38f6d78824e2f2d9d2ec72d0240884d->enter($__internal_10624236bed8fcefd93fbff2553ca8eaa38f6d78824e2f2d9d2ec72d0240884d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_10624236bed8fcefd93fbff2553ca8eaa38f6d78824e2f2d9d2ec72d0240884d->leave($__internal_10624236bed8fcefd93fbff2553ca8eaa38f6d78824e2f2d9d2ec72d0240884d_prof);

        
        $__internal_777f26a1200d0526265598c4b0f799b31f04c2aeb44753bdf42db57bb1dcb50b->leave($__internal_777f26a1200d0526265598c4b0f799b31f04c2aeb44753bdf42db57bb1dcb50b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
