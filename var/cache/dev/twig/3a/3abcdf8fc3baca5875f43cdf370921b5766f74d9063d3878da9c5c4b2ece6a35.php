<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5a192bfbb948dcc1f71e563f1f48886fbc332284c825ef373f17aa9d71d2dfec extends Twig_Template
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
        $__internal_abd8d0b49f8575ad0a3c081497cc05679205850adf16c4195e33dfbb4bdcb3ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd8d0b49f8575ad0a3c081497cc05679205850adf16c4195e33dfbb4bdcb3ee->enter($__internal_abd8d0b49f8575ad0a3c081497cc05679205850adf16c4195e33dfbb4bdcb3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f432d53e38986ae264fdd0b204e5e9038c6550d8ee7ed7ddbbf82152b5c567a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f432d53e38986ae264fdd0b204e5e9038c6550d8ee7ed7ddbbf82152b5c567a9->enter($__internal_f432d53e38986ae264fdd0b204e5e9038c6550d8ee7ed7ddbbf82152b5c567a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_abd8d0b49f8575ad0a3c081497cc05679205850adf16c4195e33dfbb4bdcb3ee->leave($__internal_abd8d0b49f8575ad0a3c081497cc05679205850adf16c4195e33dfbb4bdcb3ee_prof);

        
        $__internal_f432d53e38986ae264fdd0b204e5e9038c6550d8ee7ed7ddbbf82152b5c567a9->leave($__internal_f432d53e38986ae264fdd0b204e5e9038c6550d8ee7ed7ddbbf82152b5c567a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
