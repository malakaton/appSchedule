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

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_c686bc7649b6a9eaa841d1e8cf830aceb5d6adcd16d5efe5285c81fc0f8f3a66 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["logger"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", []) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", []))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\" />
            ";
            // line 9
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", [])) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } else {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", []) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", []));
            // line 15
            echo "            <span class=\"sf-toolbar-status sf-toolbar-status-";
            echo twig_escape_filter($this->env, ($context["status_color"] ?? $this->getContext($context, "status_color")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["error_count"] ?? $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", [])) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Exception</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", []), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", [])) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", []), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 31
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/logger.html.twig", 31)->display(twig_array_merge($context, ["link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))]));
            // line 32
            echo "    ";
        }
    }

    // line 35
    public function block_menu($context, array $blocks = [])
    {
        // line 36
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\"></span>
    <strong>Logs</strong>
    ";
        // line 39
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", []) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", []))) {
            // line 40
            echo "        ";
            $context["error_count"] = ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", []) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", []));
            // line 41
            echo "        <span class=\"count\">
            <span>";
            // line 42
            echo twig_escape_filter($this->env, ($context["error_count"] ?? $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 45
        echo "</span>
";
    }

    // line 48
    public function block_panel($context, array $blocks = [])
    {
        // line 49
        echo "    <h2>Logs</h2>

    ";
        // line 51
        $context["priority"] = $this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", []), "get", [0 => "priority", 1 => 0], "method");
        // line 52
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 62
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY", "-100" => "DEPRECATION only"]);
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 63
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            echo ((($context["value"] == ($context["priority"] ?? $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["text"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 74
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", [])) {
            // line 75
            echo "        <ul class=\"alt\">
            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", []));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if ((((($context["priority"] ?? $this->getContext($context, "priority")) >= 0) && ($this->getAttribute($context["log"], "priority", []) >= ($context["priority"] ?? $this->getContext($context, "priority")))) || ((($context["priority"] ?? $this->getContext($context, "priority")) < 0) && ((($this->getAttribute($this->getAttribute($context["log"], "context", [], "any", false, true), "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["log"], "context", [], "any", false, true), "type", []), 0)) : (0)) == ($context["priority"] ?? $this->getContext($context, "priority")))))) {
                    // line 77
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $this->getAttribute($context["loop"], "index", [])), "html", null, true);
                    if (($this->getAttribute($context["log"], "priority", []) >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute($context["log"], "priority", []) >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 78
                    echo $context["logger"]->getdisplay_message($this->getAttribute($context["loop"], "index", []), $context["log"]);
                    echo "
                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 81
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        </ul>
    ";
        } else {
            // line 85
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 92
    public function getdisplay_message($__log_index__ = null, $__log__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "log_index" => $__log_index__,
            "log" => $__log__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 93
            echo "    ";
            if ((twig_constant("Symfony\\Component\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", [], "any", false, true), "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", [], "any", false, true), "type", []), 0)) : (0)))) {
                // line 94
                echo "        DEPRECATION -  ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", []), "html", null, true);
                echo "
        ";
                // line 95
                $context["id"] = ("sf-call-stack-" . ($context["log_index"] ?? $this->getContext($context, "log_index")));
                // line 96
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                echo "', document.getElementById('";
                echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                echo "-on'), document.getElementById('";
                echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 97
                echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
            <img class=\"toggle\" id=\"";
                // line 98
                echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
        </a>
        ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", []), "stack", []));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (($context["index"] > 1)) {
                        // line 101
                        echo "            ";
                        if (($context["index"] == 2)) {
                            // line 102
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 104
                        echo "            ";
                        if ($this->getAttribute($context["call"], "class", [], "any", true, true)) {
                            // line 105
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($context["call"], "class", [])) . "::") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrMethod($this->getAttribute($context["call"], "function", [])));
                            // line 106
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "function", [], "any", true, true)) {
                            // line 107
                            echo "                ";
                            $context["from"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrMethod($this->getAttribute($context["call"], "function", []));
                            // line 108
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "file", [], "any", true, true)) {
                            // line 109
                            echo "                ";
                            $context["from"] = $this->getAttribute($context["call"], "file", []);
                            // line 110
                            echo "            ";
                        } else {
                            // line 111
                            echo "                ";
                            $context["from"] = "-";
                            // line 112
                            echo "            ";
                        }
                        // line 113
                        echo "
            <li>Called from ";
                        // line 114
                        echo ((($this->getAttribute($context["call"], "file", [], "any", true, true) && $this->getAttribute($context["call"], "line", [], "any", true, true))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute($context["call"], "file", []), $this->getAttribute($context["call"], "line", []), ($context["from"] ?? $this->getContext($context, "from")))) : (($context["from"] ?? $this->getContext($context, "from"))));
                        echo "</li>

            ";
                        // line 116
                        if (($context["index"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", []), "stack", [])) - 1))) {
                            // line 117
                            echo "                </ul>
            ";
                        }
                        // line 119
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "    ";
            } else {
                // line 121
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "priorityName", []), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", []), "html", null, true);
                echo "
        ";
                // line 122
                if (($this->getAttribute(($context["log"] ?? null), "context", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", [])))) {
                    // line 123
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 125
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", []), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 128
                echo "    ";
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
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 128,  374 => 125,  370 => 123,  368 => 122,  361 => 121,  358 => 120,  351 => 119,  347 => 117,  345 => 116,  340 => 114,  337 => 113,  334 => 112,  331 => 111,  328 => 110,  325 => 109,  322 => 108,  319 => 107,  316 => 106,  313 => 105,  310 => 104,  304 => 102,  301 => 101,  296 => 100,  291 => 98,  287 => 97,  278 => 96,  276 => 95,  271 => 94,  268 => 93,  255 => 92,  247 => 85,  243 => 83,  236 => 81,  224 => 78,  214 => 77,  202 => 76,  199 => 75,  197 => 74,  186 => 65,  173 => 63,  168 => 62,  157 => 52,  155 => 51,  151 => 49,  148 => 48,  143 => 45,  137 => 42,  134 => 41,  131 => 40,  129 => 39,  124 => 36,  121 => 35,  116 => 32,  113 => 31,  110 => 30,  104 => 27,  100 => 25,  97 => 24,  91 => 21,  87 => 19,  84 => 18,  81 => 17,  73 => 15,  70 => 14,  67 => 13,  64 => 12,  61 => 11,  58 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  40 => 1,  38 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as logger %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations %}
        {% set icon %}
            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\" />
            {% if collector.counterrors %}
                {% set status_color = \"red\" %}
            {% else %}
                {% set status_color = \"yellow\" %}
            {% endif %}
            {% set error_count = collector.counterrors + collector.countdeprecations %}
            <span class=\"sf-toolbar-status sf-toolbar-status-{{ status_color }}\">{{ error_count }}</span>
        {% endset %}
        {% set text %}
            {% if collector.counterrors %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Exception</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ collector.counterrors }}</span>
                </div>
            {% endif %}
            {% if collector.countdeprecations %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">{{ collector.countdeprecations }}</span>
                </div>
            {% endif %}
        {% endset %}
        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\"></span>
    <strong>Logs</strong>
    {% if collector.counterrors or collector.countdeprecations %}
        {% set error_count = collector.counterrors + collector.countdeprecations %}
        <span class=\"count\">
            <span>{{ error_count }}</span>
        </span>
    {% endif %}
</span>
{% endblock %}

{% block panel %}
    <h2>Logs</h2>

    {% set priority = request.query.get('priority', 0) %}

    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        {# values < 0 are custom levels #}
                        {% for value, text in { 100: 'DEBUG', 200: 'INFO', 250: 'NOTICE', 300: 'WARNING', 400: 'ERROR', 500: 'CRITICAL', 550: 'ALERT', 600: 'EMERGENCY', '-100': 'DEPRECATION only' } %}
                            <option value=\"{{ value }}\"{{ value == priority ? ' selected' : '' }}>{{ text }}</option>
                        {% endfor %}
                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    {% if collector.logs %}
        <ul class=\"alt\">
            {% for log in collector.logs if priority >= 0 and log.priority >= priority or priority < 0 and log.context.type|default(0) == priority %}
                <li class=\"{{ cycle(['odd', 'even'], loop.index) }}{% if log.priority >= 400 %} error{% elseif log.priority >= 300 %} warning{% endif %}\">
                    {{ logger.display_message(loop.index, log) }}
                </li>
            {% else %}
                <li><em>No logs available for this priority.</em></li>
            {% endfor %}
        </ul>
    {% else %}
        <p>
            <em>No logs available.</em>
        </p>
    {% endif %}
{% endblock %}


{% macro display_message(log_index, log) %}
    {% if constant('Symfony\\\\Component\\\\Debug\\\\ErrorHandler::TYPE_DEPRECATION') == log.context.type|default(0) %}
        DEPRECATION -  {{ log.message }}
        {% set id = 'sf-call-stack-' ~ log_index %}
        <a href=\"#\" onclick=\"Sfjs.toggle('{{ id }}', document.getElementById('{{ id }}-on'), document.getElementById('{{ id }}-off')); return false;\">
            <img class=\"toggle\" id=\"{{ id }}-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
            <img class=\"toggle\" id=\"{{ id }}-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
        </a>
        {% for index, call in log.context.stack if index > 1 %}
            {% if index == 2 %}
                <ul class=\"sf-call-stack\" id=\"{{ id }}\" style=\"display: none\">
            {% endif %}
            {% if call.class is defined %}
                {% set from = call.class|abbr_class ~ '::' ~ call.function|abbr_method() %}
            {% elseif call.function is defined %}
                {% set from = call.function|abbr_method %}
            {% elseif call.file is defined %}
                {% set from = call.file %}
            {% else %}
                {% set from = '-' %}
            {% endif %}

            <li>Called from {{ call.file is defined and call.line is defined ? call.file|format_file(call.line, from) : from|raw }}</li>

            {% if index == log.context.stack|length - 1 %}
                </ul>
            {% endif %}
        {% endfor %}
    {% else %}
        {{ log.priorityName }} - {{ log.message }}
        {% if log.context is defined and log.context is not empty %}
            <br />
            <small>
                <strong>Context</strong>: {{ log.context|json_encode(64 b-or 256) }}
            </small>
        {% endif %}
    {% endif %}
{% endmacro %}
", "@WebProfiler/Collector/logger.html.twig", "/home/malakaton/PhpstormProjects/appSchedule/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/logger.html.twig");
    }
}
