<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2cb1371feeba8ed1699bb22d0631c90b6324fcdcb002d06c6353e70521a4997c extends Twig_Template
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
        $__internal_f5f92a240d8b8a48fd938e3a9f1e8183745438aed3120fcf673e316467164ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f92a240d8b8a48fd938e3a9f1e8183745438aed3120fcf673e316467164ec7->enter($__internal_f5f92a240d8b8a48fd938e3a9f1e8183745438aed3120fcf673e316467164ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_9d3eb4d0b259fafdf1df034528fe6dadb23cb29b1f399d4bd90a7f272d04a56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3eb4d0b259fafdf1df034528fe6dadb23cb29b1f399d4bd90a7f272d04a56c->enter($__internal_9d3eb4d0b259fafdf1df034528fe6dadb23cb29b1f399d4bd90a7f272d04a56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f5f92a240d8b8a48fd938e3a9f1e8183745438aed3120fcf673e316467164ec7->leave($__internal_f5f92a240d8b8a48fd938e3a9f1e8183745438aed3120fcf673e316467164ec7_prof);

        
        $__internal_9d3eb4d0b259fafdf1df034528fe6dadb23cb29b1f399d4bd90a7f272d04a56c->leave($__internal_9d3eb4d0b259fafdf1df034528fe6dadb23cb29b1f399d4bd90a7f272d04a56c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
