<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d7e0f7f9d1ea7acfb1e00b2d3509ba29d39aefe4a84c9cf5f2d1500c3033dcd8 extends Twig_Template
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
        $__internal_3e50c2ebd5e0ef979daa6dc7a96a529c9183c1be3cbd9faa8d0fcda1b56f92e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e50c2ebd5e0ef979daa6dc7a96a529c9183c1be3cbd9faa8d0fcda1b56f92e0->enter($__internal_3e50c2ebd5e0ef979daa6dc7a96a529c9183c1be3cbd9faa8d0fcda1b56f92e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_30c233f4305aa16150781488ecd20feedf553d1b60516f36a61d17aeb9d0189d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c233f4305aa16150781488ecd20feedf553d1b60516f36a61d17aeb9d0189d->enter($__internal_30c233f4305aa16150781488ecd20feedf553d1b60516f36a61d17aeb9d0189d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_3e50c2ebd5e0ef979daa6dc7a96a529c9183c1be3cbd9faa8d0fcda1b56f92e0->leave($__internal_3e50c2ebd5e0ef979daa6dc7a96a529c9183c1be3cbd9faa8d0fcda1b56f92e0_prof);

        
        $__internal_30c233f4305aa16150781488ecd20feedf553d1b60516f36a61d17aeb9d0189d->leave($__internal_30c233f4305aa16150781488ecd20feedf553d1b60516f36a61d17aeb9d0189d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
