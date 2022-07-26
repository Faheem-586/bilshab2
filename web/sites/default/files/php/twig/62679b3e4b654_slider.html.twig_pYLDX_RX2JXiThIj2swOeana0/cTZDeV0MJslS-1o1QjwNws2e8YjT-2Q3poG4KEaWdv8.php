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

/* @zuvi/template-parts/slider.html.twig */
class __TwigTemplate_49806848241220c5338c8c2494f2fa3ee61dbb5712de55277b227db3300410e6 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

    ";
        // line 7
        echo "<ul style=\"padding-left:0px!important;margin-left:0px!important;margin-top:10px!important;\"  class=\"js-rotating\">

        ";
        // line 9
        if ((($context["slider_code"] ?? null) != "")) {
            // line 10
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null), 10, $this->source), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<button>,<mark>,<hr>"));
            echo "
        ";
        } else {
            // line 12
            echo "        <li>
  \t\t\t\t<h1>Zuvi is <em>Multipurpose</em> Drupal theme</h1>
  \t\t\t\t<p>Zuvi Theme is packed full of all the amazing features and options for you to create a successful website</p>
  \t\t\t\t<a class=\"button-link\" href=\"#\">Get Started</a>
  \t\t\t</li>
  \t\t\t<li>
  \t\t\t\t<h1>Welcome To <em>Drupar</em> Design Studio</h1>
  \t\t\t\t<p>We present you material design. We put our hearts and soul into making every project.</p>
  \t\t\t\t<a class=\"button-link\" href=\"#\">Get Started</a>
  \t\t\t</li>
  \t\t\t<li>
  \t\t\t\t<h1>We Create <em>Awesome</em> Drupal Themes!</h1>
  \t\t\t\t<p>Our themes are of high quality, flexible and beautifully crafted that stand out of crowd.</p>
  \t\t\t\t<a class=\"button-link\" href=\"#\">Get Started</a>
  \t\t\t</li>
        ";
        }
        // line 28
        echo "      </ul> <!--/.home-slider -->
";
        // line 40
        echo "

  ";
    }

    public function getTemplateName()
    {
        return "@zuvi/template-parts/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 40,  73 => 28,  55 => 12,  49 => 10,  47 => 9,  43 => 7,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvi/template-parts/slider.html.twig", "/var/www/html/web/themes/zuvi/templates/template-parts/slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9);
        static $filters = array("raw" => 10, "striptags" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'striptags'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
