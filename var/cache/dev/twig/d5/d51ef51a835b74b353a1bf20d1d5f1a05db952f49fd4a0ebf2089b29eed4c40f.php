<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_0ab671493f4b1416c176e0c6f8b646839debe68cbbfc4cf02423c5969dd870c5 extends Twig_Template
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
        $__internal_8b03aa3edc2f669cf168a85934771e946fb352ddc66f3974cbdc3bf09a22c100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b03aa3edc2f669cf168a85934771e946fb352ddc66f3974cbdc3bf09a22c100->enter($__internal_8b03aa3edc2f669cf168a85934771e946fb352ddc66f3974cbdc3bf09a22c100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_02267819d5878dbee2b927f81c62cc876e56411285572a256ff220c1bd3db2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02267819d5878dbee2b927f81c62cc876e56411285572a256ff220c1bd3db2ec->enter($__internal_02267819d5878dbee2b927f81c62cc876e56411285572a256ff220c1bd3db2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_8b03aa3edc2f669cf168a85934771e946fb352ddc66f3974cbdc3bf09a22c100->leave($__internal_8b03aa3edc2f669cf168a85934771e946fb352ddc66f3974cbdc3bf09a22c100_prof);

        
        $__internal_02267819d5878dbee2b927f81c62cc876e56411285572a256ff220c1bd3db2ec->leave($__internal_02267819d5878dbee2b927f81c62cc876e56411285572a256ff220c1bd3db2ec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "F:\\xampp\\htdocs\\io_projekt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
