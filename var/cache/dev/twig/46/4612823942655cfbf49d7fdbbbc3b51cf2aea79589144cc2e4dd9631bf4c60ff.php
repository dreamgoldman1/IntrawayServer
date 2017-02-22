<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_54b9b918dad1cd275aa79252279314378caa278b0c1c5029de4ee8f033419821 extends Twig_Template
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
        $__internal_487baa67015cc8283334e19fe6de2761de639cd603159e4db9c4c3874b43eb31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487baa67015cc8283334e19fe6de2761de639cd603159e4db9c4c3874b43eb31->enter($__internal_487baa67015cc8283334e19fe6de2761de639cd603159e4db9c4c3874b43eb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_30bebcd5678c5157dab99df259243a5dacb539fc3b4634c51fa076a9264db276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bebcd5678c5157dab99df259243a5dacb539fc3b4634c51fa076a9264db276->enter($__internal_30bebcd5678c5157dab99df259243a5dacb539fc3b4634c51fa076a9264db276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_487baa67015cc8283334e19fe6de2761de639cd603159e4db9c4c3874b43eb31->leave($__internal_487baa67015cc8283334e19fe6de2761de639cd603159e4db9c4c3874b43eb31_prof);

        
        $__internal_30bebcd5678c5157dab99df259243a5dacb539fc3b4634c51fa076a9264db276->leave($__internal_30bebcd5678c5157dab99df259243a5dacb539fc3b4634c51fa076a9264db276_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
