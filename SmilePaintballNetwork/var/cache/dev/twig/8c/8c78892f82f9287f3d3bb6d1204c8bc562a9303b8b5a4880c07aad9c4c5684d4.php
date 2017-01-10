<?php

/* SmilePlatformBundle::Default/event.html.twig */
class __TwigTemplate_354b5989a4da7f22a832f5ddcca136b965438d807a4bd51ad188f870bb57d944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle::Default/event.html.twig", 1);
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
        $__internal_07e27efd27c2f9bf6e83d10f9e6cef43ea685147bd47de87ba1ebdf11f643e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e27efd27c2f9bf6e83d10f9e6cef43ea685147bd47de87ba1ebdf11f643e9b->enter($__internal_07e27efd27c2f9bf6e83d10f9e6cef43ea685147bd47de87ba1ebdf11f643e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07e27efd27c2f9bf6e83d10f9e6cef43ea685147bd47de87ba1ebdf11f643e9b->leave($__internal_07e27efd27c2f9bf6e83d10f9e6cef43ea685147bd47de87ba1ebdf11f643e9b_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_67c50e5653af56fbf5669fde1d2bf3b78e7e4f4d0e06fcb53bc40c6d1e980b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c50e5653af56fbf5669fde1d2bf3b78e7e4f4d0e06fcb53bc40c6d1e980b65->enter($__internal_67c50e5653af56fbf5669fde1d2bf3b78e7e4f4d0e06fcb53bc40c6d1e980b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_67c50e5653af56fbf5669fde1d2bf3b78e7e4f4d0e06fcb53bc40c6d1e980b65->leave($__internal_67c50e5653af56fbf5669fde1d2bf3b78e7e4f4d0e06fcb53bc40c6d1e980b65_prof);

    }

    // line 6
    public function block_postYourFun($context, array $blocks = array())
    {
        $__internal_a9f16aace4ae9dd7112bcb51020ef8c4b6fff0b1bd7ae4afa1c851fbbcce3f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f16aace4ae9dd7112bcb51020ef8c4b6fff0b1bd7ae4afa1c851fbbcce3f86->enter($__internal_a9f16aace4ae9dd7112bcb51020ef8c4b6fff0b1bd7ae4afa1c851fbbcce3f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "postYourFun"));

        // line 7
        echo "
";
        
        $__internal_a9f16aace4ae9dd7112bcb51020ef8c4b6fff0b1bd7ae4afa1c851fbbcce3f86->leave($__internal_a9f16aace4ae9dd7112bcb51020ef8c4b6fff0b1bd7ae4afa1c851fbbcce3f86_prof);

    }

    // line 10
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_0f3b51e44630fcde09314dd8833e051fe40429df37b03d528689bed9652c960b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3b51e44630fcde09314dd8833e051fe40429df37b03d528689bed9652c960b->enter($__internal_0f3b51e44630fcde09314dd8833e051fe40429df37b03d528689bed9652c960b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 11
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</h1>
    <hr>
    <div class=\"row\">
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "
    </div>
    ";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "teamComing", array())) >= 0)) {
            // line 17
            echo "        <hr>
        <div class=\"row\">
            <h3>Teams coming (";
            // line 19
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "teamComing", array())), "html", null, true);
            echo ")</h3>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "teamComing", array()));
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
        if ((twig_length_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "teamComing", array())) >= 0)) {
            // line 39
            echo "        <hr>
        <div class=\"row\">
            <h3>Players coming (";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "userComing", array())), "html", null, true);
            echo ")</h3>
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "userComing", array()));
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
        
        $__internal_0f3b51e44630fcde09314dd8833e051fe40429df37b03d528689bed9652c960b->leave($__internal_0f3b51e44630fcde09314dd8833e051fe40429df37b03d528689bed9652c960b_prof);

    }

    // line 62
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_dcad96ede94df3514fe873938d3cdd634b414025037f8dfc958377b161528ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcad96ede94df3514fe873938d3cdd634b414025037f8dfc958377b161528ee0->enter($__internal_dcad96ede94df3514fe873938d3cdd634b414025037f8dfc958377b161528ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 63
        echo "    <div class=\"row\">
        <img src=\"/";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "picture", array()), "getUploadDir", array(), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "picture", array()), "url", array()), "html", null, true);
        echo "\" class=\"img-responsive\">
    </div>
    <div class=\"row\">
        <strong>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</strong>
        <div>
            Start Date: ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "startingDate", array()), "d M Y"), "html", null, true);
        echo "
        </div>
        <div>
            End Date: ";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "endDate", array()), "d M Y"), "html", null, true);
        echo "
        </div>
        <div>
            Country: ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "getFullCountry", array()), "html", null, true);
        echo "
        </div>
        ";
        // line 77
        if ($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "prix", array())) {
            // line 78
            echo "            <div>
                Price: ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "prix", array()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 82
        echo "        <div>
            Team coming: ";
        // line 83
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "teamComing", array())), "html", null, true);
        echo "
        </div>
        <div>
            Player coming: ";
        // line 86
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "userComing", array())), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 90
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 91
            echo "            <button class=\"btn btn-primary\" onclick=\"goToEventAsMe(";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
            echo ")\"><span id=\"goingToEvent_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
            echo "\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Going </button><button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">As <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>

            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuFollowAs\">
                <li class=\"non-clickable-dropdown\">
                    Select a team:
                </li>
                ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "teams", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 98
                echo "                    <li>
                        <a href=\"\" onclick=\"goToEventAsTeam(";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "id", array()), "html", null, true);
                echo ")\">
                            ";
                // line 100
                if ($this->getAttribute($context["team"], "teamPicture", array())) {
                    // line 101
                    echo "                                <span class=\"\"><img src=\"/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                    echo "\" class=\"img-responsive img-select-store-item-form-drop-down full-width\" id=\"storePic_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getId", array(), "method"), "html", null, true);
                    echo "\"></span>
                            ";
                } else {
                    // line 103
                    echo "                                <span class=\"\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/smileyTop.png"), "html", null, true);
                    echo "\" class=\"img-responsive img-select-store-item-form-drop-down full-width\" id=\"storePic_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getId", array(), "method"), "html", null, true);
                    echo "\"></span>
                            ";
                }
                // line 105
                echo "                            <span class=\"select-store-store-name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getName", array(), "method"), "html", null, true);
                echo "</span>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "            </ul>
            ";
            // line 110
            if ($this->getAttribute($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "userComing", array()), "contains", array(0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())), "method")) {
                // line 111
                echo "                <div>
                    <button class=\"notgoingToEventAsMe_btn_";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
                echo " btn \" onclick=\"dontComeAsMe(";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
                echo ")\"><span class=\"notgoingToEventAsMe_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
                echo "\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Not going </button><button class=\"btn\" id=\"notGoingAsCaret\">As <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>
                </div>
            ";
            } else {
                // line 115
                echo "                <button class=\"btn\" id=\"notGoingButNotMeAsCaret\">not going as <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>
            ";
            }
            // line 117
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "teams", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 118
                echo "                ";
                if ($this->getAttribute($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "teamComing", array()), "contains", array(0 => $context["team"]), "method")) {
                    // line 119
                    echo "                    <div class=\"notGoingAsTeamBtns\" hidden>
                        <button class=\"notgoingToEventAsTeam_btn_";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "id", array()), "html", null, true);
                    echo " btn \" onclick=\"dontComeAsTeam(";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "id", array()), "html", null, true);
                    echo ")\"><span class=\"notgoingToEventAsTeam_";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "id", array()), "html", null, true);
                    echo "\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Not going as ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                    echo " </button>
                    </div>
                ";
                }
                // line 123
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "        ";
        }
        // line 125
        echo "    </div>

    <span id=\"dontComeAsMe\" hidden>";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_event_dontComeAsMe_url");
        echo "</span>
    <span id=\"dontComeAsTeam\" hidden>";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_event_dontComeAsTeam_url");
        echo "</span>




