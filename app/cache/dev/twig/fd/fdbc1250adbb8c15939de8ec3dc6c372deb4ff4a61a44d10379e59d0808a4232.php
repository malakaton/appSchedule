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

/* SensioDistributionBundle::Configurator/form.html.twig */
class __TwigTemplate_701223f38c5ed8f26942b201c75a393d9c5db8f57a3046680c3affc259b108c2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle::Configurator/form.html.twig", 1);
        $this->blocks = [
            'form_rows' => [$this, 'block_form_rows'],
            'form_row' => [$this, 'block_form_row'],
            'form_label' => [$this, 'block_form_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = [])
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = [])
    {
        // line 25
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  115 => 31,  113 => 30,  109 => 29,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  83 => 18,  78 => 16,  73 => 14,  70 => 13,  67 => 12,  56 => 8,  52 => 7,  47 => 5,  44 => 4,  41 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"form_div_layout.html.twig\" %}

{% block form_rows %}
    <div class=\"symfony-form-errors\">
        {{ form_errors(form) }}
    </div>
    {% for child in form %}
        {{ form_row(child) }}
    {% endfor %}
{% endblock %}

{% block form_row %}
    <div class=\"symfony-form-row\">
        {{ form_label(form) }}
        <div class=\"symfony-form-field\">
            {{ form_widget(form) }}
            <div class=\"symfony-form-errors\">
                {{ form_errors(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block form_label %}
    {% if label is empty %}
        {% set label = name|humanize %}
    {% endif %}
    <label for=\"{{ id }}\">
        {{ label|trans }}
        {% if required %}
            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        {% endif %}
    </label>
{% endblock %}
", "SensioDistributionBundle::Configurator/form.html.twig", "/home/malakaton/PhpstormProjects/appSchedule/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/form.html.twig");
    }
}