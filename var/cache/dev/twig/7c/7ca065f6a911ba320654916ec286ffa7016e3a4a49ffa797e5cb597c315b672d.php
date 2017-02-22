<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_60e8da93633c91ee986dfb1b219a60c843da13508e3d61c53290e3ed62da5379 extends Twig_Template
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
        $__internal_918fd96674b7966440d4a25e984e1289414217ccff3d3e5b7bfcc0c47a131ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918fd96674b7966440d4a25e984e1289414217ccff3d3e5b7bfcc0c47a131ec5->enter($__internal_918fd96674b7966440d4a25e984e1289414217ccff3d3e5b7bfcc0c47a131ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_68d3a61a250c956d71a5593b8e195d0f95543e598cf1c8fd35f6eefa76bee6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d3a61a250c956d71a5593b8e195d0f95543e598cf1c8fd35f6eefa76bee6cb->enter($__internal_68d3a61a250c956d71a5593b8e195d0f95543e598cf1c8fd35f6eefa76bee6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_918fd96674b7966440d4a25e984e1289414217ccff3d3e5b7bfcc0c47a131ec5->leave($__internal_918fd96674b7966440d4a25e984e1289414217ccff3d3e5b7bfcc0c47a131ec5_prof);

        
        $__internal_68d3a61a250c956d71a5593b8e195d0f95543e598cf1c8fd35f6eefa76bee6cb->leave($__internal_68d3a61a250c956d71a5593b8e195d0f95543e598cf1c8fd35f6eefa76bee6cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
