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

/* @DukecityCommandScheduler/Navbar/navbar.html.twig */
class __TwigTemplate_754e484f5968661e7687286f5ce712af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/Navbar/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/Navbar/navbar.html.twig"));

        // line 2
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container-fluid\" style=\"max-width: 1300px;\">
        <div class=\"navbar-header\">
            <nav class=\"navbar\">
                <a class=\"navbar-brand text-white\" href=\"#\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("name", [], "DukecityCommandScheduler"), "html", null, true);
        echo "</a>
            </nav>
        </div>
    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@DukecityCommandScheduler/Navbar/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'DukecityCommandScheduler' %}
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container-fluid\" style=\"max-width: 1300px;\">
        <div class=\"navbar-header\">
            <nav class=\"navbar\">
                <a class=\"navbar-brand text-white\" href=\"#\">{{ 'name'|trans }}</a>
            </nav>
        </div>
    </div>
</nav>
", "@DukecityCommandScheduler/Navbar/navbar.html.twig", "/var/www/html/vendor/dukecity/command-scheduler-bundle/Resources/views/Navbar/navbar.html.twig");
    }
}