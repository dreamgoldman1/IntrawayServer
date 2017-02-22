<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_10ea8850684cab12cc89fbbd5c26c4522cbff88ded48cc889ac04c06787b31f3 extends Twig_Template
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
        $__internal_66b23a11880c270413e6e870d8e75e1d4b960996af97db26497caf4bc7a2d10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b23a11880c270413e6e870d8e75e1d4b960996af97db26497caf4bc7a2d10b->enter($__internal_66b23a11880c270413e6e870d8e75e1d4b960996af97db26497caf4bc7a2d10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f71d4cc6475f4b5a463971971f9f3d305550afba19d0e0effe64f5a59d528461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71d4cc6475f4b5a463971971f9f3d305550afba19d0e0effe64f5a59d528461->enter($__internal_f71d4cc6475f4b5a463971971f9f3d305550afba19d0e0effe64f5a59d528461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_66b23a11880c270413e6e870d8e75e1d4b960996af97db26497caf4bc7a2d10b->leave($__internal_66b23a11880c270413e6e870d8e75e1d4b960996af97db26497caf4bc7a2d10b_prof);

        
        $__internal_f71d4cc6475f4b5a463971971f9f3d305550afba19d0e0effe64f5a59d528461->leave($__internal_f71d4cc6475f4b5a463971971f9f3d305550afba19d0e0effe64f5a59d528461_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
