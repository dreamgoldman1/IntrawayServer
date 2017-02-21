<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f78a7e6f40109873ca93f751155cf9ddffac2f76fbd091b5321d77752d8072a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f78a7e6f40109873ca93f751155cf9ddffac2f76fbd091b5321d77752d8072a->enter($__internal_2f78a7e6f40109873ca93f751155cf9ddffac2f76fbd091b5321d77752d8072a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_58329405fddbe836d2d373c8f2d324a21359ced5c7ea5f66821126863e0c2f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58329405fddbe836d2d373c8f2d324a21359ced5c7ea5f66821126863e0c2f53->enter($__internal_58329405fddbe836d2d373c8f2d324a21359ced5c7ea5f66821126863e0c2f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2f78a7e6f40109873ca93f751155cf9ddffac2f76fbd091b5321d77752d8072a->leave($__internal_2f78a7e6f40109873ca93f751155cf9ddffac2f76fbd091b5321d77752d8072a_prof);

        
        $__internal_58329405fddbe836d2d373c8f2d324a21359ced5c7ea5f66821126863e0c2f53->leave($__internal_58329405fddbe836d2d373c8f2d324a21359ced5c7ea5f66821126863e0c2f53_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d448b00eb1e4b7d63e817e56dd960cc1b54998a59ae1cd81ee35564ad5fb3ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d448b00eb1e4b7d63e817e56dd960cc1b54998a59ae1cd81ee35564ad5fb3ce6->enter($__internal_d448b00eb1e4b7d63e817e56dd960cc1b54998a59ae1cd81ee35564ad5fb3ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_960a300a8f0c5340f313ec8e92ad1a7de085a8af102267db4ef4d0e8283a93a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960a300a8f0c5340f313ec8e92ad1a7de085a8af102267db4ef4d0e8283a93a7->enter($__internal_960a300a8f0c5340f313ec8e92ad1a7de085a8af102267db4ef4d0e8283a93a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_960a300a8f0c5340f313ec8e92ad1a7de085a8af102267db4ef4d0e8283a93a7->leave($__internal_960a300a8f0c5340f313ec8e92ad1a7de085a8af102267db4ef4d0e8283a93a7_prof);

        
        $__internal_d448b00eb1e4b7d63e817e56dd960cc1b54998a59ae1cd81ee35564ad5fb3ce6->leave($__internal_d448b00eb1e4b7d63e817e56dd960cc1b54998a59ae1cd81ee35564ad5fb3ce6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6da7777d6ab83e76e2acb5586b3dfed056a91ca37201abb8a40df4f589882632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da7777d6ab83e76e2acb5586b3dfed056a91ca37201abb8a40df4f589882632->enter($__internal_6da7777d6ab83e76e2acb5586b3dfed056a91ca37201abb8a40df4f589882632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8244ae12bb392b2f1f9eec0c66cf58c6f1e5034a4d23ee036d830178a8df5ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8244ae12bb392b2f1f9eec0c66cf58c6f1e5034a4d23ee036d830178a8df5ea9->enter($__internal_8244ae12bb392b2f1f9eec0c66cf58c6f1e5034a4d23ee036d830178a8df5ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8244ae12bb392b2f1f9eec0c66cf58c6f1e5034a4d23ee036d830178a8df5ea9->leave($__internal_8244ae12bb392b2f1f9eec0c66cf58c6f1e5034a4d23ee036d830178a8df5ea9_prof);

        
        $__internal_6da7777d6ab83e76e2acb5586b3dfed056a91ca37201abb8a40df4f589882632->leave($__internal_6da7777d6ab83e76e2acb5586b3dfed056a91ca37201abb8a40df4f589882632_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e899f075b92e031c5575874a2109cef9d96da6ef5e2a6a14e048ebe31b8855b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e899f075b92e031c5575874a2109cef9d96da6ef5e2a6a14e048ebe31b8855b->enter($__internal_2e899f075b92e031c5575874a2109cef9d96da6ef5e2a6a14e048ebe31b8855b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b878e1930afbbc8c4abe81222d25ab4d3bbcfba793e0f8e9baab1d21c84f285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b878e1930afbbc8c4abe81222d25ab4d3bbcfba793e0f8e9baab1d21c84f285->enter($__internal_3b878e1930afbbc8c4abe81222d25ab4d3bbcfba793e0f8e9baab1d21c84f285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b878e1930afbbc8c4abe81222d25ab4d3bbcfba793e0f8e9baab1d21c84f285->leave($__internal_3b878e1930afbbc8c4abe81222d25ab4d3bbcfba793e0f8e9baab1d21c84f285_prof);

        
        $__internal_2e899f075b92e031c5575874a2109cef9d96da6ef5e2a6a14e048ebe31b8855b->leave($__internal_2e899f075b92e031c5575874a2109cef9d96da6ef5e2a6a14e048ebe31b8855b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca28983f77558b722d67631d20e864a34c6fbe7a45c8086aa56e5ed9ba7d021c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca28983f77558b722d67631d20e864a34c6fbe7a45c8086aa56e5ed9ba7d021c->enter($__internal_ca28983f77558b722d67631d20e864a34c6fbe7a45c8086aa56e5ed9ba7d021c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8a72b285f1659d6ff25206cdbcde244641dbee9b1f7ce0816e6397096d2e6eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a72b285f1659d6ff25206cdbcde244641dbee9b1f7ce0816e6397096d2e6eb5->enter($__internal_8a72b285f1659d6ff25206cdbcde244641dbee9b1f7ce0816e6397096d2e6eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8a72b285f1659d6ff25206cdbcde244641dbee9b1f7ce0816e6397096d2e6eb5->leave($__internal_8a72b285f1659d6ff25206cdbcde244641dbee9b1f7ce0816e6397096d2e6eb5_prof);

        
        $__internal_ca28983f77558b722d67631d20e864a34c6fbe7a45c8086aa56e5ed9ba7d021c->leave($__internal_ca28983f77558b722d67631d20e864a34c6fbe7a45c8086aa56e5ed9ba7d021c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/IntrawayServer/app/Resources/views/base.html.twig");
    }
}
