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

/* account/index.html.twig */
class __TwigTemplate_7b66cc7288e1b948cba6b9ec6b33c3d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
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

        echo "Le Coin Pop - Nous contacter";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<br>
    <h1 class=\"mb-5\">Mon compte</h1> 
    <p class=\"mb-3\">Bienvenue <strong>&thinsp; ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "firstname", [], "any", false, false, false, 8), "html", null, true);
        echo " &thinsp;</strong> dans votre espace personnelle</p>
<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"account-item text-center\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/password.png"), "html", null, true);
        echo "\"><br><br>
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_password");
        echo "\">Modifier mon mot de passe</a><br>
        </div>
    </div>

    ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "      <div class=\"col-md-6\">
        <div class=\"account-item text-center\">
            <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/security.png"), "html", null, true);
            echo "\"><br><br>
            <a href=\"/admin\">Administrateur backoffice</a> <br>
        </div>
      </div>
    ";
        }
        // line 25
        echo "</div>

    <p class=\"mb-3 mt-3 p-5 bouton-deco\">Pour se déconnecter c'est ici :&nbsp; <a class=\"btn btn-sm btn-outline-danger\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"> Déconnexion</a></p>
    <div style=\"display: flex; justify-content: center;\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/toystory.jpg"), "html", null, true);
        echo "\" style=\"width: 250px;\"/></div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 28,  128 => 27,  124 => 25,  116 => 20,  112 => 18,  110 => 17,  103 => 13,  99 => 12,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Le Coin Pop - Nous contacter{% endblock %}

{% block content %}
<br>
    <h1 class=\"mb-5\">Mon compte</h1> 
    <p class=\"mb-3\">Bienvenue <strong>&thinsp; {{ app.user.firstname }} &thinsp;</strong> dans votre espace personnelle</p>
<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"account-item text-center\">
            <img src=\"{{asset('assets/img/password.png')}}\"><br><br>
            <a href=\"{{ path('account_password')}}\">Modifier mon mot de passe</a><br>
        </div>
    </div>

    {% if is_granted('ROLE_ADMIN') %}
      <div class=\"col-md-6\">
        <div class=\"account-item text-center\">
            <img src=\"{{asset('assets/img/security.png')}}\"><br><br>
            <a href=\"/admin\">Administrateur backoffice</a> <br>
        </div>
      </div>
    {% endif %}
</div>

    <p class=\"mb-3 mt-3 p-5 bouton-deco\">Pour se déconnecter c'est ici :&nbsp; <a class=\"btn btn-sm btn-outline-danger\" href=\"{{ path('app_logout') }}\"> Déconnexion</a></p>
    <div style=\"display: flex; justify-content: center;\"><img src=\"{{ asset('assets/img/toystory.jpg')}}\" style=\"width: 250px;\"/></div>

{% endblock %}
", "account/index.html.twig", "C:\\xampp\\htdocs\\le_coin_pop\\templates\\account\\index.html.twig");
    }
}
