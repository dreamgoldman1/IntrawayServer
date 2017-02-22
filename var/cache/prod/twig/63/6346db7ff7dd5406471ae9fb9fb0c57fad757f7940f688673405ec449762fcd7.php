<?php

/* GOLContentBundle:Perfil:perfil.html.twig */
class __TwigTemplate_7f8e46a9d7696ba5360aaf2ba1c9d98e79ab1bf7c961edba926697df94b6b36e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Intraway.html.twig", "GOLContentBundle:Perfil:perfil.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"page-container\">
        <!-- BEGIN CONTENT -->
        <div class=\"page-content-wrapper\">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE HEAD-->
            <div class=\"page-head\">
                <div class=\"container\">
                    <!-- BEGIN PAGE TITLE -->
                    <div class=\"page-title\">
                        <h1>Perfil
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
        // line 27
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "\">Inicio</a>
                            <i class=\"fa fa-circle\"></i>
                        </li>
                        <li>
                            <span>Perfil</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class=\"page-content-inner\">
                        <div class=\"profile\">
                            <div class=\"tabbable-line tabbable-full-width\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\">
                                        <a href=\"#tab_1_1\" data-toggle=\"tab\"> Resumen </a>
                                    </li>
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                                        <div class=\"row\">
                                            <div class=\"col-md-3\">
                                                <ul class=\"list-unstyled profile-nav\">
                                                    <li>
                                                        <img class=\"thumbnail\" style=\"width: 100%\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/img/profile/" . $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "image", array()))), "html", null, true);
        echo "\" class=\"img-responsive pic-bordered\" alt=\"\">
                                                        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "editar-perfil/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "id", array()), "html", null, true);
        echo "\" class=\"profile-edit\"> <i class=\"fa fa-pencil\"></i>Editar </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"col-md-9\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-8 profile-info\">
                                                        <h1 class=\"font-green sbold uppercase\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "name", array()), "html", null, true);
        echo "</h1>
                                                        <p> ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "profession", array()), "html", null, true);
        echo " </p>
                                                        <p> <i class=\"fa fa-envelope\"></i> ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "email", array()), "html", null, true);
        echo " </a></p>
                                                        <p> <i class=\"fa fa-phone\"></i> ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "phone", array()), "html", null, true);
        echo " </p>
                                                    </div>

                                                    <div class=\"col-md-4\">
                                                        <div class=\"portlet sale-summary\">
                                                            <div class=\"portlet-title\">
                                                                <div class=\"caption font-red sbold\"> Hobbies </div>
                                                            </div>
                                                            <p>";
        // line 69
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "hobby1", array())), "html", null, true);
        echo "</p>
                                                            <div class=\"progress\">
                                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent1", array()), "html", null, true);
        echo "%\">
                                                                    <span class=\"sr-only\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent1", array()), "html", null, true);
        echo "% Complete (warning)</span>
                                                                </div>
                                                            </div>
                                                            <p>";
        // line 75
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "hobby2", array())), "html", null, true);
        echo "</p>
                                                            <div class=\"progress\">
                                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent2", array()), "html", null, true);
        echo "%\">
                                                                    <span class=\"sr-only\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent2", array()), "html", null, true);
        echo "% Complete</span>
                                                                </div>
                                                            </div>
                                                            <p>";
        // line 81
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "hobby3", array())), "html", null, true);
        echo "</p>
                                                            <div class=\"progress\">
                                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent3", array()), "html", null, true);
        echo "%\">
                                                                    <span class=\"sr-only\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent3", array()), "html", null, true);
        echo "% Complete (danger)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row text-center\">
                                                            <a class=\"btn btn-danger\" href='";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "eliminar-perfil/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "id", array()), "html", null, true);
        echo "'><i class='fa fa-close'></i> Eliminar</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-9\">
                                                <div class=\"portlet sale-summary\">
                                                    <div class=\"caption portlet-title font-red sbold\"> Perfil </div>
                                                    <div class=\"portlet-body\">
                                                        <p> ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "profile", array()), "html", null, true);
        echo " </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT INNER -->
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GOLContentBundle:Perfil:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 102,  168 => 89,  160 => 84,  156 => 83,  151 => 81,  145 => 78,  141 => 77,  136 => 75,  130 => 72,  126 => 71,  121 => 69,  110 => 61,  106 => 60,  102 => 59,  98 => 58,  86 => 51,  82 => 50,  56 => 27,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLContentBundle:Perfil:perfil.html.twig", "/var/www/IntrawayServer/src/GOL/ContentBundle/Resources/views/Perfil/perfil.html.twig");
    }
}
