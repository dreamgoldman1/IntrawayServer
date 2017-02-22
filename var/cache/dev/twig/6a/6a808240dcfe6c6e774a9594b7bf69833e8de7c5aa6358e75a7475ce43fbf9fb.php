<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_1365d649f13e4bddd6d8f137862c24dc1fa70bd59110e31edf141c5a21a0e5a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb2c3eca918bbd910f45f54278ccdf441ee63e0f005d5e9a4372780d1e6ea1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2c3eca918bbd910f45f54278ccdf441ee63e0f005d5e9a4372780d1e6ea1f7->enter($__internal_bb2c3eca918bbd910f45f54278ccdf441ee63e0f005d5e9a4372780d1e6ea1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $__internal_72c88eacbaeead642d12f2ccda9425da44e9d501d97d14f447d000f5673f4776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c88eacbaeead642d12f2ccda9425da44e9d501d97d14f447d000f5673f4776->enter($__internal_72c88eacbaeead642d12f2ccda9425da44e9d501d97d14f447d000f5673f4776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb2c3eca918bbd910f45f54278ccdf441ee63e0f005d5e9a4372780d1e6ea1f7->leave($__internal_bb2c3eca918bbd910f45f54278ccdf441ee63e0f005d5e9a4372780d1e6ea1f7_prof);

        
        $__internal_72c88eacbaeead642d12f2ccda9425da44e9d501d97d14f447d000f5673f4776->leave($__internal_72c88eacbaeead642d12f2ccda9425da44e9d501d97d14f447d000f5673f4776_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b148207975ff4a02bc33d1886af6ff7d5e29bb03b73cd64ab9416c30fbbfcdc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b148207975ff4a02bc33d1886af6ff7d5e29bb03b73cd64ab9416c30fbbfcdc4->enter($__internal_b148207975ff4a02bc33d1886af6ff7d5e29bb03b73cd64ab9416c30fbbfcdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b85c14eb569a5518d6c390c576ec4f7633f9ae63d806a1cb9c8c5a1b84a28bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85c14eb569a5518d6c390c576ec4f7633f9ae63d806a1cb9c8c5a1b84a28bbd->enter($__internal_b85c14eb569a5518d6c390c576ec4f7633f9ae63d806a1cb9c8c5a1b84a28bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["time"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))));
        echo "
";
        
        $__internal_b85c14eb569a5518d6c390c576ec4f7633f9ae63d806a1cb9c8c5a1b84a28bbd->leave($__internal_b85c14eb569a5518d6c390c576ec4f7633f9ae63d806a1cb9c8c5a1b84a28bbd_prof);

        
        $__internal_b148207975ff4a02bc33d1886af6ff7d5e29bb03b73cd64ab9416c30fbbfcdc4->leave($__internal_b148207975ff4a02bc33d1886af6ff7d5e29bb03b73cd64ab9416c30fbbfcdc4_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_789ee0445cd288b1c8e3a4e0e86ffb75952e113cdd1548280a97212dbaac720b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789ee0445cd288b1c8e3a4e0e86ffb75952e113cdd1548280a97212dbaac720b->enter($__internal_789ee0445cd288b1c8e3a4e0e86ffb75952e113cdd1548280a97212dbaac720b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_33769ebaeb2bce049913a854912404f55289749b157e707f097409a98d35d451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33769ebaeb2bce049913a854912404f55289749b157e707f097409a98d35d451->enter($__internal_33769ebaeb2bce049913a854912404f55289749b157e707f097409a98d35d451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_33769ebaeb2bce049913a854912404f55289749b157e707f097409a98d35d451->leave($__internal_33769ebaeb2bce049913a854912404f55289749b157e707f097409a98d35d451_prof);

        
        $__internal_789ee0445cd288b1c8e3a4e0e86ffb75952e113cdd1548280a97212dbaac720b->leave($__internal_789ee0445cd288b1c8e3a4e0e86ffb75952e113cdd1548280a97212dbaac720b_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_feeeae7b06b22e361e607bea9e1ec83e570965a6d4665be75d885b325794e864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feeeae7b06b22e361e607bea9e1ec83e570965a6d4665be75d885b325794e864->enter($__internal_feeeae7b06b22e361e607bea9e1ec83e570965a6d4665be75d885b325794e864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eff5e58855c27c864c2f3c97144cf47d4325e651b1e5c2bff17b6fc405241282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff5e58855c27c864c2f3c97144cf47d4325e651b1e5c2bff17b6fc405241282->enter($__internal_eff5e58855c27c864c2f3c97144cf47d4325e651b1e5c2bff17b6fc405241282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                echo "</td>
                    <td class=\"font-normal\">";
                // line 89
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_eff5e58855c27c864c2f3c97144cf47d4325e651b1e5c2bff17b6fc405241282->leave($__internal_eff5e58855c27c864c2f3c97144cf47d4325e651b1e5c2bff17b6fc405241282_prof);

        
        $__internal_feeeae7b06b22e361e607bea9e1ec83e570965a6d4665be75d885b325794e864->leave($__internal_feeeae7b06b22e361e607bea9e1ec83e570965a6d4665be75d885b325794e864_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 98,  237 => 92,  228 => 89,  224 => 88,  221 => 87,  217 => 86,  195 => 67,  187 => 62,  179 => 57,  171 => 52,  165 => 48,  157 => 42,  154 => 41,  145 => 40,  131 => 35,  128 => 34,  119 => 33,  107 => 30,  104 => 29,  98 => 26,  91 => 22,  84 => 18,  77 => 14,  73 => 12,  71 => 11,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/twig.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>{{ time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.templatecount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.blockcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.macrocount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/twig.svg') }}</span>
        <strong>Twig</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.templatecount == 0 %}
        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    {% else %}
        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.0f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.templatecount }}</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.blockcount }}</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.macrocount }}</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            {% for template, count in collector.templates %}
                <tr>
                    <td>{{ template }}</td>
                    <td class=\"font-normal\">{{ count }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            {{ collector.htmlcallgraph }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/twig.html.twig", "/var/www/IntrawayServer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/twig.html.twig");
    }
}
