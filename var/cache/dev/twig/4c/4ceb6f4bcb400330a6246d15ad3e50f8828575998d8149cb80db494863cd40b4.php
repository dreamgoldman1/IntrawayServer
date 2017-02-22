<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d3557b91a33e0c19ab6d5fa4b2f590fc29931f21569e5f85cd2698b980962859 extends Twig_Template
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
        $__internal_fa793dd72064643c785677931f9879deb719a0142f0e2870e190d9cb8b61e6d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa793dd72064643c785677931f9879deb719a0142f0e2870e190d9cb8b61e6d7->enter($__internal_fa793dd72064643c785677931f9879deb719a0142f0e2870e190d9cb8b61e6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_38520e65bfa02de03e27b912641658fdcafcaee920cc2ee0b6819249a01ae27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38520e65bfa02de03e27b912641658fdcafcaee920cc2ee0b6819249a01ae27b->enter($__internal_38520e65bfa02de03e27b912641658fdcafcaee920cc2ee0b6819249a01ae27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fa793dd72064643c785677931f9879deb719a0142f0e2870e190d9cb8b61e6d7->leave($__internal_fa793dd72064643c785677931f9879deb719a0142f0e2870e190d9cb8b61e6d7_prof);

        
        $__internal_38520e65bfa02de03e27b912641658fdcafcaee920cc2ee0b6819249a01ae27b->leave($__internal_38520e65bfa02de03e27b912641658fdcafcaee920cc2ee0b6819249a01ae27b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
