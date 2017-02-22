<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_51b974c258e61ce570e51efbfa89b062dac61d6f46284556c135b76bbe25e88d extends Twig_Template
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
        $__internal_bae5930f2232dff3ff3446090611a2b8f11c30842dfc38ac7839fcdd3d1372b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae5930f2232dff3ff3446090611a2b8f11c30842dfc38ac7839fcdd3d1372b7->enter($__internal_bae5930f2232dff3ff3446090611a2b8f11c30842dfc38ac7839fcdd3d1372b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6f573ec1edb3b0a529288727571024036dc76bc4006f20110849f2fc97ae67a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f573ec1edb3b0a529288727571024036dc76bc4006f20110849f2fc97ae67a0->enter($__internal_6f573ec1edb3b0a529288727571024036dc76bc4006f20110849f2fc97ae67a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_bae5930f2232dff3ff3446090611a2b8f11c30842dfc38ac7839fcdd3d1372b7->leave($__internal_bae5930f2232dff3ff3446090611a2b8f11c30842dfc38ac7839fcdd3d1372b7_prof);

        
        $__internal_6f573ec1edb3b0a529288727571024036dc76bc4006f20110849f2fc97ae67a0->leave($__internal_6f573ec1edb3b0a529288727571024036dc76bc4006f20110849f2fc97ae67a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
