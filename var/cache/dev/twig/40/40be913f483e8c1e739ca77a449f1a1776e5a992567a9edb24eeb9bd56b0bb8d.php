<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_82ba383184c3e7eea6fd4fc91c5f90ac93f4643875a645f8063060334e432ebb extends Twig_Template
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
        $__internal_a4de17d4eed22a519936e52b2a4132b595a81445aa6263fc0409b3bb27646d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4de17d4eed22a519936e52b2a4132b595a81445aa6263fc0409b3bb27646d42->enter($__internal_a4de17d4eed22a519936e52b2a4132b595a81445aa6263fc0409b3bb27646d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0d06a39d90a9702522bd24647a7e6e7691659463446617f7d02da381969e0abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d06a39d90a9702522bd24647a7e6e7691659463446617f7d02da381969e0abd->enter($__internal_0d06a39d90a9702522bd24647a7e6e7691659463446617f7d02da381969e0abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a4de17d4eed22a519936e52b2a4132b595a81445aa6263fc0409b3bb27646d42->leave($__internal_a4de17d4eed22a519936e52b2a4132b595a81445aa6263fc0409b3bb27646d42_prof);

        
        $__internal_0d06a39d90a9702522bd24647a7e6e7691659463446617f7d02da381969e0abd->leave($__internal_0d06a39d90a9702522bd24647a7e6e7691659463446617f7d02da381969e0abd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
