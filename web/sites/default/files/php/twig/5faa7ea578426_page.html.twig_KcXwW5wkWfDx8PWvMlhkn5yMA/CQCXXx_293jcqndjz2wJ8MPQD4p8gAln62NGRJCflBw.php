<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/olivero/templates/layout/page.html.twig */
class __TwigTemplate_4bf383971e70ed70b19e06c9bfd2ce28f00d371caaf76333dc77d3ed5e7ac755 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 52];
        $filters = ["escape" => 71, "t" => 75];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 48
        echo "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">

    ";
        // line 52
        if ((($this->getAttribute(($context["page"] ?? null), "header", []) || $this->getAttribute(($context["page"] ?? null), "primary_menu", [])) || $this->getAttribute(($context["page"] ?? null), "secondary_menu", []))) {
            // line 53
            echo "      <header id=\"header\" class=\"header site-header\" role=\"banner\">

        <!-- Gets fixed by JS at wide widths -->
        <div class=\"site-header__fixable fixable\">
          <div class=\"header__left\">
            <button class=\"nav-primary__button\" aria-controls=\"site-header__inner\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
              <span class=\"nav-primary__icon\">
                <div></div>
                <div></div>
                <div></div>
              </span>
            </button>
          </div>

          <!-- Needs to extend full width so box shadow will also extend -->
          <div id=\"site-header__inner\" class=\"site-header__inner\">
            <div class=\"container site-header__inner__container\">

              ";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "

              ";
            // line 73
            if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "secondary_menu", []))) {
                // line 74
                echo "                <div class=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" aria-label=\"";
                // line 75
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle Main Menu"));
                echo "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <div class=\"mobile-nav-button__label\">";
                // line 76
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Menu"));
                echo "</div>
                    <div class=\"mobile-nav-button__icon\"></div>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-menu-open=\"false\">

                  ";
                // line 83
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "

                  ";
                // line 85
                if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])) {
                    // line 86
                    echo "                    <div class=\"secondary-nav__wrapper\">
                      ";
                    // line 87
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
                    echo "
                    </div>
                  ";
                }
                // line 90
                echo "                </div>
              ";
            }
            // line 92
            echo "            </div>
          </div>
        </div>
      </header>
    ";
        }
        // line 97
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <main id=\"content\" class=\"main-content \" role=\"main\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "hero", [])), "html", null, true);
        echo "
          <div class=\"main-content__container container\">
            ";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
            ";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
            ";
        // line 106
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_above", [])), "html", null, true);
        echo "
            ";
        // line 107
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
            // line 108
            echo "              <div class=\"sidebar-grid grid-full\">
                ";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                ";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
            echo "
              </div>
            ";
        } else {
            // line 113
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            ";
        }
        // line 115
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_below", [])), "html", null, true);
        echo "
          </div>
        </main>
        <div class=\"social-bar\">
          ";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "social", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        ";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top", [])), "html", null, true);
        echo "
        ";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
        echo "
      </div>
    </footer>

    <div class=\"overlay\"></div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/olivero/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 127,  197 => 126,  187 => 119,  179 => 115,  173 => 113,  167 => 110,  163 => 109,  160 => 108,  158 => 107,  154 => 106,  150 => 105,  146 => 104,  141 => 102,  134 => 97,  127 => 92,  123 => 90,  117 => 87,  114 => 86,  112 => 85,  107 => 83,  97 => 76,  93 => 75,  90 => 74,  88 => 73,  83 => 71,  63 => 53,  61 => 52,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/olivero/templates/layout/page.html.twig", "/srv/http/drupal/petition/web/themes/contrib/olivero/templates/layout/page.html.twig");
    }
}
