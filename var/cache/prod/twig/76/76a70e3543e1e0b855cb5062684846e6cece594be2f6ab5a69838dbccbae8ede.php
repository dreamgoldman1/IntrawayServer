<?php

/* GOLContentBundle:Perfil:form-perfil.html.twig */
class __TwigTemplate_f08d93069638c4724b139570b516ef89e5bf480eb629f4264f60fa0f46db12eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Intraway.html.twig", "GOLContentBundle:Perfil:form-perfil.html.twig", 1);
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
                        <h1>Crear / Editar Perfil
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
                            <span>Crear / Editar</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class=\"page-content-inner\">
                        <div class=\"row\">
                            <div class=\"col-md-9 \">
                                <!-- BEGIN SAMPLE FORM PORTLET-->
                                <div class=\"portlet light \">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption font-green\">
                                            <i class=\"fa fa-table font-blue-madison\"></i>
                                            <span class=\"caption-subject font-blue-madison bold uppercase\"> Formulario de perfil</span>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body form\">
                                        <form enctype=\"multipart/form-data\" role=\"form\" method=\"POST\">
                                            <div class=\"form-body\">
                                                ";
        // line 50
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "image", array(), "any", true, true)) {
            // line 51
            echo "                                                    <div class=\"col-sm-4\">
                                                        <img class=\"thumbnail\" style='width: 100%' src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/img/profile/" . $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "image", array()))), "html", null, true);
            echo "\" />
                                                    </div>
                                                ";
        }
        // line 55
        echo "                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"file\" class=\"form-control edited\" id=\"form_control_1\" name=\"image\">
                                                    <span class=\"help-block\">Seleccionar archivo para foto de perfil</span>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"name\" value=\"";
        // line 60
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "name", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "name", array()), "html", null, true);
        }
        echo "\">
                                                    <label for=\"form_control_1\">Nombre</label>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"profession\" value=\"";
        // line 64
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "profession", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "profession", array()), "html", null, true);
        }
        echo "\">
                                                    <label for=\"form_control_1\">Profesión o frase</label>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"phone\" value=\"";
        // line 68
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "phone", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "phone", array()), "html", null, true);
        }
        echo "\">
                                                    <label for=\"form_control_1\">Teléfono</label>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"email\" value=\"";
        // line 72
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "email", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "email", array()), "html", null, true);
        }
        echo "\">
                                                    <label for=\"form_control_1\">Email</label>
                                                </div>
                                                <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                    <textarea class=\"form-control\" rows=\"3\" name=\"profile\">";
        // line 76
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "profile", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "profile", array()), "html", null, true);
        }
        echo "</textarea>
                                                    <label for=\"form_control_1\">Perfil</label>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"hobby1\" value=\"";
        // line 81
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "hobby1", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "hobby1", array()), "html", null, true);
        }
        echo "\">
                                                        <label for=\"form_control_1\">Hobby 1</label>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <div class='input-group right-addon'>
                                                            <input type=\"number\" min='0' max='100' step='1' class=\"form-control\" id=\"form_control_1\" name=\"percent1\" value=\"";
        // line 88
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent1", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent1", array()), "html", null, true);
        }
        echo "\">
                                                            <label for=\"form_control_1\">Porcentaje 1</label>
                                                            <span class=\"input-group-addon\">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"hobby2\" value=\"";
        // line 96
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "hobby2", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "hobby2", array()), "html", null, true);
        }
        echo "\">
                                                        <label for=\"form_control_1\">Hobby 2</label>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <div class='input-group right-addon'>
                                                            <input type=\"number\" min='0' max='100' step='1' class=\"form-control\" id=\"form_control_1\" name=\"percent2\" value=\"";
        // line 103
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent2", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent2", array()), "html", null, true);
        }
        echo "\">
                                                            <label for=\"form_control_1\">Porcentaje 2</label>
                                                            <span class=\"input-group-addon\">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <input type=\"text\" class=\"form-control\" id=\"form_control_1\" name=\"hobby3\" value=\"";
        // line 111
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "hobby3", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "hobby3", array()), "html", null, true);
        }
        echo "\">
                                                        <label for=\"form_control_1\">Hobby 3</label>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <div class=\"form-group form-md-line-input form-md-floating-label\">
                                                        <div class='input-group right-addon'>
                                                            <input type=\"number\" min='0' max='100' step='1' class=\"form-control\" id=\"form_control_1\" name=\"percent3\" value=\"";
        // line 118
        if ($this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent3", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataProfile"]) ? $context["dataProfile"] : null), "percent3", array()), "html", null, true);
        }
        echo "\">
                                                            <label for=\"form_control_1\">Porcentaje 3</label>
                                                            <span class=\"input-group-addon\">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-actions noborder\">
                                                <button type=\"submit\" class=\"btn blue\">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- END SAMPLE FORM PORTLET-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GOLContentBundle:Perfil:form-perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 118,  196 => 111,  183 => 103,  171 => 96,  158 => 88,  146 => 81,  136 => 76,  127 => 72,  118 => 68,  109 => 64,  100 => 60,  93 => 55,  87 => 52,  84 => 51,  82 => 50,  56 => 27,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLContentBundle:Perfil:form-perfil.html.twig", "/var/www/IntrawayServer/src/GOL/ContentBundle/Resources/views/Perfil/form-perfil.html.twig");
    }
}
