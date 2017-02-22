<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_badaea7f31119e98727051b89aff003fa57d9ac1331a446306d01003014d9c3b extends Twig_Template
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
        $__internal_3d4f8916079f252f52715625c4a66e96e0fb1a95f9bf77b2ff1d261494634a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4f8916079f252f52715625c4a66e96e0fb1a95f9bf77b2ff1d261494634a3d->enter($__internal_3d4f8916079f252f52715625c4a66e96e0fb1a95f9bf77b2ff1d261494634a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c8eda494cd633330b9e9a5086a6c84934d02982c1e88ebc2d3fcd76e07beeeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8eda494cd633330b9e9a5086a6c84934d02982c1e88ebc2d3fcd76e07beeeff->enter($__internal_c8eda494cd633330b9e9a5086a6c84934d02982c1e88ebc2d3fcd76e07beeeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3d4f8916079f252f52715625c4a66e96e0fb1a95f9bf77b2ff1d261494634a3d->leave($__internal_3d4f8916079f252f52715625c4a66e96e0fb1a95f9bf77b2ff1d261494634a3d_prof);

        
        $__internal_c8eda494cd633330b9e9a5086a6c84934d02982c1e88ebc2d3fcd76e07beeeff->leave($__internal_c8eda494cd633330b9e9a5086a6c84934d02982c1e88ebc2d3fcd76e07beeeff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
