<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_ff95babfcda70595578c4e9550ca8e188c0e99c259c46b023576c8fe811a155a extends Twig_Template
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
        $__internal_38401bd37a4540549c58a46b139266930f776dd9ac1870bb63f5eef85e907785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38401bd37a4540549c58a46b139266930f776dd9ac1870bb63f5eef85e907785->enter($__internal_38401bd37a4540549c58a46b139266930f776dd9ac1870bb63f5eef85e907785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_5761c91ca759ab340a91418cc599fc3fd9e0d382db1b5e25a05b04a03e50dd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5761c91ca759ab340a91418cc599fc3fd9e0d382db1b5e25a05b04a03e50dd2c->enter($__internal_5761c91ca759ab340a91418cc599fc3fd9e0d382db1b5e25a05b04a03e50dd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_38401bd37a4540549c58a46b139266930f776dd9ac1870bb63f5eef85e907785->leave($__internal_38401bd37a4540549c58a46b139266930f776dd9ac1870bb63f5eef85e907785_prof);

        
        $__internal_5761c91ca759ab340a91418cc599fc3fd9e0d382db1b5e25a05b04a03e50dd2c->leave($__internal_5761c91ca759ab340a91418cc599fc3fd9e0d382db1b5e25a05b04a03e50dd2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
