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

/* @DukecityCommandScheduler/Detail/index.html.twig */
class __TwigTemplate_38013209f220f055cebbf0e4b7fc89b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@DukecityCommandScheduler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/Detail/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/Detail/index.html.twig"));

        $this->parent = $this->loadTemplate("@DukecityCommandScheduler/layout.html.twig", "@DukecityCommandScheduler/Detail/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.title", [], "DukecityCommandScheduler"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    ";
        // line 11
        $context["styleConfiguration"] = ["class" => "form-control"];
        // line 12
        echo "<div class=\"card\">
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
    <div class=\"card-header\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.title", [], "DukecityCommandScheduler"), "html", null, true);
        echo "</div>
    <div class=\"card-body\">

        <div class=\"row\">
        <div class=\"col-lg-6 col-sm-12\">
        <div class=\"card\">
            <div class=\"card-header text-white bg-secondary\">
                Command
            </div>
            <div class=\"card-body\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), 'row', ["attr" => twig_array_merge((isset($context["styleConfiguration"]) || array_key_exists("styleConfiguration", $context) ? $context["styleConfiguration"] : (function () { throw new RuntimeError('Variable "styleConfiguration" does not exist.', 24, $this->source); })()), ["placeholder" => "name"])]);
        echo "

                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 26, $this->source); })()), "logFile", [], "any", false, false, false, 26), 'row', ["attr" => twig_array_merge((isset($context["styleConfiguration"]) || array_key_exists("styleConfiguration", $context) ? $context["styleConfiguration"] : (function () { throw new RuntimeError('Variable "styleConfiguration" does not exist.', 26, $this->source); })()), ["placeholder" => "myFile.log"])]);
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 27, $this->source); })()), "priority", [], "any", false, false, false, 27), 'row', ["attr" => (isset($context["styleConfiguration"]) || array_key_exists("styleConfiguration", $context) ? $context["styleConfiguration"] : (function () { throw new RuntimeError('Variable "styleConfiguration" does not exist.', 27, $this->source); })())]);
        echo "
                <div>
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 29, $this->source); })()), "executeImmediately", [], "any", false, false, false, 29), 'row', ["label_attr" => ["class" => "checkbox-custom"]]);
        echo "
                </div>
                <div>
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 32, $this->source); })()), "disabled", [], "any", false, false, false, 32), 'row', ["label_attr" => ["class" => "checkbox-custom"]]);
        echo "
                </div>
            </div>
        </div>
        </div>

        <div class=\"col-lg-6 col-sm-12\">
        <div class=\"card\">
            <div class=\"card-header text-white bg-secondary\">
                Command
            </div>
            <div class=\"card-body\">
                ";
        // line 45
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 45, $this->source); })()), "command", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control select2"]]);
        echo "
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 46, $this->source); })()), "arguments", [], "any", false, false, false, 46), 'row', ["attr" => twig_array_merge((isset($context["styleConfiguration"]) || array_key_exists("styleConfiguration", $context) ? $context["styleConfiguration"] : (function () { throw new RuntimeError('Variable "styleConfiguration" does not exist.', 46, $this->source); })()), ["placeholder" => "--argument1=foo --bar"])]);
        echo "
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 47, $this->source); })()), "cronExpression", [], "any", false, false, false, 47), 'row', ["attr" => twig_array_merge((isset($context["styleConfiguration"]) || array_key_exists("styleConfiguration", $context) ? $context["styleConfiguration"] : (function () { throw new RuntimeError('Variable "styleConfiguration" does not exist.', 47, $this->source); })()), ["placeholder" => "*/10 * * * *"])]);
        echo "
            </div>
        </div>
        </div>
        </div>

    </div>
    <div class=\"card-footer\">
        ";
        // line 56
        echo "        <div class=\"\">
            <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_list");
        echo "\" class=\"btn btn-danger btn-lg float-left\" role=\"button\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.cancel", [], "DukecityCommandScheduler"), "html", null, true);
        echo "</a>
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 58, $this->source); })()), "save", [], "any", false, false, false, 58), 'row', ["attr" => ["class" => "btn btn-success btn-lg float-right"]]);
        echo "
        </div>
    </div>
    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 65
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 66
        echo "    \$(document).ready(function() {
        \$('.select2').select2();
    });
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@DukecityCommandScheduler/Detail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 66,  201 => 65,  188 => 61,  182 => 58,  176 => 57,  173 => 56,  162 => 47,  158 => 46,  153 => 45,  138 => 32,  132 => 29,  127 => 27,  123 => 26,  118 => 24,  105 => 14,  101 => 13,  98 => 12,  96 => 11,  93 => 10,  83 => 9,  70 => 6,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@DukecityCommandScheduler/layout.html.twig\" %}
{% trans_default_domain 'DukecityCommandScheduler' %}
{# % form_theme form 'bootstrap_4_layout.html.twig' %} #}

{% block title %}
    {{ 'detail.title'|trans }}
{% endblock title %}

{% block content %}

    {% set styleConfiguration = {'class': 'form-control'} %}
<div class=\"card\">
    {{ form_start( scheduledCommandForm) }}
    <div class=\"card-header\">{{ 'list.title'|trans }}</div>
    <div class=\"card-body\">

        <div class=\"row\">
        <div class=\"col-lg-6 col-sm-12\">
        <div class=\"card\">
            <div class=\"card-header text-white bg-secondary\">
                Command
            </div>
            <div class=\"card-body\">
                {{ form_row( scheduledCommandForm.name, {'attr': styleConfiguration|merge({'placeholder': 'name'}) } ) }}

                {{ form_row( scheduledCommandForm.logFile, {'attr': styleConfiguration|merge({'placeholder': 'myFile.log'}) } ) }}
                {{ form_row( scheduledCommandForm.priority, {'attr': styleConfiguration } ) }}
                <div>
                    {{ form_row(scheduledCommandForm.executeImmediately, {label_attr: {class: 'checkbox-custom'} }) }}
                </div>
                <div>
                    {{ form_row(scheduledCommandForm.disabled, {label_attr: {class: 'checkbox-custom'} }) }}
                </div>
            </div>
        </div>
        </div>

        <div class=\"col-lg-6 col-sm-12\">
        <div class=\"card\">
            <div class=\"card-header text-white bg-secondary\">
                Command
            </div>
            <div class=\"card-body\">
                {# Form's fields #}
                {{ form_row( scheduledCommandForm.command, {'attr': {'class': 'form-control select2'} } ) }}
                {{ form_row( scheduledCommandForm.arguments, {'attr': styleConfiguration|merge({'placeholder': '--argument1=foo --bar'}) } ) }}
                {{ form_row( scheduledCommandForm.cronExpression, {'attr': styleConfiguration|merge({'placeholder': '*/10 * * * *'}) } ) }}
            </div>
        </div>
        </div>
        </div>

    </div>
    <div class=\"card-footer\">
        {# Form's actions #}
        <div class=\"\">
            <a href=\"{{ path('dukecity_command_scheduler_list') }}\" class=\"btn btn-danger btn-lg float-left\" role=\"button\">{{ 'action.cancel'|trans }}</a>
            {{ form_row( scheduledCommandForm.save, {'attr': {'class': 'btn btn-success btn-lg float-right'} } ) }}
        </div>
    </div>
    {{ form_end( scheduledCommandForm ) }}
</div>
{% endblock content %}

{% block javascript %}
    \$(document).ready(function() {
        \$('.select2').select2();
    });
{% endblock javascript %}", "@DukecityCommandScheduler/Detail/index.html.twig", "/var/www/html/vendor/dukecity/command-scheduler-bundle/Resources/views/Detail/index.html.twig");
    }
}
