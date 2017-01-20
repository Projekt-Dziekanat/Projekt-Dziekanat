<?php

/* io/add_subject.html.twig */
class __TwigTemplate_e3225196fe5cd7e11ffbad69b6b96581cb4f7bd62e902cbf1956946b9ce4f971 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "io/add_subject.html.twig", 1);
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
        $__internal_6263115cd7283ac129315495fd7870846b5cb1c947a70cde4aba55a40a416847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6263115cd7283ac129315495fd7870846b5cb1c947a70cde4aba55a40a416847->enter($__internal_6263115cd7283ac129315495fd7870846b5cb1c947a70cde4aba55a40a416847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "io/add_subject.html.twig"));

        $__internal_e84af355685df48022ccebd452482598f72301f898c91b36db2fa6f39ac85ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84af355685df48022ccebd452482598f72301f898c91b36db2fa6f39ac85ed0->enter($__internal_e84af355685df48022ccebd452482598f72301f898c91b36db2fa6f39ac85ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "io/add_subject.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6263115cd7283ac129315495fd7870846b5cb1c947a70cde4aba55a40a416847->leave($__internal_6263115cd7283ac129315495fd7870846b5cb1c947a70cde4aba55a40a416847_prof);

        
        $__internal_e84af355685df48022ccebd452482598f72301f898c91b36db2fa6f39ac85ed0->leave($__internal_e84af355685df48022ccebd452482598f72301f898c91b36db2fa6f39ac85ed0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed67a9f93ffd967cb5d72ac35c6b305d8744faa57e887e9e797ec471f1f7f72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed67a9f93ffd967cb5d72ac35c6b305d8744faa57e887e9e797ec471f1f7f72e->enter($__internal_ed67a9f93ffd967cb5d72ac35c6b305d8744faa57e887e9e797ec471f1f7f72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a1ba5fd92e0816ef589b08ba5fddc2f23e893ab220082023e534dfdb59b50f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1ba5fd92e0816ef589b08ba5fddc2f23e893ab220082023e534dfdb59b50f2->enter($__internal_6a1ba5fd92e0816ef589b08ba5fddc2f23e893ab220082023e534dfdb59b50f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Subject";
        
        $__internal_6a1ba5fd92e0816ef589b08ba5fddc2f23e893ab220082023e534dfdb59b50f2->leave($__internal_6a1ba5fd92e0816ef589b08ba5fddc2f23e893ab220082023e534dfdb59b50f2_prof);

        
        $__internal_ed67a9f93ffd967cb5d72ac35c6b305d8744faa57e887e9e797ec471f1f7f72e->leave($__internal_ed67a9f93ffd967cb5d72ac35c6b305d8744faa57e887e9e797ec471f1f7f72e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_df9b1fb355ac8ff660f16f76c445678f58d34b3808abb8f41e9bec0e650d08a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9b1fb355ac8ff660f16f76c445678f58d34b3808abb8f41e9bec0e650d08a3->enter($__internal_df9b1fb355ac8ff660f16f76c445678f58d34b3808abb8f41e9bec0e650d08a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ded328c551f2d90d170300320c5889f2eaf06afae7f58ba0de5181d6f49e507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ded328c551f2d90d170300320c5889f2eaf06afae7f58ba0de5181d6f49e507->enter($__internal_7ded328c551f2d90d170300320c5889f2eaf06afae7f58ba0de5181d6f49e507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7ded328c551f2d90d170300320c5889f2eaf06afae7f58ba0de5181d6f49e507->leave($__internal_7ded328c551f2d90d170300320c5889f2eaf06afae7f58ba0de5181d6f49e507_prof);

        
        $__internal_df9b1fb355ac8ff660f16f76c445678f58d34b3808abb8f41e9bec0e650d08a3->leave($__internal_df9b1fb355ac8ff660f16f76c445678f58d34b3808abb8f41e9bec0e650d08a3_prof);

    }

    public function getTemplateName()
    {
        return "io/add_subject.html.twig";
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
{% block title %}Add Subject{% endblock %}

{% block body %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}", "io/add_subject.html.twig", "F:\\xampp\\htdocs\\io_projekt\\app\\Resources\\views\\io\\add_subject.html.twig");
    }
}
