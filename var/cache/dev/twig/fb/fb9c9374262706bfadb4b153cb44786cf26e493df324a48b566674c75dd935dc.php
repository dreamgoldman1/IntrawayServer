<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_71eabe95e9cfc0d531445abbd1392b37745f1fc51aa6c854845e65142150dc03 extends Twig_Template
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
        $__internal_59ea1283935107ef4ae225f6d2ae88f35e17da0469056c66ff22832737a3b45b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ea1283935107ef4ae225f6d2ae88f35e17da0469056c66ff22832737a3b45b->enter($__internal_59ea1283935107ef4ae225f6d2ae88f35e17da0469056c66ff22832737a3b45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_807b6241f61c1b7394a0fa8937a0bc0c81dcb56f88ddf8cfb2d21ae3b75bb73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807b6241f61c1b7394a0fa8937a0bc0c81dcb56f88ddf8cfb2d21ae3b75bb73d->enter($__internal_807b6241f61c1b7394a0fa8937a0bc0c81dcb56f88ddf8cfb2d21ae3b75bb73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_59ea1283935107ef4ae225f6d2ae88f35e17da0469056c66ff22832737a3b45b->leave($__internal_59ea1283935107ef4ae225f6d2ae88f35e17da0469056c66ff22832737a3b45b_prof);

        
        $__internal_807b6241f61c1b7394a0fa8937a0bc0c81dcb56f88ddf8cfb2d21ae3b75bb73d->leave($__internal_807b6241f61c1b7394a0fa8937a0bc0c81dcb56f88ddf8cfb2d21ae3b75bb73d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
