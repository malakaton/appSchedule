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

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_3603e26aed92671c3dc53035c6ae0c30fa2105ffe1d6c895dfa1650379c85bf0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", [], "any", false, true), "class", [], "any", true, true)) {
            // line 6
            echo "            ";
            $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "controller", []), "file", []), $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "controller", []), "line", []));
            // line 7
            echo "            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "controller", []), "class", []));
            echo "</span>
            <span class=\"sf-toolbar-info-method\"";
            // line 8
            if (($context["link"] ?? $this->getContext($context, "link"))) {
                echo " onclick=\"window.location='";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "js"), "html", null, true);
                echo "';window.event.stopPropagation();return false;\"";
            }
            echo ">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "controller", []), "method", []), "html", null, true);
            echo "
            </span>
        ";
        } else {
            // line 12
            echo "            <span class=\"sf-toolbar-info-class\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "controller", []), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    ";
        $context["request_status_code_color"] = (((400 > $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statuscode", []))) ? ((((200 == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statuscode", []))) ? ("green") : ("yellow"))) : ("red"));
        // line 16
        echo "    ";
        $context["request_route"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "route", [])) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "route", [])) : ("NONE"));
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 19
        echo twig_escape_filter($this->env, ($context["request_status_code_color"] ?? $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statustext", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statuscode", []), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
        // line 20
        echo twig_escape_filter($this->env, ($context["request_handler"] ?? $this->getContext($context, "request_handler")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>";
        // line 21
        echo twig_escape_filter($this->env, ($context["request_route"] ?? $this->getContext($context, "request_route")), "html", null, true);
        echo "</i></span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        ob_start();
        // line 25
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Status</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 27
        echo twig_escape_filter($this->env, ($context["request_status_code_color"] ?? $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statuscode", []), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statustext", []), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                ";
        // line 31
        echo twig_escape_filter($this->env, ($context["request_handler"] ?? $this->getContext($context, "request_handler")), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 35
        echo twig_escape_filter($this->env, ($context["request_route"] ?? $this->getContext($context, "request_route")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 39
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionmetadata", []))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 42
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/request.html.twig", 43)->display(twig_array_merge($context, ["link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))]));
    }

    // line 46
    public function block_menu($context, array $blocks = [])
    {
        // line 47
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAcCAQAAACn1QXuAAAD2UlEQVR42p2Ve0zTVxTHKS4+KCBqNomCClgEJJAYkznQQIFaWltAiigsxGUgMy6b45HWV4UKUoP1yaMS0DqniVpngKlEMoMzW2Z0QTf4Ax/bdCzFCpQWq60U+Xp/baG/EoGf3vPH7/b3PffTc++55/w8xg+wji4W3ImDw4S3DgSD5fGhA+wcbRxclqsB+30RnmWcda1JPWn1poj8e3TYlvb/l6edTdSLWvYHgcUIdSwiuduxOOdu/n90WF7350648J+a0ClxYNWECglgahP+OyUOPpm34sDMNt6Ez+QwjniAKSzFgKWTw6L33x/3/yMHzU09l/XKlykj7krlXURNDlsEaVm/a8Fh48trUEEKGY4Zb5SaXUpZH4oROAlKvjijPu9GQfcY6jkOQoBlWIgARCAVVbtNo1rxky9/lqiV/hMmQfwXfRtZQxYVVoItC5aUpO8rDIcvYvUNqcN0n7TfJkyC+5lUdYIH9hlOkn3bCWbVCoJLLX9C9+FZEcoIpj2HYHh9XT92ZbUEFl7XSvfhD2EVI5imFh/DX948+lvWhgAEHL3kBrNhNSOYvImCdSgEb+wbGrmjomCFv46DrWn6hN+2QY6ZDYH8Tt6Dv+c4Yfn9bofbN8ABG/xHjYcMKmNHC0Tw/XOF0Ez3+VaH2BMZ1Ezclaynnm1x8LTDBo7U65Tm0tejrltPwwvzIcQO7EIKFsB3c8uoprAqzZruwQpE1cnpeMVxxZLNc8mFQQy2W9Tb+1xSplbjD18EEvM7sjTjuksp6rXVDBeVN29s5ztjFY1VSILpfJAHZiFkG1lAtyTD+gvZsix5emPSC3flm6v3JGvfxNvn+8zDt/HLFR3XUYI6RFPltERkYFro4j6Itdd5JB6JzaaGBAKUFtorpOsHRNoLveAxU1jRQ6xFQbaVNNFBpICN6YjZ00UpN0swj4KFPK/MtTJBffXKoETk3mouiYw7cmoLpsGzNVFkth+NpTKWgnkjof9MnjOflRYqsy4rfV1udebZatIgHhyB0XmylsyL2VXJjtQReMNWe9uGH5JN3ytMubY6HS7J9HSYTI/L1c9ybQoTQfEwG2HN52p7KixuEQ91PH5wEYkE5sRxUYJaFCCr4g+6o+o2slEMNVHjCYqF+RBjJ87m0OI/2YnvwMVCgnLi2AjCcgQgpGen1Mh1bATSgV4pghGISKKyqT6Gj+CHRUj/grT66sGOp7tIjOpmhGEGqYLxA174DOW4gjZiP6EMn2LWO7pz+O8N2nYcQhGq7v+ITZg3wYcPPghFDKibGUNm3u/qq5hL1PWIxgJEIRZBmE69fQsyes/JMSWb+gAAAABJRU5ErkJggg==\" alt=\"Request\"></span>
    <strong>Request</strong>
</span>
";
    }

    // line 53
    public function block_panel($context, array $blocks = [])
    {
        // line 54
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestquery", []), "all", []))) {
            // line 57
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 57)->display(twig_to_array(["bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestquery", [])]));
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 63
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestrequest", []), "all", []))) {
            // line 67
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 67)->display(twig_to_array(["bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestrequest", [])]));
            // line 68
            echo "    ";
        } else {
            // line 69
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 73
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 76
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestattributes", []), "all", []))) {
            // line 77
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 77)->display(twig_to_array(["bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestattributes", [])]));
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 83
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 86
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestcookies", []), "all", []))) {
            // line 87
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 87)->display(twig_to_array(["bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestcookies", [])]));
            // line 88
            echo "    ";
        } else {
            // line 89
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 93
        echo "
    <h2>Request Headers</h2>

    ";
        // line 96
        $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 96)->display(twig_to_array(["bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestheaders", [])]));
        // line 97
        echo "
    <h2>Request Content</h2>

    ";
        // line 100
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "content", []) == false)) {
            // line 101
            echo "        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    ";
        } elseif ($this->getAttribute(        // line 102
($context["collector"] ?? $this->getContext($context, "collector")), "content", [])) {
            // line 103
            echo "        <pre>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "content", []), "html", null, true);
            echo "</pre>
    ";
        } else {
            // line 105
            echo "        <p><em>No content</em></p>
    ";
        }
        // line 107
        echo "
    <h2>Request Server Parameters</h2>

    ";
        // line 110
        $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 110)->display(twig_to_array(["bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestserver", [])]));
        // line 111
        echo "
    <h2>Response Headers</h2>

    ";
        // line 114
        $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 114)->display(twig_to_array(["bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "responseheaders", [])]));
        // line 115
        echo "
    <h2>Session Metadata</h2>

    ";
        // line 118
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionmetadata", []))) {
            // line 119
            echo "    ";
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "@WebProfiler/Collector/request.html.twig", 119)->display(twig_to_array(["data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionmetadata", [])]));
            // line 120
            echo "    ";
        } else {
            // line 121
            echo "    <p>
        <em>No session metadata</em>
    </p>
    ";
        }
        // line 125
        echo "
    <h2>Session Attributes</h2>

    ";
        // line 128
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionattributes", []))) {
            // line 129
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "@WebProfiler/Collector/request.html.twig", 129)->display(twig_to_array(["data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionattributes", [])]));
            // line 130
            echo "    ";
        } else {
            // line 131
            echo "        <p>
            <em>No session attributes</em>
        </p>
    ";
        }
        // line 135
        echo "
    <h2>Flashes</h2>

    ";
        // line 138
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "flashes", []))) {
            // line 139
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "@WebProfiler/Collector/request.html.twig", 139)->display(twig_to_array(["data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "flashes", [])]));
            // line 140
            echo "    ";
        } else {
            // line 141
            echo "        <p>
            <em>No flashes</em>
        </p>
    ";
        }
        // line 145
        echo "
    ";
        // line 146
        if ($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", [])) {
            // line 147
            echo "        <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", ["token" => $this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", []), "token", [])]), "html", null, true);
            echo "\">Parent request: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", []), "token", []), "html", null, true);
            echo "</a></h2>

        ";
            // line 149
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 149)->display(twig_to_array(["bag" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", []), "getcollector", [0 => "request"], "method"), "requestattributes", [])]));
            // line 150
            echo "    ";
        }
        // line 151
        echo "
    ";
        // line 152
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", []))) {
            // line 153
            echo "        <h2>Sub requests</h2>

        ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo "            <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", ["token" => $this->getAttribute($context["child"], "token", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "token", []), "html", null, true);
                echo "</a></h3>
            ";
                // line 157
                $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 157)->display(twig_to_array(["bag" => $this->getAttribute($this->getAttribute($context["child"], "getcollector", [0 => "request"], "method"), "requestattributes", [])]));
                // line 158
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "    ";
        }
        // line 160
        echo "
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 160,  398 => 159,  392 => 158,  390 => 157,  383 => 156,  379 => 155,  375 => 153,  373 => 152,  370 => 151,  367 => 150,  365 => 149,  357 => 147,  355 => 146,  352 => 145,  346 => 141,  343 => 140,  340 => 139,  338 => 138,  333 => 135,  327 => 131,  324 => 130,  321 => 129,  319 => 128,  314 => 125,  308 => 121,  305 => 120,  302 => 119,  300 => 118,  295 => 115,  293 => 114,  288 => 111,  286 => 110,  281 => 107,  277 => 105,  271 => 103,  269 => 102,  266 => 101,  264 => 100,  259 => 97,  257 => 96,  252 => 93,  246 => 89,  243 => 88,  240 => 87,  238 => 86,  233 => 83,  227 => 79,  224 => 78,  221 => 77,  219 => 76,  214 => 73,  208 => 69,  205 => 68,  202 => 67,  200 => 66,  195 => 63,  189 => 59,  186 => 58,  183 => 57,  181 => 56,  177 => 54,  174 => 53,  166 => 47,  163 => 46,  158 => 43,  155 => 42,  145 => 39,  138 => 35,  131 => 31,  120 => 27,  116 => 25,  113 => 24,  110 => 23,  105 => 21,  101 => 20,  93 => 19,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  78 => 14,  72 => 12,  66 => 9,  58 => 8,  53 => 7,  50 => 6,  47 => 5,  44 => 4,  41 => 3,  22 => 1,);
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

