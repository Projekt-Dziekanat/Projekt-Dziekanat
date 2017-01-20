<?php

/* io/add_class.html.twig */
class __TwigTemplate_cdbb25f97107f1edbe64d209145009f68cc909ae9723a4b73607e32f499edb6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "io/add_class.html.twig", 1);
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
        $__internal_c3e2efc0ed9939cc7d1cebdafd30acce263aff7c95e418d52fc5e2197aa5b360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e2efc0ed9939cc7d1cebdafd30acce263aff7c95e418d52fc5e2197aa5b360->enter($__internal_c3e2efc0ed9939cc7d1cebdafd30acce263aff7c95e418d52fc5e2197aa5b360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "io/add_class.html.twig"));

        $__internal_24d00a66f9b12d48cb1327a16ef7447a3fb228242a51eee4eda6758c40fe82f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d00a66f9b12d48cb1327a16ef7447a3fb228242a51eee4eda6758c40fe82f3->enter($__internal_24d00a66f9b12d48cb1327a16ef7447a3fb228242a51eee4eda6758c40fe82f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "io/add_class.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3e2efc0ed9939cc7d1cebdafd30acce263aff7c95e418d52fc5e2197aa5b360->leave($__internal_c3e2efc0ed9939cc7d1cebdafd30acce263aff7c95e418d52fc5e2197aa5b360_prof);

        
        $__internal_24d00a66f9b12d48cb1327a16ef7447a3fb228242a51eee4eda6758c40fe82f3->leave($__internal_24d00a66f9b12d48cb1327a16ef7447a3fb228242a51eee4eda6758c40fe82f3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c27e5b56b9a7afd7b01c819f3d00087458b58f9bab87609e5277124ba22912ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27e5b56b9a7afd7b01c819f3d00087458b58f9bab87609e5277124ba22912ea->enter($__internal_c27e5b56b9a7afd7b01c819f3d00087458b58f9bab87609e5277124ba22912ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_382c1379d0313205828636092aa385ef91cd59181869b53c98f82998d999e55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382c1379d0313205828636092aa385ef91cd59181869b53c98f82998d999e55c->enter($__internal_382c1379d0313205828636092aa385ef91cd59181869b53c98f82998d999e55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Class";
        
        $__internal_382c1379d0313205828636092aa385ef91cd59181869b53c98f82998d999e55c->leave($__internal_382c1379d0313205828636092aa385ef91cd59181869b53c98f82998d999e55c_prof);

        
        $__internal_c27e5b56b9a7afd7b01c819f3d00087458b58f9bab87609e5277124ba22912ea->leave($__internal_c27e5b56b9a7afd7b01c819f3d00087458b58f9bab87609e5277124ba22912ea_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1c713debef1360fd75abfba2dc9816b9ab6a907a3e551c184b0edeeead12cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c713debef1360fd75abfba2dc9816b9ab6a907a3e551c184b0edeeead12cbc->enter($__internal_e1c713debef1360fd75abfba2dc9816b9ab6a907a3e551c184b0edeeead12cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31e0b50de303836d6fe8a9006f60441183fdc75052fa6b9ebffa32b052e657b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e0b50de303836d6fe8a9006f60441183fdc75052fa6b9ebffa32b052e657b2->enter($__internal_31e0b50de303836d6fe8a9006f60441183fdc75052fa6b9ebffa32b052e657b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_31e0b50de303836d6fe8a9006f60441183fdc75052fa6b9ebffa32b052e657b2->leave($__internal_31e0b50de303836d6fe8a9006f60441183fdc75052fa6b9ebffa32b052e657b2_prof);

        
        $__internal_e1c713debef1360fd75abfba2dc9816b9ab6a907a3e551c184b0edeeead12cbc->leave($__internal_e1c713debef1360fd75abfba2dc9816b9ab6a907a3e551c184b0edeeead12cbc_prof);

    }

    public function getTemplateName()
    {
        return "io/add_class.html.twig";
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
{% block title %}Add Class{% endblock %}

{% block body %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}", "io/add_class.html.twig", "F:\\xampp\\htdocs\\io_projekt\\app\\Resources\\views\\io\\add_class.html.twig");
    }
}
