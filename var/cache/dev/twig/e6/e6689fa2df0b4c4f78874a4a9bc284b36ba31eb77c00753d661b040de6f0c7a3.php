<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f03da5bf6ff20eb61a1beab852060880a3dae0ef0791dfe919ec11c308d081e7 extends Twig_Template
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
        $__internal_d47ca1258922e074d8cc749ac721f230f68d8518d2ea8640d0bcb54a5f830a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47ca1258922e074d8cc749ac721f230f68d8518d2ea8640d0bcb54a5f830a57->enter($__internal_d47ca1258922e074d8cc749ac721f230f68d8518d2ea8640d0bcb54a5f830a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_762877587800e38d0c518b5f610f8b14ea78bae8c4873b83fc4eba18b233da4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762877587800e38d0c518b5f610f8b14ea78bae8c4873b83fc4eba18b233da4a->enter($__internal_762877587800e38d0c518b5f610f8b14ea78bae8c4873b83fc4eba18b233da4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d47ca1258922e074d8cc749ac721f230f68d8518d2ea8640d0bcb54a5f830a57->leave($__internal_d47ca1258922e074d8cc749ac721f230f68d8518d2ea8640d0bcb54a5f830a57_prof);

        
        $__internal_762877587800e38d0c518b5f610f8b14ea78bae8c4873b83fc4eba18b233da4a->leave($__internal_762877587800e38d0c518b5f610f8b14ea78bae8c4873b83fc4eba18b233da4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
