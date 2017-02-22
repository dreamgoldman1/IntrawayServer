<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_82e2864967a076e2a826abd420b60d0a08656700d06b6b0d98e43ba8d6af745f extends Twig_Template
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
        $__internal_c00c925b2887ad88e629d22a688aaf421fac4095b85cba0df31b9b6f78df7813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00c925b2887ad88e629d22a688aaf421fac4095b85cba0df31b9b6f78df7813->enter($__internal_c00c925b2887ad88e629d22a688aaf421fac4095b85cba0df31b9b6f78df7813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_60f72a7c24b1bb5425caf377894e88a18e14bfbc48b5179339ad53949864357b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f72a7c24b1bb5425caf377894e88a18e14bfbc48b5179339ad53949864357b->enter($__internal_60f72a7c24b1bb5425caf377894e88a18e14bfbc48b5179339ad53949864357b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c00c925b2887ad88e629d22a688aaf421fac4095b85cba0df31b9b6f78df7813->leave($__internal_c00c925b2887ad88e629d22a688aaf421fac4095b85cba0df31b9b6f78df7813_prof);

        
        $__internal_60f72a7c24b1bb5425caf377894e88a18e14bfbc48b5179339ad53949864357b->leave($__internal_60f72a7c24b1bb5425caf377894e88a18e14bfbc48b5179339ad53949864357b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
