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

/* home/index.html.twig */
class __TwigTemplate_d62ab5d94ef6067ad3715709e41e7ab2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<main class=\"container\">
  <div class=\"p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary\">
    <div class=\"col-lg-6 px-0\">
      <h1 class=\"display-4 fst-italic\">Blue Beetle: L'énième échec de DC ?</h1>
      <p class=\"lead my-3\">Avec un budget de 120 milliond de dollards, le film suit la tragique destination des derniers film DC (Shazam 2, Black adam, The flash).</p>
    </div>
  </div>

    <h1>Dernières actualités</h1>
  <div class=\"row mb-2\">
    <div class=\"col-md-6\">
      <blockquote class=\"twitter-tweet\" data-theme=\"light\"><p lang=\"fr\" dir=\"ltr\"><a href=\"https://twitter.com/hashtag/PHOTOS?src=hash&amp;ref_src=twsrc%5Etfw\">#PHOTOS</a> Affiches promotionnelles pour le spin off de la série <a href=\"https://twitter.com/hashtag/TheWalkingDead?src=hash&amp;ref_src=twsrc%5Etfw\">#TheWalkingDead</a> centré sur Daryl en France. <a href=\"https://t.co/Edvtq3hd0w\">pic.twitter.com/Edvtq3hd0w</a></p>&mdash; Infos Séries (@lnfosSeriesFR) <a href=\"https://twitter.com/lnfosSeriesFR/status/1692264681732288989?ref_src=twsrc%5Etfw\">August 17, 2023</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script> 
    </div>
    <div class=\"col-md-6\">
      <blockquote class=\"twitter-tweet\"><p lang=\"fr\" dir=\"ltr\"><a href=\"https://twitter.com/hashtag/INFO?src=hash&amp;ref_src=twsrc%5Etfw\">#INFO</a> Après 17 jours de sortie, <a href=\"https://twitter.com/hashtag/Barbie?src=hash&amp;ref_src=twsrc%5Etfw\">#Barbie</a>  est le film Warner Bros ayant récolté le plus vite les 1 milliards de dollars . Harry Potter et les reliques de la mort : part2 détenait auparavant ce record (19 jours) <a href=\"https://t.co/G7ZNVFgbFP\">pic.twitter.com/G7ZNVFgbFP</a></p>&mdash; Infos Séries (@lnfosSeriesFR) <a href=\"https://twitter.com/lnfosSeriesFR/status/1688558280883294213?ref_src=twsrc%5Etfw\">August 7, 2023</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script> 
    </div>
  </div>

  <div class=\"row g-5\">
    <div class=\"col-md-8\">

    </div>

    <div class=\"col-md-4\">
      <div class=\"position-sticky\" style=\"top: 2rem;\">
        <div class=\"p-4 mb-3 bg-body-tertiary rounded\">
          <h4 class=\"fst-italic\">A propos</h4>
          <p class=\"mb-0\">Le coin pop est un site qui propose aux visiteurs de consulter notre catalogue de film et de séries. Notre site permet aussi de donner son avis sur nos films et séries préférés.</p>
        </div>

        <div>
          <h4 class=\"fst-italic\">Consultés récemment</h4>
          <ul class=\"list-unstyled\">
            <li>
              <a class=\"d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top\" href=\"#\">
                  <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/barbie.jpg"), "html", null, true);
        echo "\" style=\"width: 117px; height: 156px; \"/>
                <div class=\"col-lg-8\">
                  <h6 class=\"mb-0\">Barbie (2023)</h6>
                  <small class=\"text-body-secondary\">Sotie le : 19 Juillet 2023</small>
                </div>
              </a>
            </li>
            <li>
              <a class=\"d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top\" href=\"#\">
                  <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/oppenheimer.webp"), "html", null, true);
        echo "\" style=\"width: 117px; \"/>
                <div class=\"col-lg-8\">
                  <h6 class=\"mb-0\">Oppenheimer</h6>
                  <small class=\"text-body-secondary\">Sotie le : 19 Juillet 2023</small>
                </div>
              </a>
            </li>
            <li>
              <a class=\"d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top\" href=\"#\">
                  <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/3mousquetaires.webp"), "html", null, true);
        echo "\" style=\"width: 117px; height: 156px; \"/>
                <div class=\"col-lg-8\">
                  <h6 class=\"mb-0\">Les Trois Mousquetaires : D'Artagnan</h6>
                  <small class=\"text-body-secondary\">5 avril 2023</small>
                </div>
              </a>
            </li>
          </ul>
        </div>

        <div class=\"p-4\">
          <h4 class=\"fst-italic text-primary\">Réseaux sociaux :</h4>
          <ol class=\"list-unstyled\">
            <li><a href=\"#\">Instagram</a></li>
            <li><a href=\"#\">Twitter</a></li>
            <li><a href=\"#\">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 58,  118 => 49,  106 => 40,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

