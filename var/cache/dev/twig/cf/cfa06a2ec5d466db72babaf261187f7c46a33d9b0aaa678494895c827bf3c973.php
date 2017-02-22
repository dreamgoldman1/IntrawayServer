<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d10def0337bf3774b93fb4328d02b4add8a571f09f062ebb70006149535ad8da extends Twig_Template
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
        $__internal_42322d6237262c8d4bca62d590bda1503427c0d5535a3b0dca8697479e6826ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42322d6237262c8d4bca62d590bda1503427c0d5535a3b0dca8697479e6826ff->enter($__internal_42322d6237262c8d4bca62d590bda1503427c0d5535a3b0dca8697479e6826ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_579f1ec9c2121defe40efccc19b0cd897018a8446f65f54581e325172316b86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579f1ec9c2121defe40efccc19b0cd897018a8446f65f54581e325172316b86f->enter($__internal_579f1ec9c2121defe40efccc19b0cd897018a8446f65f54581e325172316b86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_42322d6237262c8d4bca62d590bda1503427c0d5535a3b0dca8697479e6826ff->leave($__internal_42322d6237262c8d4bca62d590bda1503427c0d5535a3b0dca8697479e6826ff_prof);

        
        $__internal_579f1ec9c2121defe40efccc19b0cd897018a8446f65f54581e325172316b86f->leave($__internal_579f1ec9c2121defe40efccc19b0cd897018a8446f65f54581e325172316b86f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
