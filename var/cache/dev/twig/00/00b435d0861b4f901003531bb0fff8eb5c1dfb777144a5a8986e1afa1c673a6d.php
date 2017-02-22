<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6beb572cc3349330119da77b7d8d71fae0f27a564e0daff9d84425bdee21270f extends Twig_Template
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
        $__internal_242fc556aec3085d05dfd23d8f3cdb25fd9fc1098bad7c313512bce0cf198e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242fc556aec3085d05dfd23d8f3cdb25fd9fc1098bad7c313512bce0cf198e50->enter($__internal_242fc556aec3085d05dfd23d8f3cdb25fd9fc1098bad7c313512bce0cf198e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a71f587f603338a69b40a623253495495428a57bdb02d8ffdf7503d1c5f18662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71f587f603338a69b40a623253495495428a57bdb02d8ffdf7503d1c5f18662->enter($__internal_a71f587f603338a69b40a623253495495428a57bdb02d8ffdf7503d1c5f18662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_242fc556aec3085d05dfd23d8f3cdb25fd9fc1098bad7c313512bce0cf198e50->leave($__internal_242fc556aec3085d05dfd23d8f3cdb25fd9fc1098bad7c313512bce0cf198e50_prof);

        
        $__internal_a71f587f603338a69b40a623253495495428a57bdb02d8ffdf7503d1c5f18662->leave($__internal_a71f587f603338a69b40a623253495495428a57bdb02d8ffdf7503d1c5f18662_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
