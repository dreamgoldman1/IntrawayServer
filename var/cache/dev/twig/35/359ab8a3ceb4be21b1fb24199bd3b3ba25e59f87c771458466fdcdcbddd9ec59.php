<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_653c22a4f22f493e242cb783acb6e77e59cd051536346e88ad8bae2aa8116bc7 extends Twig_Template
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
        $__internal_13b5b7c5f5532107eb46b74e2c1c955d8659b079caa7d72718cad87ee2293ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b5b7c5f5532107eb46b74e2c1c955d8659b079caa7d72718cad87ee2293ecf->enter($__internal_13b5b7c5f5532107eb46b74e2c1c955d8659b079caa7d72718cad87ee2293ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c62380566b5d18db0fabc2f1710939f0e690700cfa0652fda1deb86fc20535f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62380566b5d18db0fabc2f1710939f0e690700cfa0652fda1deb86fc20535f3->enter($__internal_c62380566b5d18db0fabc2f1710939f0e690700cfa0652fda1deb86fc20535f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_13b5b7c5f5532107eb46b74e2c1c955d8659b079caa7d72718cad87ee2293ecf->leave($__internal_13b5b7c5f5532107eb46b74e2c1c955d8659b079caa7d72718cad87ee2293ecf_prof);

        
        $__internal_c62380566b5d18db0fabc2f1710939f0e690700cfa0652fda1deb86fc20535f3->leave($__internal_c62380566b5d18db0fabc2f1710939f0e690700cfa0652fda1deb86fc20535f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
