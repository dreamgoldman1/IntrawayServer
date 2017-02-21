<?php

/* GOLContentBundle:Default:index.html.twig */
class __TwigTemplate_9c42d216237c7531ef9034a5d2df15005060a60c3e53100eeef2d20b27fe6563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Intraway.html.twig", "GOLContentBundle:Default:index.html.twig", 1);
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
        $__internal_53b7932960a3614facdb163d60b06c20a316c7dedacb5c4e2a3249f6ae7d9bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b7932960a3614facdb163d60b06c20a316c7dedacb5c4e2a3249f6ae7d9bf2->enter($__internal_53b7932960a3614facdb163d60b06c20a316c7dedacb5c4e2a3249f6ae7d9bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Default:index.html.twig"));

        $__internal_38809fdb8a4e1aac5d464b4bf6b6b7880efba3988706127329c28375a2a3c546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38809fdb8a4e1aac5d464b4bf6b6b7880efba3988706127329c28375a2a3c546->enter($__internal_38809fdb8a4e1aac5d464b4bf6b6b7880efba3988706127329c28375a2a3c546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53b7932960a3614facdb163d60b06c20a316c7dedacb5c4e2a3249f6ae7d9bf2->leave($__internal_53b7932960a3614facdb163d60b06c20a316c7dedacb5c4e2a3249f6ae7d9bf2_prof);

        
        $__internal_38809fdb8a4e1aac5d464b4bf6b6b7880efba3988706127329c28375a2a3c546->leave($__internal_38809fdb8a4e1aac5d464b4bf6b6b7880efba3988706127329c28375a2a3c546_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d491ddd0465d85da053216e0d552d3fc41cf336e6926b44fc98066ca8b5c8992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d491ddd0465d85da053216e0d552d3fc41cf336e6926b44fc98066ca8b5c8992->enter($__internal_d491ddd0465d85da053216e0d552d3fc41cf336e6926b44fc98066ca8b5c8992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_056525c3e52b74f857a045fb50ea302261748d6074be1e4fd249afde98f6c152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056525c3e52b74f857a045fb50ea302261748d6074be1e4fd249afde98f6c152->enter($__internal_056525c3e52b74f857a045fb50ea302261748d6074be1e4fd249afde98f6c152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <!-- ===========================
    BODY LEFT PART
    ============================ -->
    <div class=\"col-md-8 mainleft\">
        <div id=\"statement\" class=\"row mobmid\">
            <div class=\"col-sm-1\">
                <span class=\"secicon fa fa-user\"></span>
            </div><!--icon end-->

            <div class=\"col-sm-11\">
                <h3>Personal statement </h3>
                <p>Hi, I am Bappy from Bangladesh.Adipiscing elit. Nullam dapibus vehicula condimentum. Curabitur elit enim, accumsan vitae tristique ut, mollis at orci. Fusce cursus interdum neque nec aliquam. Proin turpis leo, laoreet non ultricies non, dictum nec nulla. Duis vitae nisi eu odio Adipiscing elit. Nullam dapibus vehicula condimentum. Curabitur elit enim, accumsan.</p>

                <p>Consectetur adipisicing elit. Hic labore, unde, ratione, itaque ducimus provident error similique qui, recusandae nam dignissimos autem. Sequi quas quis non, odit assumenda similique neque.</p>

                <p class=\"signature\">Gilberto Orozco Linero</p>
            </div><!--info end-->
        </div><!--personal statement end-->
        <hr>

        <div class=\"col-sm-11 testimonials\">
            <h3 class=\"mobmid\">Testimonials </h3>

            <div class=\"row\">
                <blockquote>
                    <p>Sit amet, consectetur adipisicing elit. Fuga quidem ipsum maiores necessitatibus sint, porro temporibus labore, amet officia unde libero eligendi? Porro dolorum itaque, facere harum amet, rem libero.</p>
                </blockquote>
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mushfiq.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <h4>Mushfiqul Islam</h4>
                <p>The UX Votch</p>
            </div><!--1st testimonial end-->

            <div class=\"row\">
                <blockquote>
                    <p>Consectetur adipisicing elit. Fuga quidem ipsum maiores necessitatibus sint, porro temporibus labore, unde libero eligendi? Porro dolorum itaque, facere harum amet, rem libero.</p>
                </blockquote>
                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/siblu.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <h4>E.A. Siblu</h4>
                <p>The Jatir Vobisshot</p>
            </div><!--2nd testimonial end-->

            <div class=\"row\">
                <blockquote>
                    <p>Fuga quidem ipsum maiores necessitatibus sint, porro temporibus labore, amet officia unde libero eligendi? Porro dolorum itaque, facere harum amet, rem libero.</p>
                </blockquote>
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/nasir.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <h4>Nasir Uddin</h4>
                <p>The Cute Huzur</p>
            </div><!--3rd testimonial end-->
        </div>
    </div>

    <!-- ===========================
    SIDEBAR
    =========================== -->
    <div class=\"col-md-4 mainright\">
        <div class=\"row\">
            <div class=\"col-sm-1 col-md-2 mobmid\">
                <span class=\"secicon fa fa-magic\"></span>
            </div><!--icon end-->

            <div class=\"col-sm-11 col-md-10\">
                <h3 class=\"mobmid\">Technical skills </h3>

                <p>Photoshop</p>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 65%\">
                        <span class=\"sr-only\">65% Complete (success)</span>
                    </div>
                </div><!--skill end-->


                <p>Illustrator</p>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%\">
                        <span class=\"sr-only\">85% Complete</span>
                    </div>
                </div><!--skill end-->

                <p>InDesign</p>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                        <span class=\"sr-only\">60% Complete (warning)</span>
                    </div>
                </div><!--skill end-->

                <p>Flash</p>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 30%\">
                        <span class=\"sr-only\">30% Complete (danger)</span>
                    </div>
                </div><!--skill end-->
            </div><!--info end-->
        </div><!--tech skills end-->
        <hr>
    </div><!--container end-->

";
        
        $__internal_056525c3e52b74f857a045fb50ea302261748d6074be1e4fd249afde98f6c152->leave($__internal_056525c3e52b74f857a045fb50ea302261748d6074be1e4fd249afde98f6c152_prof);

        
        $__internal_d491ddd0465d85da053216e0d552d3fc41cf336e6926b44fc98066ca8b5c8992->leave($__internal_d491ddd0465d85da053216e0d552d3fc41cf336e6926b44fc98066ca8b5c8992_prof);

    }

    public function getTemplateName()
    {
        return "GOLContentBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  91 => 41,  79 => 32,  49 => 4,  40 => 3,  11 => 1,);
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

    <!-- ===========================
    BODY LEFT PART
    ============================ -->
    <div class=\"col-md-8 mainleft\">
        <div id=\"statement\" class=\"row mobmid\">
            <div class=\"col-sm-1\">
                <span class=\"secicon fa fa-user\"></span>
            </div><!--icon end-->

            <div class=\"col-sm-11\">
                <h3>Personal statement </h3>
                <p>Hi, I am Bappy from Bangladesh.Adipiscing elit. Nullam dapibus vehicula condimentum. Curabitur elit enim, accumsan vitae tristique ut, mollis at orci. Fusce cursus interdum neque nec aliquam. Proin turpis leo, laoreet non ultricies non, dictum nec nulla. Duis vitae nisi eu odio Adipiscing elit. Nullam dapibus vehicula condimentum. Curabitur elit enim, accumsan.</p>

                <p>Consectetur adipisicing elit. Hic labore, unde, ratione, itaque ducimus provident error similique qui, recusandae nam dignissimos autem. Sequi quas quis non, odit assumenda similique neque.</p>

                <p class=\"signature\">Gilberto Orozco Linero</p>
            </div><!--info end-->
        </div><!--personal statement end-->
        <hr>

        <div class=\"col-sm-11 testimonials\">
            <h3 class=\"mobmid\">Testimonials </h3>

            <div class=\"row\">
                <blockquote>
                    <p>Sit amet, consectetur adipisicing elit. Fuga quidem ipsum maiores necessitatibus sint, porro temporibus labore, amet officia unde libero eligendi? Porro dolorum itaque, facere harum amet, rem libero.</p>
                </blockquote>
                <img src=\"{{ asset('assets/img/mushfiq.jpg') }}\" alt=\"\">
                <h4>Mushfiqul Islam</h4>
                <p>The UX Votch</p>
            </div><!--1st testimonial end-->

            <div class=\"row\">
                <blockquote>
                    <p>Consectetur adipisicing elit. Fuga quidem ipsum maiores necessitatibus sint, porro temporibus labore, unde libero eligendi? Porro dolorum itaque, facere harum amet, rem libero.</p>
                </blockquote>
                <img src=\"{{ asset('assets/img/siblu.jpg') }}\" alt=\"\">
                <h4>E.A. Siblu</h4>
                <p>The Jatir Vobisshot</p>
            </div><!--2nd testimonial end-->

            <div class=\"row\">
                <blockquote>
                    <p>Fuga quidem ipsum maiores necessitatibus sint, porro temporibus labore, amet officia unde libero eligendi? Porro dolorum itaque, facere harum amet, rem libero.</p>
                </blockquote>
                <img src=\"{{ asset('assets/img/nasir.jpg') }}\" alt=\"\">
                <h4>Nasir Uddin</h4>
                <p>The Cute Huzur</p>
            </div><!--3rd testimonial end-->
        </div>
    </div>

    <!-- ===========================
    SIDEBAR
    =========================== -->
    <div class=\"col-md-4 mainright\">
        <div class=\"row\">
            <div class=\"col-sm-1 col-md-2 mobmid\">
                <span class=\"secicon fa fa-magic\"></span>
            </div><!--icon end-->

            <div class=\"col-sm-11 col-md-10\">
                <h3 class=\"mobmid\">Technical skills </h3>

                <p>Photoshop</p>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 65%\">
                        <span class=\"sr-only\">65% Complete (success)</span>
                    </div>
                </div><!--skill end-->


                <p>Illustrator</p>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%\">
                        <span class=\"sr-only\">85% Complete</span>
                    </div>
                </div><!--skill end-->

                <p>InDesign</p>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                        <span class=\"sr-only\">60% Complete (warning)</span>
                    </div>
                </div><!--skill end-->

                <p>Flash</p>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 30%\">
                        <span class=\"sr-only\">30% Complete (danger)</span>
                    </div>
                </div><!--skill end-->
            </div><!--info end-->
        </div><!--tech skills end-->
        <hr>
    </div><!--container end-->

{% endblock %}", "GOLContentBundle:Default:index.html.twig", "/var/www/IntrawayServer/src/GOL/ContentBundle/Resources/views/Default/index.html.twig");
    }
}
