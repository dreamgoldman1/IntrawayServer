<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_35d98a022057ca5bdfc03d9ffba3c0e8600495754e41c1bb6f80f952b9e68132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9403069fdcdce4f6363d058ec7a0b0416ecd426c5beb5c1138cd60584041f61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9403069fdcdce4f6363d058ec7a0b0416ecd426c5beb5c1138cd60584041f61c->enter($__internal_9403069fdcdce4f6363d058ec7a0b0416ecd426c5beb5c1138cd60584041f61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e536fee864d4f405a6d59e53daaec6cc3646435884238166812b39b5c62b3e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e536fee864d4f405a6d59e53daaec6cc3646435884238166812b39b5c62b3e10->enter($__internal_e536fee864d4f405a6d59e53daaec6cc3646435884238166812b39b5c62b3e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9403069fdcdce4f6363d058ec7a0b0416ecd426c5beb5c1138cd60584041f61c->leave($__internal_9403069fdcdce4f6363d058ec7a0b0416ecd426c5beb5c1138cd60584041f61c_prof);

        
        $__internal_e536fee864d4f405a6d59e53daaec6cc3646435884238166812b39b5c62b3e10->leave($__internal_e536fee864d4f405a6d59e53daaec6cc3646435884238166812b39b5c62b3e10_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3188af2eacf841e012ac8ad15108928960e77feced0d769fd5fbc4c372ef6455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3188af2eacf841e012ac8ad15108928960e77feced0d769fd5fbc4c372ef6455->enter($__internal_3188af2eacf841e012ac8ad15108928960e77feced0d769fd5fbc4c372ef6455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90504d51e416f78bf8fe1351ce7202f53f5f3e11b5337776c96f76d5b150eb24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90504d51e416f78bf8fe1351ce7202f53f5f3e11b5337776c96f76d5b150eb24->enter($__internal_90504d51e416f78bf8fe1351ce7202f53f5f3e11b5337776c96f76d5b150eb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_90504d51e416f78bf8fe1351ce7202f53f5f3e11b5337776c96f76d5b150eb24->leave($__internal_90504d51e416f78bf8fe1351ce7202f53f5f3e11b5337776c96f76d5b150eb24_prof);

        
        $__internal_3188af2eacf841e012ac8ad15108928960e77feced0d769fd5fbc4c372ef6455->leave($__internal_3188af2eacf841e012ac8ad15108928960e77feced0d769fd5fbc4c372ef6455_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
