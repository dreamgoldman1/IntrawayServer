<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_24463ec574760a3154e4b6f6933bae07c9c68ce4ba4c0a2afedd816775fe0756 extends Twig_Template
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
        $__internal_2595954015df17bbdd61dd24d0ceaa55583276c23afb66f1d1897d76f14dfe31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2595954015df17bbdd61dd24d0ceaa55583276c23afb66f1d1897d76f14dfe31->enter($__internal_2595954015df17bbdd61dd24d0ceaa55583276c23afb66f1d1897d76f14dfe31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0ce90fa0d5efc34e335ca7de4f0a9a0c1b90a6cdcc41eb73a816e4b1aa1ecc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce90fa0d5efc34e335ca7de4f0a9a0c1b90a6cdcc41eb73a816e4b1aa1ecc93->enter($__internal_0ce90fa0d5efc34e335ca7de4f0a9a0c1b90a6cdcc41eb73a816e4b1aa1ecc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2595954015df17bbdd61dd24d0ceaa55583276c23afb66f1d1897d76f14dfe31->leave($__internal_2595954015df17bbdd61dd24d0ceaa55583276c23afb66f1d1897d76f14dfe31_prof);

        
        $__internal_0ce90fa0d5efc34e335ca7de4f0a9a0c1b90a6cdcc41eb73a816e4b1aa1ecc93->leave($__internal_0ce90fa0d5efc34e335ca7de4f0a9a0c1b90a6cdcc41eb73a816e4b1aa1ecc93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
