<?php

/* SmilePlatformBundle::Default/team.html.twig */
class __TwigTemplate_bdd6c4644c7e87c966c812e31957840286a8fde567036410eb342eb6ce4f2cee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle::Default/team.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
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
        $__internal_9fe0968b21e8a75d7975083b16800d4d64ba2c6c25e980870dbb6162d4eb92e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe0968b21e8a75d7975083b16800d4d64ba2c6c25e980870dbb6162d4eb92e2->enter($__internal_9fe0968b21e8a75d7975083b16800d4d64ba2c6c25e980870dbb6162d4eb92e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/team.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fe0968b21e8a75d7975083b16800d4d64ba2c6c25e980870dbb6162d4eb92e2->leave($__internal_9fe0968b21e8a75d7975083b16800d4d64ba2c6c25e980870dbb6162d4eb92e2_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_3c3ae94126fb00715932e596df67d3a20bc8728b7fdce727322c85c094d60436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3ae94126fb00715932e596df67d3a20bc8728b7fdce727322c85c094d60436->enter($__internal_3c3ae94126fb00715932e596df67d3a20bc8728b7fdce727322c85c094d60436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "    <H1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name", array()), "html", null, true);
        echo "</H1>
    ";
        // line 5
        if ($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "teamPicture", array())) {
            // line 6
            echo "        <img width=\"100px\" class=\"img-responsive \" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "teamPicture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "teamPicture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 8
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 9
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "admin", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 10
                echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editTeamModal\">Edit team</button>
        ";
            } else {
                // line 12
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 13
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                        // line 14
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_leaveTeam", array("teamId" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "Id", array()))), "html", null, true);
                        echo "\">
                        <button class=\"btn btn-primary\">Leave team</button>
                    </a>
                ";
                    }
                    // line 18
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "        ";
            }
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <hr/>


    <div class=\"modal fade\" id=\"editTeamModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editTeamModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Edit team</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Team:edit", array("id" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id", array()), "request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
";
        
        $__internal_3c3ae94126fb00715932e596df67d3a20bc8728b7fdce727322c85c094d60436->leave($__internal_3c3ae94126fb00715932e596df67d3a20bc8728b7fdce727322c85c094d60436_prof);

    }

    // line 41
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_e2dc3ff1ddf8faa0dfbd121c0bd3a6b04112636abee6683c11412a4c6ce3a1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2dc3ff1ddf8faa0dfbd121c0bd3a6b04112636abee6683c11412a4c6ce3a1d4->enter($__internal_e2dc3ff1ddf8faa0dfbd121c0bd3a6b04112636abee6683c11412a4c6ce3a1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 43
            echo "        <div class=\"row\" >
            <span id=\"smileApiUpvoteUrl\" hidden>";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_upvote_url");
            echo "</span>
            <span id=\"smileApiDownvoteUrl\" hidden>";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_downvote_url");
            echo "</span>
            <div class=\"col-md-7\">
                ";
            // line 47
            if (($this->getAttribute($context["post"], "type", array()) == "video_youtube")) {
                // line 48
                echo "                    <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" frameborder=\"0\" allowfullscreen></iframe>
                ";
            }
            // line 50
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "video_facebook")) {
                // line 51
                echo "                    <div class=\"fb-video\" data-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" class=\"fb-xfbml-parse-ignore\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></a>
                        </blockquote></div>
                ";
            }
            // line 54
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_facebook")) {
                // line 55
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></div>
                    </a>
                ";
            }
            // line 59
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_externalUrl")) {
                // line 60
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <img class=\"img-responsive\" src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 64
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_local")) {
                // line 65
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <img class=\"img-responsive\" src=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 69
            echo "            </div>
            <div class=\"col-md-5 \">
                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                    <h3>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
                    <h4>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "eventName", array()), "html", null, true);
            echo "</h4>
                </a>
                <div>
                    <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["post"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                        by
                        ";
            // line 78
            if (($this->getAttribute($this->getAttribute($context["post"], "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute($context["post"], "user", array()), "lastName", array()))) {
                // line 79
                echo "                            <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "lastName", array()), "html", null, true);
                echo "</strong><br>
                        ";
            } else {
                // line 81
                echo "                            <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "username", array()), "html", null, true);
                echo "</strong><br>
                        ";
            }
            // line 83
            echo "                    </a>
                </div>

                <div>
                    ";
            // line 87
            if ($this->getAttribute($context["post"], "team", array())) {
                // line 88
                echo "                        <a href=\"/platform/team/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "team", array()), "id", array()), "html", null, true);
                echo "\">team: <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "team", array()), "name", array()), "html", null, true);
                echo "</strong></a>
                    ";
            }
            // line 90
            echo "                </div>


                <p>
                <div id=\"updownVote_";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"\">
                            <span onclick=\"upvote(";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"\">
                            <span onclick=\"downvote(";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                        </a>
                    </div>
                </div>
                <div id=\"upvoted_";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                    upvoted ;)
                </div>
                <div id=\"downvoted_";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                    downvoted :(
                </div>
                </p>

                <div>
                    <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                        <span id=\"post_point_";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["post"], "upvotes", array()) - $this->getAttribute($context["post"], "downvotes", array())), "html", null, true);
            echo "</span> points, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "comments", array()), "html", null, true);
            echo " comments
                    </a>
                </div>

                <div>
                    <div class=\"spacer-5px\">
                        <div class=\"fb-share-button\"
                             data-href=\"http://smilepaintball.com/platform/post/";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\"
                             data-layout=\"button_count\">
                        </div>
                    </div>
                    <div class=\"spacer-5px\">
                        <a
                                href=\"https://twitter.com/intent/tweet?text=";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "&url=http://smilepaintball.com/platform/post/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                            <button class=\"btn twitter-share-button\">Tweet</button></a>
                    </div>
                    <div class=\"spacer-5px\">
                        <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" data-counter=\"right\"></script>
                    </div>
                    <div class=\"spacer-5px\">
                        Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                    </div>


                </div>
            </div>


        </div>
        <hr/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e2dc3ff1ddf8faa0dfbd121c0bd3a6b04112636abee6683c11412a4c6ce3a1d4->leave($__internal_e2dc3ff1ddf8faa0dfbd121c0bd3a6b04112636abee6683c11412a4c6ce3a1d4_prof);

    }

    // line 149
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_d4b2a7761e061615c6b758f200bc97fc2f3e2ff49a329f98648a5238b437b4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b2a7761e061615c6b758f200bc97fc2f3e2ff49a329f98648a5238b437b4ea->enter($__internal_d4b2a7761e061615c6b758f200bc97fc2f3e2ff49a329f98648a5238b437b4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 150
        echo "    <H2>Team members:</H2>
    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 152
            echo "        <div class=\"row\">
            <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($context["user"], "getId", array()))), "html", null, true);
            echo "\">
                ";
            // line 154
            if (($this->getAttribute($context["user"], "picture", array()) != null)) {
                // line 155
                echo "                    <img width=\"20px\" class=\"img-responsive pull-left\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "\">
                ";
            }
            // line 157
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d4b2a7761e061615c6b758f200bc97fc2f3e2ff49a329f98648a5238b437b4ea->leave($__internal_d4b2a7761e061615c6b758f200bc97fc2f3e2ff49a329f98648a5238b437b4ea_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 157,  397 => 155,  395 => 154,  391 => 153,  388 => 152,  384 => 151,  381 => 150,  375 => 149,  353 => 136,  347 => 133,  338 => 129,  329 => 123,  315 => 116,  311 => 115,  302 => 109,  296 => 106,  289 => 102,  281 => 97,  275 => 94,  269 => 90,  261 => 88,  259 => 87,  253 => 83,  247 => 81,  239 => 79,  237 => 78,  232 => 76,  226 => 73,  222 => 72,  218 => 71,  214 => 69,  206 => 66,  201 => 65,  198 => 64,  192 => 61,  187 => 60,  184 => 59,  178 => 56,  173 => 55,  170 => 54,  159 => 51,  156 => 50,  150 => 48,  148 => 47,  143 => 45,  139 => 44,  136 => 43,  131 => 42,  125 => 41,  110 => 32,  97 => 21,  94 => 20,  91 => 19,  85 => 18,  77 => 14,  74 => 13,  69 => 12,  65 => 10,  62 => 9,  59 => 8,  49 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"SmilePlatformBundle::Default/layout.html.twig\" %}

{% block pageHeader %}
    <H1>{{ team.name }}</H1>
    {%  if team.teamPicture  %}
        <img width=\"100px\" class=\"img-responsive \" src=\"{{team.teamPicture.uploadDir}}/{{team.teamPicture.url}}\" alt=\"{{ team.name }}\">
    {%  endif %}
    {% if app.user %}
        {% if team.admin.id == app.user.id %}
            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editTeamModal\">Edit team</button>
        {% else %}
            {% for user in users %}
                {% if app.user.id == user.id %}
                    <a href=\"{{ path('smile_platform_leaveTeam', {'teamId': team.Id }) }}\">
                        <button class=\"btn btn-primary\">Leave team</button>
                    </a>
                {% endif %}
            {% endfor %}
        {% endif %}
    {% endif %}
    <hr/>


    <div class=\"modal fade\" id=\"editTeamModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editTeamModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Edit team</h4>
                </div>
                <div class=\"modal-body\">
                    {{ render(controller('SmilePlatformBundle:Team:edit', {'id': team.id, 'request': app.request})) }}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
{% endblock %}

{% block leftCollumn %}
    {% for post in posts %}
        <div class=\"row\" >
            <span id=\"smileApiUpvoteUrl\" hidden>{{ path ('smile_api_post_upvote_url') }}</span>
            <span id=\"smileApiDownvoteUrl\" hidden>{{ path ('smile_api_post_downvote_url') }}</span>
            <div class=\"col-md-7\">
                {% if post.type=='video_youtube' %}
                    <iframe  width=\"100%\"  height=\"300px\" ng-src=\"{{ post.url }}\" frameborder=\"0\" allowfullscreen></iframe>
                {% endif %}
                {% if post.type=='video_facebook' %}
                    <div class=\"fb-video\" data-href=\"{{ post.url }}\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"{{ post.url }}\" class=\"fb-xfbml-parse-ignore\"><a href=\"{{ post.url }}\"></a>
                        </blockquote></div>
                {% endif %}
                {% if post.type=='picture_facebook' %}
                    <a href=\"{{ path('smile_platform_post', {'postId': post.getId })  }}\">
                        <div data-width=\"460px\" class=\"fb-post\" data-href=\"{{ post.url }}\"></div>
                    </a>
                {% endif %}
                {% if post.type=='picture_externalUrl' %}
                    <a href=\"{{ path('smile_platform_post', {'postId': post.getId })  }}\">
                        <img class=\"img-responsive\" src=\"{{ post.url }}\" alt=\"\">
                    </a>
                {% endif %}
                {% if post.type=='picture_local' %}
                    <a href=\"{{ path('smile_platform_post', {'postId': post.getId })  }}\">
                        <img class=\"img-responsive\" src=\"{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
                    </a>
                {% endif %}
            </div>
            <div class=\"col-md-5 \">
                <a href=\"{{ path('smile_platform_post', {'postId': post.getId })  }}\">
                    <h3>{{ post.title }}</h3>
                    <h4>{{ post.eventName }}</h4>
                </a>
                <div>
                    <a href=\"{{ path('smile_platform_profile', {'userId': post.user.getId })  }}\">
                        by
                        {% if post.user.firstName and post.user.lastName %}
                            <strong>{{ post.user.firstName }} {{ post.user.lastName }}</strong><br>
                        {% else %}
                            <strong>{{ post.user.username }}</strong><br>
                        {% endif %}
                    </a>
                </div>

                <div>
                    {% if post.team  %}
                        <a href=\"/platform/team/{{ post.team.id }}\">team: <strong>{{ post.team.name }}</strong></a>
                    {% endif %}
                </div>


                <p>
                <div id=\"updownVote_{{post.id}}\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"\">
                            <span onclick=\"upvote({{ post.id }})\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"\">
                            <span onclick=\"downvote({{ post.id }})\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                        </a>
                    </div>
                </div>
                <div id=\"upvoted_{{post.id}}\" hidden>
                    upvoted ;)
                </div>
                <div id=\"downvoted_{{post.id}}\" hidden>
                    downvoted :(
                </div>
                </p>

                <div>
                    <a href=\"{{ path('smile_platform_post', {'postId': post.getId })  }}\">
                        <span id=\"post_point_{{ post.id }}\">{{ post.upvotes-post.downvotes }}</span> points, {{ post.comments }} comments
                    </a>
                </div>

                <div>
                    <div class=\"spacer-5px\">
                        <div class=\"fb-share-button\"
                             data-href=\"http://smilepaintball.com/platform/post/{{ post.id }}\"
                             data-layout=\"button_count\">
                        </div>
                    </div>
                    <div class=\"spacer-5px\">
                        <a
                                href=\"https://twitter.com/intent/tweet?text={{post.title}}&url=http://smilepaintball.com/platform/post/{{ post.id }}\">
                            <button class=\"btn twitter-share-button\">Tweet</button></a>
                    </div>
                    <div class=\"spacer-5px\">
                        <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/{{ post.id }}\" data-counter=\"right\"></script>
                    </div>
                    <div class=\"spacer-5px\">
                        Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/{{ post.id }}\">
                    </div>


                </div>
            </div>


        </div>
        <hr/>
    {% endfor %}
{% endblock %}

{% block rightCollumn %}
    <H2>Team members:</H2>
    {% for user in users %}
        <div class=\"row\">
            <a href=\"{{ path('smile_platform_profile', {'userId': user.getId }) }}\">
                {% if user.picture != null %}
                    <img width=\"20px\" class=\"img-responsive pull-left\" src=\"{{user.picture.uploadDir}}/{{user.picture.url}}\" alt=\"{{ user.username }}\">
                {% endif %}
                {{ user.username }}
            </a>
        </div>
    {% endfor %}
{% endblock %}";
    }
}
