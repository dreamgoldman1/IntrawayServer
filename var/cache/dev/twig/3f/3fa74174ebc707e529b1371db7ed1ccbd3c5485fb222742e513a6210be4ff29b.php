<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_2c29634760b17543e9ccd96df4246758ace5a478f063510b15e80269e5d87de4 extends Twig_Template
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
        $__internal_f70bf9bce6d670602548d74ee4a2f4b88aec29855b70e41018ce043cc23fac00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70bf9bce6d670602548d74ee4a2f4b88aec29855b70e41018ce043cc23fac00->enter($__internal_f70bf9bce6d670602548d74ee4a2f4b88aec29855b70e41018ce043cc23fac00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2723e48c0b51e6358e689f30ad3c820acf9ee4f29276a35eba688260494a6f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2723e48c0b51e6358e689f30ad3c820acf9ee4f29276a35eba688260494a6f76->enter($__internal_2723e48c0b51e6358e689f30ad3c820acf9ee4f29276a35eba688260494a6f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f70bf9bce6d670602548d74ee4a2f4b88aec29855b70e41018ce043cc23fac00->leave($__internal_f70bf9bce6d670602548d74ee4a2f4b88aec29855b70e41018ce043cc23fac00_prof);

        
        $__internal_2723e48c0b51e6358e689f30ad3c820acf9ee4f29276a35eba688260494a6f76->leave($__internal_2723e48c0b51e6358e689f30ad3c820acf9ee4f29276a35eba688260494a6f76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
