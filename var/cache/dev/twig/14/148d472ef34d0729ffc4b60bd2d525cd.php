<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @DukecityCommandScheduler/layout.html.twig */
class __TwigTemplate_f34b05c93cb93b3f8364e53835978387 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", [0 => "_locale", 1 => "en"], "method", false, false, false, 3), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Command Scheduler ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/css/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/css/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body id=\"dukecity\">
";
        // line 17
        $this->loadTemplate("@DukecityCommandScheduler/Navbar/navbar.html.twig", "@DukecityCommandScheduler/layout.html.twig", 17)->display($context);
        // line 18
        echo "<div class=\"\">
    <div class=\"container-fluid\" style=\"margin-top:30px; max-width: 1300px; margin-bottom: 50px;\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                ";
        // line 24
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "session", [], "any", false, false, false, 24), "flashbag", [], "any", false, false, false, 24), "get", [0 => "success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "                    <div class=\"alert alert-success\" role=\"alert\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                ";
        // line 31
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "flashbag", [], "any", false, false, false, 31), "get", [0 => "error"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 33
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
                ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "            </div>
        </div>
    </div>
</div><!-- /container -->

<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/jquery-3.6.0.slim.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/jquery-migrate-3.3.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/bootstrap-confirmation.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/datatables.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">

    \$(document).ready(function () {

        // Enable bootstrap-confirmation (https://bootstrap-confirmation.js.org/)
        \$('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            container: 'body',
            singleton: true,
            popout: true,
            placement: 'left',
            btnOkClass: 'btn btn-danger',
            btnCancelLabel: 'Cancel',
            btnCancelClass: 'btn btn-secondary',
        });
    });

    ";
        // line 68
        $this->displayBlock('javascript', $context, $blocks);
        // line 69
        echo "
</script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@DukecityCommandScheduler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 68,  224 => 37,  206 => 8,  193 => 69,  191 => 68,  169 => 49,  165 => 48,  161 => 47,  157 => 46,  153 => 45,  149 => 44,  145 => 43,  138 => 38,  136 => 37,  133 => 36,  124 => 33,  121 => 32,  116 => 31,  113 => 29,  104 => 26,  101 => 25,  96 => 24,  89 => 18,  87 => 17,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  49 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'DukecityCommandScheduler' %}
<!DOCTYPE html>
<html lang=\"{{ app.request.attributes.get('_locale', 'en') }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Command Scheduler {% block title %}{% endblock title %}</title>
    <link href=\"{{ asset('bundles/dukecitycommandscheduler/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/dukecitycommandscheduler/css/select2.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/dukecitycommandscheduler/css/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/dukecitycommandscheduler/css/datatables.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/dukecitycommandscheduler/css/dataTables.bootstrap4.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/dukecitycommandscheduler/css/custom.css') }}\" rel=\"stylesheet\">
</head>
<body id=\"dukecity\">
{% include '@DukecityCommandScheduler/Navbar/navbar.html.twig' %}
<div class=\"\">
    <div class=\"container-fluid\" style=\"margin-top:30px; max-width: 1300px; margin-bottom: 50px;\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                {# Succes flash messages #}
                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"alert alert-success\" role=\"alert\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}

                {# Errors flash messages #}
                {% for flashMessage in app.session.flashbag.get('error') %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}

                {% block content %}{% endblock content %}
            </div>
        </div>
    </div>
</div><!-- /container -->

<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/jquery-3.6.0.slim.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/jquery-migrate-3.3.2.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/bootstrap.bundle.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/bootstrap-confirmation.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/select2.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/datatables.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/dataTables.bootstrap4.min.js') }}\"></script>

<script type=\"text/javascript\">

    \$(document).ready(function () {

        // Enable bootstrap-confirmation (https://bootstrap-confirmation.js.org/)
        \$('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            container: 'body',
            singleton: true,
            popout: true,
            placement: 'left',
            btnOkClass: 'btn btn-danger',
            btnCancelLabel: 'Cancel',
            btnCancelClass: 'btn btn-secondary',
        });
    });

    {% block javascript %}{% endblock javascript %}

</script>
</body>
</html>", "@DukecityCommandScheduler/layout.html.twig", "/var/www/html/vendor/dukecity/command-scheduler-bundle/Resources/views/layout.html.twig");
    }
}
