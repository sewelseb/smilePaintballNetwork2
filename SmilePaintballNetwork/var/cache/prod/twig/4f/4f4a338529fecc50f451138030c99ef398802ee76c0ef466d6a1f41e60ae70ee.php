<?php

/* @SmilePlatform/Default/events.html.twig */
class __TwigTemplate_38425c0edfe8365bb9334ba38b0d27f2e9cba1bb35c97fd3e8e56cfb21ba4008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "@SmilePlatform/Default/events.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'postYourFun' => array($this, 'block_postYourFun'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
            'rightCollumn' => array($this, 'block_rightCollumn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 6
    public function block_postYourFun($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"row\">
        <div class=\"container\">
            <div class=\"col-md-9\">
                <div class=\"form-group\">
                    ";
        // line 11
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 12
            echo "                        <H2><strong>+ CREATE an event</strong></H2>
                        ";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Event:addNew", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()))));
            echo "
                    ";
        } else {
            // line 15
            echo "
                        <H2><strong>+ CREATE an event</strong></H2>
                        <div class=\"form-group postOpenSignIn\">
                            <input class=\"form-control input-lg postOpenSignIn\" id=\"postTitleOpenSignIn\" placeholder=\"Event Title\">
                        </div>
                        <div class=\"form-group postOpenSignIn\">
                            <div class=\"pull-right\">
                                <button class=\"btn btn-primary postOpenSignIn\"><strong>CREATE</strong></button>
                            </div>
                        </div>

                    ";
        }
        // line 27
        echo "                </div>
            </div>

        </div>
    </div>
";
    }

    // line 34
    public function block_leftCollumn($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["month"] = "";
        // line 36
        echo "    ";
        $context["year"] = "";
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 38
            echo "        ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startingDate", array()), "month") == ($context["month"] ?? null)) && (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startingDate", array()), "Y") == ($context["year"] ?? null)))) {
                // line 39
                echo "
        ";
            } else {
                // line 41
                echo "            ";
                $context["month"] = twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startingDate", array()), "M");
                // line 42
                echo "            ";
                $context["year"] = twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startingDate", array()), "Y");
                // line 43
                echo "            <div class=\"row\">
                <H2><strong>";
                // line 44
                echo twig_escape_filter($this->env, ($context["month"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
                echo "</strong></H2>
            </div>

        ";
            }
            // line 48
            echo "        <div class=\"row\">
            <div class=\"col-md-4\">
                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_event", array("eventId" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\"><img src=\"/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "picture", array()), "getUploadDir", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "picture", array()), "url", array()), "html", null, true);
            echo "\" class=\"img-responsive\"></a>
            </div>
            <div class=\"col-md-8\">
                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_event", array("eventId" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">
                    <strong>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</strong>
                    <div>
                        Date: ";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startingDate", array()), "d M Y"), "html", null, true);
            echo "
                    </div>
                    <div>
                        Country: ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "getFullCountry", array()), "html", null, true);
            echo "
                    </div>
                    ";
            // line 61
            if ($this->getAttribute($context["event"], "prix", array())) {
                // line 62
                echo "                        <div>
                            Price: ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "prix", array()), "html", null, true);
                echo "
                        </div>
                    ";
            }
            // line 66
            echo "                    <div>
                        Team coming: ";
            // line 67
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["event"], "teamComing", array())), "html", null, true);
            echo "
                    </div>
                    <div>
                        Player coming: ";
            // line 70
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["event"], "userComing", array())), "html", null, true);
            echo "
                    </div>
                </a>
                <div>
                    <button class=\"btn btn-primary\" onclick=\"goToEventAsMe(";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo ")\"><span id=\"goingToEvent_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Going </button><button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">As <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>

                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuFollowAs\">
                        <li class=\"non-clickable-dropdown\">
                            Select a team:
                        </li>
                        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "teams", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 81
                echo "                            <li>
                                <a href=\"\" onclick=\"goToEventAsTeam(";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "id", array()), "html", null, true);
                echo ")\">
                                    ";
                // line 83
                if ($this->getAttribute($context["team"], "teamPicture", array())) {
                    // line 84
                    echo "                                        <span class=\"\"><img src=\"/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                    echo "\" class=\"img-responsive img-select-store-item-form-drop-down full-width\" id=\"storePic_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getId", array(), "method"), "html", null, true);
                    echo "\"></span>
                                    ";
                } else {
                    // line 86
                    echo "                                        <span class=\"\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/smileyTop.png"), "html", null, true);
                    echo "\" class=\"img-responsive img-select-store-item-form-drop-down full-width\" id=\"storePic_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getId", array(), "method"), "html", null, true);
                    echo "\"></span>
                                    ";
                }
                // line 88
                echo "                                    <span class=\"select-store-store-name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getName", array(), "method"), "html", null, true);
                echo "</span>
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                    </ul>
                </div>
            </div>
        </div>
        <hr>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 102
    public function block_rightCollumn($context, array $blocks = array())
    {
        // line 103
        echo "





";
    }

    public function getTemplateName()
    {
        return "@SmilePlatform/Default/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 103,  251 => 102,  236 => 92,  225 => 88,  217 => 86,  207 => 84,  205 => 83,  199 => 82,  196 => 81,  192 => 80,  181 => 74,  174 => 70,  168 => 67,  165 => 66,  159 => 63,  156 => 62,  154 => 61,  149 => 59,  143 => 56,  138 => 54,  134 => 53,  124 => 50,  120 => 48,  111 => 44,  108 => 43,  105 => 42,  102 => 41,  98 => 39,  95 => 38,  90 => 37,  87 => 36,  84 => 35,  81 => 34,  72 => 27,  58 => 15,  53 => 13,  50 => 12,  48 => 11,  42 => 7,  39 => 6,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SmilePlatform/Default/events.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle\\Resources\\views\\Default\\events.html.twig");
    }
}
