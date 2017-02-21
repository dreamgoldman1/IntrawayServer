<?php

/* GOLFooterBundle:Default:index.html.twig */
class __TwigTemplate_b685e2b78b5b5d01bf133b9ee7df22209d5b5a363cce09fc8252b9a809d5a697 extends Twig_Template
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
        $__internal_fe2134a478996f659ecd69491dda3c1082aaaedd2989e6757c0932693633d9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2134a478996f659ecd69491dda3c1082aaaedd2989e6757c0932693633d9a7->enter($__internal_fe2134a478996f659ecd69491dda3c1082aaaedd2989e6757c0932693633d9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLFooterBundle:Default:index.html.twig"));

        $__internal_73d778e900c0265666c694a0f1cc1b4d6147d9ac5e09ffe1df3f565175763847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d778e900c0265666c694a0f1cc1b4d6147d9ac5e09ffe1df3f565175763847->enter($__internal_73d778e900c0265666c694a0f1cc1b4d6147d9ac5e09ffe1df3f565175763847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLFooterBundle:Default:index.html.twig"));

        // line 1
        echo "<!-- ===========================
FOOTER
=========================== -->
<footer class=\"text-center\">
    <p><a href=\"http://cv.gilbertoorozco.net\" target=\"_blank\">Gilberto Orozco Linero </a>&copy; 2017.</p>
</footer>";
        
        $__internal_fe2134a478996f659ecd69491dda3c1082aaaedd2989e6757c0932693633d9a7->leave($__internal_fe2134a478996f659ecd69491dda3c1082aaaedd2989e6757c0932693633d9a7_prof);

        
        $__internal_73d778e900c0265666c694a0f1cc1b4d6147d9ac5e09ffe1df3f565175763847->leave($__internal_73d778e900c0265666c694a0f1cc1b4d6147d9ac5e09ffe1df3f565175763847_prof);

    }

    public function getTemplateName()
    {
        return "GOLFooterBundle:Default:index.html.twig";
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
        return new Twig_Source("<!-- ===========================
FOOTER
=========================== -->
<footer class=\"text-center\">
    <p><a href=\"http://cv.gilbertoorozco.net\" target=\"_blank\">Gilberto Orozco Linero </a>&copy; 2017.</p>
</footer>", "GOLFooterBundle:Default:index.html.twig", "/var/www/IntrawayServer/src/GOL/FooterBundle/Resources/views/Default/index.html.twig");
    }
}
