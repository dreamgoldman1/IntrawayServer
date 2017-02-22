<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b3fe1a6e6fe5913a776b008bbc67dbb2875dada4b4e9ca7717a34e3500cdd099 extends Twig_Template
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
        $__internal_621ede8647f45d5ed7b0ddd67b217e31618bf3a00408859aa5a53cc1931542fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621ede8647f45d5ed7b0ddd67b217e31618bf3a00408859aa5a53cc1931542fe->enter($__internal_621ede8647f45d5ed7b0ddd67b217e31618bf3a00408859aa5a53cc1931542fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_df91b166b04c4d188d12b6b89ccb8dd42d954c8078ecf514c3b10ff654f5017b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df91b166b04c4d188d12b6b89ccb8dd42d954c8078ecf514c3b10ff654f5017b->enter($__internal_df91b166b04c4d188d12b6b89ccb8dd42d954c8078ecf514c3b10ff654f5017b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_621ede8647f45d5ed7b0ddd67b217e31618bf3a00408859aa5a53cc1931542fe->leave($__internal_621ede8647f45d5ed7b0ddd67b217e31618bf3a00408859aa5a53cc1931542fe_prof);

        
        $__internal_df91b166b04c4d188d12b6b89ccb8dd42d954c8078ecf514c3b10ff654f5017b->leave($__internal_df91b166b04c4d188d12b6b89ccb8dd42d954c8078ecf514c3b10ff654f5017b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
