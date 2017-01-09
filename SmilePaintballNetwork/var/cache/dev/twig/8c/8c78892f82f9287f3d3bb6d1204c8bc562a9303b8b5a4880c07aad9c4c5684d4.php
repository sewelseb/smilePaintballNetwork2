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
        $__internal_4a2789f85345414f409ff0ec48d94ab25aba63d9a28538dea103eeb3f1fcac86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2789f85345414f409ff0ec48d94ab25aba63d9a28538dea103eeb3f1fcac86->enter($__internal_4a2789f85345414f409ff0ec48d94ab25aba63d9a28538dea103eeb3f1fcac86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a2789f85345414f409ff0ec48d94ab25aba63d9a28538dea103eeb3f1fcac86->leave($__internal_4a2789f85345414f409ff0ec48d94ab25aba63d9a28538dea103eeb3f1fcac86_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_c4956ecd8d6260fab9f9c7f8fc268074b3eea7735935a6c40fedfa6ea1edfb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4956ecd8d6260fab9f9c7f8fc268074b3eea7735935a6c40fedfa6ea1edfb7a->enter($__internal_c4956ecd8d6260fab9f9c7f8fc268074b3eea7735935a6c40fedfa6ea1edfb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_c4956ecd8d6260fab9f9c7f8fc268074b3eea7735935a6c40fedfa6ea1edfb7a->leave($__internal_c4956ecd8d6260fab9f9c7f8fc268074b3eea7735935a6c40fedfa6ea1edfb7a_prof);

    }

    // line 6
    public function block_postYourFun($context, array $blocks = array())
    {
        $__internal_59eacafb74ab0017948ea7df412fadb3a4f5e7d06a2aee2a25e66d6e68ef3a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59eacafb74ab0017948ea7df412fadb3a4f5e7d06a2aee2a25e66d6e68ef3a33->enter($__internal_59eacafb74ab0017948ea7df412fadb3a4f5e7d06a2aee2a25e66d6e68ef3a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "postYourFun"));

        // line 7
        echo "
";
        
        $__internal_59eacafb74ab0017948ea7df412fadb3a4f5e7d06a2aee2a25e66d6e68ef3a33->leave($__internal_59eacafb74ab0017948ea7df412fadb3a4f5e7d06a2aee2a25e66d6e68ef3a33_prof);

    }

    // line 10
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_0c85c3d53d8842d0c9438ba623cfa9044860d879ee8f0d72a6372c6d6dc43f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c85c3d53d8842d0c9438ba623cfa9044860d879ee8f0d72a6372c6d6dc43f2a->enter($__internal_0c85c3d53d8842d0c9438ba623cfa9044860d879ee8f0d72a6372c6d6dc43f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

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
        
        $__internal_0c85c3d53d8842d0c9438ba623cfa9044860d879ee8f0d72a6372c6d6dc43f2a->leave($__internal_0c85c3d53d8842d0c9438ba623cfa9044860d879ee8f0d72a6372c6d6dc43f2a_prof);

    }

    // line 62
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_9ecf05f69adef2c7433346ff82b3a09899d990d80b8464bbd05c2b0d9417d979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecf05f69adef2c7433346ff82b3a09899d990d80b8464bbd05c2b0d9417d979->enter($__internal_9ecf05f69adef2c7433346ff82b3a09899d990d80b8464bbd05c2b0d9417d979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

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
        <button class=\"btn btn-primary\" onclick=\"goToEventAsMe(";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo ")\"><span id=\"goingToEvent_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo "\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Going </button><button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">As <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>

        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuFollowAs\">
            <li class=\"non-clickable-dropdown\">
                Select a team:
            </li>
            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "teams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 97
            echo "                <li>
                    <a href=\"\" onclick=\"goToEventAsTeam(";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
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
        if ($this->getAttribute($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "userComing", array()), "contains", array(0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())), "method")) {
            // line 110
            echo "            <div>
                <button class=\"notgoingToEventAsMe_btn_";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
            echo " btn \" onclick=\"dontComeAsMe(";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
            echo ")\"><span class=\"notgoingToEventAsMe_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "teams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 117
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "teamComing", array()), "contains", array(0 => $context["team"]), "method")) {
                // line 118
                echo "                <div class=\"notGoingAsTeamBtns\" hidden>
                    <button class=\"notgoingToEventAsTeam_btn_";
                // line 119
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
        
        $__internal_9ecf05f69adef2c7433346ff82b3a09899d990d80b8464bbd05c2b0d9417d979->leave($__internal_9ecf05f69adef2c7433346ff82b3a09899d990d80b8464bbd05c2b0d9417d979_prof);

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
        return array (  383 => 126,  379 => 125,  375 => 123,  369 => 122,  351 => 119,  348 => 118,  345 => 117,  340 => 116,  336 => 114,  326 => 111,  323 => 110,  321 => 109,  318 => 108,  307 => 104,  299 => 102,  289 => 100,  287 => 99,  281 => 98,  278 => 97,  274 => 96,  263 => 90,  256 => 86,  250 => 83,  247 => 82,  241 => 79,  238 => 78,  236 => 77,  231 => 75,  225 => 72,  219 => 69,  214 => 67,  206 => 64,  203 => 63,  197 => 62,  188 => 58,  176 => 52,  172 => 50,  162 => 48,  160 => 47,  152 => 43,  148 => 42,  144 => 41,  140 => 39,  137 => 38,  133 => 36,  121 => 30,  117 => 28,  107 => 26,  105 => 25,  97 => 21,  93 => 20,  89 => 19,  85 => 17,  83 => 16,  78 => 14,  71 => 11,  65 => 10,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
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
    </div>

    <span id=\"dontComeAsMe\" hidden>{{ path('smile_api_event_dontComeAsMe_url') }}</span>
    <span id=\"dontComeAsTeam\" hidden>{{ path('smile_api_event_dontComeAsTeam_url') }}</span>




{% endblock %}", "SmilePlatformBundle::Default/event.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/event.html.twig");
    }
}
