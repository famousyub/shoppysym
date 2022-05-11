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

/* home/slider.html.twig */
class __TwigTemplate_3eb7d6f558057aaaadff620244888366d08f4abce98b764e784c87b10cd8bbfb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/slider.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/slider.html.twig"));

        // line 1
        echo "
<div class=\"col-sm-12\">
    <div id=\"slider-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#slider-carousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#slider-carousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#slider-carousel\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            ";
        // line 10
        $context["count"] = 0;
        // line 11
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 12
            echo "                ";
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 12, $this->source); })()) + 1);
            // line 13
            echo "                <div class=\"item ";
            if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 13, $this->source); })()) == 1)) {
                echo " active ";
            }
            echo "\">
                    <div class=\"col-sm-6\">
                        <h1><span>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</span></h1>
                        <h2>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "description", [], "any", false, false, false, 16), "html", null, true);
            echo "</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                    <div class=\"col-sm-6\">
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo " \">
                            <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 21))), "html", null, true);
            echo "\" class=\"girl img-responsive\" alt=\"\" style=\"height: 484px; width: 441px;\"/>
                        </a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
        <a href=\"#slider-carousel\" class=\"left control-carousel hidden-xs\" data-slide=\"prev\">
            <i class=\"fa fa-angle-left\"></i>
        </a>
        <a href=\"#slider-carousel\" class=\"right control-carousel hidden-xs\" data-slide=\"next\">
            <i class=\"fa fa-angle-right\"></i>
        </a>
    </div>

</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  87 => 21,  83 => 20,  76 => 16,  72 => 15,  64 => 13,  61 => 12,  56 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"col-sm-12\">
    <div id=\"slider-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#slider-carousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#slider-carousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#slider-carousel\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            {% set count = 0 %}
            {% for rs in slider %}
                {% set count = count+1 %}
                <div class=\"item {% if count==1 %} active {%endif%}\">
                    <div class=\"col-sm-6\">
                        <h1><span>{{ rs.title }}</span></h1>
                        <h2>{{ rs.description }}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                    <div class=\"col-sm-6\">
                        <a href=\"{{ path('product_show', {'id': rs.id}) }} \">
                            <img src=\"{{ asset('uploads/images/' ~ rs.image) }}\" class=\"girl img-responsive\" alt=\"\" style=\"height: 484px; width: 441px;\"/>
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div>
        <a href=\"#slider-carousel\" class=\"left control-carousel hidden-xs\" data-slide=\"prev\">
            <i class=\"fa fa-angle-left\"></i>
        </a>
        <a href=\"#slider-carousel\" class=\"right control-carousel hidden-xs\" data-slide=\"next\">
            <i class=\"fa fa-angle-right\"></i>
        </a>
    </div>

</div>", "home/slider.html.twig", "/home/user/Bureau/medshopp/shopback/templates/home/slider.html.twig");
    }
}
