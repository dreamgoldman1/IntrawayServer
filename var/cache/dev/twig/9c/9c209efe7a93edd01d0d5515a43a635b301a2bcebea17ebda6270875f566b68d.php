<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d190c8eb8212fd21ba767679ac936bf4bc16ecd729c80d7b6d5e107d31acd0c0 extends Twig_Template
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
        $__internal_eca233cf2e2b6168e92e47c44648f80d338b8108a052cfb40f2705cb471e6fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca233cf2e2b6168e92e47c44648f80d338b8108a052cfb40f2705cb471e6fbe->enter($__internal_eca233cf2e2b6168e92e47c44648f80d338b8108a052cfb40f2705cb471e6fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_aee88caa39a09788dc67e685f3ff7244542f9545f635c0d3716b37296cd43b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee88caa39a09788dc67e685f3ff7244542f9545f635c0d3716b37296cd43b97->enter($__internal_aee88caa39a09788dc67e685f3ff7244542f9545f635c0d3716b37296cd43b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_eca233cf2e2b6168e92e47c44648f80d338b8108a052cfb40f2705cb471e6fbe->leave($__internal_eca233cf2e2b6168e92e47c44648f80d338b8108a052cfb40f2705cb471e6fbe_prof);

        
        $__internal_aee88caa39a09788dc67e685f3ff7244542f9545f635c0d3716b37296cd43b97->leave($__internal_aee88caa39a09788dc67e685f3ff7244542f9545f635c0d3716b37296cd43b97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
