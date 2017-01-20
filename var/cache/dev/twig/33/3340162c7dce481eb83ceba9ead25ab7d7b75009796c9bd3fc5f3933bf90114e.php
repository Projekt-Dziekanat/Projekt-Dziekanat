<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e9012e253f0fb9bd326ff26fbcd3bc7d3b234dda7d7040453cab95f679e08057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_e80451e199619e71f63fc5fbb3e11b533d803ea691279e32350c4800ec5a40d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80451e199619e71f63fc5fbb3e11b533d803ea691279e32350c4800ec5a40d8->enter($__internal_e80451e199619e71f63fc5fbb3e11b533d803ea691279e32350c4800ec5a40d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c3e314e874031c397a7f4a017c88657db0aef07f59ff84ea22e831bf3254347e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e314e874031c397a7f4a017c88657db0aef07f59ff84ea22e831bf3254347e->enter($__internal_c3e314e874031c397a7f4a017c88657db0aef07f59ff84ea22e831bf3254347e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e80451e199619e71f63fc5fbb3e11b533d803ea691279e32350c4800ec5a40d8->leave($__internal_e80451e199619e71f63fc5fbb3e11b533d803ea691279e32350c4800ec5a40d8_prof);

        
        $__internal_c3e314e874031c397a7f4a017c88657db0aef07f59ff84ea22e831bf3254347e->leave($__internal_c3e314e874031c397a7f4a017c88657db0aef07f59ff84ea22e831bf3254347e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fc9ad2069f6b7cedf5281676dd4e810361dfdc4a01aa8360488029200ad7686b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9ad2069f6b7cedf5281676dd4e810361dfdc4a01aa8360488029200ad7686b->enter($__internal_fc9ad2069f6b7cedf5281676dd4e810361dfdc4a01aa8360488029200ad7686b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d521f6feb3bd9d427a82c2c8d001959687fd95bcbf78705f79aae11f93ef9c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d521f6feb3bd9d427a82c2c8d001959687fd95bcbf78705f79aae11f93ef9c90->enter($__internal_d521f6feb3bd9d427a82c2c8d001959687fd95bcbf78705f79aae11f93ef9c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d521f6feb3bd9d427a82c2c8d001959687fd95bcbf78705f79aae11f93ef9c90->leave($__internal_d521f6feb3bd9d427a82c2c8d001959687fd95bcbf78705f79aae11f93ef9c90_prof);

        
        $__internal_fc9ad2069f6b7cedf5281676dd4e810361dfdc4a01aa8360488029200ad7686b->leave($__internal_fc9ad2069f6b7cedf5281676dd4e810361dfdc4a01aa8360488029200ad7686b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dabb6ed9ed95898bc490254045d884847ea2ec9be0936715e5a93107657ff81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dabb6ed9ed95898bc490254045d884847ea2ec9be0936715e5a93107657ff81e->enter($__internal_dabb6ed9ed95898bc490254045d884847ea2ec9be0936715e5a93107657ff81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_be92dc9c34a05e53501cc5f14c6560f8cd6c1606fd6d20faa084b58082718e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be92dc9c34a05e53501cc5f14c6560f8cd6c1606fd6d20faa084b58082718e56->enter($__internal_be92dc9c34a05e53501cc5f14c6560f8cd6c1606fd6d20faa084b58082718e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be92dc9c34a05e53501cc5f14c6560f8cd6c1606fd6d20faa084b58082718e56->leave($__internal_be92dc9c34a05e53501cc5f14c6560f8cd6c1606fd6d20faa084b58082718e56_prof);

        
        $__internal_dabb6ed9ed95898bc490254045d884847ea2ec9be0936715e5a93107657ff81e->leave($__internal_dabb6ed9ed95898bc490254045d884847ea2ec9be0936715e5a93107657ff81e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa00469e96995579ded0e67072c5fdd0b06548de147a247489cde3969239d9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa00469e96995579ded0e67072c5fdd0b06548de147a247489cde3969239d9b1->enter($__internal_fa00469e96995579ded0e67072c5fdd0b06548de147a247489cde3969239d9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2acd9043e41def7e505d5cfc5714c59ac6dd349a7161adf4862c43f39c51b22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acd9043e41def7e505d5cfc5714c59ac6dd349a7161adf4862c43f39c51b22d->enter($__internal_2acd9043e41def7e505d5cfc5714c59ac6dd349a7161adf4862c43f39c51b22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2acd9043e41def7e505d5cfc5714c59ac6dd349a7161adf4862c43f39c51b22d->leave($__internal_2acd9043e41def7e505d5cfc5714c59ac6dd349a7161adf4862c43f39c51b22d_prof);

        
        $__internal_fa00469e96995579ded0e67072c5fdd0b06548de147a247489cde3969239d9b1->leave($__internal_fa00469e96995579ded0e67072c5fdd0b06548de147a247489cde3969239d9b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "F:\\xampp\\htdocs\\io_projekt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
