<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_656542e63b73636bb4cc63eb611de1f16d3f23a1c63243464d3c2e1c23a62604 extends Twig_Template
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
        $__internal_77204ca4fdc3c2acd987d45ddfc72dfb8f2a242b162d1c0efe1769e918d4239f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77204ca4fdc3c2acd987d45ddfc72dfb8f2a242b162d1c0efe1769e918d4239f->enter($__internal_77204ca4fdc3c2acd987d45ddfc72dfb8f2a242b162d1c0efe1769e918d4239f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_87c8282def4bd380092aef98679b2f7eeb6fa898bd3fcb4f97750c7420d37418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c8282def4bd380092aef98679b2f7eeb6fa898bd3fcb4f97750c7420d37418->enter($__internal_87c8282def4bd380092aef98679b2f7eeb6fa898bd3fcb4f97750c7420d37418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_77204ca4fdc3c2acd987d45ddfc72dfb8f2a242b162d1c0efe1769e918d4239f->leave($__internal_77204ca4fdc3c2acd987d45ddfc72dfb8f2a242b162d1c0efe1769e918d4239f_prof);

        
        $__internal_87c8282def4bd380092aef98679b2f7eeb6fa898bd3fcb4f97750c7420d37418->leave($__internal_87c8282def4bd380092aef98679b2f7eeb6fa898bd3fcb4f97750c7420d37418_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
