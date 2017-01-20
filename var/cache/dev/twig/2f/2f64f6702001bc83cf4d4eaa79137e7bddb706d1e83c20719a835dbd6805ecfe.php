<?php

/* io/add_lecturer.html.twig */
class __TwigTemplate_61a4d8ed64f741c3398c69d067e54a6bb9bf333ee0425173d7941e8a0b052d44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "io/add_lecturer.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d6b20da61f5fd1bc35040ad6852044aac9bf9b27a5856076b018142ffeed329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6b20da61f5fd1bc35040ad6852044aac9bf9b27a5856076b018142ffeed329->enter($__internal_7d6b20da61f5fd1bc35040ad6852044aac9bf9b27a5856076b018142ffeed329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "io/add_lecturer.html.twig"));

        $__internal_fc90addddcd2aa048924cb07826c33d9a1742ffc9972f17b5e4b6d4102ee060b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc90addddcd2aa048924cb07826c33d9a1742ffc9972f17b5e4b6d4102ee060b->enter($__internal_fc90addddcd2aa048924cb07826c33d9a1742ffc9972f17b5e4b6d4102ee060b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "io/add_lecturer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d6b20da61f5fd1bc35040ad6852044aac9bf9b27a5856076b018142ffeed329->leave($__internal_7d6b20da61f5fd1bc35040ad6852044aac9bf9b27a5856076b018142ffeed329_prof);

        
        $__internal_fc90addddcd2aa048924cb07826c33d9a1742ffc9972f17b5e4b6d4102ee060b->leave($__internal_fc90addddcd2aa048924cb07826c33d9a1742ffc9972f17b5e4b6d4102ee060b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_525373c96ede6a274a687393a8d8bb1e1013972125214a953d7298bce4731a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525373c96ede6a274a687393a8d8bb1e1013972125214a953d7298bce4731a2f->enter($__internal_525373c96ede6a274a687393a8d8bb1e1013972125214a953d7298bce4731a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9894c2355fdacbfcf29aafff9da055301bdb62ac4b6b66e70d15bbfcc7d47a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9894c2355fdacbfcf29aafff9da055301bdb62ac4b6b66e70d15bbfcc7d47a0->enter($__internal_c9894c2355fdacbfcf29aafff9da055301bdb62ac4b6b66e70d15bbfcc7d47a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Lecturer";
        
        $__internal_c9894c2355fdacbfcf29aafff9da055301bdb62ac4b6b66e70d15bbfcc7d47a0->leave($__internal_c9894c2355fdacbfcf29aafff9da055301bdb62ac4b6b66e70d15bbfcc7d47a0_prof);

        
        $__internal_525373c96ede6a274a687393a8d8bb1e1013972125214a953d7298bce4731a2f->leave($__internal_525373c96ede6a274a687393a8d8bb1e1013972125214a953d7298bce4731a2f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_290ded581ba8fafb8012fe61e1e43806ccca9d885abb0e7ac3bc9f87b5072fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290ded581ba8fafb8012fe61e1e43806ccca9d885abb0e7ac3bc9f87b5072fbf->enter($__internal_290ded581ba8fafb8012fe61e1e43806ccca9d885abb0e7ac3bc9f87b5072fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5979fc4e08a6d4c475ba1a95567324291394f586eda0dbb606f9148424db3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5979fc4e08a6d4c475ba1a95567324291394f586eda0dbb606f9148424db3df->enter($__internal_b5979fc4e08a6d4c475ba1a95567324291394f586eda0dbb606f9148424db3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b5979fc4e08a6d4c475ba1a95567324291394f586eda0dbb606f9148424db3df->leave($__internal_b5979fc4e08a6d4c475ba1a95567324291394f586eda0dbb606f9148424db3df_prof);

        
        $__internal_290ded581ba8fafb8012fe61e1e43806ccca9d885abb0e7ac3bc9f87b5072fbf->leave($__internal_290ded581ba8fafb8012fe61e1e43806ccca9d885abb0e7ac3bc9f87b5072fbf_prof);

    }

    public function getTemplateName()
    {
        return "io/add_lecturer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 7,  73 => 6,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Add Lecturer{% endblock %}

{% block body %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}", "io/add_lecturer.html.twig", "F:\\xampp\\htdocs\\io_projekt\\app\\Resources\\views\\io\\add_lecturer.html.twig");
    }
}
