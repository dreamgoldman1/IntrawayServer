<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_13d2cab323493298aae66ba8fd42e4fc3803d2ad40cd5ce1ca51403000eda4e2 extends Twig_Template
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
        $__internal_ac570bb75289ba9e8cc8a5c9e4dc3e99d59870bee7ef3c8ea85c8f4556678957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac570bb75289ba9e8cc8a5c9e4dc3e99d59870bee7ef3c8ea85c8f4556678957->enter($__internal_ac570bb75289ba9e8cc8a5c9e4dc3e99d59870bee7ef3c8ea85c8f4556678957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_90eba3828b4a941ad3b37495a28dba5abbcd4e32c6b73ce8579798790e72dc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90eba3828b4a941ad3b37495a28dba5abbcd4e32c6b73ce8579798790e72dc66->enter($__internal_90eba3828b4a941ad3b37495a28dba5abbcd4e32c6b73ce8579798790e72dc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ac570bb75289ba9e8cc8a5c9e4dc3e99d59870bee7ef3c8ea85c8f4556678957->leave($__internal_ac570bb75289ba9e8cc8a5c9e4dc3e99d59870bee7ef3c8ea85c8f4556678957_prof);

        
        $__internal_90eba3828b4a941ad3b37495a28dba5abbcd4e32c6b73ce8579798790e72dc66->leave($__internal_90eba3828b4a941ad3b37495a28dba5abbcd4e32c6b73ce8579798790e72dc66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
