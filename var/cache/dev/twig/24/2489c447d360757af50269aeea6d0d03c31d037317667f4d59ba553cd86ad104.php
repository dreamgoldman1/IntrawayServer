<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b69598cfad517373e52a1f98c49b09292435511797e9c1596c8caaffd7bc673b extends Twig_Template
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
        $__internal_9b304efc07254e52931d4efbdb4975dfc1997d9b3e00e259ac9b6d032596df99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b304efc07254e52931d4efbdb4975dfc1997d9b3e00e259ac9b6d032596df99->enter($__internal_9b304efc07254e52931d4efbdb4975dfc1997d9b3e00e259ac9b6d032596df99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_75cd96290de23a6c176cd12affbf1ab26afc6a49477b3690d8076c8480d3547e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75cd96290de23a6c176cd12affbf1ab26afc6a49477b3690d8076c8480d3547e->enter($__internal_75cd96290de23a6c176cd12affbf1ab26afc6a49477b3690d8076c8480d3547e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9b304efc07254e52931d4efbdb4975dfc1997d9b3e00e259ac9b6d032596df99->leave($__internal_9b304efc07254e52931d4efbdb4975dfc1997d9b3e00e259ac9b6d032596df99_prof);

        
        $__internal_75cd96290de23a6c176cd12affbf1ab26afc6a49477b3690d8076c8480d3547e->leave($__internal_75cd96290de23a6c176cd12affbf1ab26afc6a49477b3690d8076c8480d3547e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
