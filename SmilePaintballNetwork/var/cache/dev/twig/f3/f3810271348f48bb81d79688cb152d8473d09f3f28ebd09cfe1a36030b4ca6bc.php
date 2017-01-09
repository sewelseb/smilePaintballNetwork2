<?php

/* SmilePlatformBundle::Default/team.html.twig */
class __TwigTemplate_5e5a75179b613ebe2fd94ea12c44931b2076dfb8282d3984331c8da424091484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle::Default/team.html.twig", 1);
        $this->blocks = array(
            'openGraph' => array($this, 'block_openGraph'),
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
        $__internal_a936ec3f8ac6e5ff24f65a1467472fb6d71251c58ccdb178377cefa5928a822c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a936ec3f8ac6e5ff24f65a1467472fb6d71251c58ccdb178377cefa5928a822c->enter($__internal_a936ec3f8ac6e5ff24f65a1467472fb6d71251c58ccdb178377cefa5928a822c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/team.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a936ec3f8ac6e5ff24f65a1467472fb6d71251c58ccdb178377cefa5928a822c->leave($__internal_a936ec3f8ac6e5ff24f65a1467472fb6d71251c58ccdb178377cefa5928a822c_prof);

    }

    // line 2
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_9a9de832b8fd4dfcc551455b7f5577e613c1f5f43d733847d6e8cf23cd8a9c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9de832b8fd4dfcc551455b7f5577e613c1f5f43d733847d6e8cf23cd8a9c9b->enter($__internal_9a9de832b8fd4dfcc551455b7f5577e613c1f5f43d733847d6e8cf23cd8a9c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        // line 3
        echo "

    ";
        // line 5
        if ($this->getAttribute(($context["team"] ?? $this->getContext($context, "team")), "teamPicture", array())) {
            // line 6
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["team"] ?? $this->getContext($context, "team")), "teamPicture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["team"] ?? $this->getContext($context, "team")), "teamPicture", array()), "url", array()), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 8
            echo "        <meta property=\"og:image\" content=\"http://smilepaintball.com/images/ogpic.jpeg\" />
    ";
        }
        // line 10
        echo "



    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:url\" content=\"http://smilepaintball.com/\" />
    <meta property=\"og:title\" content=\"Smile Paintball Network\" />


        <meta property=\"og:description\" content=\"Team: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["team"] ?? $this->getContext($context, "team")), "name", array()), "html", null, true);
        echo "\" />


";
        
        $__internal_9a9de832b8fd4dfcc551455b7f5577e613c1f5f43d733847d6e8cf23cd8a9c9b->leave($__internal_9a9de832b8fd4dfcc551455b7f5577e613c1f5f43d733847d6e8cf23cd8a9c9b_prof);

    }

    // line 23
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_2fd2b577a2be47a8c43ab48109f624859e651da0e3252c13dc8261ce645e0978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd2b577a2be47a8c43ab48109f624859e651da0e3252c13dc8261ce645e0978->enter($__internal_2fd2b577a2be47a8c43ab48109f624859e651da0e3252c13dc8261ce645e0978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 24
        echo "    <H1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["team"] ?? $this->getContext($context, "team")), "name", array()), "html", null, true);
        echo "</H1>
    ";
        // line 25
        if ($this->getAttribute(($context["team"] ?? $this->getContext($context, "team")), "teamPicture", array())) {
            // line 26
            echo "        <img width=\"100px\" class=\"img-responsive \" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["team"] ?? $this->getContext($context, "team")), "teamPicture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["team"] ?? $this->getContext($context, "team")), "teamPicture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["team"] ?? $this->getContext($context, "team")), "name", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 28
        echo "    ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 29
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["team"] ?? $this->getContext($context, "team")), "admin", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 30
                echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editTeamModal\">Edit team</button>
        ";
            } else {
                // line 32
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 33
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                        // line 34
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_leaveTeam", array("teamId" => $this->getAttribute(($context["team"] ?? $this->getContext($context, "team")), "Id", array()))), "html", null, true);
                        echo "\">
                        <button class=\"btn btn-primary\">Leave team</button>
                    </a>
                ";
                    }
                    // line 38
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        ";
            }
            // line 40
            echo "    ";
        }
        // line 41
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
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Team:edit", array("id" => $this->getAttribute(($context["team"] ?? $this->getContext($context, "team")), "id", array()), "request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
";
        
        $__internal_2fd2b577a2be47a8c43ab48109f624859e651da0e3252c13dc8261ce645e0978->leave($__internal_2fd2b577a2be47a8c43ab48109f624859e651da0e3252c13dc8261ce645e0978_prof);

    }

    // line 61
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_aaa5e35deee0dedd5d56eb974987f84f818a22be5d42396c90efaf5152061a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa5e35deee0dedd5d56eb974987f84f818a22be5d42396c90efaf5152061a2e->enter($__internal_aaa5e35deee0dedd5d56eb974987f84f818a22be5d42396c90efaf5152061a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 63
            echo "        <div class=\"row\" >
            <span class=\"postSeenPage\" data-postId=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\"></span>
            <span id=\"smileApiUpvoteUrl\" hidden>";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_upvote_url");
            echo "</span>
            <span id=\"smileApiDownvoteUrl\" hidden>";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_downvote_url");
            echo "</span>
            <div class=\"col-md-7\">
                ";
            // line 68
            if (($this->getAttribute($context["post"], "type", array()) == "video_youtube")) {
                // line 69
                echo "                    <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" frameborder=\"0\" allowfullscreen></iframe>
                ";
            }
            // line 71
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "video_facebook")) {
                // line 72
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
            // line 75
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_facebook")) {
                // line 76
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></div>
                    </a>
                ";
            }
            // line 80
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_externalUrl")) {
                // line 81
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <img class=\"img-responsive\" src=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 85
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_local")) {
                // line 86
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <img class=\"img-responsive\" src=\"/";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 90
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "team_picture")) {
                // line 91
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <img class=\"img-responsive\" src=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 95
            echo "            </div>
            <div class=\"col-md-5 \">
                <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                    <h3>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
                    <h4>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "eventName", array()), "html", null, true);
            echo "</h4>
                </a>
                <div>
                    <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["post"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                        by
                        ";
            // line 104
            if (($this->getAttribute($this->getAttribute($context["post"], "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute($context["post"], "user", array()), "lastName", array()))) {
                // line 105
                echo "                            <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "lastName", array()), "html", null, true);
                echo "</strong><br>
                        ";
            } else {
                // line 107
                echo "                            <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "username", array()), "html", null, true);
                echo "</strong><br>
                        ";
            }
            // line 109
            echo "                    </a>
                </div>

                <div>
                    ";
            // line 113
            if ($this->getAttribute($context["post"], "team", array())) {
                // line 114
                echo "                        <a href=\"/platform/team/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "team", array()), "id", array()), "html", null, true);
                echo "\">team: <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "team", array()), "name", array()), "html", null, true);
                echo "</strong></a>
                    ";
            }
            // line 116
            echo "                </div>


                <p>
                <div id=\"updownVote_";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"\">
                            <span onclick=\"upvote(";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"\">
                            <span onclick=\"downvote(";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                        </a>
                    </div>
                </div>
                <div id=\"upvoted_";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                    upvoted ;)
                </div>
                <div id=\"downvoted_";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                    downvoted :(
                </div>
                </p>

                <div>
                    <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                        <span id=\"post_point_";
            // line 142
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
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\"
                             data-layout=\"button_count\">
                        </div>
                    </div>
                    <div class=\"spacer-5px\">
                        <a
                                href=\"https://twitter.com/intent/tweet?text=";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "&url=http://smilepaintball.com/platform/post/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                            <button class=\"btn twitter-share-button\">Tweet</button></a>
                    </div>
                    <div class=\"spacer-5px\">
                        <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" data-counter=\"right\"></script>
                    </div>
                    <div class=\"spacer-5px\">
                        Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/";
            // line 162
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
        
        $__internal_aaa5e35deee0dedd5d56eb974987f84f818a22be5d42396c90efaf5152061a2e->leave($__internal_aaa5e35deee0dedd5d56eb974987f84f818a22be5d42396c90efaf5152061a2e_prof);

    }

    // line 175
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_ded960545b60513d191d9bcccfdb84920ed78c518d9820dbc6ae82d1e33181e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded960545b60513d191d9bcccfdb84920ed78c518d9820dbc6ae82d1e33181e6->enter($__internal_ded960545b60513d191d9bcccfdb84920ed78c518d9820dbc6ae82d1e33181e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 176
        echo "    <H2>Team members:</H2>
    ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 178
            echo "        <div class=\"row\">
            <a href=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($context["user"], "getId", array()))), "html", null, true);
            echo "\">
                ";
            // line 180
            if (($this->getAttribute($context["user"], "picture", array()) != null)) {
                // line 181
                echo "                    <img width=\"20px\" class=\"img-responsive pull-left\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "\">
                ";
            }
            // line 183
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
        
        $__internal_ded960545b60513d191d9bcccfdb84920ed78c518d9820dbc6ae82d1e33181e6->leave($__internal_ded960545b60513d191d9bcccfdb84920ed78c518d9820dbc6ae82d1e33181e6_prof);

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
        return array (  474 => 183,  464 => 181,  462 => 180,  458 => 179,  455 => 178,  451 => 177,  448 => 176,  442 => 175,  420 => 162,  414 => 159,  405 => 155,  396 => 149,  382 => 142,  378 => 141,  369 => 135,  363 => 132,  356 => 128,  348 => 123,  342 => 120,  336 => 116,  328 => 114,  326 => 113,  320 => 109,  314 => 107,  306 => 105,  304 => 104,  299 => 102,  293 => 99,  289 => 98,  285 => 97,  281 => 95,  273 => 92,  268 => 91,  265 => 90,  257 => 87,  252 => 86,  249 => 85,  243 => 82,  238 => 81,  235 => 80,  229 => 77,  224 => 76,  221 => 75,  210 => 72,  207 => 71,  201 => 69,  199 => 68,  194 => 66,  190 => 65,  186 => 64,  183 => 63,  178 => 62,  172 => 61,  157 => 52,  144 => 41,  141 => 40,  138 => 39,  132 => 38,  124 => 34,  121 => 33,  116 => 32,  112 => 30,  109 => 29,  106 => 28,  96 => 26,  94 => 25,  89 => 24,  83 => 23,  72 => 19,  61 => 10,  57 => 8,  49 => 6,  47 => 5,  43 => 3,  37 => 2,  11 => 1,);
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
{% block openGraph %}


    {% if team.teamPicture %}
        <meta property=\"og:image\" content=\"https://smilepaintball.com/{{team.teamPicture.uploadDir}}/{{team.teamPicture.url}}\" />
    {% else %}
        <meta property=\"og:image\" content=\"http://smilepaintball.com/images/ogpic.jpeg\" />
    {% endif %}




    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:url\" content=\"http://smilepaintball.com/\" />
    <meta property=\"og:title\" content=\"Smile Paintball Network\" />


        <meta property=\"og:description\" content=\"Team: {{ team.name }}\" />


{% endblock %}
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
            <span class=\"postSeenPage\" data-postId=\"{{ post.id }}\"></span>
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
                        <img class=\"img-responsive\" src=\"/{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
                    </a>
                {% endif %}
                {% if post.type=='team_picture' %}
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
{% endblock %}", "SmilePlatformBundle::Default/team.html.twig", "C:\\wamp64\\www\\bamsell\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/team.html.twig");
    }
}
