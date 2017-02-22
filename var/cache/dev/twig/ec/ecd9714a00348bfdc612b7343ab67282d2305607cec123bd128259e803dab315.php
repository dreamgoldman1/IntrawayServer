<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a92c607cd6c30e3f1b3c14e9d8b26551d0b78b33e66139ee68d2a59da1460061 extends Twig_Template
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
        $__internal_f0f6d5e523b5025a1bd063944e0413ea7af00fcd64ac08923c48f84d076eb8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f6d5e523b5025a1bd063944e0413ea7af00fcd64ac08923c48f84d076eb8cd->enter($__internal_f0f6d5e523b5025a1bd063944e0413ea7af00fcd64ac08923c48f84d076eb8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ed2b5334ac2241a75b7ee1e7bc57e41764ecdabd406404766d516c7fd2f4816a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2b5334ac2241a75b7ee1e7bc57e41764ecdabd406404766d516c7fd2f4816a->enter($__internal_ed2b5334ac2241a75b7ee1e7bc57e41764ecdabd406404766d516c7fd2f4816a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f0f6d5e523b5025a1bd063944e0413ea7af00fcd64ac08923c48f84d076eb8cd->leave($__internal_f0f6d5e523b5025a1bd063944e0413ea7af00fcd64ac08923c48f84d076eb8cd_prof);

        
        $__internal_ed2b5334ac2241a75b7ee1e7bc57e41764ecdabd406404766d516c7fd2f4816a->leave($__internal_ed2b5334ac2241a75b7ee1e7bc57e41764ecdabd406404766d516c7fd2f4816a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
