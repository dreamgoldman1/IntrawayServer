<?php

/* GOLFooterBundle:Footer:footer.html.twig */
class __TwigTemplate_433abdb051fd0b2dd68ce506723e47419f092e931a0579f4d592e67e4d68e310 extends Twig_Template
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
        // line 1
        echo "<!-- ===========================
FOOTER
=========================== -->
<!-- BEGIN FOOTER -->
<!-- BEGIN INNER FOOTER -->
<div class=\"page-footer\">
    <div class=\"container\"> 2017 &copy; Gilberto Orozco Linero</div>
</div>
<div class=\"scroll-to-top\">
    <i class=\"icon-arrow-up\"></i>
</div>
<!-- END INNER FOOTER -->
<!-- END FOOTER -->";
    }

    public function getTemplateName()
    {
        return "GOLFooterBundle:Footer:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLFooterBundle:Footer:footer.html.twig", "/var/www/IntrawayServer/src/GOL/FooterBundle/Resources/views/Footer/footer.html.twig");
    }
}
