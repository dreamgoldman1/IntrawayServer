<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8512ec94405e80af9e1916e241449eda80b2c574b94bde22fc6d8e995040db9d extends Twig_Template
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
        $__internal_a63c6b1062dc093e1a3372bd732d1bb0eb64d8aad8e6e9d3a2cd183b17cc07ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63c6b1062dc093e1a3372bd732d1bb0eb64d8aad8e6e9d3a2cd183b17cc07ba->enter($__internal_a63c6b1062dc093e1a3372bd732d1bb0eb64d8aad8e6e9d3a2cd183b17cc07ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_b84d5af51530038a9c00e1f634609e8f38b3befc4b1f5ae7d157b1fb5aa2888b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84d5af51530038a9c00e1f634609e8f38b3befc4b1f5ae7d157b1fb5aa2888b->enter($__internal_b84d5af51530038a9c00e1f634609e8f38b3befc4b1f5ae7d157b1fb5aa2888b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_a63c6b1062dc093e1a3372bd732d1bb0eb64d8aad8e6e9d3a2cd183b17cc07ba->leave($__internal_a63c6b1062dc093e1a3372bd732d1bb0eb64d8aad8e6e9d3a2cd183b17cc07ba_prof);

        
        $__internal_b84d5af51530038a9c00e1f634609e8f38b3befc4b1f5ae7d157b1fb5aa2888b->leave($__internal_b84d5af51530038a9c00e1f634609e8f38b3befc4b1f5ae7d157b1fb5aa2888b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
