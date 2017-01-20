<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_82ae890888124d96920112f39f4e10bf7fceb0f0a4c05132c530bdc9959a3b7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d82eacc61ee6b4a922026f4d1ffd9b0588cf0473285bb360934ab2b0582cd698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82eacc61ee6b4a922026f4d1ffd9b0588cf0473285bb360934ab2b0582cd698->enter($__internal_d82eacc61ee6b4a922026f4d1ffd9b0588cf0473285bb360934ab2b0582cd698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0a3e6a9cc10c40f542bbb94df885004e8d0e427077087b911b397119935fd199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3e6a9cc10c40f542bbb94df885004e8d0e427077087b911b397119935fd199->enter($__internal_0a3e6a9cc10c40f542bbb94df885004e8d0e427077087b911b397119935fd199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d82eacc61ee6b4a922026f4d1ffd9b0588cf0473285bb360934ab2b0582cd698->leave($__internal_d82eacc61ee6b4a922026f4d1ffd9b0588cf0473285bb360934ab2b0582cd698_prof);

        
        $__internal_0a3e6a9cc10c40f542bbb94df885004e8d0e427077087b911b397119935fd199->leave($__internal_0a3e6a9cc10c40f542bbb94df885004e8d0e427077087b911b397119935fd199_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2de8dc2fb1b2463fd2116a9b68f76ee4bff97dbe50dd981c96b79be6951c9514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de8dc2fb1b2463fd2116a9b68f76ee4bff97dbe50dd981c96b79be6951c9514->enter($__internal_2de8dc2fb1b2463fd2116a9b68f76ee4bff97dbe50dd981c96b79be6951c9514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a39f66300d29d8059e7883610178e18e1a8d27e26b5b49521232e7482bab9f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39f66300d29d8059e7883610178e18e1a8d27e26b5b49521232e7482bab9f2b->enter($__internal_a39f66300d29d8059e7883610178e18e1a8d27e26b5b49521232e7482bab9f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a39f66300d29d8059e7883610178e18e1a8d27e26b5b49521232e7482bab9f2b->leave($__internal_a39f66300d29d8059e7883610178e18e1a8d27e26b5b49521232e7482bab9f2b_prof);

        
        $__internal_2de8dc2fb1b2463fd2116a9b68f76ee4bff97dbe50dd981c96b79be6951c9514->leave($__internal_2de8dc2fb1b2463fd2116a9b68f76ee4bff97dbe50dd981c96b79be6951c9514_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6cb4aeab479af296b753cf210a1f43546d8fd5d5db72ab8411b37198e2a5753f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb4aeab479af296b753cf210a1f43546d8fd5d5db72ab8411b37198e2a5753f->enter($__internal_6cb4aeab479af296b753cf210a1f43546d8fd5d5db72ab8411b37198e2a5753f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dacafc0b0f8fec1725a54529dbc3554c1f4f46ec49572cca7cae3c5c1ce1f076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dacafc0b0f8fec1725a54529dbc3554c1f4f46ec49572cca7cae3c5c1ce1f076->enter($__internal_dacafc0b0f8fec1725a54529dbc3554c1f4f46ec49572cca7cae3c5c1ce1f076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dacafc0b0f8fec1725a54529dbc3554c1f4f46ec49572cca7cae3c5c1ce1f076->leave($__internal_dacafc0b0f8fec1725a54529dbc3554c1f4f46ec49572cca7cae3c5c1ce1f076_prof);

        
        $__internal_6cb4aeab479af296b753cf210a1f43546d8fd5d5db72ab8411b37198e2a5753f->leave($__internal_6cb4aeab479af296b753cf210a1f43546d8fd5d5db72ab8411b37198e2a5753f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c205b72cdc84514a0882b35ba84f2388565bb6ab64aede79ff470cd4a611d999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c205b72cdc84514a0882b35ba84f2388565bb6ab64aede79ff470cd4a611d999->enter($__internal_c205b72cdc84514a0882b35ba84f2388565bb6ab64aede79ff470cd4a611d999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a67c944713bfc13ef51f652478be91005091ff75fec0b29b57efa5e2815ae603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67c944713bfc13ef51f652478be91005091ff75fec0b29b57efa5e2815ae603->enter($__internal_a67c944713bfc13ef51f652478be91005091ff75fec0b29b57efa5e2815ae603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a67c944713bfc13ef51f652478be91005091ff75fec0b29b57efa5e2815ae603->leave($__internal_a67c944713bfc13ef51f652478be91005091ff75fec0b29b57efa5e2815ae603_prof);

        
        $__internal_c205b72cdc84514a0882b35ba84f2388565bb6ab64aede79ff470cd4a611d999->leave($__internal_c205b72cdc84514a0882b35ba84f2388565bb6ab64aede79ff470cd4a611d999_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "F:\\xampp\\htdocs\\io_projekt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
