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
        $__internal_0796ef2bcd7035c4766b82a75336f791a8650e35432166a12a52cf91adc57812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0796ef2bcd7035c4766b82a75336f791a8650e35432166a12a52cf91adc57812->enter($__internal_0796ef2bcd7035c4766b82a75336f791a8650e35432166a12a52cf91adc57812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0796ef2bcd7035c4766b82a75336f791a8650e35432166a12a52cf91adc57812->leave($__internal_0796ef2bcd7035c4766b82a75336f791a8650e35432166a12a52cf91adc57812_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_ff5c06be741d0486ab3554b2c5dc40304f92962b8c8920b5fa62d2c73947f319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5c06be741d0486ab3554b2c5dc40304f92962b8c8920b5fa62d2c73947f319->enter($__internal_ff5c06be741d0486ab3554b2c5dc40304f92962b8c8920b5fa62d2c73947f319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_ff5c06be741d0486ab3554b2c5dc40304f92962b8c8920b5fa62d2c73947f319->leave($__internal_ff5c06be741d0486ab3554b2c5dc40304f92962b8c8920b5fa62d2c73947f319_prof);

    }

    // line 6
    public function block_postYourFun($context, array $blocks = array())
    {
        $__internal_471ca64f3b2ca6f6b322bb676de324345aefab2ecdd0b7491bb480f731f4c51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471ca64f3b2ca6f6b322bb676de324345aefab2ecdd0b7491bb480f731f4c51a->enter($__internal_471ca64f3b2ca6f6b322bb676de324345aefab2ecdd0b7491bb480f731f4c51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "postYourFun"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"container\">
            <div class=\"col-md-9\">
                <div class=\"form-group\">
                    ";
        // line 11
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 12
            echo "                        <H2><strong>+ CREATE an event</strong></H2>
                        ";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Event:addNew", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()))));
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
        
        $__internal_471ca64f3b2ca6f6b322bb676de324345aefab2ecdd0b7491bb480f731f4c51a->leave($__internal_471ca64f3b2ca6f6b322bb676de324345aefab2ecdd0b7491bb480f731f4c51a_prof);

    }

    // line 34
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_ec730a100be29fab61c05746147ecf23f409ab506c3ee6dd26439e2091a53104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec730a100be29fab61c05746147ecf23f409ab506c3ee6dd26439e2091a53104->enter($__internal_ec730a100be29fab61c05746147ecf23f409ab506c3ee6dd26439e2091a53104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 35
        echo "    ";
        $context["month"] = "";
        // line 36
        echo "    ";
        $context["year"] = "";
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 38
            echo "        ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startingDate", array()), "month") == ($context["month"] ?? $this->getContext($context, "month"))) && (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startingDate", array()), "Y") == ($context["year"] ?? $this->getContext($context, "year"))))) {
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
                echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
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
                    ";
            // line 74
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
                // line 75
                echo "                        <button class=\"btn btn-primary\" onclick=\"goToEventAsMe(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo ")\"><span id=\"goingToEvent_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "\" hidden><i class=\"fa fa-spin fa-spinner\"></i></span> Going </button><button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">As <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></button>

                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuFollowAs\">
                            <li class=\"non-clickable-dropdown\">
                                Select a team:
                            </li>
                            ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "teams", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                    // line 82
                    echo "                                <li>
                                    <a href=\"\" onclick=\"goToEventAsTeam(";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "id", array()), "html", null, true);
                    echo ")\">
                                        ";
                    // line 84
                    if ($this->getAttribute($context["team"], "teamPicture", array())) {
                        // line 85
                        echo "                                            <span class=\"\"><img src=\"/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                        echo "\" class=\"img-responsive img-select-store-item-form-drop-down full-width\" id=\"storePic_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getId", array(), "method"), "html", null, true);
                        echo "\"></span>
                                        ";
                    } else {
                        // line 87
                        echo "                                            <span class=\"\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/smileyTop.png"), "html", null, true);
                        echo "\" class=\"img-responsive img-select-store-item-form-drop-down full-width\" id=\"storePic_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getId", array(), "method"), "html", null, true);
                        echo "\"></span>
                                        ";
                    }
                    // line 89
                    echo "                                        <span class=\"select-store-store-name\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "getName", array(), "method"), "html", null, true);
                    echo "</span>
                                    </a>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                        </ul>
                    ";
            }
            // line 95
            echo "                </div>
            </div>
        </div>
        <hr>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ec730a100be29fab61c05746147ecf23f409ab506c3ee6dd26439e2091a53104->leave($__internal_ec730a100be29fab61c05746147ecf23f409ab506c3ee6dd26439e2091a53104_prof);

    }

    // line 104
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_0046468978cbd0b748146a9211ecaa6f0d1c70f38fa7750c92f844e4843beb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0046468978cbd0b748146a9211ecaa6f0d1c70f38fa7750c92f844e4843beb1d->enter($__internal_0046468978cbd0b748146a9211ecaa6f0d1c70f38fa7750c92f844e4843beb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 105
        echo "





";
        
        $__internal_0046468978cbd0b748146a9211ecaa6f0d1c70f38fa7750c92f844e4843beb1d->leave($__internal_0046468978cbd0b748146a9211ecaa6f0d1c70f38fa7750c92f844e4843beb1d_prof);

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
        return array (  287 => 105,  281 => 104,  264 => 95,  260 => 93,  249 => 89,  241 => 87,  231 => 85,  229 => 84,  223 => 83,  220 => 82,  216 => 81,  204 => 75,  202 => 74,  195 => 70,  189 => 67,  186 => 66,  180 => 63,  177 => 62,  175 => 61,  170 => 59,  164 => 56,  159 => 54,  155 => 53,  145 => 50,  141 => 48,  132 => 44,  129 => 43,  126 => 42,  123 => 41,  119 => 39,  116 => 38,  111 => 37,  108 => 36,  105 => 35,  99 => 34,  87 => 27,  73 => 15,  68 => 13,  65 => 12,  63 => 11,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
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
                        <H2><strong>+ CREATE an event</strong></H2>
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
                    {% endif %}
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
