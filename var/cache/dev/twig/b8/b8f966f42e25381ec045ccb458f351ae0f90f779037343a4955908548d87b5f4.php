<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_fd8f83552ee3e9fee75b0a5fbbaa947f1769a2d6daec2bd7bc8f8f3c232064e9 extends Twig_Template
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
        $__internal_e26132d98da26029edfdcea0dc597192615d8c0319e3880d5fadae54bc6b70fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26132d98da26029edfdcea0dc597192615d8c0319e3880d5fadae54bc6b70fe->enter($__internal_e26132d98da26029edfdcea0dc597192615d8c0319e3880d5fadae54bc6b70fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_df0f5f12c6a20ee7d4bc1bbdeb64ab55b1aaac7b17063ce14ca6f318d99591c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0f5f12c6a20ee7d4bc1bbdeb64ab55b1aaac7b17063ce14ca6f318d99591c2->enter($__internal_df0f5f12c6a20ee7d4bc1bbdeb64ab55b1aaac7b17063ce14ca6f318d99591c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e26132d98da26029edfdcea0dc597192615d8c0319e3880d5fadae54bc6b70fe->leave($__internal_e26132d98da26029edfdcea0dc597192615d8c0319e3880d5fadae54bc6b70fe_prof);

        
        $__internal_df0f5f12c6a20ee7d4bc1bbdeb64ab55b1aaac7b17063ce14ca6f318d99591c2->leave($__internal_df0f5f12c6a20ee7d4bc1bbdeb64ab55b1aaac7b17063ce14ca6f318d99591c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