<main class=\"container\">
  <div class=\"p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary\">
    <div class=\"col-lg-6 px-0\">
      <h1 class=\"display-4 fst-italic\">Blue Beetle: L'énième échec de DC ?</h1>
      <p class=\"lead my-3\">Avec un budget de 120 milliond de dollards, le film suit la tragique destination des derniers film DC (Shazam 2, Black adam, The flash).</p>
    </div>
  </div>

    <h1>Dernières actualités</h1>
  <div class=\"row mb-2\">
    <div class=\"col-md-6\">
      <blockquote class=\"twitter-tweet\" data-theme=\"light\"><p lang=\"fr\" dir=\"ltr\"><a href=\"https://twitter.com/hashtag/PHOTOS?src=hash&amp;ref_src=twsrc%5Etfw\">#PHOTOS</a> Affiches promotionnelles pour le spin off de la série <a href=\"https://twitter.com/hashtag/TheWalkingDead?src=hash&amp;ref_src=twsrc%5Etfw\">#TheWalkingDead</a> centré sur Daryl en France. <a href=\"https://t.co/Edvtq3hd0w\">pic.twitter.com/Edvtq3hd0w</a></p>&mdash; Infos Séries (@lnfosSeriesFR) <a href=\"https://twitter.com/lnfosSeriesFR/status/1692264681732288989?ref_src=twsrc%5Etfw\">August 17, 2023</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script> 
    </div>
    <div class=\"col-md-6\">
      <blockquote class=\"twitter-tweet\"><p lang=\"fr\" dir=\"ltr\"><a href=\"https://twitter.com/hashtag/INFO?src=hash&amp;ref_src=twsrc%5Etfw\">#INFO</a> Après 17 jours de sortie, <a href=\"https://twitter.com/hashtag/Barbie?src=hash&amp;ref_src=twsrc%5Etfw\">#Barbie</a>  est le film Warner Bros ayant récolté le plus vite les 1 milliards de dollars . Harry Potter et les reliques de la mort : part2 détenait auparavant ce record (19 jours) <a href=\"https://t.co/G7ZNVFgbFP\">pic.twitter.com/G7ZNVFgbFP</a></p>&mdash; Infos Séries (@lnfosSeriesFR) <a href=\"https://twitter.com/lnfosSeriesFR/status/1688558280883294213?ref_src=twsrc%5Etfw\">August 7, 2023</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script> 
    </div>
  </div>

  <div class=\"row g-5\">
    <div class=\"col-md-8\">

    </div>

    <div class=\"col-md-4\">
      <div class=\"position-sticky\" style=\"top: 2rem;\">
        <div class=\"p-4 mb-3 bg-body-tertiary rounded\">
          <h4 class=\"fst-italic\">A propos</h4>
          <p class=\"mb-0\">Le coin pop est un site qui propose aux visiteurs de consulter notre catalogue de film et de séries. Notre site permet aussi de donner son avis sur nos films et séries préférés.</p>
        </div>

        <div>
          <h4 class=\"fst-italic\">Consultés récemment</h4>
          <ul class=\"list-unstyled\">
            <li>
              <a class=\"d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top\" href=\"#\">
                  <img src=\"{{asset('assets/img/barbie.jpg')}}\" style=\"width: 117px; height: 156px; \"/>
                <div class=\"col-lg-8\">
                  <h6 class=\"mb-0\">Barbie (2023)</h6>
                  <small class=\"text-body-secondary\">Sotie le : 19 Juillet 2023</small>
                </div>
              </a>
            </li>
            <li>
              <a class=\"d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top\" href=\"#\">
                  <img src=\"{{asset('assets/img/oppenheimer.webp')}}\" style=\"width: 117px; \"/>
                <div class=\"col-lg-8\">
                  <h6 class=\"mb-0\">Oppenheimer</h6>
                  <small class=\"text-body-secondary\">Sotie le : 19 Juillet 2023</small>
                </div>
              </a>
            </li>
            <li>
              <a class=\"d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top\" href=\"#\">
                  <img src=\"{{asset('assets/img/3mousquetaires.webp')}}\" style=\"width: 117px; height: 156px; \"/>
                <div class=\"col-lg-8\">
                  <h6 class=\"mb-0\">Les Trois Mousquetaires : D'Artagnan</h6>
                  <small class=\"text-body-secondary\">5 avril 2023</small>
                </div>
              </a>
            </li>
          </ul>
        </div>

        <div class=\"p-4\">
          <h4 class=\"fst-italic text-primary\">Réseaux sociaux :</h4>
          <ol class=\"list-unstyled\">
            <li><a href=\"#\">Instagram</a></li>
            <li><a href=\"#\">Twitter</a></li>
            <li><a href=\"#\">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\le_coin_pop\\templates\\home\\index.html.twig");
    }
}
