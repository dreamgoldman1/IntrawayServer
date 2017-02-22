<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5cec90d4be24d6988e613ed48fc6b21af4761a023689c0b9be01cb31af40a403 extends Twig_Template
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
        $__internal_00e0fe5c1417a78e9a269fc4411aeb41a900b8a6ae600bd84c571a5367359a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e0fe5c1417a78e9a269fc4411aeb41a900b8a6ae600bd84c571a5367359a0f->enter($__internal_00e0fe5c1417a78e9a269fc4411aeb41a900b8a6ae600bd84c571a5367359a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_7e955c18c1a842dc8bd76ecea47a17a9881078566ee8a27dfa324342344c45cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e955c18c1a842dc8bd76ecea47a17a9881078566ee8a27dfa324342344c45cc->enter($__internal_7e955c18c1a842dc8bd76ecea47a17a9881078566ee8a27dfa324342344c45cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_00e0fe5c1417a78e9a269fc4411aeb41a900b8a6ae600bd84c571a5367359a0f->leave($__internal_00e0fe5c1417a78e9a269fc4411aeb41a900b8a6ae600bd84c571a5367359a0f_prof);

        
        $__internal_7e955c18c1a842dc8bd76ecea47a17a9881078566ee8a27dfa324342344c45cc->leave($__internal_7e955c18c1a842dc8bd76ecea47a17a9881078566ee8a27dfa324342344c45cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