{% block toolbar %}
    {% set request_handler %}
        {% if collector.controller.class is defined %}
            {% set link = collector.controller.file|file_link(collector.controller.line) %}
            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">{{ collector.controller.class|abbr_class }}</span>
            <span class=\"sf-toolbar-info-method\"{% if link %} onclick=\"window.location='{{link|e('js')}}';window.event.stopPropagation();return false;\"{% endif %}>
                {{ collector.controller.method }}
            </span>
        {% else %}
            <span class=\"sf-toolbar-info-class\">{{ collector.controller }}</span>
        {% endif %}
    {% endset %}
    {% set request_status_code_color = (400 > collector.statuscode) ? ((200 == collector.statuscode) ? 'green' : 'yellow') : 'red'%}
    {% set request_route = collector.route ? collector.route : 'NONE' %}
    {% set icon %}
        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\" title=\"{{ collector.statustext }}\">{{ collector.statuscode }}</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">{{ request_handler }}</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>{{ request_route }}</i></span>
    {% endset %}
    {% set text %}
        {% spaceless %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Status</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span> {{ collector.statustext }}
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                {{ request_handler }}
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>{{ request_route }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>
            </div>
        {% endspaceless %}
    {% endset %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAcCAQAAACn1QXuAAAD2UlEQVR42p2Ve0zTVxTHKS4+KCBqNomCClgEJJAYkznQQIFaWltAiigsxGUgMy6b45HWV4UKUoP1yaMS0DqniVpngKlEMoMzW2Z0QTf4Ax/bdCzFCpQWq60U+Xp/baG/EoGf3vPH7/b3PffTc++55/w8xg+wji4W3ImDw4S3DgSD5fGhA+wcbRxclqsB+30RnmWcda1JPWn1poj8e3TYlvb/l6edTdSLWvYHgcUIdSwiuduxOOdu/n90WF7350648J+a0ClxYNWECglgahP+OyUOPpm34sDMNt6Ez+QwjniAKSzFgKWTw6L33x/3/yMHzU09l/XKlykj7krlXURNDlsEaVm/a8Fh48trUEEKGY4Zb5SaXUpZH4oROAlKvjijPu9GQfcY6jkOQoBlWIgARCAVVbtNo1rxky9/lqiV/hMmQfwXfRtZQxYVVoItC5aUpO8rDIcvYvUNqcN0n7TfJkyC+5lUdYIH9hlOkn3bCWbVCoJLLX9C9+FZEcoIpj2HYHh9XT92ZbUEFl7XSvfhD2EVI5imFh/DX948+lvWhgAEHL3kBrNhNSOYvImCdSgEb+wbGrmjomCFv46DrWn6hN+2QY6ZDYH8Tt6Dv+c4Yfn9bofbN8ABG/xHjYcMKmNHC0Tw/XOF0Ez3+VaH2BMZ1Ezclaynnm1x8LTDBo7U65Tm0tejrltPwwvzIcQO7EIKFsB3c8uoprAqzZruwQpE1cnpeMVxxZLNc8mFQQy2W9Tb+1xSplbjD18EEvM7sjTjuksp6rXVDBeVN29s5ztjFY1VSILpfJAHZiFkG1lAtyTD+gvZsix5emPSC3flm6v3JGvfxNvn+8zDt/HLFR3XUYI6RFPltERkYFro4j6Itdd5JB6JzaaGBAKUFtorpOsHRNoLveAxU1jRQ6xFQbaVNNFBpICN6YjZ00UpN0swj4KFPK/MtTJBffXKoETk3mouiYw7cmoLpsGzNVFkth+NpTKWgnkjof9MnjOflRYqsy4rfV1udebZatIgHhyB0XmylsyL2VXJjtQReMNWe9uGH5JN3ytMubY6HS7J9HSYTI/L1c9ybQoTQfEwG2HN52p7KixuEQ91PH5wEYkE5sRxUYJaFCCr4g+6o+o2slEMNVHjCYqF+RBjJ87m0OI/2YnvwMVCgnLi2AjCcgQgpGen1Mh1bATSgV4pghGISKKyqT6Gj+CHRUj/grT66sGOp7tIjOpmhGEGqYLxA174DOW4gjZiP6EMn2LWO7pz+O8N2nYcQhGq7v+ITZg3wYcPPghFDKibGUNm3u/qq5hL1PWIxgJEIRZBmE69fQsyes/JMSWb+gAAAABJRU5ErkJggg==\" alt=\"Request\"></span>
    <strong>Request</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Request GET Parameters</h2>

    {% if collector.requestquery.all|length %}
        {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestquery } only %}
    {% else %}
        <p>
            <em>No GET parameters</em>
        </p>
    {% endif %}

    <h2>Request POST Parameters</h2>

    {% if collector.requestrequest.all|length %}
        {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestrequest } only %}
    {% else %}
        <p>
            <em>No POST parameters</em>
        </p>
    {% endif %}

    <h2>Request Attributes</h2>

    {% if collector.requestattributes.all|length %}
        {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestattributes } only %}
    {% else %}
        <p>
            <em>No attributes</em>
        </p>
    {% endif %}

    <h2>Request Cookies</h2>

    {% if collector.requestcookies.all|length %}
        {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestcookies } only %}
    {% else %}
        <p>
            <em>No cookies</em>
        </p>
    {% endif %}

    <h2>Request Headers</h2>

    {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestheaders } only %}

    <h2>Request Content</h2>

    {% if collector.content == false %}
        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    {% elseif collector.content %}
        <pre>{{ collector.content }}</pre>
    {% else %}
        <p><em>No content</em></p>
    {% endif %}

    <h2>Request Server Parameters</h2>

    {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestserver } only %}

    <h2>Response Headers</h2>

    {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.responseheaders } only %}

    <h2>Session Metadata</h2>

    {% if collector.sessionmetadata|length %}
    {% include '@WebProfiler/Profiler/table.html.twig' with { 'data': collector.sessionmetadata } only %}
    {% else %}
    <p>
        <em>No session metadata</em>
    </p>
    {% endif %}

    <h2>Session Attributes</h2>

    {% if collector.sessionattributes|length %}
        {% include '@WebProfiler/Profiler/table.html.twig' with { 'data': collector.sessionattributes } only %}
    {% else %}
        <p>
            <em>No session attributes</em>
        </p>
    {% endif %}

    <h2>Flashes</h2>

    {% if collector.flashes|length %}
        {% include '@WebProfiler/Profiler/table.html.twig' with { 'data': collector.flashes } only %}
    {% else %}
        <p>
            <em>No flashes</em>
        </p>
    {% endif %}

    {% if profile.parent %}
        <h2><a href=\"{{ path('_profiler', { 'token': profile.parent.token }) }}\">Parent request: {{ profile.parent.token }}</a></h2>

        {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': profile.parent.getcollector('request').requestattributes } only %}
    {% endif %}

    {% if profile.children|length %}
        <h2>Sub requests</h2>

        {% for child in profile.children %}
            <h3><a href=\"{{ path('_profiler', { 'token': child.token }) }}\">{{ child.token }}</a></h3>
            {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': child.getcollector('request').requestattributes } only %}
        {% endfor %}
    {% endif %}

{% endblock %}
", "@WebProfiler/Collector/request.html.twig", "/home/malakaton/PhpstormProjects/appSchedule/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/request.html.twig");
    }
}
