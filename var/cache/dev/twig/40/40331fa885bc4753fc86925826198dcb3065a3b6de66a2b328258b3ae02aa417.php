<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_fb9f0e3277b49feb16c2d99d0db21aab714495798161d8c47a5f7a5427e7647f extends Twig_Template
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
        $__internal_e136dc92a964add2aed9f90e05c88d1c92f1077f392ea8155a51f0b494473e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e136dc92a964add2aed9f90e05c88d1c92f1077f392ea8155a51f0b494473e68->enter($__internal_e136dc92a964add2aed9f90e05c88d1c92f1077f392ea8155a51f0b494473e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        $__internal_5485cba892a8803cac96829c90ab4d13892f87f4914d8c7dc04d1e8f99781878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5485cba892a8803cac96829c90ab4d13892f87f4914d8c7dc04d1e8f99781878->enter($__internal_5485cba892a8803cac96829c90ab4d13892f87f4914d8c7dc04d1e8f99781878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_e136dc92a964add2aed9f90e05c88d1c92f1077f392ea8155a51f0b494473e68->leave($__internal_e136dc92a964add2aed9f90e05c88d1c92f1077f392ea8155a51f0b494473e68_prof);

        
        $__internal_5485cba892a8803cac96829c90ab4d13892f87f4914d8c7dc04d1e8f99781878->leave($__internal_5485cba892a8803cac96829c90ab4d13892f87f4914d8c7dc04d1e8f99781878_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "TwigBundle:Exception:logs.html.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
