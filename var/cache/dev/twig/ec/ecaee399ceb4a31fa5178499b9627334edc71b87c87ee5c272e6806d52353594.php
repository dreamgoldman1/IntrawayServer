<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_da93badab076d58e183c69d35c44eee527bf462fe0fce1d6d6c9310bda6822b5 extends Twig_Template
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
        $__internal_be4179a311fdb6f73f10bfab3eb848f615271e00fa4e01600e8c02957ae37f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4179a311fdb6f73f10bfab3eb848f615271e00fa4e01600e8c02957ae37f9f->enter($__internal_be4179a311fdb6f73f10bfab3eb848f615271e00fa4e01600e8c02957ae37f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_561ed9396b5c95ba69bb0ea3b62ee5a6e091289525a9bf5d67ac6af6306e55ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561ed9396b5c95ba69bb0ea3b62ee5a6e091289525a9bf5d67ac6af6306e55ca->enter($__internal_561ed9396b5c95ba69bb0ea3b62ee5a6e091289525a9bf5d67ac6af6306e55ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_be4179a311fdb6f73f10bfab3eb848f615271e00fa4e01600e8c02957ae37f9f->leave($__internal_be4179a311fdb6f73f10bfab3eb848f615271e00fa4e01600e8c02957ae37f9f_prof);

        
        $__internal_561ed9396b5c95ba69bb0ea3b62ee5a6e091289525a9bf5d67ac6af6306e55ca->leave($__internal_561ed9396b5c95ba69bb0ea3b62ee5a6e091289525a9bf5d67ac6af6306e55ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
