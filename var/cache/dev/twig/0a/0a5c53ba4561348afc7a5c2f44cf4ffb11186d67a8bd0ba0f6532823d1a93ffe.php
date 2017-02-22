<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_61527599f1b475fa210386663620b0946261ed9584f826e23e33dd4604fb2a6e extends Twig_Template
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
        $__internal_10d4d7ab02fc575922a9c91eb3cf3bb6417d306cf3bd997c7d0dc7193bc5e8be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d4d7ab02fc575922a9c91eb3cf3bb6417d306cf3bd997c7d0dc7193bc5e8be->enter($__internal_10d4d7ab02fc575922a9c91eb3cf3bb6417d306cf3bd997c7d0dc7193bc5e8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a0ba39a060a7ed5d6c56de82401035b5a4277fb34df8bc0b6911d6c5408ea4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ba39a060a7ed5d6c56de82401035b5a4277fb34df8bc0b6911d6c5408ea4c1->enter($__internal_a0ba39a060a7ed5d6c56de82401035b5a4277fb34df8bc0b6911d6c5408ea4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_10d4d7ab02fc575922a9c91eb3cf3bb6417d306cf3bd997c7d0dc7193bc5e8be->leave($__internal_10d4d7ab02fc575922a9c91eb3cf3bb6417d306cf3bd997c7d0dc7193bc5e8be_prof);

        
        $__internal_a0ba39a060a7ed5d6c56de82401035b5a4277fb34df8bc0b6911d6c5408ea4c1->leave($__internal_a0ba39a060a7ed5d6c56de82401035b5a4277fb34df8bc0b6911d6c5408ea4c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
