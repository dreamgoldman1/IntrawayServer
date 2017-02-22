<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_af532fd45c90dc18c02268b12b5eb324e68c93d7669b7347f9156860d997db56 extends Twig_Template
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
        $__internal_d0b0460304aa8124191e196242d47113e2ac425d7e1736f216ccab20d7d02d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b0460304aa8124191e196242d47113e2ac425d7e1736f216ccab20d7d02d4c->enter($__internal_d0b0460304aa8124191e196242d47113e2ac425d7e1736f216ccab20d7d02d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7351f145f60f5eb796a51f7a39b8f87869c025aa333d405abb531842f537921f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7351f145f60f5eb796a51f7a39b8f87869c025aa333d405abb531842f537921f->enter($__internal_7351f145f60f5eb796a51f7a39b8f87869c025aa333d405abb531842f537921f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d0b0460304aa8124191e196242d47113e2ac425d7e1736f216ccab20d7d02d4c->leave($__internal_d0b0460304aa8124191e196242d47113e2ac425d7e1736f216ccab20d7d02d4c_prof);

        
        $__internal_7351f145f60f5eb796a51f7a39b8f87869c025aa333d405abb531842f537921f->leave($__internal_7351f145f60f5eb796a51f7a39b8f87869c025aa333d405abb531842f537921f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
