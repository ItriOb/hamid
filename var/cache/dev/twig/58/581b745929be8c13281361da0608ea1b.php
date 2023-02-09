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

/* atelier/index.html.twig */
class __TwigTemplate_8ff28484fdb108b0af375f6f4c26fd18 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "atelier/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Atelier index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["apprenti"]) || array_key_exists("apprenti", $context) ? $context["apprenti"] : (function () { throw new RuntimeError('Variable "apprenti" does not exist.', 7, $this->source); })())) > 0)) {
            // line 8
            echo "
        <div class=\"alert alert-success\">";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["apprenti"]) || array_key_exists("apprenti", $context) ? $context["apprenti"] : (function () { throw new RuntimeError('Variable "apprenti" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "<div class=\"container d-flex align-items-center justify-content-center\">
    <div>
        <br>
            <h1>Ateliers</h1>
            <br>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Créateur</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
            // line 27
            echo "            <tr>

                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atelier"], "Nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></td>
                <td>
                    ";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["atelier"], "description", [], "any", false, false, false, 31)), "truncate", [0 => 100, 1 => " ...", 2 => false], "method", false, false, false, 31);
            echo "
                </td>
                <td>
                    ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["atelier"], "nomInstructeur", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atelier"], "apprentisInscrits", [], "any", false, false, false, 37)), "html", null, true);
            echo "
                </td>
                <td>


                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-info\" role=\"button\" aria-pressed=\"true\">Modifier</a>



                </td>
                <td>
                    ";
            // line 48
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, $context["atelier"], "apprentisInscrits", [], "any", false, false, false, 48))) {
                // line 49
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_desinscrire", ["id" => twig_get_attribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" class=\"btn btn-danger\" role=\"button\" aria-pressed=\"true\">Desinscrire</a>
                    ";
            } else {
                // line 51
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_inscrire", ["id" => twig_get_attribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-success\" role=\"button\" aria-pressed=\"true\">Inscrire</a>
                    ";
            }
            // line 53
            echo "                </td>
                <td>
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_apprentis", ["id" => twig_get_attribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn btn-success\" role=\"button\" aria-pressed=\"true\">Apprentis</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atelier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>

    </div>

        </div>
    <br>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "atelier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 63,  190 => 59,  181 => 55,  177 => 53,  171 => 51,  165 => 49,  163 => 48,  154 => 42,  146 => 37,  140 => 34,  134 => 31,  127 => 29,  123 => 27,  118 => 26,  101 => 11,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Atelier index{% endblock %}

{% block body %}

    {% if apprenti|length > 0 %}

        <div class=\"alert alert-success\">{{apprenti}}</div>
    {% endif %}
<div class=\"container d-flex align-items-center justify-content-center\">
    <div>
        <br>
            <h1>Ateliers</h1>
            <br>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Créateur</th>
            </tr>
        </thead>
        <tbody>
        {% for atelier in ateliers %}
            <tr>

                <td><a href=\"{{ path('app_atelier_show', {'id': atelier.id}) }}\">{{ atelier.Nom }}</a></td>
                <td>
                    {{ atelier.description| u.truncate(100,' ...',false) |raw}}
                </td>
                <td>
                    {{ atelier.nomInstructeur.nom }}
                </td>
                <td>
                    {{ atelier.apprentisInscrits|length }}
                </td>
                <td>


                    <a href=\"{{ path('app_atelier_edit', {'id': atelier.id}) }}\" class=\"btn btn-info\" role=\"button\" aria-pressed=\"true\">Modifier</a>



                </td>
                <td>
                    {% if   app.user.id in atelier.apprentisInscrits %}
                    <a href=\"{{ path('app_atelier_desinscrire', {'id': atelier.id}) }}\" class=\"btn btn-danger\" role=\"button\" aria-pressed=\"true\">Desinscrire</a>
                    {% else %}
                        <a href=\"{{ path('app_atelier_inscrire', {'id': atelier.id}) }}\" class=\"btn btn-success\" role=\"button\" aria-pressed=\"true\">Inscrire</a>
                    {% endif %}
                </td>
                <td>
                    <a href=\"{{ path('app_atelier_apprentis', {'id': atelier.id}) }}\" class=\"btn btn-success\" role=\"button\" aria-pressed=\"true\">Apprentis</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    </div>

        </div>
    <br>



{% endblock %}
", "atelier/index.html.twig", "/var/www/html/projet/templates/atelier/index.html.twig");
    }
}
