<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_de90c5e5eb9e288272d6f5c720f211d5bfd238d4b4094c8797d2175df0c4ac97 extends Twig_Template
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
        $__internal_73c4b271e702b2290ca147dbf079a0e2e0754a5d2132673b865dd3f534282ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c4b271e702b2290ca147dbf079a0e2e0754a5d2132673b865dd3f534282ffb->enter($__internal_73c4b271e702b2290ca147dbf079a0e2e0754a5d2132673b865dd3f534282ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_72193537b9be9cad766f92275106be3a52181b35a3332c383971591acf3eb3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72193537b9be9cad766f92275106be3a52181b35a3332c383971591acf3eb3d6->enter($__internal_72193537b9be9cad766f92275106be3a52181b35a3332c383971591acf3eb3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_73c4b271e702b2290ca147dbf079a0e2e0754a5d2132673b865dd3f534282ffb->leave($__internal_73c4b271e702b2290ca147dbf079a0e2e0754a5d2132673b865dd3f534282ffb_prof);

        
        $__internal_72193537b9be9cad766f92275106be3a52181b35a3332c383971591acf3eb3d6->leave($__internal_72193537b9be9cad766f92275106be3a52181b35a3332c383971591acf3eb3d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
