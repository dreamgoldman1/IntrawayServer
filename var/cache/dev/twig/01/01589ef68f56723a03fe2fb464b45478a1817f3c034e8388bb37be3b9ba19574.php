<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_563548ec3e46ac7c53541fe3d28b90bba1fc007bc3c7adc7c20baf712c351127 extends Twig_Template
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
        $__internal_cf3fdeb416f36e0419b5aeea4d35c7fe7c26814ce93bf13a60c9a980d1079875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3fdeb416f36e0419b5aeea4d35c7fe7c26814ce93bf13a60c9a980d1079875->enter($__internal_cf3fdeb416f36e0419b5aeea4d35c7fe7c26814ce93bf13a60c9a980d1079875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c31fbeaf2f31a4b1cba7940f7aa820ac6aa2bbb3adc2f78a65136e12e61400c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31fbeaf2f31a4b1cba7940f7aa820ac6aa2bbb3adc2f78a65136e12e61400c1->enter($__internal_c31fbeaf2f31a4b1cba7940f7aa820ac6aa2bbb3adc2f78a65136e12e61400c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cf3fdeb416f36e0419b5aeea4d35c7fe7c26814ce93bf13a60c9a980d1079875->leave($__internal_cf3fdeb416f36e0419b5aeea4d35c7fe7c26814ce93bf13a60c9a980d1079875_prof);

        
        $__internal_c31fbeaf2f31a4b1cba7940f7aa820ac6aa2bbb3adc2f78a65136e12e61400c1->leave($__internal_c31fbeaf2f31a4b1cba7940f7aa820ac6aa2bbb3adc2f78a65136e12e61400c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
