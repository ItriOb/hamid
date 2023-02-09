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

/* atelier/_delete_form.html.twig */
class __TwigTemplate_eff8e87e4e75eb185ba246b2d78b85e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/_delete_form.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1) == twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 1, $this->source); })()), "nomInstructeur", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3))), "html", null, true);
            echo "\">
        <br>
        <button class=\"btn btn-danger\">Supprimer</button>
    </form>
";
        } else {
            // line 8
            echo "    <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Vous ne pouvez pas supprimer cet atelier');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9))), "html", null, true);
            echo "\">
        <br>
        <button class=\"btn btn-danger\">Supprimer</button>
    </form>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "atelier/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  58 => 8,  50 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user == atelier.nomInstructeur %}
    <form method=\"post\" action=\"{{ path('app_atelier_delete', {'id': atelier.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ atelier.id) }}\">
        <br>
        <button class=\"btn btn-danger\">Supprimer</button>
    </form>
{% else %}
    <form method=\"post\" action=\"{{ path('app_atelier_edit',{'id': atelier.id}) }}\" onsubmit=\"return confirm('Vous ne pouvez pas supprimer cet atelier');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ atelier.id) }}\">
        <br>
        <button class=\"btn btn-danger\">Supprimer</button>
    </form>
{% endif %}", "atelier/_delete_form.html.twig", "/var/www/html/projet/templates/atelier/_delete_form.html.twig");
    }
}
