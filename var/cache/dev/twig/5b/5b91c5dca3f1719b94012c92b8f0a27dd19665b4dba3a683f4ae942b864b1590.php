<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9d501caf755403338fee31fcd96c6a0e4dac6912f9aa46fcb3c2499266ad6277 extends Twig_Template
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
        $__internal_bb40ffe9b1cdf12c51452870da8023c27a3c677f900854344ad7062c1b314ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb40ffe9b1cdf12c51452870da8023c27a3c677f900854344ad7062c1b314ad8->enter($__internal_bb40ffe9b1cdf12c51452870da8023c27a3c677f900854344ad7062c1b314ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c28a3b4fb4e8b45cd685bd8c19fd998ad641aaed3b7e82e9c349a94e6f9819c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28a3b4fb4e8b45cd685bd8c19fd998ad641aaed3b7e82e9c349a94e6f9819c9->enter($__internal_c28a3b4fb4e8b45cd685bd8c19fd998ad641aaed3b7e82e9c349a94e6f9819c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_bb40ffe9b1cdf12c51452870da8023c27a3c677f900854344ad7062c1b314ad8->leave($__internal_bb40ffe9b1cdf12c51452870da8023c27a3c677f900854344ad7062c1b314ad8_prof);

        
        $__internal_c28a3b4fb4e8b45cd685bd8c19fd998ad641aaed3b7e82e9c349a94e6f9819c9->leave($__internal_c28a3b4fb4e8b45cd685bd8c19fd998ad641aaed3b7e82e9c349a94e6f9819c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
