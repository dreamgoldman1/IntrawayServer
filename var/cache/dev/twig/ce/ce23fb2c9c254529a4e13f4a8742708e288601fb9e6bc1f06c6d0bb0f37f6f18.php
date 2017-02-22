<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c3ad11703621a00b1b98ffd851127724a96c797605d851888aa7bb10e73ac38e extends Twig_Template
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
        $__internal_590101c33839bef3845dda4758252ab89f25cdb22832fe797af15c4173209a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590101c33839bef3845dda4758252ab89f25cdb22832fe797af15c4173209a6b->enter($__internal_590101c33839bef3845dda4758252ab89f25cdb22832fe797af15c4173209a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0fc889052e1d5296e3e73712ebd956de7adf8b86618dc316b1d2ee99767f8b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc889052e1d5296e3e73712ebd956de7adf8b86618dc316b1d2ee99767f8b0b->enter($__internal_0fc889052e1d5296e3e73712ebd956de7adf8b86618dc316b1d2ee99767f8b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_590101c33839bef3845dda4758252ab89f25cdb22832fe797af15c4173209a6b->leave($__internal_590101c33839bef3845dda4758252ab89f25cdb22832fe797af15c4173209a6b_prof);

        
        $__internal_0fc889052e1d5296e3e73712ebd956de7adf8b86618dc316b1d2ee99767f8b0b->leave($__internal_0fc889052e1d5296e3e73712ebd956de7adf8b86618dc316b1d2ee99767f8b0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
