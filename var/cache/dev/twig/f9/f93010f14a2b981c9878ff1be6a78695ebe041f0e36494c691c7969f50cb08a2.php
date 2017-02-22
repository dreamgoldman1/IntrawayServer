<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_53b499e9700e9227e65ed83fc6ff4397e9c6ac2ead38c2f540131efc88aa6332 extends Twig_Template
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
        $__internal_31a86276e3eec04680a43a880ec4ff037e37ca4215ae1b7e479e564848717e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a86276e3eec04680a43a880ec4ff037e37ca4215ae1b7e479e564848717e5f->enter($__internal_31a86276e3eec04680a43a880ec4ff037e37ca4215ae1b7e479e564848717e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b21807e4f664a12dc209c3bad88421ab828ed8582ed0adc3d0f2634014af0460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21807e4f664a12dc209c3bad88421ab828ed8582ed0adc3d0f2634014af0460->enter($__internal_b21807e4f664a12dc209c3bad88421ab828ed8582ed0adc3d0f2634014af0460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_31a86276e3eec04680a43a880ec4ff037e37ca4215ae1b7e479e564848717e5f->leave($__internal_31a86276e3eec04680a43a880ec4ff037e37ca4215ae1b7e479e564848717e5f_prof);

        
        $__internal_b21807e4f664a12dc209c3bad88421ab828ed8582ed0adc3d0f2634014af0460->leave($__internal_b21807e4f664a12dc209c3bad88421ab828ed8582ed0adc3d0f2634014af0460_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
