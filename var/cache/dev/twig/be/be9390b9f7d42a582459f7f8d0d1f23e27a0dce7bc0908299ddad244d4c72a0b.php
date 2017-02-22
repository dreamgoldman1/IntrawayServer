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
        $__internal_9a3aa71240f6c89402949d590ebe5033612e340b859bcdcb1a6fc7a881f3753a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3aa71240f6c89402949d590ebe5033612e340b859bcdcb1a6fc7a881f3753a->enter($__internal_9a3aa71240f6c89402949d590ebe5033612e340b859bcdcb1a6fc7a881f3753a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Perfil:perfiles.html.twig"));

        $__internal_b749aa0e1bc86869da8a207ab9efaadc81700402c2d44753257733a26e8a52b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b749aa0e1bc86869da8a207ab9efaadc81700402c2d44753257733a26e8a52b0->enter($__internal_b749aa0e1bc86869da8a207ab9efaadc81700402c2d44753257733a26e8a52b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Perfil:perfiles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a3aa71240f6c89402949d590ebe5033612e340b859bcdcb1a6fc7a881f3753a->leave($__internal_9a3aa71240f6c89402949d590ebe5033612e340b859bcdcb1a6fc7a881f3753a_prof);

        
        $__internal_b749aa0e1bc86869da8a207ab9efaadc81700402c2d44753257733a26e8a52b0->leave($__internal_b749aa0e1bc86869da8a207ab9efaadc81700402c2d44753257733a26e8a52b0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5abc6be2c3ef98a418df3fe2c8d960f67f8b6e52c47a65f4b9eb08cc38c6e505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5abc6be2c3ef98a418df3fe2c8d960f67f8b6e52c47a65f4b9eb08cc38c6e505->enter($__internal_5abc6be2c3ef98a418df3fe2c8d960f67f8b6e52c47a65f4b9eb08cc38c6e505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_88e7959a38b1ee4c68e82011724481e9e96f900181311ff7432e93470a107b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e7959a38b1ee4c68e82011724481e9e96f900181311ff7432e93470a107b60->enter($__internal_88e7959a38b1ee4c68e82011724481e9e96f900181311ff7432e93470a107b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_88e7959a38b1ee4c68e82011724481e9e96f900181311ff7432e93470a107b60->leave($__internal_88e7959a38b1ee4c68e82011724481e9e96f900181311ff7432e93470a107b60_prof);

        
        $__internal_5abc6be2c3ef98a418df3fe2c8d960f67f8b6e52c47a65f4b9eb08cc38c6e505->leave($__internal_5abc6be2c3ef98a418df3fe2c8d960f67f8b6e52c47a65f4b9eb08cc38c6e505_prof);

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
