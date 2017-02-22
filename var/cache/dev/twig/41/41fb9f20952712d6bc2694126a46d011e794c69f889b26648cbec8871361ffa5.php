<?php

/* Intraway.html.twig */
class __TwigTemplate_c88eb7db98783b322ee1cc45eb522808ae139ffae3d149b4a8a4266e61649519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6b54d7cdef0d14dc3933c7de4e2f96fec7def2a1609171ea3f54476d90a18f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b54d7cdef0d14dc3933c7de4e2f96fec7def2a1609171ea3f54476d90a18f6->enter($__internal_f6b54d7cdef0d14dc3933c7de4e2f96fec7def2a1609171ea3f54476d90a18f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Intraway.html.twig"));

        $__internal_e70d6e642d4d149a7ae8685f44d4553245a5a01de61bfe4eeeab5c8631ad6076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70d6e642d4d149a7ae8685f44d4553245a5a01de61bfe4eeeab5c8631ad6076->enter($__internal_e70d6e642d4d149a7ae8685f44d4553245a5a01de61bfe4eeeab5c8631ad6076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Intraway.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"es\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"Gilberto Orozco Linero\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components-rounded.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/profile-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout3/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout3/css/themes/default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout3/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
    </head>
    <!-- END HEAD -->

    <body class=\"page-container-bg-solid\">
        ";
        // line 44
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GOLHeaderBundle:Header:header"));
        echo "
        
        ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "
        ";
        // line 49
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GOLFooterBundle:Footer:footer"));
        echo "

        <!-- BEGIN CORE PLUGINS -->
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"http://maps.google.com/maps/api/js?sensor=false\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/plugins/gmaps/gmaps.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/pages/scripts/profile.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/pages/scripts/timeline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/layouts/layout3/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/layouts/layout3/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>";
        
        $__internal_f6b54d7cdef0d14dc3933c7de4e2f96fec7def2a1609171ea3f54476d90a18f6->leave($__internal_f6b54d7cdef0d14dc3933c7de4e2f96fec7def2a1609171ea3f54476d90a18f6_prof);

        
        $__internal_e70d6e642d4d149a7ae8685f44d4553245a5a01de61bfe4eeeab5c8631ad6076->leave($__internal_e70d6e642d4d149a7ae8685f44d4553245a5a01de61bfe4eeeab5c8631ad6076_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e1e03a4f76243b8eebb40dae469f2f0c891a4cd56b10c1fee4f9f8e46cf34f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1e03a4f76243b8eebb40dae469f2f0c891a4cd56b10c1fee4f9f8e46cf34f1->enter($__internal_9e1e03a4f76243b8eebb40dae469f2f0c891a4cd56b10c1fee4f9f8e46cf34f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d67690062be7d00ee2d270eb9af818aad9e4ecb3985eaad7bccb90097b81292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d67690062be7d00ee2d270eb9af818aad9e4ecb3985eaad7bccb90097b81292->enter($__internal_9d67690062be7d00ee2d270eb9af818aad9e4ecb3985eaad7bccb90097b81292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo ".:: Intraway | Gilberto Orozco Linero ::.";
        
        $__internal_9d67690062be7d00ee2d270eb9af818aad9e4ecb3985eaad7bccb90097b81292->leave($__internal_9d67690062be7d00ee2d270eb9af818aad9e4ecb3985eaad7bccb90097b81292_prof);

        
        $__internal_9e1e03a4f76243b8eebb40dae469f2f0c891a4cd56b10c1fee4f9f8e46cf34f1->leave($__internal_9e1e03a4f76243b8eebb40dae469f2f0c891a4cd56b10c1fee4f9f8e46cf34f1_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e23ab7a54aab9f2c83eaa637e767fbe42537f171781c65ec3c5993a2f667dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e23ab7a54aab9f2c83eaa637e767fbe42537f171781c65ec3c5993a2f667dd7->enter($__internal_5e23ab7a54aab9f2c83eaa637e767fbe42537f171781c65ec3c5993a2f667dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f79d9e4325f84d3803283b9d785ef9aa0fa809992b647ec9528a075185b919b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79d9e4325f84d3803283b9d785ef9aa0fa809992b647ec9528a075185b919b9->enter($__internal_f79d9e4325f84d3803283b9d785ef9aa0fa809992b647ec9528a075185b919b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f79d9e4325f84d3803283b9d785ef9aa0fa809992b647ec9528a075185b919b9->leave($__internal_f79d9e4325f84d3803283b9d785ef9aa0fa809992b647ec9528a075185b919b9_prof);

        
        $__internal_5e23ab7a54aab9f2c83eaa637e767fbe42537f171781c65ec3c5993a2f667dd7->leave($__internal_5e23ab7a54aab9f2c83eaa637e767fbe42537f171781c65ec3c5993a2f667dd7_prof);

    }

    public function getTemplateName()
    {
        return "Intraway.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 46,  211 => 11,  197 => 76,  193 => 75,  189 => 74,  183 => 71,  179 => 70,  173 => 67,  167 => 64,  162 => 62,  158 => 61,  152 => 58,  148 => 57,  144 => 56,  140 => 55,  136 => 54,  132 => 53,  128 => 52,  121 => 49,  118 => 47,  116 => 46,  110 => 44,  102 => 38,  97 => 36,  93 => 35,  89 => 34,  83 => 31,  77 => 28,  73 => 27,  67 => 24,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  39 => 11,  27 => 1,);
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
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"es\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset=\"utf-8\" />
        <title>{% block title %}.:: Intraway | Gilberto Orozco Linero ::.{% endblock %}</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"Gilberto Orozco Linero\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"{{ asset('assets/global/css/components-rounded.min.css') }}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/css/plugins.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href=\"{{ asset('assets/pages/css/profile-2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"{{ asset('assets/layouts/layout3/css/layout.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/layouts/layout3/css/themes/default.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"{{ asset('assets/layouts/layout3/css/custom.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" /> 
    </head>
    <!-- END HEAD -->

    <body class=\"page-container-bg-solid\">
        {# Render Header section #}
        {{ render(controller('GOLHeaderBundle:Header:header')) }}
        
        {% block content %}{% endblock %}

        {# Render Footer section #}
        {{ render(controller('GOLFooterBundle:Footer:footer')) }}

        <!-- BEGIN CORE PLUGINS -->
        <script src=\"{{ asset('/assets/global/plugins/jquery.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/js.cookie.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/jquery.blockui.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"{{ asset('/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/jquery.sparkline.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"http://maps.google.com/maps/api/js?sensor=false\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/global/plugins/gmaps/gmaps.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"{{ asset('/assets/global/scripts/app.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"{{ asset('/assets/pages/scripts/profile.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/pages/scripts/timeline.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"{{ asset('/assets/layouts/layout3/scripts/layout.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/layouts/layout3/scripts/demo.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('/assets/layouts/global/scripts/quick-sidebar.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>", "Intraway.html.twig", "/var/www/IntrawayServer/app/Resources/views/Intraway.html.twig");
    }
}
