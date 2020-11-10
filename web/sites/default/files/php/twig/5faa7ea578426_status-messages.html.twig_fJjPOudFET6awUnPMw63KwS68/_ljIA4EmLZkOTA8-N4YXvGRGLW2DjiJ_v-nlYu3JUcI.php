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

/* themes/contrib/olivero/templates/misc/status-messages.html.twig */
class __TwigTemplate_c5ff63a0d9062e412a728d10c6838910cd7c3420462cc9b4def64d04a4c72e4b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 25, "set" => 27, "if" => 35];
        $filters = ["escape" => 22, "without" => 34, "length" => 53, "first" => 60];
        $functions = ["attach_library" => 22];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
                ['attach_library']
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
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("olivero/messages"), "html", null, true);
        echo "

<div data-drupal-messages class=\"messages-list\">
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 26
            echo "    ";
            // line 27
            $context["classes"] = [0 => "messages-list__item", 1 => "messages", 2 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 30
$context["type"]))];
            // line 33
            echo "
    <div role=\"contentinfo\" aria-label=\"";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
            echo "\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role", "aria-label"), "html", null, true);
            echo ">
      <div class=\"messages__container\"";
            // line 35
            if (($context["type"] == "error")) {
                echo " role=\"alert\"";
            }
            echo ">
        ";
            // line 36
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                // line 37
                echo "          <div class=\"messages__header\">
           <h2 class=\"visually-hidden\">";
                // line 38
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "</h2>
            <svg class=\"messages__icon\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\" xmlns=\"http://www.w3.org/2000/svg\">
              ";
                // line 40
                if (($context["type"] == "error")) {
                    // line 41
                    echo "                <path d=\"M0.117801 16.7381C0.202622 17.9153 0.292289 18.562 0.481317 19.3904C0.922384 21.3161 1.6785 23.0626 2.76178 24.6589C4.58178 27.3355 7.18213 29.3823 10.1993 30.5062C12.458 31.3467 14.942 31.6495 17.3461 31.3782C22.5831 30.7872 27.1246 27.6164 29.4875 22.9027C30.3769 21.132 30.8616 19.3929 31.0797 17.1983C31.1209 16.7768 31.1209 15.1733 31.0797 14.7518C30.8786 12.7195 30.4714 11.1693 29.7032 9.49549C28.3848 6.62269 26.1722 4.18589 23.4289 2.58235C19.4399 0.249712 14.5373 -0.171762 10.1993 1.44389C5.82985 3.07165 2.38372 6.62753 0.915114 11.0215C0.512822 12.223 0.289865 13.2863 0.161423 14.604C0.127495 14.9674 0.0959901 16.4425 0.117801 16.7381ZM4.02924 14.9577C4.2837 12.2108 5.46391 9.69412 7.40024 7.76115C9.15966 6.00743 11.3529 4.89319 13.8224 4.49352C14.4234 4.39905 14.8717 4.36514 15.6012 4.36271C16.6941 4.36271 17.4793 4.45718 18.5093 4.71636C19.2969 4.91257 20.0143 5.17902 20.7873 5.55931C21.2526 5.78943 21.9409 6.18183 21.9554 6.22786C21.9651 6.25692 5.90498 22.3093 5.86621 22.3093C5.82501 22.3093 5.46391 21.6916 5.21915 21.2071C4.51877 19.8071 4.10921 18.2956 4.005 16.7138C3.98077 16.336 3.99288 15.3453 4.02924 14.9577ZM25.3725 9.6384C25.4428 9.7038 25.816 10.3602 26.0341 10.8035C26.6618 12.0776 27.0301 13.359 27.1876 14.8366C27.2385 15.2968 27.2458 16.5225 27.2022 16.9561C27.0859 18.0776 26.8847 18.9786 26.526 19.9669C26.2377 20.7663 25.7748 21.6843 25.2998 22.394C23.8748 24.5232 21.7882 26.1364 19.3987 26.9576C18.1046 27.4009 16.985 27.585 15.5891 27.585C14.8232 27.585 14.4646 27.5607 13.786 27.4541C12.2568 27.2192 10.6574 26.6209 9.40685 25.8191L9.23237 25.7077L17.2879 17.6609C23.3562 11.598 25.3507 9.61903 25.3725 9.6384Z\"/>
              ";
                } elseif ((                // line 42
$context["type"] == "warning")) {
                    // line 43
                    echo "                <path d=\"M16 0C7.16667 0 0 7.16667 0 16C0 24.8333 7.16667 32 16 32C24.8333 32 32 24.8333 32 16C32 7.16667 24.8333 0 16 0ZM18.6667 25.9792C18.6667 26.3542 18.375 26.6667 18.0208 26.6667H14.0208C13.6458 26.6667 13.3333 26.3542 13.3333 25.9792V22.0208C13.3333 21.6458 13.6458 21.3333 14.0208 21.3333H18.0208C18.375 21.3333 18.6667 21.6458 18.6667 22.0208V25.9792ZM18.625 18.8125C18.6042 19.1042 18.2917 19.3333 17.9167 19.3333H14.0625C13.6667 19.3333 13.3542 19.1042 13.3542 18.8125L13 5.875C13 5.72917 13.0625 5.58333 13.2083 5.5C13.3333 5.39583 13.5208 5.33333 13.7083 5.33333H18.2917C18.4792 5.33333 18.6667 5.39583 18.7917 5.5C18.9375 5.58333 19 5.72917 19 5.875L18.625 18.8125Z\"/>
              ";
                } elseif ((                // line 44
$context["type"] == "status")) {
                    // line 45
                    echo "                <path d=\"M26.75 12.625C26.75 12.9792 26.625 13.3125 26.375 13.5625L15.0625 24.875C14.8125 25.125 14.4583 25.2708 14.1042 25.2708C13.7708 25.2708 13.4167 25.125 13.1667 24.875L5.625 17.3333C5.375 17.0833 5.25 16.75 5.25 16.3958C5.25 16.0417 5.375 15.6875 5.625 15.4375L7.52083 13.5625C7.77083 13.3125 8.10417 13.1667 8.45833 13.1667C8.8125 13.1667 9.14583 13.3125 9.39583 13.5625L14.1042 18.2708L22.6042 9.79167C22.8542 9.54167 23.1875 9.39583 23.5417 9.39583C23.8958 9.39583 24.2292 9.54167 24.4792 9.79167L26.375 11.6667C26.625 11.9167 26.75 12.2708 26.75 12.625ZM32 16C32 7.16667 24.8333 0 16 0C7.16667 0 0 7.16667 0 16C0 24.8333 7.16667 32 16 32C24.8333 32 32 24.8333 32 16Z\"/>
              ";
                } elseif ((                // line 46
$context["type"] == "info")) {
                    // line 47
                    echo "                <path d=\"M32,16c0,8.8-7.2,16-16,16S0,24.8,0,16C0,7.2,7.2,0,16,0S32,7.2,32,16z M16.4,5.3c-3.5,0-5.8,1.5-7.5,4.1c-0.2,0.3-0.2,0.8,0.2,1l2.2,1.7c0.3,0.3,0.8,0.2,1.1-0.1c1.2-1.5,1.9-2.3,3.7-2.3c1.3,0,2.9,0.8,2.9,2.1c0,1-0.8,1.5-2.1,2.2c-1.5,0.9-3.5,1.9-3.5,4.6v0.3c0,0.4,0.3,0.8,0.8,0.8h3.6c0.4,0,0.8-0.3,0.8-0.8v-0.1c0-1.8,5.4-1.9,5.4-6.9C23.9,8.1,20.1,5.3,16.4,5.3z M16,21.3c-1.6,0-3,1.3-3,3c0,1.6,1.3,3,3,3s3-1.3,3-3C19,22.6,17.6,21.3,16,21.3z\"/>
              ";
                }
                // line 49
                echo "            </svg>
          </div>
        ";
            }
            // line 52
            echo "        <div class=\"messages__content\">
          ";
            // line 53
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 54
                echo "            <ul class=\"messages__list\">
              ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 56
                    echo "                <li class=\"messages__item\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                    echo "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "            </ul>
          ";
            } else {
                // line 60
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                echo "
          ";
            }
            // line 62
            echo "        </div>
      </div>
    </div>
    ";
            // line 66
            echo "    ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method");
            // line 67
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/olivero/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 68,  160 => 67,  157 => 66,  152 => 62,  146 => 60,  142 => 58,  133 => 56,  129 => 55,  126 => 54,  124 => 53,  121 => 52,  116 => 49,  112 => 47,  110 => 46,  107 => 45,  105 => 44,  102 => 43,  100 => 42,  97 => 41,  95 => 40,  90 => 38,  87 => 37,  85 => 36,  79 => 35,  73 => 34,  70 => 33,  68 => 30,  67 => 27,  65 => 26,  61 => 25,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/olivero/templates/misc/status-messages.html.twig", "/srv/http/drupal/petition/web/themes/contrib/olivero/templates/misc/status-messages.html.twig");
    }
}
