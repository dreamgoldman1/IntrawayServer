<?php

/* GOLContentBundle:Perfil:perfiles.html.twig */
class __TwigTemplate_b738a63c0c24cf4aea195b0857cad7899782cdf92ec7c1f3788eb9fea7214b6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Intraway.html.twig", "GOLContentBundle:Perfil:perfiles.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Intraway.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5a3579ec6262f4506b7ebc02267909dbc1a73b058720397273a71a482be421c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a3579ec6262f4506b7ebc02267909dbc1a73b058720397273a71a482be421c->enter($__internal_d5a3579ec6262f4506b7ebc02267909dbc1a73b058720397273a71a482be421c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Perfil:perfiles.html.twig"));

        $__internal_3fd1c4de7b5c69f7f3bc2b66c5b2a601b3d1228c9ad259769644986a0665ea41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd1c4de7b5c69f7f3bc2b66c5b2a601b3d1228c9ad259769644986a0665ea41->enter($__internal_3fd1c4de7b5c69f7f3bc2b66c5b2a601b3d1228c9ad259769644986a0665ea41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Perfil:perfiles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5a3579ec6262f4506b7ebc02267909dbc1a73b058720397273a71a482be421c->leave($__internal_d5a3579ec6262f4506b7ebc02267909dbc1a73b058720397273a71a482be421c_prof);

        
        $__internal_3fd1c4de7b5c69f7f3bc2b66c5b2a601b3d1228c9ad259769644986a0665ea41->leave($__internal_3fd1c4de7b5c69f7f3bc2b66c5b2a601b3d1228c9ad259769644986a0665ea41_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2bcfda24574196ea82d7a99011352d99982d57fcda699442c97da56b71cc0ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bcfda24574196ea82d7a99011352d99982d57fcda699442c97da56b71cc0ea6->enter($__internal_2bcfda24574196ea82d7a99011352d99982d57fcda699442c97da56b71cc0ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7e0140aa439f16a4f8048dad5b4f2ab21de28b0d1ced70c17d203c68f7a711e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0140aa439f16a4f8048dad5b4f2ab21de28b0d1ced70c17d203c68f7a711e4->enter($__internal_7e0140aa439f16a4f8048dad5b4f2ab21de28b0d1ced70c17d203c68f7a711e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!-- BEGIN CONTAINER -->
    <div class=\"page-container\">
        <!-- BEGIN CONTENT -->
        <div class=\"page-content-wrapper\">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE HEAD-->
            <div class=\"page-head\">
                <div class=\"container\">
                    <!-- BEGIN PAGE TITLE -->
                    <div class=\"page-title\">
                        <h1>Perfiles
                            <small></small>
                        </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                </div>
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class=\"page-content\">
                <div class=\"container\">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <ul class=\"page-breadcrumb breadcrumb\">
                        <li>
                            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "\">Inicio</a>
                            <i class=\"fa fa-circle\"></i>
                        </li>
                        <li>
                            <span>Perfiles</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class=\"page-content-inner\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class=\"profile-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <!-- BEGIN PORTLET -->
                                            <div class=\"portlet light \">
                                                <div class=\"portlet-title\">
                                                    <div class=\"caption caption-md\">
                                                        <i class=\"fa fa-users font-blue-madison\"></i>
                                                        <span class=\"caption-subject font-blue-madison bold uppercase\">Perfiles de usuarios</span>
                                                    </div>
                                                </div>
                                                <div class=\"portlet-body\">
                                                    <div class=\"\" data-always-visible=\"1\" data-rail-visible1=\"0\" data-handle-color=\"#D7DCE2\">
                                                        <div class=\"general-item-list\">

                                                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataProfile"]) ? $context["dataProfile"] : $this->getContext($context, "dataProfile")));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 57
            echo "                                                                <div class=\"item\">
                                                                    <div class=\"item-head\">
                                                                        <div class=\"item-details\">
                                                                            <img class=\"item-pic\" src=\"/uploads/img/profile/";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "image", array()), "html", null, true);
            echo "\">
                                                                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
            echo "perfil/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "id", array()), "html", null, true);
            echo "\" class=\"item-name primary-link\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "name", array()), "html", null, true);
            echo "</a>
                                                                            <span class=\"item-label\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "profession", array()), "html", null, true);
            echo "</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"item-body\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "profile", array()), "html", null, true);
            echo "</div>
                                                                </div>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END PORTLET -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT INNER -->
                </div>
            </div>
            <!-- END PAGE CONTENT BODY -->
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
";
        
        $__internal_7e0140aa439f16a4f8048dad5b4f2ab21de28b0d1ced70c17d203c68f7a711e4->leave($__internal_7e0140aa439f16a4f8048dad5b4f2ab21de28b0d1ced70c17d203c68f7a711e4_prof);

        
        $__internal_2bcfda24574196ea82d7a99011352d99982d57fcda699442c97da56b71cc0ea6->leave($__internal_2bcfda24574196ea82d7a99011352d99982d57fcda699442c97da56b71cc0ea6_prof);

    }

    public function getTemplateName()
    {
        return "GOLContentBundle:Perfil:perfiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 68,  133 => 65,  127 => 62,  119 => 61,  115 => 60,  110 => 57,  106 => 56,  75 => 28,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Intraway.html.twig\" %}

{% block content %}
    <!-- BEGIN CONTAINER -->
    <div class=\"page-container\">
        <!-- BEGIN CONTENT -->
        <div class=\"page-content-wrapper\">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE HEAD-->
            <div class=\"page-head\">
                <div class=\"container\">
                    <!-- BEGIN PAGE TITLE -->
                    <div class=\"page-title\">
                        <h1>Perfiles
                            <small></small>
                        </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                </div>
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class=\"page-content\">
                <div class=\"container\">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <ul class=\"page-breadcrumb breadcrumb\">
                        <li>
                            <a href=\"{{ env }}\">Inicio</a>
                            <i class=\"fa fa-circle\"></i>
                        </li>
                        <li>
                            <span>Perfiles</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class=\"page-content-inner\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class=\"profile-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <!-- BEGIN PORTLET -->
                                            <div class=\"portlet light \">
                                                <div class=\"portlet-title\">
                                                    <div class=\"caption caption-md\">
                                                        <i class=\"fa fa-users font-blue-madison\"></i>
                                                        <span class=\"caption-subject font-blue-madison bold uppercase\">Perfiles de usuarios</span>
                                                    </div>
                                                </div>
                                                <div class=\"portlet-body\">
                                                    <div class=\"\" data-always-visible=\"1\" data-rail-visible1=\"0\" data-handle-color=\"#D7DCE2\">
                                                        <div class=\"general-item-list\">

                                                            {% for profile in dataProfile %}
                                                                <div class=\"item\">
                                                                    <div class=\"item-head\">
                                                                        <div class=\"item-details\">
                                                                            <img class=\"item-pic\" src=\"/uploads/img/profile/{{ profile.image }}\">
                                                                            <a href=\"{{ env }}perfil/{{ profile.id }}\" class=\"item-name primary-link\">{{ profile.name }}</a>
                                                                            <span class=\"item-label\">{{ profile.profession }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"item-body\">{{ profile.profile }}</div>
                                                                </div>
                                                            {% endfor %}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END PORTLET -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT INNER -->
                </div>
            </div>
            <!-- END PAGE CONTENT BODY -->
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
{% endblock %}", "GOLContentBundle:Perfil:perfiles.html.twig", "/var/www/IntrawayServer/src/GOL/ContentBundle/Resources/views/Perfil/perfiles.html.twig");
    }
}
