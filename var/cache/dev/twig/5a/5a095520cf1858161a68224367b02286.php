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

/* @DukecityCommandScheduler/List/index.html.twig */
class __TwigTemplate_a6989f2608fb235a459d9ead482f22dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/List/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/List/index.html.twig"));

        $this->parent = $this->loadTemplate("@DukecityCommandScheduler/layout.html.twig", "@DukecityCommandScheduler/List/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.title", [], "DukecityCommandScheduler"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
<div class=\"card\">
    <div class=\"card-header\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.title", [], "DukecityCommandScheduler"), "html", null, true);
        echo "</div>
    <div class=\"card-body\">
    <table id=\"duketown-cronjobs\" class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">
        <thead>
            <tr>
                <th data-searchable=\"false\" data-orderable=\"false\">&nbsp;</th>
                <th data-searchable=\"true\" data-orderable=\"true\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.name", [], "DukecityCommandScheduler"), "html", null, true);
        echo "</th>
                <th data-searchable=\"true\" data-orderable=\"true\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.command", [], "DukecityCommandScheduler"), "html", null, true);
        echo "</th>
                <th data-searchable=\"false\" data-orderable=\"false\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.cronExpression", [], "DukecityCommandScheduler"), "html", null, true);
        echo "</th>
                <th data-searchable=\"true\" data-orderable=\"false\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.logFile", [], "DukecityCommandScheduler"), "html", null, true);
        echo "</th>
                <th data-searchable=\"false\" data-orderable=\"true\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.lastExecution", [], "DukecityCommandScheduler"), "html", null, true);
        echo "</th>
                <th data-searchable=\"false\" data-orderable=\"true\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.nextRun", [], "DukecityCommandScheduler"), "html", null, true);
        echo "</th>
                <th data-searchable=\"false\" data-orderable=\"true\" class=\"text-right\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priority", [], "DukecityCommandScheduler"), "html", null, true);
        echo "</th>
                <th data-searchable=\"false\" data-orderable=\"false\" class=\"text-right\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.actions", [], "DukecityCommandScheduler"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scheduledCommands"]) || array_key_exists("scheduledCommands", $context) ? $context["scheduledCommands"] : (function () { throw new RuntimeError('Variable "scheduledCommands" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
            // line 29
            echo "            <tr ";
            if ((twig_get_attribute($this->env, $this->source, $context["command"], "disabled", [], "any", false, false, false, 29) == true)) {
                echo "class=\"text-muted\" ";
            }
            echo ">
                <td ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, $context["command"], "disabled", [], "any", false, false, false, 30) == false)) {
                echo "data-search=\"active\" data-order=\"0\"";
            } else {
                echo "data-search=\"deactive\" data-order=\"1\"";
            }
            echo ">
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_action_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["command"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\"
                       data-toggle=\"confirmation\" data-btn-ok-label=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.unlock", [], "DukecityCommandScheduler"), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.unlock", [], "DukecityCommandScheduler"), "html", null, true);
            echo "\">
                    ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["command"], "disabled", [], "any", false, false, false, 33) == true)) {
                // line 34
                echo "                        <i class=\"bi bi-power text-danger\" title=\"Activate command\"></i>
                    ";
            } else {
                // line 36
                echo "                        <i class=\"bi bi-power text-success\" title=\"Deativate command\"></i>
                    ";
            }
            // line 38
            echo "                    </a>
                </td>
                <td data-search=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "\" data-order=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
                    <span style=\"font-size:14px;\" ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, $context["command"], "disabled", [], "any", false, false, false, 41) == false)) {
                // line 42
                echo "                            class=\"badge badge-success\" title=\"Command is active\"
                            ";
            } else {
                // line 44
                echo "                            class=\"badge badge-danger\" title=\"Command is disabled\"
                            ";
            }
            // line 45
            echo ">
                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "
                    </span>
                </td>
                <td>
                    ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "command", [], "any", false, false, false, 50), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "arguments", [], "any", false, false, false, 50), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "cronExpression", [], "any", false, false, false, 53), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "logFile", [], "any", false, false, false, 56), "html", null, true);
            echo "
                </td>
                <td>
                    <span style=\"font-size:14px;\" class=\"badge badge-";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, $context["command"], "lastReturnCode", [], "any", false, false, false, 59) == 0)) {
                echo "success";
            } else {
                echo "danger";
            }
            echo "\" title=\"Last Return Code: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "lastReturnCode", [], "any", false, false, false, 59), "html", null, true);
            echo "\">
                    ";
            // line 60
            ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["command"], "lastExecution", [], "any", false, false, false, 60))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "lastExecution", [], "any", false, false, false, 60), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dateFormat", [], "DukecityCommandScheduler")), "html", null, true))));
            echo "
                    </span>
                </td>
                <td>
                    ";
            // line 64
            $context["nextRunDate"] = twig_get_attribute($this->env, $this->source, $context["command"], "getNextRunDate", [], "method", false, false, false, 64);
            // line 65
            echo "                    ";
            if ( !(null === (isset($context["nextRunDate"]) || array_key_exists("nextRunDate", $context) ? $context["nextRunDate"] : (function () { throw new RuntimeError('Variable "nextRunDate" does not exist.', 65, $this->source); })()))) {
                // line 66
                echo "                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["nextRunDate"]) || array_key_exists("nextRunDate", $context) ? $context["nextRunDate"] : (function () { throw new RuntimeError('Variable "nextRunDate" does not exist.', 66, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dateFormat", [], "DukecityCommandScheduler")), "html", null, true);
                echo "
                    ";
            }
            // line 68
            echo "                </td>
                <td class=\"text-right\">
                    ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "priority", [], "any", false, false, false, 70), "html", null, true);
            echo "
                </td>
                <td style=\"min-width: 90px;\" class=\"action-container text-right\">
                    ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, $context["command"], "locked", [], "any", false, false, false, 73) == true)) {
                // line 74
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_action_unlock", ["id" => twig_get_attribute($this->env, $this->source, $context["command"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\"
                           data-toggle=\"confirmation\"
                           data-btn-ok-label=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.unlock", [], "DukecityCommandScheduler"), "html", null, true);
                echo "\"
                           data-title=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.unlock", [], "DukecityCommandScheduler"), "html", null, true);
                echo "\" >
                            <i class=\"bi bi-lock-fill text-danger\" title=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.unlock", [], "DukecityCommandScheduler"), "html", null, true);
                echo "\"></i>
                        </a>
                    ";
            } else {
                // line 81
                echo "                       <div style=\"display: inline-block;\"> </div>
                    ";
            }
            // line 83
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_detail_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["command"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\" >
                        <i class=\"bi bi-pencil-square\" title=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit", [], "DukecityCommandScheduler"), "html", null, true);
            echo "\"></i>
                    </a>
                    <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_action_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["command"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\"
                       data-toggle=\"confirmation\"
                       data-btn-ok-label=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete", [], "DukecityCommandScheduler"), "html", null, true);
            echo "\"
                       data-title=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.delete", [], "DukecityCommandScheduler"), "html", null, true);
            echo "\" >
                        <i class=\"bi bi-trash-fill text-danger\" title=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete", [], "DukecityCommandScheduler"), "html", null, true);
            echo "\"></i>
                    </a>
                    <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_action_execute", ["id" => twig_get_attribute($this->env, $this->source, $context["command"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\"
                       data-toggle=\"confirmation\"
                       data-btn-ok-label=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.execute", [], "DukecityCommandScheduler"), "html", null, true);
            echo "\"
                       data-title=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.execute", [], "DukecityCommandScheduler"), "html", null, true);
            echo "\"
                    >
                        <i class=\"bi bi-file-play text-";
            // line 97
            if ((twig_get_attribute($this->env, $this->source, $context["command"], "executeImmediately", [], "any", false, false, false, 97) == true)) {
                echo "muted";
            } else {
                echo "success";
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.execute", [], "DukecityCommandScheduler"), "html", null, true);
            echo "\"></i>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        </tbody>
    </table>

    </div>
    <div class=\"card-footer\">
    <a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_detail_new");
        echo "\" class=\"btn btn-primary float-right\" role=\"button\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.new", [], "DukecityCommandScheduler"), "html", null, true);
        echo " »</a>
    </div>
