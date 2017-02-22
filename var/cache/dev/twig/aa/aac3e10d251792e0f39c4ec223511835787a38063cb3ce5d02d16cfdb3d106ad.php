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
        $__internal_c02d49beffb565f95efc2db72e251831dd9ce8ba9a039145e94facb2d9151993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02d49beffb565f95efc2db72e251831dd9ce8ba9a039145e94facb2d9151993->enter($__internal_c02d49beffb565f95efc2db72e251831dd9ce8ba9a039145e94facb2d9151993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1271030911c27773f0cb1df916463fcfb0be87d57ea13af6652ceeeefc606b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1271030911c27773f0cb1df916463fcfb0be87d57ea13af6652ceeeefc606b3f->enter($__internal_1271030911c27773f0cb1df916463fcfb0be87d57ea13af6652ceeeefc606b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c02d49beffb565f95efc2db72e251831dd9ce8ba9a039145e94facb2d9151993->leave($__internal_c02d49beffb565f95efc2db72e251831dd9ce8ba9a039145e94facb2d9151993_prof);

        
        $__internal_1271030911c27773f0cb1df916463fcfb0be87d57ea13af6652ceeeefc606b3f->leave($__internal_1271030911c27773f0cb1df916463fcfb0be87d57ea13af6652ceeeefc606b3f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e11d0ba054513c06406c2863e824cd46128ac0485a980ca5cbd2fcf126a8f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e11d0ba054513c06406c2863e824cd46128ac0485a980ca5cbd2fcf126a8f89->enter($__internal_5e11d0ba054513c06406c2863e824cd46128ac0485a980ca5cbd2fcf126a8f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4bccf07b946cdacc181b3209f9d5a7faa18884049582eae40722bda256946db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bccf07b946cdacc181b3209f9d5a7faa18884049582eae40722bda256946db6->enter($__internal_4bccf07b946cdacc181b3209f9d5a7faa18884049582eae40722bda256946db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4bccf07b946cdacc181b3209f9d5a7faa18884049582eae40722bda256946db6->leave($__internal_4bccf07b946cdacc181b3209f9d5a7faa18884049582eae40722bda256946db6_prof);

        
        $__internal_5e11d0ba054513c06406c2863e824cd46128ac0485a980ca5cbd2fcf126a8f89->leave($__internal_5e11d0ba054513c06406c2863e824cd46128ac0485a980ca5cbd2fcf126a8f89_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4d1a2dcfa18ee5a3a43cf339577eb541dd6a18b011999d96b682ccac9bda7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d1a2dcfa18ee5a3a43cf339577eb541dd6a18b011999d96b682ccac9bda7ca->enter($__internal_f4d1a2dcfa18ee5a3a43cf339577eb541dd6a18b011999d96b682ccac9bda7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_05c7a036113f940d6186114768def871ccd2589806a5523bc756b68b4e1d78cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c7a036113f940d6186114768def871ccd2589806a5523bc756b68b4e1d78cd->enter($__internal_05c7a036113f940d6186114768def871ccd2589806a5523bc756b68b4e1d78cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_05c7a036113f940d6186114768def871ccd2589806a5523bc756b68b4e1d78cd->leave($__internal_05c7a036113f940d6186114768def871ccd2589806a5523bc756b68b4e1d78cd_prof);

        
        $__internal_f4d1a2dcfa18ee5a3a43cf339577eb541dd6a18b011999d96b682ccac9bda7ca->leave($__internal_f4d1a2dcfa18ee5a3a43cf339577eb541dd6a18b011999d96b682ccac9bda7ca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3637ef28e350091afb3ed53b1f8428a690b41e246d4d3866eee40ad6d26756c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3637ef28e350091afb3ed53b1f8428a690b41e246d4d3866eee40ad6d26756c2->enter($__internal_3637ef28e350091afb3ed53b1f8428a690b41e246d4d3866eee40ad6d26756c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ddaccb1001bd4fe3aeab890835b5440faec97192b1f589ca9c09a74452f81dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ddaccb1001bd4fe3aeab890835b5440faec97192b1f589ca9c09a74452f81dc->enter($__internal_7ddaccb1001bd4fe3aeab890835b5440faec97192b1f589ca9c09a74452f81dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7ddaccb1001bd4fe3aeab890835b5440faec97192b1f589ca9c09a74452f81dc->leave($__internal_7ddaccb1001bd4fe3aeab890835b5440faec97192b1f589ca9c09a74452f81dc_prof);

        
        $__internal_3637ef28e350091afb3ed53b1f8428a690b41e246d4d3866eee40ad6d26756c2->leave($__internal_3637ef28e350091afb3ed53b1f8428a690b41e246d4d3866eee40ad6d26756c2_prof);

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
