<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_82c2407add6488ebdeca6ced6f868e65e70ef38c6011353d3288c6b003373088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fbb5a501a1cce01c32e2b90d18359354299a4e77425a9897328fc0a9804eed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbb5a501a1cce01c32e2b90d18359354299a4e77425a9897328fc0a9804eed2->enter($__internal_3fbb5a501a1cce01c32e2b90d18359354299a4e77425a9897328fc0a9804eed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_63f152d41a9a088419d808d5f96fca2e727e967d34d7c403aa5870abcc631b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f152d41a9a088419d808d5f96fca2e727e967d34d7c403aa5870abcc631b79->enter($__internal_63f152d41a9a088419d808d5f96fca2e727e967d34d7c403aa5870abcc631b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fbb5a501a1cce01c32e2b90d18359354299a4e77425a9897328fc0a9804eed2->leave($__internal_3fbb5a501a1cce01c32e2b90d18359354299a4e77425a9897328fc0a9804eed2_prof);

        
        $__internal_63f152d41a9a088419d808d5f96fca2e727e967d34d7c403aa5870abcc631b79->leave($__internal_63f152d41a9a088419d808d5f96fca2e727e967d34d7c403aa5870abcc631b79_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_217031ec4f48e33bd2935736f9883ba247e6693acd545adb57b582fc6edbb3f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217031ec4f48e33bd2935736f9883ba247e6693acd545adb57b582fc6edbb3f8->enter($__internal_217031ec4f48e33bd2935736f9883ba247e6693acd545adb57b582fc6edbb3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b01741e22f3fe0782a1835238f2c7fc83aac29685f75c543afd38f9cd70c5e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01741e22f3fe0782a1835238f2c7fc83aac29685f75c543afd38f9cd70c5e9f->enter($__internal_b01741e22f3fe0782a1835238f2c7fc83aac29685f75c543afd38f9cd70c5e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b01741e22f3fe0782a1835238f2c7fc83aac29685f75c543afd38f9cd70c5e9f->leave($__internal_b01741e22f3fe0782a1835238f2c7fc83aac29685f75c543afd38f9cd70c5e9f_prof);

        
        $__internal_217031ec4f48e33bd2935736f9883ba247e6693acd545adb57b582fc6edbb3f8->leave($__internal_217031ec4f48e33bd2935736f9883ba247e6693acd545adb57b582fc6edbb3f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "F:\\xampp\\htdocs\\io_projekt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
