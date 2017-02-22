<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0cbd9c888264907070ac7495bccc5f60b10ebd4ca8e75d0e8ad4922427374b86 extends Twig_Template
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
        $__internal_a145c73df60cf9d991ff3284fc75938607645a13d3a343b89e2f277b0713f6f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a145c73df60cf9d991ff3284fc75938607645a13d3a343b89e2f277b0713f6f9->enter($__internal_a145c73df60cf9d991ff3284fc75938607645a13d3a343b89e2f277b0713f6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_43d909a5e274eca5ccbffcd77ccbc9480fbd02cccf8050a7b9853e00affb4244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d909a5e274eca5ccbffcd77ccbc9480fbd02cccf8050a7b9853e00affb4244->enter($__internal_43d909a5e274eca5ccbffcd77ccbc9480fbd02cccf8050a7b9853e00affb4244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a145c73df60cf9d991ff3284fc75938607645a13d3a343b89e2f277b0713f6f9->leave($__internal_a145c73df60cf9d991ff3284fc75938607645a13d3a343b89e2f277b0713f6f9_prof);

        
        $__internal_43d909a5e274eca5ccbffcd77ccbc9480fbd02cccf8050a7b9853e00affb4244->leave($__internal_43d909a5e274eca5ccbffcd77ccbc9480fbd02cccf8050a7b9853e00affb4244_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
