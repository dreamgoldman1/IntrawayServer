<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a6d7250fac0fe09ae9d9dc48481a6fc3c2cdd5b65b08e4cc7595d600b905dcec extends Twig_Template
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
        $__internal_2724efaa295a092833a2e2c748cc88a6bb4a623879e21a2f2f73119a20bfe65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2724efaa295a092833a2e2c748cc88a6bb4a623879e21a2f2f73119a20bfe65a->enter($__internal_2724efaa295a092833a2e2c748cc88a6bb4a623879e21a2f2f73119a20bfe65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_50fd7f7fb4e9b4a2ff38a10f8ac98901fef24a2532f1313e939561a1ac68dfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fd7f7fb4e9b4a2ff38a10f8ac98901fef24a2532f1313e939561a1ac68dfb6->enter($__internal_50fd7f7fb4e9b4a2ff38a10f8ac98901fef24a2532f1313e939561a1ac68dfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2724efaa295a092833a2e2c748cc88a6bb4a623879e21a2f2f73119a20bfe65a->leave($__internal_2724efaa295a092833a2e2c748cc88a6bb4a623879e21a2f2f73119a20bfe65a_prof);

        
        $__internal_50fd7f7fb4e9b4a2ff38a10f8ac98901fef24a2532f1313e939561a1ac68dfb6->leave($__internal_50fd7f7fb4e9b4a2ff38a10f8ac98901fef24a2532f1313e939561a1ac68dfb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
