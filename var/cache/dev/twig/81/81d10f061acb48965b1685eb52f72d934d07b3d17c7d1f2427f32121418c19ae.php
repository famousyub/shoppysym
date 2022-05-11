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
class __TwigTemplate_27cb7f4173483f9632c0014f3d2b62244e8255b4bdaa8e28afc48bdcc9788cf6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'keywords' => [$this, 'block_keywords'],
            'description' => [$this, 'block_description'],
            'body' => [$this, 'block_body'],
            'slider' => [$this, 'block_slider'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "homebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 3, $this->source); })()), 0, [], "array", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 4, $this->source); })()), 0, [], "array", false, false, false, 4), "keywords", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 5, $this->source); })()), 0, [], "array", false, false, false, 5), "description", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <section id=\"slider\"><!--slider-->
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 11
        $this->displayBlock('slider', $context, $blocks);
        // line 12
        echo "            </div>
        </div>
    </section>
    ";
        // line 15
        $this->displayBlock('sidebar', $context, $blocks);
        // line 16
        echo "    <div class=\"col-sm-9 padding-right\">

        <div class=\"features_items\">
            <h2 class=\"title text-center\">Features Items</h2>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 21
            echo "                <div class=\"col-sm-4\">
                    <div class=\"product-image-wrapper\">
                        <div class=\"single-products\">
                            <div class=\"productinfo text-center\">
                                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo " \" class=\"btn btn-default add-to-cart\">
                                    <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" alt=\"\" style=\"height: 268px; width: 249px;\"/>
                                </a>
                                <h2>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "price", [], "any", false, false, false, 28), "html", null, true);
            echo " \$</h2>
                                <p>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo " </p>

                            </div>

                        </div>
                        <div class=\"choose\">
                            <ul class=\"nav nav-pills nav-justified\">
                                <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </div>

        <div class=\"category-tab\">
            <div class=\"col-sm-12\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tshirt\" data-toggle=\"tab\">New Products</a></li>
                    <li><a href=\"#blazers\" data-toggle=\"tab\">Blazers</a></li>
                    <li><a href=\"#sunglass\" data-toggle=\"tab\">Sunglass</a></li>
                    <li><a href=\"#kids\" data-toggle=\"tab\">Kids</a></li>
                    <li><a href=\"#poloshirt\" data-toggle=\"tab\">Polo shirt</a></li>
                </ul>
            </div>
            <div class=\"tab-content\">
                <div class=\"tab-pane fade active in\" id=\"tshirt\" >
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newproducts"]) || array_key_exists("newproducts", $context) ? $context["newproducts"] : (function () { throw new RuntimeError('Variable "newproducts" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 58
            echo "                        <div class=\"col-sm-3\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo " \" class=\"btn btn-default add-to-cart\">
                                            <img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 63))), "html", null, true);
            echo "\" alt=\"\" style=\"height: 268px; width: 160px;\" alt=\"\" />
                                            <i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                        <h2>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "price", [], "any", false, false, false, 65), "html", null, true);
            echo " \$</h2>
                                        <p>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
                </div>

                <div class=\"tab-pane fade\" id=\"blazers\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"sunglass\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"kids\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"poloshirt\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"recommended_items\">
            <h2 class=\"title text-center\">recommended items</h2>

            <div id=\"recommended-item-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/recommend1.jpg\" alt=\"\" />
                                        <h2>56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/recommend2.jpg\" alt=\"\" />
                                        <h2>56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/recommend3.jpg\" alt=\"\" />
                                        <h2>56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/recommend1.jpg\" alt=\"\" />
                                        <h2>56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/recommend2.jpg\" alt=\"\" />
                                        <h2>56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/recommend3.jpg\" alt=\"\" />
                                        <h2>56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"left recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"prev\">
                    <i class=\"fa fa-angle-left\"></i>
                </a>
                <a class=\"right recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"next\">
                    <i class=\"fa fa-angle-right\"></i>
                </a>
            </div>
        </div>

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        echo " ";
        $this->loadTemplate("home/slider.html.twig", "home/index.html.twig", 11)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        echo " ";
        $this->loadTemplate("home/sidebar.html.twig", "home/index.html.twig", 15)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  667 => 15,  647 => 11,  613 => 376,  597 => 363,  581 => 350,  563 => 335,  547 => 322,  531 => 309,  505 => 286,  489 => 273,  473 => 260,  457 => 247,  438 => 231,  422 => 218,  406 => 205,  390 => 192,  371 => 176,  355 => 163,  339 => 150,  323 => 137,  304 => 121,  288 => 108,  272 => 95,  256 => 82,  246 => 74,  232 => 66,  228 => 65,  223 => 63,  219 => 62,  213 => 58,  209 => 57,  193 => 43,  173 => 29,  169 => 28,  164 => 26,  160 => 25,  154 => 21,  150 => 20,  144 => 16,  142 => 15,  137 => 12,  135 => 11,  130 => 8,  120 => 7,  101 => 5,  82 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{setting[0].title}}{% endblock %}
{% block keywords %}{{setting[0].keywords}}{% endblock %}
{% block description %}{{setting[0].description}}{% endblock %}

