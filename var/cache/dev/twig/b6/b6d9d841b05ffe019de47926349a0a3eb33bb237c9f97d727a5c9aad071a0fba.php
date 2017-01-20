<?php

/* io/index.html.twig */
class __TwigTemplate_c20090dd6f31e0d26850293b91fe787104f4c229d0f53bd871634a768569f0d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "io/index.html.twig", 1);
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
        $__internal_634e32e4f1576259410ac59c35c973e294b46fbc0bca9e74fe7e35ed8e117fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634e32e4f1576259410ac59c35c973e294b46fbc0bca9e74fe7e35ed8e117fd6->enter($__internal_634e32e4f1576259410ac59c35c973e294b46fbc0bca9e74fe7e35ed8e117fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "io/index.html.twig"));

        $__internal_12dd6500a6ba5ee7f06141020a848b6d663460af659d5a4653c2d5c1136a11ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12dd6500a6ba5ee7f06141020a848b6d663460af659d5a4653c2d5c1136a11ab->enter($__internal_12dd6500a6ba5ee7f06141020a848b6d663460af659d5a4653c2d5c1136a11ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "io/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_634e32e4f1576259410ac59c35c973e294b46fbc0bca9e74fe7e35ed8e117fd6->leave($__internal_634e32e4f1576259410ac59c35c973e294b46fbc0bca9e74fe7e35ed8e117fd6_prof);

        
        $__internal_12dd6500a6ba5ee7f06141020a848b6d663460af659d5a4653c2d5c1136a11ab->leave($__internal_12dd6500a6ba5ee7f06141020a848b6d663460af659d5a4653c2d5c1136a11ab_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_068bf1242bde479735e33063356e9ccd3fe56b63d22da530be43690d69ae246e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068bf1242bde479735e33063356e9ccd3fe56b63d22da530be43690d69ae246e->enter($__internal_068bf1242bde479735e33063356e9ccd3fe56b63d22da530be43690d69ae246e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79dbe179423ea7a847f1c6d5940b2a3bb6694f99481130d355a43f108c57084c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79dbe179423ea7a847f1c6d5940b2a3bb6694f99481130d355a43f108c57084c->enter($__internal_79dbe179423ea7a847f1c6d5940b2a3bb6694f99481130d355a43f108c57084c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Class";
        
        $__internal_79dbe179423ea7a847f1c6d5940b2a3bb6694f99481130d355a43f108c57084c->leave($__internal_79dbe179423ea7a847f1c6d5940b2a3bb6694f99481130d355a43f108c57084c_prof);

        
        $__internal_068bf1242bde479735e33063356e9ccd3fe56b63d22da530be43690d69ae246e->leave($__internal_068bf1242bde479735e33063356e9ccd3fe56b63d22da530be43690d69ae246e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_af4b4e9d761232d6cc82c948c6a1bb1cc3ccab0e719ad63a81d28ee40edf51c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4b4e9d761232d6cc82c948c6a1bb1cc3ccab0e719ad63a81d28ee40edf51c4->enter($__internal_af4b4e9d761232d6cc82c948c6a1bb1cc3ccab0e719ad63a81d28ee40edf51c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96e5eee14ff0a76fbacfecea44a5c6f0857cd86851ec1c97ea71d57020ca6e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e5eee14ff0a76fbacfecea44a5c6f0857cd86851ec1c97ea71d57020ca6e97->enter($__internal_96e5eee14ff0a76fbacfecea44a5c6f0857cd86851ec1c97ea71d57020ca6e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        
        $__internal_96e5eee14ff0a76fbacfecea44a5c6f0857cd86851ec1c97ea71d57020ca6e97->leave($__internal_96e5eee14ff0a76fbacfecea44a5c6f0857cd86851ec1c97ea71d57020ca6e97_prof);

        
        $__internal_af4b4e9d761232d6cc82c948c6a1bb1cc3ccab0e719ad63a81d28ee40edf51c4->leave($__internal_af4b4e9d761232d6cc82c948c6a1bb1cc3ccab0e719ad63a81d28ee40edf51c4_prof);

    }

    public function getTemplateName()
    {
        return "io/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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

{% endblock %}", "io/index.html.twig", "F:\\xampp\\htdocs\\io_projekt\\app\\Resources\\views\\io\\index.html.twig");
    }
}
