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

/* themes/contrib/olivero/templates/navigation/menu--primary-menu.html.twig */
class __TwigTemplate_c5f15d91acf51811a255d6d55dcb54e1ba5bcf535c1067c4c534ec0d1f58398e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 23, "set" => 29, "macro" => 32, "if" => 35, "for" => 38];
        $filters = ["escape" => 36, "clean_id" => 72, "raw" => 73, "t" => 84];
        $functions = ["link" => 76];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
                ['escape', 'clean_id', 'raw', 't'],
                ['link']
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
        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "menu"], "method");
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
    }

    // line 32
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "  ";
            $context["primary_nav_level"] = ("primary-nav__menu--level-" . (($context["menu_level"] ?? null) + 1));
            // line 34
            echo "  ";
            $context["menus"] = $this;
            // line 35
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 36
                echo "    <ul ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "primary-nav__menu", 1 => ($context["primary_nav_level"] ?? null)], "method")), "html", null, true);
                echo ">
      ";
                // line 37
                $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["primary_nav_level"] ?? null)], "method");
                // line 38
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    echo "
        ";
                    // line 40
                    if (($this->getAttribute($this->getAttribute($context["item"], "url", []), "isrouted", []) && ($this->getAttribute($this->getAttribute($context["item"], "url", []), "routeName", []) == "<nolink>"))) {
                        // line 41
                        echo "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 42
                        echo "        ";
                    } elseif (($this->getAttribute($this->getAttribute($context["item"], "url", []), "isrouted", []) && ($this->getAttribute($this->getAttribute($context["item"], "url", []), "routeName", []) == "<button>"))) {
                        // line 43
                        echo "          ";
                        $context["menu_item_type"] = "button";
                        // line 44
                        echo "        ";
                    } else {
                        // line 45
                        echo "          ";
                        $context["menu_item_type"] = "link";
                        // line 46
                        echo "        ";
                    }
                    // line 47
                    echo "
        ";
                    // line 48
                    $context["item_classes"] = [0 => "primary-nav__menu-item", 1 => ("primary-nav__menu-item--" . $this->sandbox->ensureToStringAllowed(                    // line 50
($context["menu_item_type"] ?? null))), 2 => ("primary-nav__menu-item--level-" . (                    // line 51
($context["menu_level"] ?? null) + 1)), 3 => (($this->getAttribute(                    // line 52
$context["item"], "in_active_trail", [])) ? ("primary-nav__menu-item--active-trail") : ("")), 4 => (($this->getAttribute(                    // line 53
$context["item"], "below", [])) ? ("primary-nav__menu-item--has-children") : (""))];
                    // line 56
                    echo "
        ";
                    // line 57
                    $context["link_classes"] = [0 => "primary-nav__menu-link", 1 => ("primary-nav__menu-link--" . $this->sandbox->ensureToStringAllowed(                    // line 59
($context["menu_item_type"] ?? null))), 2 => ("primary-nav__menu-link--level-" . (                    // line 60
($context["menu_level"] ?? null) + 1)), 3 => (($this->getAttribute(                    // line 61
$context["item"], "in_active_trail", [])) ? ("primary-nav__menu-link--active-trail") : ("")), 4 => (($this->getAttribute(                    // line 62
$context["item"], "below", [])) ? ("primary-nav__menu-link--has-children") : (""))];
                    // line 65
                    echo "
        <li";
                    // line 66
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
          ";
                    // line 72
                    echo "          ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getId((($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])) . "-submenu-") . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", []))));
                    // line 73
                    echo "          ";
                    ob_start(function () { return ''; });
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((("<span class=\"primary-nav__menu-link-inner\">" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", []))) . "</span>"));
                    $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 74
                    echo "
          ";
                    // line 75
                    if (((($context["menu_item_type"] ?? null) == "link") || (($context["menu_item_type"] ?? null) == "nolink"))) {
                        // line 76
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink((((($context["menu_item_type"] ?? null) == "link")) ? (($context["link_title"] ?? null)) : ($this->getAttribute($context["item"], "title", []))), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                        echo "

            ";
                        // line 78
                        if ($this->getAttribute($context["item"], "below", [])) {
                            // line 79
                            echo "              ";
                            // line 83
                            echo "              <button class=\"primary-nav__button-toggle\" aria-controls=\"";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["aria_id"] ?? null)), "html", null, true);
                            echo "\" aria-expanded=\"false\" aria-hidden=\"true\" tabindex=\"-1\">
                <span class=\"visually-hidden\">";
                            // line 84
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle sub-navigation"));
                            echo "</span>
                <span class=\"icon--menu-toggle\"></span>
              </button>

              ";
                            // line 88
                            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["aria_id"] ?? null)], "method");
                            // line 89
                            echo "              ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
            ";
                        }
                        // line 91
                        echo "
          ";
                    } elseif ((                    // line 92
($context["menu_item_type"] ?? null) == "button")) {
                        // line 93
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null)), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" =>                         // line 94
($context["link_classes"] ?? null), "aria-controls" => (($this->getAttribute(                        // line 95
$context["item"], "below", [])) ? (($context["aria_id"] ?? null)) : (false)), "aria-expanded" => (($this->getAttribute(                        // line 96
$context["item"], "below", [])) ? ("false") : (false))]), "html", null, true);
                        // line 98
                        echo "

            ";
                        // line 100
                        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["aria_id"] ?? null)], "method");
                        // line 101
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
          ";
                    }
                    // line 103
                    echo "        </li>
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/contrib/olivero/templates/navigation/menu--primary-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 105,  231 => 103,  225 => 101,  223 => 100,  219 => 98,  217 => 96,  216 => 95,  215 => 94,  213 => 93,  211 => 92,  208 => 91,  202 => 89,  200 => 88,  193 => 84,  188 => 83,  186 => 79,  184 => 78,  178 => 76,  176 => 75,  173 => 74,  168 => 73,  165 => 72,  161 => 66,  158 => 65,  156 => 62,  155 => 61,  154 => 60,  153 => 59,  152 => 57,  149 => 56,  147 => 53,  146 => 52,  145 => 51,  144 => 50,  143 => 48,  140 => 47,  137 => 46,  134 => 45,  131 => 44,  128 => 43,  125 => 42,  122 => 41,  120 => 40,  117 => 39,  99 => 38,  97 => 37,  92 => 36,  89 => 35,  86 => 34,  83 => 33,  69 => 32,  62 => 30,  60 => 29,  57 => 24,  55 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/olivero/templates/navigation/menu--primary-menu.html.twig", "/srv/http/drupal/petition/web/themes/contrib/olivero/templates/navigation/menu--primary-menu.html.twig");
    }
}
