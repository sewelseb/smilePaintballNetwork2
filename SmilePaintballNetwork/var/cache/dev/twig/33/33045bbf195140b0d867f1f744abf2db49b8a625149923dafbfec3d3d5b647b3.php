<?php

/* SmilePlatformBundle:Default:events.html.twig */
class __TwigTemplate_43c8a978ecfefc6bc4747a509a20e169709701e6a4a0534932cad9a826f9d9fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle:Default:events.html.twig", 1);
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
        $__internal_65786b4d13f7d3d385f61a9110f2acb5c345dde55e94cafad8be86e6bac08e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65786b4d13f7d3d385f61a9110f2acb5c345dde55e94cafad8be86e6bac08e18->enter($__internal_65786b4d13f7d3d385f61a9110f2acb5c345dde55e94cafad8be86e6bac08e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65786b4d13f7d3d385f61a9110f2acb5c345dde55e94cafad8be86e6bac08e18->leave($__internal_65786b4d13f7d3d385f61a9110f2acb5c345dde55e94cafad8be86e6bac08e18_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_e10a7ccf166d5e4090b7bf5f76d161c5409164edcb6b7628615cd942d745a779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10a7ccf166d5e4090b7bf5f76d161c5409164edcb6b7628615cd942d745a779->enter($__internal_e10a7ccf166d5e4090b7bf5f76d161c5409164edcb6b7628615cd942d745a779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_e10a7ccf166d5e4090b7bf5f76d161c5409164edcb6b7628615cd942d745a779->leave($__internal_e10a7ccf166d5e4090b7bf5f76d161c5409164edcb6b7628615cd942d745a779_prof);

    }

    // line 6
    public function block_postYourFun($context, array $blocks = array())
    {
        $__internal_9c91689e0cd8498dfb63778799b62c7a2f322a21dc8b1c441b3fbb4cabcd4591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c91689e0cd8498dfb63778799b62c7a2f322a21dc8b1c441b3fbb4cabcd4591->enter($__internal_9c91689e0cd8498dfb63778799b62c7a2f322a21dc8b1c441b3fbb4cabcd4591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "postYourFun"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"container\">
            <div class=\"col-md-9\">
                <div class=\"form-group\">
                    ";
        // line 11
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 12
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Event:addNew", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()))));
            echo "
                    ";
        } else {
            // line 14
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
        // line 26
        echo "                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_9c91689e0cd8498dfb63778799b62c7a2f322a21dc8b1c441b3fbb4cabcd4591->leave($__internal_9c91689e0cd8498dfb63778799b62c7a2f322a21dc8b1c441b3fbb4cabcd4591_prof);

    }

    // line 33
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_185b1199a169c169822c249ffce9df4e2a15f2348f1d6f5f10b9a730dbf005b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185b1199a169c169822c249ffce9df4e2a15f2348f1d6f5f10b9a730dbf005b4->enter($__internal_185b1199a169c169822c249ffce9df4e2a15f2348f1d6f5f10b9a730dbf005b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 34
        echo "    ";
        $context["month"] = "";
        // line 35
        echo "    ";
        $context["year"] = "";
        // line 36
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 37
            echo "        ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startingDate", array()), "month") == ($context["month"] ?? $this->getContext($context, "month"))) && (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startingDate", array()), "Y") == ($context["year"] ?? $this->getContext($context, "year"))))) {
                // line 38
                echo "
        ";
            } else {
                // line 40
                echo "            ";
                $context["month"] = twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startingDate", array()), "M");
                // line 41
                echo "            ";
                $context["year"] = twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startingDate", array()), "Y");
                // line 42
                echo "            <div class=\"row\">
                <H2><strong>";
                // line 43
                echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
                echo "</strong></H2>
            </div>

        ";
            }
            // line 47
            echo "        <div class=\"row\">
            <div class=\"col-md-4\">
                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_event", array("eventId" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\"><img src=\"/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "picture", array()), "getUploadDir", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "picture", array()), "url", array()), "html", null, true);
            echo "\" class=\"img-responsive\"></a>
            </div>
            <div class=\"col-md-8\">
                <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_event", array("eventId" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">
                    <strong>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</strong>
                    <div>
                        Date: ";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startingDate", array()), "d M Y"), "html", null, true);
            echo "
                    </div>
                    <div>
                        Country: ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "getFullCountry", array()), "html", null, true);
            echo "
                    </div>
                    ";
            // line 60
            if ($this->getAttribute($context["event"], "prix", array())) {
                // line 61
                echo "                        <div>
                            Price: ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "prix", array()), "html", null, true);
                echo "
                        </div>
                    ";
            }
            // line 65
            echo "                    <div>
                        Team coming: ";
            // line 66
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["event"], "teamComing", array())), "html", null, true);
            echo "
                    </div>
                    <div>
                        Player coming: ";
            // line 69
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["event"], "userComing", array())), "html", null, true);
            echo "
                    </div>
                </a>
                <div>
                    <button class=\"btn btn-primary\" onclick=\"goToEventAsMe(";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo ")\"><span id=\"goingToEvent_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Going </button><button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">As <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>

                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuFollowAs\">
                        <li class=\"non-clickable-dropdown\">
                            Select a team:
                        </li>
                        ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "teams", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 80
                echo "                            <li>
                                <a href=\"\" onclick=\"goToEventAsTeam(";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "id", array()), "html", null, true);
                echo ")\">
                                    ";
                // line 82
                if ($this->getAttribute($context["team"], "teamPicture", array())) {
                    // line 83
                    echo "                                        <span class=\"\"><img src=\"/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                    echo "\" class=\"img-responsive img-select-store-item-form-drop-down full-width\" id=\"storePic_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getId", array(), "method"), "html", null, true);
                    echo "\"></span>
                                    ";
                } else {
                    // line 85
                    echo "                                        <span class=\"\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/smileyTop.png"), "html", null, true);
                    echo "\" class=\"img-responsive img-select-store-item-form-drop-down full-width\" id=\"storePic_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getId", array(), "method"), "html", null, true);
                    echo "\"></span>
                                    ";
                }
                // line 87
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
            // line 91
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
        
        $__internal_185b1199a169c169822c249ffce9df4e2a15f2348f1d6f5f10b9a730dbf005b4->leave($__internal_185b1199a169c169822c249ffce9df4e2a15f2348f1d6f5f10b9a730dbf005b4_prof);

    }

    // line 101
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_2397d2b6b9a9f26e361defa8a69bc7729cef031e4a429c17e092de666406bc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2397d2b6b9a9f26e361defa8a69bc7729cef031e4a429c17e092de666406bc34->enter($__internal_2397d2b6b9a9f26e361defa8a69bc7729cef031e4a429c17e092de666406bc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 102
        echo "





";
        
        $__internal_2397d2b6b9a9f26e361defa8a69bc7729cef031e4a429c17e092de666406bc34->leave($__internal_2397d2b6b9a9f26e361defa8a69bc7729cef031e4a429c17e092de666406bc34_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 102,  273 => 101,  255 => 91,  244 => 87,  236 => 85,  226 => 83,  224 => 82,  218 => 81,  215 => 80,  211 => 79,  200 => 73,  193 => 69,  187 => 66,  184 => 65,  178 => 62,  175 => 61,  173 => 60,  168 => 58,  162 => 55,  157 => 53,  153 => 52,  143 => 49,  139 => 47,  130 => 43,  127 => 42,  124 => 41,  121 => 40,  117 => 38,  114 => 37,  109 => 36,  106 => 35,  103 => 34,  97 => 33,  85 => 26,  71 => 14,  65 => 12,  63 => 11,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"container\">
            <div class=\"col-md-9\">
                <div class=\"form-group\">
                    {% if app.user %}
                        {{  render(controller('SmilePlatformBundle:Event:addNew', {'request': app.request})) }}
                    {% else %}

                        <H2><strong>+ CREATE an event</strong></H2>
                        <div class=\"form-group postOpenSignIn\">
                            <input class=\"form-control input-lg postOpenSignIn\" id=\"postTitleOpenSignIn\" placeholder=\"Event Title\">
                        </div>
                        <div class=\"form-group postOpenSignIn\">
                            <div class=\"pull-right\">
                                <button class=\"btn btn-primary postOpenSignIn\"><strong>CREATE</strong></button>
                            </div>
                        </div>

                    {% endif %}
                </div>
            </div>

        </div>
    </div>
{% endblock %}

{% block leftCollumn %}
    {% set month = '' %}
    {% set year = '' %}
    {% for event in events %}
        {% if event.startingDate|date('month')==month  and event.startingDate|date('Y')==year %}

        {% else %}
            {% set month = event.startingDate|date('M') %}
            {% set year = event.startingDate|date('Y') %}
            <div class=\"row\">
                <H2><strong>{{ month }} {{ year }}</strong></H2>
            </div>

        {% endif %}
        <div class=\"row\">
            <div class=\"col-md-4\">
                <a href=\"{{ path('smile_platform_event', {'eventId': event.id}) }}\"><img src=\"/{{event.picture.getUploadDir()}}/{{event.picture.url}}\" class=\"img-responsive\"></a>
            </div>
            <div class=\"col-md-8\">
                <a href=\"{{ path('smile_platform_event', {'eventId': event.id}) }}\">
                    <strong>{{ event.name }}</strong>
                    <div>
                        Date: {{ event.startingDate | date('d M Y') }}
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
                </a>
                <div>
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
                </div>
            </div>
        </div>
        <hr>


    {% endfor %}
{% endblock %}

{% block rightCollumn %}






{% endblock %}", "SmilePlatformBundle:Default:events.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/events.html.twig");
    }
}
