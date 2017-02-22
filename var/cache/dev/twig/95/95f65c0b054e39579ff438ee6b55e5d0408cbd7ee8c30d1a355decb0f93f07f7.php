<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c621eb95187c1501f9d56c8ff3d154326d4a85cd90f91ec42323e881e9e96e15 extends Twig_Template
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
        $__internal_0ff3f9322fea1863d841244a3b7afb056314c6936d405d6d1ccff94bd51a2e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff3f9322fea1863d841244a3b7afb056314c6936d405d6d1ccff94bd51a2e08->enter($__internal_0ff3f9322fea1863d841244a3b7afb056314c6936d405d6d1ccff94bd51a2e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a130a6b15b27ae4b21a56a4bfc70ff2ff09fd17dd67b0a3222dbe9e825bec43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a130a6b15b27ae4b21a56a4bfc70ff2ff09fd17dd67b0a3222dbe9e825bec43c->enter($__internal_a130a6b15b27ae4b21a56a4bfc70ff2ff09fd17dd67b0a3222dbe9e825bec43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0ff3f9322fea1863d841244a3b7afb056314c6936d405d6d1ccff94bd51a2e08->leave($__internal_0ff3f9322fea1863d841244a3b7afb056314c6936d405d6d1ccff94bd51a2e08_prof);

        
        $__internal_a130a6b15b27ae4b21a56a4bfc70ff2ff09fd17dd67b0a3222dbe9e825bec43c->leave($__internal_a130a6b15b27ae4b21a56a4bfc70ff2ff09fd17dd67b0a3222dbe9e825bec43c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
