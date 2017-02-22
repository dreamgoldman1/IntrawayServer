<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5616e7d110e3a6e60a7dd2dfc55825fe5128bbf96406a592f0b93ee998585e6b extends Twig_Template
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
        $__internal_61abcbf8a075a55038dad0ef53e1eaf3543e97dfada2c3fe348a4afc65ce600e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61abcbf8a075a55038dad0ef53e1eaf3543e97dfada2c3fe348a4afc65ce600e->enter($__internal_61abcbf8a075a55038dad0ef53e1eaf3543e97dfada2c3fe348a4afc65ce600e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_23bc2942aef1224c13f19393ba8d415d51e5664ea4da4857b2f75563e9594bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23bc2942aef1224c13f19393ba8d415d51e5664ea4da4857b2f75563e9594bf5->enter($__internal_23bc2942aef1224c13f19393ba8d415d51e5664ea4da4857b2f75563e9594bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_61abcbf8a075a55038dad0ef53e1eaf3543e97dfada2c3fe348a4afc65ce600e->leave($__internal_61abcbf8a075a55038dad0ef53e1eaf3543e97dfada2c3fe348a4afc65ce600e_prof);

        
        $__internal_23bc2942aef1224c13f19393ba8d415d51e5664ea4da4857b2f75563e9594bf5->leave($__internal_23bc2942aef1224c13f19393ba8d415d51e5664ea4da4857b2f75563e9594bf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
