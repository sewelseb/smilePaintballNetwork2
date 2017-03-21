<?php

/* @SmilePlatform/Default/event.html.twig */
class __TwigTemplate_074b94df2a55078419f2b18c545cde295946edaf84f719e6dd8d043ee76dcddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "@SmilePlatform/Default/event.html.twig", 1);
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
        echo "
";
    }

    // line 10
    public function block_leftCollumn($context, array $blocks = array())
    {
        // line 11
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
    <hr>
    <div class=\"row\">
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "description", array()), "html", null, true);
        echo "
    </div>
    ";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute(($context["event"] ?? null), "teamComing", array())) >= 0)) {
            // line 17
            echo "        <hr>
        <div class=\"row\">
            <h3>Teams coming (";
            // line 19
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["event"] ?? null), "teamComing", array())), "html", null, true);
            echo ")</h3>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["event"] ?? null), "teamComing", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 21
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_team", array("id" => $this->getAttribute($context["team"], "id", array()))), "html", null, true);
                echo "\">
                    <div class=\"userAndTeamForEventPage col-md-1  small-tab-profile\">
                        <div class=\"text-center\" >
                        <span  class=\"pull-left\">
                            ";
                // line 25
                if ($this->getAttribute($context["team"], "teamPicture", array())) {
                    // line 26
                    echo "                                <img class=\"img-responsive \" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                    echo "\">
                            ";
                }
                // line 28
                echo "                        </span>
                            <span>
                            ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                echo "
                        </span>
                        </div>
                    </div>
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </div>
    ";
        }
        // line 38
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["event"] ?? null), "teamComing", array())) >= 0)) {
            // line 39
            echo "        <hr>
        <div class=\"row\">
            <h3>Players coming (";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["event"] ?? null), "userComing", array())), "html", null, true);
            echo ")</h3>
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["event"] ?? null), "userComing", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 43
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                    <div class=\"userAndTeamForEventPage col-md-1  small-tab-profile\">
                        <div class=\"text-center\" >
                            <span  class=\"pull-left\">
                                ";
                // line 47
                if (($this->getAttribute($context["user"], "picture", array()) != null)) {
                    // line 48
                    echo "                                    <img class=\"img-responsive \" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "picture", array()), "uploadDir", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "picture", array()), "url", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "\">
                                ";
                }
                // line 50
                echo "                            </span>
                            <span>
                                ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getEasyName", array()), "html", null, true);
                echo "
                            </span>
                        </div>
                    </div>
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </div>
    ";
        }
    }

    // line 62
    public function block_rightCollumn($context, array $blocks = array())
    {
        // line 63
        echo "    <div class=\"row\">
        <img src=\"/";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["event"] ?? null), "picture", array()), "getUploadDir", array(), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["event"] ?? null), "picture", array()), "url", array()), "html", null, true);
        echo "\" class=\"img-responsive\">
    </div>
    <div class=\"row\">
        <strong>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "name", array()), "html", null, true);
        echo "</strong>
        <div>
            Start Date: ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["event"] ?? null), "startingDate", array()), "d M Y"), "html", null, true);
        echo "
        </div>
        <div>
            End Date: ";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["event"] ?? null), "endDate", array()), "d M Y"), "html", null, true);
        echo "
        </div>
        <div>
            Country: ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "getFullCountry", array()), "html", null, true);
        echo "
        </div>
        ";
        // line 77
        if ($this->getAttribute(($context["event"] ?? null), "prix", array())) {
            // line 78
            echo "            <div>
                Price: ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "prix", array()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 82
        echo "        <div>
            Team coming: ";
        // line 83
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["event"] ?? null), "teamComing", array())), "html", null, true);
        echo "
        </div>
        <div>
            Player coming: ";
        // line 86
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["event"] ?? null), "userComing", array())), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <button class=\"btn btn-primary\" onclick=\"goToEventAsMe(";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "id", array()), "html", null, true);
        echo ")\"><span id=\"goingToEvent_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "id", array()), "html", null, true);
        echo "\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Going </button><button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">As <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>

        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuFollowAs\">
            <li class=\"non-clickable-dropdown\">
                Select a team:
            </li>
            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "teams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 97
            echo "                <li>
                    <a href=\"\" onclick=\"goToEventAsTeam(";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "id", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "id", array()), "html", null, true);
            echo ")\">
                        ";
            // line 99
            if ($this->getAttribute($context["team"], "teamPicture", array())) {
                // line 100
                echo "                            <span class=\"\"><img src=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                echo "\" class=\"img-responsive img-select-store-item-form-drop-down full-width\" id=\"storePic_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getId", array(), "method"), "html", null, true);
                echo "\"></span>
                        ";
            } else {
                // line 102
                echo "                            <span class=\"\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/smileyTop.png"), "html", null, true);
                echo "\" class=\"img-responsive img-select-store-item-form-drop-down full-width\" id=\"storePic_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getId", array(), "method"), "html", null, true);
                echo "\"></span>
                        ";
            }
            // line 104
            echo "                        <span class=\"select-store-store-name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getName", array(), "method"), "html", null, true);
            echo "</span>
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        </ul>
        ";
        // line 109
        if ($this->getAttribute($this->getAttribute(($context["event"] ?? null), "userComing", array()), "contains", array(0 => $this->getAttribute(($context["app"] ?? null), "user", array())), "method")) {
            // line 110
            echo "            <div>
                <button class=\"notgoingToEventAsMe_btn_";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "id", array()), "html", null, true);
            echo " btn \" onclick=\"dontComeAsMe(";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "id", array()), "html", null, true);
            echo ")\"><span class=\"notgoingToEventAsMe_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "id", array()), "html", null, true);
            echo "\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Not going </button><button class=\"btn\" id=\"notGoingAsCaret\">As <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>
            </div>
        ";
        } else {
            // line 114
            echo "            <button class=\"btn\" id=\"notGoingButNotMeAsCaret\">not going as <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>
        ";
        }
        // line 116
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "teams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 117
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["event"] ?? null), "teamComing", array()), "contains", array(0 => $context["team"]), "method")) {
                // line 118
                echo "                <div class=\"notGoingAsTeamBtns\" hidden>
                    <button class=\"notgoingToEventAsTeam_btn_";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "id", array()), "html", null, true);
                echo " btn \" onclick=\"dontComeAsTeam(";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "id", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "id", array()), "html", null, true);
                echo ")\"><span class=\"notgoingToEventAsTeam_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "id", array()), "html", null, true);
                echo "\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Not going as ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                echo " </button>
                </div>
            ";
            }
            // line 122
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "    </div>

    <span id=\"dontComeAsMe\" hidden>";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_event_dontComeAsMe_url");
        echo "</span>
    <span id=\"dontComeAsTeam\" hidden>";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_event_dontComeAsTeam_url");
        echo "</span>




";
    }

    public function getTemplateName()
    {
        return "@SmilePlatform/Default/event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 126,  352 => 125,  348 => 123,  342 => 122,  324 => 119,  321 => 118,  318 => 117,  313 => 116,  309 => 114,  299 => 111,  296 => 110,  294 => 109,  291 => 108,  280 => 104,  272 => 102,  262 => 100,  260 => 99,  254 => 98,  251 => 97,  247 => 96,  236 => 90,  229 => 86,  223 => 83,  220 => 82,  214 => 79,  211 => 78,  209 => 77,  204 => 75,  198 => 72,  192 => 69,  187 => 67,  179 => 64,  176 => 63,  173 => 62,  167 => 58,  155 => 52,  151 => 50,  141 => 48,  139 => 47,  131 => 43,  127 => 42,  123 => 41,  119 => 39,  116 => 38,  112 => 36,  100 => 30,  96 => 28,  86 => 26,  84 => 25,  76 => 21,  72 => 20,  68 => 19,  64 => 17,  62 => 16,  57 => 14,  50 => 11,  47 => 10,  42 => 7,  39 => 6,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SmilePlatform/Default/event.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle\\Resources\\views\\Default\\event.html.twig");
    }
}
