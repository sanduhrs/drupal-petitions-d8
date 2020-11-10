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

/* modules/contrib/spn/templates/spn--form.html.twig */
class __TwigTemplate_d4146a083b96717b47ca0565bf8cf788fd914d12e185af95ad3590958b7217ec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["spaceless" => 13];
        $filters = ["escape" => 17, "without" => 56];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless'],
                ['escape', 'without'],
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
        // line 13
        ob_start(function () { return ''; });
        // line 14
        echo "
  ";
        // line 16
        echo "  <div class=\"field-sep\">
    ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "name", [])), "html", null, true);
        echo "
  </div>

  ";
        // line 21
        echo "  <div class=\"field-sep\">
  ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "surname", [])), "html", null, true);
        echo "
  </div>

  ";
        // line 26
        echo "  <div class=\"field-sep\">
  ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "email", [])), "html", null, true);
        echo "
  </div>

  ";
        // line 31
        echo "  <div class=\"field-sep\">
  ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "postal_code", [])), "html", null, true);
        echo "
  </div>

  ";
        // line 36
        echo "  <div class=\"field-sep\">
  ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "comment", [])), "html", null, true);
        echo "
  </div>

  ";
        // line 41
        echo "  <div class=\"field-sep\">
  ";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "anonymous_sign", [])), "html", null, true);
        echo "
  </div>

  ";
        // line 46
        echo "  <div class=\"field-sep\">
  ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "captcha", [])), "html", null, true);
        echo "
  </div>

  ";
        // line 51
        echo "  <div class=\"field-sep\">
  ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "actions", [])), "html", null, true);
        echo "
  </div>

  ";
        // line 56
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null)), "name", "surname", "email", "postal_code", "comment", "anonymous_sign", "captcha", "actions"), "html", null, true);
        echo "

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/contrib/spn/templates/spn--form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 56,  126 => 52,  123 => 51,  117 => 47,  114 => 46,  108 => 42,  105 => 41,  99 => 37,  96 => 36,  90 => 32,  87 => 31,  81 => 27,  78 => 26,  72 => 22,  69 => 21,  63 => 17,  60 => 16,  57 => 14,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/spn/templates/spn--form.html.twig", "/srv/http/drupal/petition/web/modules/contrib/spn/templates/spn--form.html.twig");
    }
}
