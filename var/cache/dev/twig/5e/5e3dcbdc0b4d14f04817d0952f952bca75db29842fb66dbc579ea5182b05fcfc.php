<?php

/* base.html.twig */
class __TwigTemplate_b7be49950d01cba8879d126dbd61083d7c7f61fa0f06819f5adb3beaa33e436a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5784f29cbe3d65f264851ea09f73f81a33b73755cc04a8657c1fa96757a38d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5784f29cbe3d65f264851ea09f73f81a33b73755cc04a8657c1fa96757a38d2->enter($__internal_d5784f29cbe3d65f264851ea09f73f81a33b73755cc04a8657c1fa96757a38d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d2d4deac36fe4c7953708288228f8f6de2ad2beed8a0c23a0afef541e4dbefe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d4deac36fe4c7953708288228f8f6de2ad2beed8a0c23a0afef541e4dbefe2->enter($__internal_d2d4deac36fe4c7953708288228f8f6de2ad2beed8a0c23a0afef541e4dbefe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>

<body>

<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                    aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Better than Wirtualny Dziekanat ..</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/\">List All</a></li>
                <li>
                    <div class=\"dropdown\">
                        <div class=\"dropdown-toggle dropdown-style\" data-toggle=\"dropdown\" style=\" color: #9d9d9d;padding-top:15px;padding-left:15px;cursor: pointer;\">Add ..<span
                                    class=\"caret\"></span></div>
                        <ul class=\"nav navbar-nav dropdown-menu\">
                            <li><a href=\"/add_lecturer\">Lecturer</a></li>
                            <li><a href=\"/add_class\">Class</a></li>
                            <li><a href=\"/add_subject\">Subject</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href=\"#contact\"></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container\">
";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
<script src=\"http://getbootstrap.com/dist/js/bootstrap.min.js\"></script>
</body>
</html>
";
        
        $__internal_d5784f29cbe3d65f264851ea09f73f81a33b73755cc04a8657c1fa96757a38d2->leave($__internal_d5784f29cbe3d65f264851ea09f73f81a33b73755cc04a8657c1fa96757a38d2_prof);

        
        $__internal_d2d4deac36fe4c7953708288228f8f6de2ad2beed8a0c23a0afef541e4dbefe2->leave($__internal_d2d4deac36fe4c7953708288228f8f6de2ad2beed8a0c23a0afef541e4dbefe2_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c709693c17322e3ce2d44c51fda6117493546cc2211d381a96d8fb63aade1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c709693c17322e3ce2d44c51fda6117493546cc2211d381a96d8fb63aade1be->enter($__internal_5c709693c17322e3ce2d44c51fda6117493546cc2211d381a96d8fb63aade1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33f16d454e693ce61fa9aa77f4a0df7acbefe1bfed7bfb0cb072c7ea9a635a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f16d454e693ce61fa9aa77f4a0df7acbefe1bfed7bfb0cb072c7ea9a635a8a->enter($__internal_33f16d454e693ce61fa9aa77f4a0df7acbefe1bfed7bfb0cb072c7ea9a635a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_33f16d454e693ce61fa9aa77f4a0df7acbefe1bfed7bfb0cb072c7ea9a635a8a->leave($__internal_33f16d454e693ce61fa9aa77f4a0df7acbefe1bfed7bfb0cb072c7ea9a635a8a_prof);

        
        $__internal_5c709693c17322e3ce2d44c51fda6117493546cc2211d381a96d8fb63aade1be->leave($__internal_5c709693c17322e3ce2d44c51fda6117493546cc2211d381a96d8fb63aade1be_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 49,  78 => 51,  76 => 49,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>

<body>

<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                    aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Better than Wirtualny Dziekanat ..</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/\">List All</a></li>
                <li>
                    <div class=\"dropdown\">
                        <div class=\"dropdown-toggle dropdown-style\" data-toggle=\"dropdown\" style=\" color: #9d9d9d;padding-top:15px;padding-left:15px;cursor: pointer;\">Add ..<span
                                    class=\"caret\"></span></div>
                        <ul class=\"nav navbar-nav dropdown-menu\">
                            <li><a href=\"/add_lecturer\">Lecturer</a></li>
                            <li><a href=\"/add_class\">Class</a></li>
                            <li><a href=\"/add_subject\">Subject</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href=\"#contact\"></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container\">
{% block body %}
{% endblock %}
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
<script src=\"http://getbootstrap.com/dist/js/bootstrap.min.js\"></script>
</body>
</html>
", "base.html.twig", "F:\\xampp\\htdocs\\io_projekt\\app\\Resources\\views\\base.html.twig");
    }
}
