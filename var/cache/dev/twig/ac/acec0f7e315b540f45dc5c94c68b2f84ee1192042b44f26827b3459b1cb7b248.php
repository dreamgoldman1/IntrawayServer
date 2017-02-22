<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1057a5406f98737a0f6aa607744cdb59f9a16d0d40bace90531ae11e5284e2bb extends Twig_Template
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
        $__internal_5a6281c3b9af4d01935a49855d9aa954c86b319c5b489464f6af0618035e7e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6281c3b9af4d01935a49855d9aa954c86b319c5b489464f6af0618035e7e76->enter($__internal_5a6281c3b9af4d01935a49855d9aa954c86b319c5b489464f6af0618035e7e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_78039c2327739567271c3840c437a8389437215a73137c97c862f52eb91a8e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78039c2327739567271c3840c437a8389437215a73137c97c862f52eb91a8e77->enter($__internal_78039c2327739567271c3840c437a8389437215a73137c97c862f52eb91a8e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5a6281c3b9af4d01935a49855d9aa954c86b319c5b489464f6af0618035e7e76->leave($__internal_5a6281c3b9af4d01935a49855d9aa954c86b319c5b489464f6af0618035e7e76_prof);

        
        $__internal_78039c2327739567271c3840c437a8389437215a73137c97c862f52eb91a8e77->leave($__internal_78039c2327739567271c3840c437a8389437215a73137c97c862f52eb91a8e77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
