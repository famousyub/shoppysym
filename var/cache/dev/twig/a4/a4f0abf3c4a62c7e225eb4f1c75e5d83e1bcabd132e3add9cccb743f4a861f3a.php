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

/* home/header.html.twig */
class __TwigTemplate_5c9b027b7541bb92b692d673594aecf534c358de069d5aed693f9e20639e24c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        // line 1
        echo "<header id=\"header\"><!--header-->
    <div class=\"header_top\"><!--header_top-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"contactinfo\">
                        <ul class=\"nav nav-pills\">
                            <li><a href=\"#\"><i class=\"fa fa-phone\"></i> +2 95 01 88 821</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"social-icons pull-right\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class=\"header-middle\"><!--header-middle-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"logo pull-left\">
                        <a href=\"/\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/logo.png\" alt=\"\" /></a>
                    </div>
                    <div class=\"btn-group pull-right\">
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
                                USA
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Canada</a></li>
                                <li><a href=\"#\">UK</a></li>
                            </ul>
                        </div>

                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
                                DOLLAR
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Canadian Dollar</a></li>
                                <li><a href=\"#\">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-8\">
                    <div class=\"shop-menu pull-right\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"/newuser\"><i class=\"fa fa-user\"></i> Register</a></li>
                            ";
        // line 63
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 64
            echo "                                <li>
                                    <a href=\"/user\"><img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "image", [], "any", false, false, false, 65))), "html", null, true);
            echo "\" style=\"height: 30px; border-radius: 40%\"/>
                                        ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "surname", [], "any", false, false, false, 66), "html", null, true);
            echo "
                                    </a>
                                </li>
                                <li><a href=\"/logout\">Logout</a></li>
                            ";
        } else {
            // line 71
            echo "                                <li>
                                    <a href=\"/loginuser\"><i class=\"fa fa-lock\"></i> Login</a>
                                </li>
                            ";
        }
        // line 75
        echo "
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class=\"header-bottom\"><!--header-bottom-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-9\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"mainmenu pull-left\">
                        <ul class=\"nav navbar-nav collapse navbar-collapse\">
                            <li><a href=\"/\" class=\"active\">Home</a></li></li>
                            <li><a href=\"/contact\">Contact</a></li>
                            <li><a href=\"/about\">About</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"search_box pull-right\">
                        <input type=\"text\" placeholder=\"Search\"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 75,  129 => 71,  119 => 66,  115 => 65,  112 => 64,  110 => 63,  77 => 33,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\"><!--header-->
    <div class=\"header_top\"><!--header_top-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"contactinfo\">
                        <ul class=\"nav nav-pills\">
                            <li><a href=\"#\"><i class=\"fa fa-phone\"></i> +2 95 01 88 821</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"social-icons pull-right\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class=\"header-middle\"><!--header-middle-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"logo pull-left\">
                        <a href=\"/\"><img src=\"{{asset('assets')}}/images/home/logo.png\" alt=\"\" /></a>
                    </div>
                    <div class=\"btn-group pull-right\">
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
                                USA
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Canada</a></li>
                                <li><a href=\"#\">UK</a></li>
                            </ul>
                        </div>

                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
                                DOLLAR
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Canadian Dollar</a></li>
                                <li><a href=\"#\">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-8\">
                    <div class=\"shop-menu pull-right\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"/newuser\"><i class=\"fa fa-user\"></i> Register</a></li>
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                <li>
                                    <a href=\"/user\"><img src=\"{{asset('uploads/images/' ~ app.user.image)}}\" style=\"height: 30px; border-radius: 40%\"/>
                                        {{ app.user.name }} {{ app.user.surname }}
                                    </a>
                                </li>
                                <li><a href=\"/logout\">Logout</a></li>
                            {% else %}
                                <li>
                                    <a href=\"/loginuser\"><i class=\"fa fa-lock\"></i> Login</a>
                                </li>
                            {% endif %}

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class=\"header-bottom\"><!--header-bottom-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-9\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"mainmenu pull-left\">
                        <ul class=\"nav navbar-nav collapse navbar-collapse\">
                            <li><a href=\"/\" class=\"active\">Home</a></li></li>
                            <li><a href=\"/contact\">Contact</a></li>
                            <li><a href=\"/about\">About</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"search_box pull-right\">
                        <input type=\"text\" placeholder=\"Search\"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->", "home/header.html.twig", "/home/user/Bureau/medshopp/shopback/templates/home/header.html.twig");
    }
}