";
        
        $__internal_dcad96ede94df3514fe873938d3cdd634b414025037f8dfc958377b161528ee0->leave($__internal_dcad96ede94df3514fe873938d3cdd634b414025037f8dfc958377b161528ee0_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 128,  385 => 127,  381 => 125,  378 => 124,  372 => 123,  354 => 120,  351 => 119,  348 => 118,  343 => 117,  339 => 115,  329 => 112,  326 => 111,  324 => 110,  321 => 109,  310 => 105,  302 => 103,  292 => 101,  290 => 100,  284 => 99,  281 => 98,  277 => 97,  265 => 91,  263 => 90,  256 => 86,  250 => 83,  247 => 82,  241 => 79,  238 => 78,  236 => 77,  231 => 75,  225 => 72,  219 => 69,  214 => 67,  206 => 64,  203 => 63,  197 => 62,  188 => 58,  176 => 52,  172 => 50,  162 => 48,  160 => 47,  152 => 43,  148 => 42,  144 => 41,  140 => 39,  137 => 38,  133 => 36,  121 => 30,  117 => 28,  107 => 26,  105 => 25,  97 => 21,  93 => 20,  89 => 19,  85 => 17,  83 => 16,  78 => 14,  71 => 11,  65 => 10,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SmilePlatformBundle::Default/layout.html.twig\" %}

{% block pageHeader %}

{% endblock %}
{% block postYourFun %}

{% endblock %}

{% block leftCollumn %}
    <h1>{{ event.name }}</h1>
    <hr>
    <div class=\"row\">
        {{ event.description }}
    </div>
    {% if event.teamComing|length>=0 %}
        <hr>
        <div class=\"row\">
            <h3>Teams coming ({{ event.teamComing|length }})</h3>
            {% for team in event.teamComing %}
                <a href=\"{{ path('smile_platform_team', {'id': team.id}) }}\">
                    <div class=\"userAndTeamForEventPage col-md-1  small-tab-profile\">
                        <div class=\"text-center\" >
                        <span  class=\"pull-left\">
                            {% if team.teamPicture %}
                                <img class=\"img-responsive \" src=\"{{team.teamPicture.uploadDir}}/{{team.teamPicture.url}}\" alt=\"{{ team.name }}\">
                            {% endif %}
                        </span>
                            <span>
                            {{ team.name }}
                        </span>
                        </div>
                    </div>
                </a>
            {% endfor %}
        </div>
    {% endif %}
    {% if event.teamComing|length>=0 %}
        <hr>
        <div class=\"row\">
            <h3>Players coming ({{ event.userComing|length }})</h3>
            {% for user in event.userComing %}
                <a href=\"{{ path('smile_platform_profile', {'userId': user.id}) }}\">
                    <div class=\"userAndTeamForEventPage col-md-1  small-tab-profile\">
                        <div class=\"text-center\" >
                            <span  class=\"pull-left\">
                                {% if user.picture != null %}
                                    <img class=\"img-responsive \" src=\"{{user.picture.uploadDir}}/{{user.picture.url}}\" alt=\"{{ user.username }}\">
                                {% endif %}
                            </span>
                            <span>
                                {{ user.getEasyName }}
                            </span>
                        </div>
                    </div>
                </a>
            {% endfor %}
        </div>
    {% endif %}
{% endblock %}

{% block rightCollumn %}
    <div class=\"row\">
        <img src=\"/{{event.picture.getUploadDir()}}/{{event.picture.url}}\" class=\"img-responsive\">
    </div>
    <div class=\"row\">
        <strong>{{ event.name }}</strong>
        <div>
            Start Date: {{ event.startingDate | date('d M Y') }}
        </div>
        <div>
            End Date: {{ event.endDate | date('d M Y') }}
        </div>
        <div>
            Country: {{ event.getFullCountry }}
        </div>
        {% if event.prix %}
            <div>
                Price: {{ event.prix }}
            </div>
        {% endif %}
        <div>
            Team coming: {{ event.teamComing|length }}
        </div>
        <div>
            Player coming: {{ event.userComing|length }}
        </div>
    </div>
    <div class=\"row\">
        {% if app.user %}
            <button class=\"btn btn-primary\" onclick=\"goToEventAsMe({{ event.id }})\"><span id=\"goingToEvent_{{ event.id }}\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Going </button><button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">As <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>

            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuFollowAs\">
                <li class=\"non-clickable-dropdown\">
                    Select a team:
                </li>
                {% for team in app.user.teams %}
                    <li>
                        <a href=\"\" onclick=\"goToEventAsTeam({{ event.id }}, {{ team.id }})\">
                            {% if (team.teamPicture) %}
                                <span class=\"\"><img src=\"/{{team.teamPicture.uploadDir}}/{{team.teamPicture.url}}\" class=\"img-responsive img-select-store-item-form-drop-down full-width\" id=\"storePic_{{ team.getId() }}\"></span>
                            {% else %}
                                <span class=\"\"><img src=\"{{ asset('images/smileyTop.png') }}\" class=\"img-responsive img-select-store-item-form-drop-down full-width\" id=\"storePic_{{ team.getId() }}\"></span>
                            {% endif %}
                            <span class=\"select-store-store-name\">{{ team.getName() }}</span>
                        </a>
                    </li>
                {% endfor %}
            </ul>
            {% if event.userComing.contains(app.user) %}
                <div>
                    <button class=\"notgoingToEventAsMe_btn_{{ event.id }} btn \" onclick=\"dontComeAsMe({{ event.id }})\"><span class=\"notgoingToEventAsMe_{{ event.id }}\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Not going </button><button class=\"btn\" id=\"notGoingAsCaret\">As <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>
                </div>
            {% else %}
                <button class=\"btn\" id=\"notGoingButNotMeAsCaret\">not going as <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>
            {% endif %}
            {% for team in app.user.teams %}
                {% if event.teamComing.contains(team) %}
                    <div class=\"notGoingAsTeamBtns\" hidden>
                        <button class=\"notgoingToEventAsTeam_btn_{{ event.id }}_{{ team.id }} btn \" onclick=\"dontComeAsTeam({{ event.id }}, {{ team.id }})\"><span class=\"notgoingToEventAsTeam_{{ event.id }}_{{ team.id }}\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Not going as {{ team.name }} </button>
                    </div>
                {% endif %}
            {% endfor %}
        {% endif %}
    </div>

    <span id=\"dontComeAsMe\" hidden>{{ path('smile_api_event_dontComeAsMe_url') }}</span>
    <span id=\"dontComeAsTeam\" hidden>{{ path('smile_api_event_dontComeAsTeam_url') }}</span>




{% endblock %}", "SmilePlatformBundle::Default/event.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/event.html.twig");
    }
}