</div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 113
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 114
        echo "\$(document).ready(function() {

    \$('#duketown-cronjobs').DataTable( {
        stateSave: true,
        dom: 'Bfrtip',
        buttons: [
            'colvis'
        ],
        /*rowGroup: {
            dataSrc: 1
        },*/
        order: [[ 6, \"desc\" ], [ 7, \"desc\" ]],
        columnDefs: [
            {
                \"targets\": [ 4 ],
                \"visible\": false,
                \"searchable\": false
            }
        ],
        paging: false,
        ordering: true,
        info: false,
        search: false,
        responsive: true
    } );
} );
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@DukecityCommandScheduler/List/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 114,  376 => 113,  360 => 107,  353 => 102,  336 => 97,  331 => 95,  327 => 94,  322 => 92,  317 => 90,  313 => 89,  309 => 88,  304 => 86,  299 => 84,  294 => 83,  290 => 81,  284 => 78,  280 => 77,  276 => 76,  270 => 74,  268 => 73,  262 => 70,  258 => 68,  252 => 66,  249 => 65,  247 => 64,  240 => 60,  230 => 59,  224 => 56,  218 => 53,  210 => 50,  203 => 46,  200 => 45,  196 => 44,  192 => 42,  190 => 41,  184 => 40,  180 => 38,  176 => 36,  172 => 34,  170 => 33,  164 => 32,  160 => 31,  152 => 30,  145 => 29,  141 => 28,  134 => 24,  130 => 23,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  97 => 11,  93 => 9,  83 => 8,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@DukecityCommandScheduler/layout.html.twig\" %}
{% trans_default_domain 'DukecityCommandScheduler' %}

