<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a1fdff7aafdd46a148527a476088d3fe0b3e05781102cd8f9aad4af5b4799ef9 extends Twig_Template
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
        $__internal_7cf55ce0be96f357df72db46f12a7acacb9331d2962cfe4da604b6ee08cf8dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf55ce0be96f357df72db46f12a7acacb9331d2962cfe4da604b6ee08cf8dc0->enter($__internal_7cf55ce0be96f357df72db46f12a7acacb9331d2962cfe4da604b6ee08cf8dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6fdba50c9e5b8a910e816765c7323bc3737c657bf1e60f7cb209a7d5f3a8479d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdba50c9e5b8a910e816765c7323bc3737c657bf1e60f7cb209a7d5f3a8479d->enter($__internal_6fdba50c9e5b8a910e816765c7323bc3737c657bf1e60f7cb209a7d5f3a8479d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7cf55ce0be96f357df72db46f12a7acacb9331d2962cfe4da604b6ee08cf8dc0->leave($__internal_7cf55ce0be96f357df72db46f12a7acacb9331d2962cfe4da604b6ee08cf8dc0_prof);

        
        $__internal_6fdba50c9e5b8a910e816765c7323bc3737c657bf1e60f7cb209a7d5f3a8479d->leave($__internal_6fdba50c9e5b8a910e816765c7323bc3737c657bf1e60f7cb209a7d5f3a8479d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
