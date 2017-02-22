<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_22f6b991aa010fed63171b80bd899e36a343e551de91d76fb60a04e8c05c086c extends Twig_Template
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
        $__internal_7dc936253a2d2a1f2e2a6567ef3fd807d1e24e16bd31a1a05bcede30669eb7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc936253a2d2a1f2e2a6567ef3fd807d1e24e16bd31a1a05bcede30669eb7cf->enter($__internal_7dc936253a2d2a1f2e2a6567ef3fd807d1e24e16bd31a1a05bcede30669eb7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4e06bea7e34ca74eea94e46cdc05e5bfc9caf6a358af17783fecd224765540f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e06bea7e34ca74eea94e46cdc05e5bfc9caf6a358af17783fecd224765540f8->enter($__internal_4e06bea7e34ca74eea94e46cdc05e5bfc9caf6a358af17783fecd224765540f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7dc936253a2d2a1f2e2a6567ef3fd807d1e24e16bd31a1a05bcede30669eb7cf->leave($__internal_7dc936253a2d2a1f2e2a6567ef3fd807d1e24e16bd31a1a05bcede30669eb7cf_prof);

        
        $__internal_4e06bea7e34ca74eea94e46cdc05e5bfc9caf6a358af17783fecd224765540f8->leave($__internal_4e06bea7e34ca74eea94e46cdc05e5bfc9caf6a358af17783fecd224765540f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