{% block body %}
    <section id=\"slider\"><!--slider-->
        <div class=\"container\">
            <div class=\"row\">
                {% block slider %} {% include('home/slider.html.twig') %}{% endblock %}
            </div>
        </div>
    </section>
    {% block sidebar %} {% include('home/sidebar.html.twig') %}{% endblock %}
    <div class=\"col-sm-9 padding-right\">

        <div class=\"features_items\">
            <h2 class=\"title text-center\">Features Items</h2>
            {% for rs in product %}
                <div class=\"col-sm-4\">
                    <div class=\"product-image-wrapper\">
                        <div class=\"single-products\">
                            <div class=\"productinfo text-center\">
                                <a href=\"{{ path('product_show', {'id': rs.id}) }} \" class=\"btn btn-default add-to-cart\">
                                    <img src=\"{{ asset('uploads/images/' ~ rs.image) }}\" alt=\"\" style=\"height: 268px; width: 249px;\"/>
                                </a>
                                <h2>{{ rs.price }} \$</h2>
                                <p>{{ rs.title}} </p>

                            </div>

                        </div>
                        <div class=\"choose\">
                            <ul class=\"nav nav-pills nav-justified\">
                                <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <div class=\"category-tab\">
            <div class=\"col-sm-12\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tshirt\" data-toggle=\"tab\">New Products</a></li>
                    <li><a href=\"#blazers\" data-toggle=\"tab\">Blazers</a></li>
                    <li><a href=\"#sunglass\" data-toggle=\"tab\">Sunglass</a></li>
                    <li><a href=\"#kids\" data-toggle=\"tab\">Kids</a></li>
                    <li><a href=\"#poloshirt\" data-toggle=\"tab\">Polo shirt</a></li>
                </ul>
            </div>
            <div class=\"tab-content\">
                <div class=\"tab-pane fade active in\" id=\"tshirt\" >
                    {% for rs in newproducts %}
                        <div class=\"col-sm-3\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <a href=\"{{ path('product_show', {'id': rs.id}) }} \" class=\"btn btn-default add-to-cart\">
                                            <img src=\"{{ asset('uploads/images/' ~ rs.image) }}\" alt=\"\" style=\"height: 268px; width: 160px;\" alt=\"\" />
                                            <i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                        <h2>{{ rs.price }} \$</h2>
                                        <p>{{ rs.title}}</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    {% endfor %}

                </div>

                <div class=\"tab-pane fade\" id=\"blazers\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"sunglass\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"kids\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"poloshirt\" >
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery2.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery4.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery3.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <div class=\"productinfo text-center\">
                                    <img src=\"{{asset('assets')}}/images/home/gallery1.jpg\" alt=\"\" />
                                    <h2>56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"recommended_items\">
            <h2 class=\"title text-center\">recommended items</h2>

            <div id=\"recommended-item-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"{{asset('assets')}}/images/home/recommend1.jpg\" alt=\"\" />
                                        <h2>56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"{{asset('assets')}}/images/home/recommend2.jpg\" alt=\"\" />
                                        <h2>56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"{{asset('assets')}}/images/home/recommend3.jpg\" alt=\"\" />
                                        <h2>56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"{{asset('assets')}}/images/home/recommend1.jpg\" alt=\"\" />
                                        <h2>56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"{{asset('assets')}}/images/home/recommend2.jpg\" alt=\"\" />
                                        <h2>56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"product-image-wrapper\">
                                <div class=\"single-products\">
                                    <div class=\"productinfo text-center\">
                                        <img src=\"{{asset('assets')}}/images/home/recommend3.jpg\" alt=\"\" />
                                        <h2>56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"left recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"prev\">
                    <i class=\"fa fa-angle-left\"></i>
                </a>
                <a class=\"right recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"next\">
                    <i class=\"fa fa-angle-right\"></i>
                </a>
            </div>
        </div>

    </div>


{% endblock %}", "home/index.html.twig", "/home/user/Bureau/medshopp/shopback/templates/home/index.html.twig");
    }
}
