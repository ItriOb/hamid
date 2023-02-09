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

/* layer/navbar.html.twig */
class __TwigTemplate_2b9a35292a096e89295fa8ac398bddcf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layer/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layer/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid collapse navbar-collapse\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon navbar-light\"></span>
        </button>
        <div class=\"container-fluid collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav  me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                 <a class=\"nav-link active navbar-brand\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_accueil");
        echo "\">CC25</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" aria-current=\"page\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_accueil");
        echo "\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_index");
        echo "\">Ateliers</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_new");
        echo "\">Créer</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_apprentis1");
        echo "\">listes de mes inscriptions</a>
                </li>


            </ul>
            <div class=\"d-flex\">
                <ul class=\"navbar-nav  me-auto mb-2 mb-lg-0\">
                ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "                    <li class=\"nav-item\">
                        <button onclick=\"location.href='";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "'\"  class=\"nav-link btn btn-danger\">
                            Déconnexion
                        </button>
                    </li>
                ";
        } else {
            // line 35
            echo "
                    <li class=\"nav-item\">
                        <button onclick=\"location.href='";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "'\" style=\"margin-right: 10px; padding-left: 20px;padding-right: 20px\" class=\"nav-link btn btn-outline-success\">
                            Connexion
                        </button>

                    </li>
                    <li class=\"nav-item\">
                        <button onclick=\"location.href='";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "'\"  class=\"nav-link btn btn-success\">
                            Inscription
                        </button>

                    </li>
</ul>
                ";
        }
        // line 50
        echo "            </div>
        </div>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layer/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 50,  113 => 43,  104 => 37,  100 => 35,  92 => 30,  89 => 29,  87 => 28,  77 => 21,  71 => 18,  65 => 15,  59 => 12,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid collapse navbar-collapse\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon navbar-light\"></span>
        </button>
        <div class=\"container-fluid collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav  me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                 <a class=\"nav-link active navbar-brand\" href=\"{{ path('app_atelier_accueil') }}\">CC25</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" aria-current=\"page\" href=\"{{ path('app_atelier_accueil') }}\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_atelier_index') }}\">Ateliers</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_atelier_new') }}\">Créer</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_atelier_apprentis1') }}\">listes de mes inscriptions</a>
                </li>


            </ul>
            <div class=\"d-flex\">
                <ul class=\"navbar-nav  me-auto mb-2 mb-lg-0\">
                {% if app.user %}
                    <li class=\"nav-item\">
                        <button onclick=\"location.href='{{ path('app_logout') }}'\"  class=\"nav-link btn btn-danger\">
                            Déconnexion
                        </button>
                    </li>
                {% else %}

                    <li class=\"nav-item\">
                        <button onclick=\"location.href='{{ path('app_login') }}'\" style=\"margin-right: 10px; padding-left: 20px;padding-right: 20px\" class=\"nav-link btn btn-outline-success\">
                            Connexion
                        </button>

                    </li>
                    <li class=\"nav-item\">
                        <button onclick=\"location.href='{{ path('app_register') }}'\"  class=\"nav-link btn btn-success\">
                            Inscription
                        </button>

                    </li>
</ul>
                {% endif %}
            </div>
        </div>
    </div>
</nav>", "layer/navbar.html.twig", "/var/www/html/projet/templates/layer/navbar.html.twig");
    }
}
