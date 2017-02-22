<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_259cf6b29aa2063a1b330ef3359afed4718928ffaa3c80c5cf15c5d259960428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259cf6b29aa2063a1b330ef3359afed4718928ffaa3c80c5cf15c5d259960428->enter($__internal_259cf6b29aa2063a1b330ef3359afed4718928ffaa3c80c5cf15c5d259960428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_4538cd92dbdc621ad76e75c5a34ce3a831c6c11507e50a4add8b5f1719c0981e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4538cd92dbdc621ad76e75c5a34ce3a831c6c11507e50a4add8b5f1719c0981e->enter($__internal_4538cd92dbdc621ad76e75c5a34ce3a831c6c11507e50a4add8b5f1719c0981e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_259cf6b29aa2063a1b330ef3359afed4718928ffaa3c80c5cf15c5d259960428->leave($__internal_259cf6b29aa2063a1b330ef3359afed4718928ffaa3c80c5cf15c5d259960428_prof);

        
        $__internal_4538cd92dbdc621ad76e75c5a34ce3a831c6c11507e50a4add8b5f1719c0981e->leave($__internal_4538cd92dbdc621ad76e75c5a34ce3a831c6c11507e50a4add8b5f1719c0981e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_16e7e8fe389f1cefdf0c9cbd77b8571e057d462432f22d72715e4db199bcea7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e7e8fe389f1cefdf0c9cbd77b8571e057d462432f22d72715e4db199bcea7f->enter($__internal_16e7e8fe389f1cefdf0c9cbd77b8571e057d462432f22d72715e4db199bcea7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_378e36260d1041073d920bddbaba052fd8cb52b8e497470b8a91dcdaab1e6451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378e36260d1041073d920bddbaba052fd8cb52b8e497470b8a91dcdaab1e6451->enter($__internal_378e36260d1041073d920bddbaba052fd8cb52b8e497470b8a91dcdaab1e6451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_378e36260d1041073d920bddbaba052fd8cb52b8e497470b8a91dcdaab1e6451->leave($__internal_378e36260d1041073d920bddbaba052fd8cb52b8e497470b8a91dcdaab1e6451_prof);

        
        $__internal_16e7e8fe389f1cefdf0c9cbd77b8571e057d462432f22d72715e4db199bcea7f->leave($__internal_16e7e8fe389f1cefdf0c9cbd77b8571e057d462432f22d72715e4db199bcea7f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5590b0e6f183c5aae263b4690eed39e8ada43dd14fb1b23c516d40080c6e45b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5590b0e6f183c5aae263b4690eed39e8ada43dd14fb1b23c516d40080c6e45b8->enter($__internal_5590b0e6f183c5aae263b4690eed39e8ada43dd14fb1b23c516d40080c6e45b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea53ed79ffc589ca817fcaabf1f20ff924f36452e22835d46d00b4511466cb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea53ed79ffc589ca817fcaabf1f20ff924f36452e22835d46d00b4511466cb22->enter($__internal_ea53ed79ffc589ca817fcaabf1f20ff924f36452e22835d46d00b4511466cb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ea53ed79ffc589ca817fcaabf1f20ff924f36452e22835d46d00b4511466cb22->leave($__internal_ea53ed79ffc589ca817fcaabf1f20ff924f36452e22835d46d00b4511466cb22_prof);

        
        $__internal_5590b0e6f183c5aae263b4690eed39e8ada43dd14fb1b23c516d40080c6e45b8->leave($__internal_5590b0e6f183c5aae263b4690eed39e8ada43dd14fb1b23c516d40080c6e45b8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8717ab56d92b112f165b4caacb46dd8f3a03f3efd8e84c8cedaa7701d47a9f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8717ab56d92b112f165b4caacb46dd8f3a03f3efd8e84c8cedaa7701d47a9f50->enter($__internal_8717ab56d92b112f165b4caacb46dd8f3a03f3efd8e84c8cedaa7701d47a9f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_046a9f0a2612eea0744df7696e3130a2db8dbbb9f497c32bfd189e6eb2b50fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046a9f0a2612eea0744df7696e3130a2db8dbbb9f497c32bfd189e6eb2b50fd8->enter($__internal_046a9f0a2612eea0744df7696e3130a2db8dbbb9f497c32bfd189e6eb2b50fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_046a9f0a2612eea0744df7696e3130a2db8dbbb9f497c32bfd189e6eb2b50fd8->leave($__internal_046a9f0a2612eea0744df7696e3130a2db8dbbb9f497c32bfd189e6eb2b50fd8_prof);

        
        $__internal_8717ab56d92b112f165b4caacb46dd8f3a03f3efd8e84c8cedaa7701d47a9f50->leave($__internal_8717ab56d92b112f165b4caacb46dd8f3a03f3efd8e84c8cedaa7701d47a9f50_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
