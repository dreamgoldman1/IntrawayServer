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
        $__internal_1e6caf45ebb74364aa9293d79092726d39344e9074048a17bd894686daac3f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6caf45ebb74364aa9293d79092726d39344e9074048a17bd894686daac3f8d->enter($__internal_1e6caf45ebb74364aa9293d79092726d39344e9074048a17bd894686daac3f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1d267660eab5f45d545f85d54534152651593d9ff3939b607fb40a96813abfc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d267660eab5f45d545f85d54534152651593d9ff3939b607fb40a96813abfc1->enter($__internal_1d267660eab5f45d545f85d54534152651593d9ff3939b607fb40a96813abfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1e6caf45ebb74364aa9293d79092726d39344e9074048a17bd894686daac3f8d->leave($__internal_1e6caf45ebb74364aa9293d79092726d39344e9074048a17bd894686daac3f8d_prof);

        
        $__internal_1d267660eab5f45d545f85d54534152651593d9ff3939b607fb40a96813abfc1->leave($__internal_1d267660eab5f45d545f85d54534152651593d9ff3939b607fb40a96813abfc1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2befab46260eaf088e833359f7ef80d29911d7135374a68e070752248d623c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2befab46260eaf088e833359f7ef80d29911d7135374a68e070752248d623c3->enter($__internal_b2befab46260eaf088e833359f7ef80d29911d7135374a68e070752248d623c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91a4d32c1f0e39cb2b313c0646ad5f05483d5e9a2bfd1893ccc1b7ac6409cb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a4d32c1f0e39cb2b313c0646ad5f05483d5e9a2bfd1893ccc1b7ac6409cb4b->enter($__internal_91a4d32c1f0e39cb2b313c0646ad5f05483d5e9a2bfd1893ccc1b7ac6409cb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_91a4d32c1f0e39cb2b313c0646ad5f05483d5e9a2bfd1893ccc1b7ac6409cb4b->leave($__internal_91a4d32c1f0e39cb2b313c0646ad5f05483d5e9a2bfd1893ccc1b7ac6409cb4b_prof);

        
        $__internal_b2befab46260eaf088e833359f7ef80d29911d7135374a68e070752248d623c3->leave($__internal_b2befab46260eaf088e833359f7ef80d29911d7135374a68e070752248d623c3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_875684d98387d080e8db0d7b228155ac2b9c7aefb1ec93e45d4b2d4a23baa894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875684d98387d080e8db0d7b228155ac2b9c7aefb1ec93e45d4b2d4a23baa894->enter($__internal_875684d98387d080e8db0d7b228155ac2b9c7aefb1ec93e45d4b2d4a23baa894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6dfc3fe985aa039ac80b0a738f24f4e2442e3aa7986bb9b657fa7677f0fa09ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dfc3fe985aa039ac80b0a738f24f4e2442e3aa7986bb9b657fa7677f0fa09ec->enter($__internal_6dfc3fe985aa039ac80b0a738f24f4e2442e3aa7986bb9b657fa7677f0fa09ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6dfc3fe985aa039ac80b0a738f24f4e2442e3aa7986bb9b657fa7677f0fa09ec->leave($__internal_6dfc3fe985aa039ac80b0a738f24f4e2442e3aa7986bb9b657fa7677f0fa09ec_prof);

        
        $__internal_875684d98387d080e8db0d7b228155ac2b9c7aefb1ec93e45d4b2d4a23baa894->leave($__internal_875684d98387d080e8db0d7b228155ac2b9c7aefb1ec93e45d4b2d4a23baa894_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b440fa410935d77379a77880e7cbfbb9a72975bb3f246730acee88456082783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b440fa410935d77379a77880e7cbfbb9a72975bb3f246730acee88456082783->enter($__internal_4b440fa410935d77379a77880e7cbfbb9a72975bb3f246730acee88456082783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b00dbf7d5520b062f2f690f8424ddae98826db189ee88061b601ffcdd7f00edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00dbf7d5520b062f2f690f8424ddae98826db189ee88061b601ffcdd7f00edb->enter($__internal_b00dbf7d5520b062f2f690f8424ddae98826db189ee88061b601ffcdd7f00edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b00dbf7d5520b062f2f690f8424ddae98826db189ee88061b601ffcdd7f00edb->leave($__internal_b00dbf7d5520b062f2f690f8424ddae98826db189ee88061b601ffcdd7f00edb_prof);

        
        $__internal_4b440fa410935d77379a77880e7cbfbb9a72975bb3f246730acee88456082783->leave($__internal_4b440fa410935d77379a77880e7cbfbb9a72975bb3f246730acee88456082783_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63472070dbc0762aff3da877d5387006883e1ab79b7f34791eeb3c0cc74686c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63472070dbc0762aff3da877d5387006883e1ab79b7f34791eeb3c0cc74686c8->enter($__internal_63472070dbc0762aff3da877d5387006883e1ab79b7f34791eeb3c0cc74686c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3484cc9c847e860b3c14a34c5fcd12a65fb3a69f5ff6591ead1adc9d88298331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3484cc9c847e860b3c14a34c5fcd12a65fb3a69f5ff6591ead1adc9d88298331->enter($__internal_3484cc9c847e860b3c14a34c5fcd12a65fb3a69f5ff6591ead1adc9d88298331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3484cc9c847e860b3c14a34c5fcd12a65fb3a69f5ff6591ead1adc9d88298331->leave($__internal_3484cc9c847e860b3c14a34c5fcd12a65fb3a69f5ff6591ead1adc9d88298331_prof);

        
        $__internal_63472070dbc0762aff3da877d5387006883e1ab79b7f34791eeb3c0cc74686c8->leave($__internal_63472070dbc0762aff3da877d5387006883e1ab79b7f34791eeb3c0cc74686c8_prof);

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