{% block title %}
    {{ 'list.title'|trans }}
{% endblock title %}

{% block content %}

<div class=\"card\">
    <div class=\"card-header\">{{ 'list.title'|trans }}</div>
    <div class=\"card-body\">
    <table id=\"duketown-cronjobs\" class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">
        <thead>
            <tr>
                <th data-searchable=\"false\" data-orderable=\"false\">&nbsp;</th>
                <th data-searchable=\"true\" data-orderable=\"true\">{{ \"detail.name\"|trans }}</th>
                <th data-searchable=\"true\" data-orderable=\"true\">{{ \"detail.command\"|trans }}</th>
                <th data-searchable=\"false\" data-orderable=\"false\">{{ \"detail.cronExpression\"|trans }}</th>
                <th data-searchable=\"true\" data-orderable=\"false\">{{ \"detail.logFile\"|trans }}</th>
                <th data-searchable=\"false\" data-orderable=\"true\">{{ \"detail.lastExecution\"|trans }}</th>
                <th data-searchable=\"false\" data-orderable=\"true\">{{ \"detail.nextRun\"|trans }}</th>
                <th data-searchable=\"false\" data-orderable=\"true\" class=\"text-right\">{{ \"detail.priority\"|trans }}</th>
                <th data-searchable=\"false\" data-orderable=\"false\" class=\"text-right\">{{ \"detail.actions\"|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for command in scheduledCommands %}
            <tr {% if command.disabled == true %}class=\"text-muted\" {% endif %}>
                <td {% if command.disabled == false %}data-search=\"active\" data-order=\"0\"{% else %}data-search=\"deactive\" data-order=\"1\"{% endif %}>
                    <a href=\"{{ path('dukecity_command_scheduler_action_toggle', {'id': command.id}) }}\"
                       data-toggle=\"confirmation\" data-btn-ok-label=\"{{ \"action.unlock\"|trans }}\" data-title=\"{{ \"confirm.unlock\"|trans }}\">
                    {% if command.disabled == true %}
                        <i class=\"bi bi-power text-danger\" title=\"Activate command\"></i>
                    {% else %}
                        <i class=\"bi bi-power text-success\" title=\"Deativate command\"></i>
                    {% endif %}
                    </a>
                </td>
                <td data-search=\"{{ command.name }}\" data-order=\"{{ command.name }}\">
                    <span style=\"font-size:14px;\" {% if command.disabled == false %}
                            class=\"badge badge-success\" title=\"Command is active\"
                            {% else %}
                            class=\"badge badge-danger\" title=\"Command is disabled\"
                            {% endif %}>
                    {{ command.name }}
                    </span>
                </td>
                <td>
                    {{ command.command }} {{ command.arguments }}
                </td>
                <td>
                    {{ command.cronExpression }}
                </td>
                <td>
                    {{ command.logFile }}
                </td>
                <td>
                    <span style=\"font-size:14px;\" class=\"badge badge-{% if command.lastReturnCode == 0 %}success{% else %}danger{% endif %}\" title=\"Last Return Code: {{ command.lastReturnCode }}\">
                    {{ command.lastExecution is empty ? \"\" : command.lastExecution|date( \"dateFormat\"|trans ) }}
                    </span>
                </td>
                <td>
                    {% set nextRunDate = command.getNextRunDate() %}
                    {% if nextRunDate is not null %}
                    {{ nextRunDate|date( \"dateFormat\"|trans ) }}
                    {% endif %}
                </td>
                <td class=\"text-right\">
                    {{ command.priority }}
                </td>
                <td style=\"min-width: 90px;\" class=\"action-container text-right\">
                    {% if command.locked == true %}
                        <a href=\"{{ path('dukecity_command_scheduler_action_unlock', {'id': command.id}) }}\"
                           data-toggle=\"confirmation\"
                           data-btn-ok-label=\"{{ \"action.unlock\"|trans }}\"
                           data-title=\"{{ \"confirm.unlock\"|trans }}\" >
                            <i class=\"bi bi-lock-fill text-danger\" title=\"{{ \"action.unlock\"|trans }}\"></i>
                        </a>
                    {% else %}
                       <div style=\"display: inline-block;\"> </div>
                    {% endif %}
                    <a href=\"{{ path('dukecity_command_scheduler_detail_edit', {'id': command.id}) }}\" >
                        <i class=\"bi bi-pencil-square\" title=\"{{ \"action.edit\"|trans }}\"></i>
                    </a>
                    <a href=\"{{ path('dukecity_command_scheduler_action_remove', {'id': command.id}) }}\"
                       data-toggle=\"confirmation\"
                       data-btn-ok-label=\"{{ \"action.delete\"|trans }}\"
                       data-title=\"{{ \"confirm.delete\"|trans }}\" >
                        <i class=\"bi bi-trash-fill text-danger\" title=\"{{ \"action.delete\"|trans }}\"></i>
                    </a>
                    <a href=\"{{ path('dukecity_command_scheduler_action_execute', {'id': command.id}) }}\"
                       data-toggle=\"confirmation\"
                       data-btn-ok-label=\"{{ \"action.execute\"|trans }}\"
                       data-title=\"{{ \"confirm.execute\"|trans }}\"
                    >
                        <i class=\"bi bi-file-play text-{% if command.executeImmediately == true %}muted{% else %}success{% endif %}\" title=\"{{ \"action.execute\"|trans }}\"></i>
                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    </div>
    <div class=\"card-footer\">
    <a href=\"{{ path('dukecity_command_scheduler_detail_new') }}\" class=\"btn btn-primary float-right\" role=\"button\">{{ \"action.new\"|trans }} »</a>
    </div>
</div>
    {% endblock content %}


{% block javascript %}
\$(document).ready(function() {

    \$('#duketown-cronjobs').DataTable( {
        stateSave: true,
        dom: 'Bfrtip',
        buttons: [
            'colvis'
        ],
        /*rowGroup: {
            dataSrc: 1
        },*/
        order: [[ 6, \"desc\" ], [ 7, \"desc\" ]],
        columnDefs: [
            {
                \"targets\": [ 4 ],
                \"visible\": false,
                \"searchable\": false
            }
        ],
        paging: false,
        ordering: true,
        info: false,
        search: false,
        responsive: true
    } );
} );
{% endblock javascript %}

", "@DukecityCommandScheduler/List/index.html.twig", "/var/www/html/vendor/dukecity/command-scheduler-bundle/Resources/views/List/index.html.twig");
    }
}
