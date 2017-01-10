<?php

/* SmilePlatformBundle:Default:profile.html.twig */
class __TwigTemplate_d5d64b76b54bf308c662cdf3bc74dd211d57928780050e6f6a491659295c53d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle:Default:profile.html.twig", 1);
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
        $__internal_9a349b7b25ec01fed155b9963526a38165f78e0305d385b43e5d3a360ca865fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a349b7b25ec01fed155b9963526a38165f78e0305d385b43e5d3a360ca865fd->enter($__internal_9a349b7b25ec01fed155b9963526a38165f78e0305d385b43e5d3a360ca865fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a349b7b25ec01fed155b9963526a38165f78e0305d385b43e5d3a360ca865fd->leave($__internal_9a349b7b25ec01fed155b9963526a38165f78e0305d385b43e5d3a360ca865fd_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_0ed315049da46ba1dcf338dc41da5dae742b185e974d96e48e9309bd4a929785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed315049da46ba1dcf338dc41da5dae742b185e974d96e48e9309bd4a929785->enter($__internal_0ed315049da46ba1dcf338dc41da5dae742b185e974d96e48e9309bd4a929785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_0ed315049da46ba1dcf338dc41da5dae742b185e974d96e48e9309bd4a929785->leave($__internal_0ed315049da46ba1dcf338dc41da5dae742b185e974d96e48e9309bd4a929785_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_fc46b05f62126faf7f77fe30ecccd5cbce100b6827b25572cad1238cb69d7738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc46b05f62126faf7f77fe30ecccd5cbce100b6827b25572cad1238cb69d7738->enter($__internal_fc46b05f62126faf7f77fe30ecccd5cbce100b6827b25572cad1238cb69d7738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 8
        echo "
    <div class=\"modal fade\" id=\"addToTeamModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addToTeamModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Add to a team</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 17
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 18
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "teams", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 19
                echo "                            <div class=\"row\">
                                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_add_to_team", array("teamId" => $this->getAttribute($context["team"], "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\">
                                    ";
                // line 21
                if ($this->getAttribute($context["team"], "teamPicture", array())) {
                    // line 22
                    echo "                                        <img width=\"16px\" class=\"img-responsive pull-left\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                    echo "\">
                                    ";
                }
                // line 24
                echo "                                    <span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                echo "</span>
                                </a>
                            </div>
                            <div class=\"clearfix\"></div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    ";
        }
        // line 30
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"editProfileModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edotProfileModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Edit profile</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:User:editMyProfile", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"CreateTeamModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"CreateTeamModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Create a team</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Team:createTeam", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>


    <div class=\"sm-visible\">
        <div class=\"row\">
            <div class=\"container\">
                ";
        // line 72
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()) != null)) {
            // line 73
            echo "                    <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "\" width=\"50px\">
                ";
        } else {
            // line 75
            echo "
                ";
        }
        // line 77
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "<br/>
                ";
        // line 78
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array())) {
            // line 79
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
            echo "
                ";
        }
        // line 81
        echo "                ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array())) {
            // line 82
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
            echo "
                ";
        }
        // line 83
        echo "<br/>
                <div>
                    ";
        // line 85
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 86
            echo "                        ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 87
                echo "                            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editProfileModal\">Edit my profile</button>
                        ";
            }
            // line 89
            echo "                    ";
        }
        // line 90
        echo "                </div>
                <H3>Teams:</H3>
                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 93
            echo "                    <div class=\"row\">
                        <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_team", array("id" => $this->getAttribute($context["team"], "id", array()))), "html", null, true);
            echo "\">
                            ";
            // line 95
            if ($this->getAttribute($context["team"], "teamPicture", array())) {
                // line 96
                echo "                                <img width=\"16px\" class=\"img-responsive pull-left\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                echo "\">
                            ";
            }
            // line 98
            echo "                            <span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
            echo "</span>
                        </a>
                    </div>
                    <div class=\"clearfix\"></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
                ";
        // line 104
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 105
            echo "                    ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 106
                echo "                        <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CreateTeamModal\">Create a team</button>
                    ";
            } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(            // line 107
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "teams", array())) != 0)) {
                // line 108
                echo "                        <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addToTeamModal\">Add to a team</button>
                    ";
            }
            // line 110
            echo "                ";
        }
        // line 111
        echo "            </div>
        </div>
        <hr/>
    </div>
    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 116
            echo "        <div class=\"row\" >
            <span id=\"smileApiUpvoteUrl\" hidden>";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_upvote_url");
            echo "</span>
            <span id=\"smileApiDownvoteUrl\" hidden>";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_downvote_url");
            echo "</span>
            <div class=\"col-md-7\">
                ";
            // line 120
            if (($this->getAttribute($context["post"], "type", array()) == "video_youtube")) {
                // line 121
                echo "                    <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" frameborder=\"0\" allowfullscreen></iframe>
                ";
            }
            // line 123
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "video_facebook")) {
                // line 124
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
            // line 127
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_facebook")) {
                // line 128
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></div>
                    </a>
                ";
            }
            // line 132
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_externalUrl")) {
                // line 133
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <img class=\"img-responsive\" src=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 137
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_local")) {
                // line 138
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                            <img class=\"img-responsive\" src=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 142
            echo "            </div>
            <div class=\"col-md-5 \">
                    <a href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                        <h3>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
                        <h4>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "eventName", array()), "html", null, true);
            echo "</h4>
                    </a>
                    <div>
                        <a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["post"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                            by
                            ";
            // line 151
            if (($this->getAttribute($this->getAttribute($context["post"], "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute($context["post"], "user", array()), "lastName", array()))) {
                // line 152
                echo "                                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "lastName", array()), "html", null, true);
                echo "</strong><br>
                            ";
            } else {
                // line 154
                echo "                                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "username", array()), "html", null, true);
                echo "</strong><br>
                            ";
            }
            // line 156
            echo "                        </a>
                    </div>

                    <div>
                        ";
            // line 160
            if ($this->getAttribute($context["post"], "team", array())) {
                // line 161
                echo "                            <a href=\"/platform/team/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "team", array()), "id", array()), "html", null, true);
                echo "\">team: <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "team", array()), "name", array()), "html", null, true);
                echo "</strong></a>
                        ";
            }
            // line 163
            echo "                    </div>


                    <p>
                    <div id=\"updownVote_";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"upvote(";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                            </a>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"downvote(";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                            </a>
                        </div>
                    </div>
                    <div id=\"upvoted_";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                        upvoted ;)
                    </div>
                    <div id=\"downvoted_";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                        downvoted :(
                    </div>
                    </p>

                    <div>
                        <a href=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                            <span id=\"post_point_";
            // line 189
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
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\"
                                 data-layout=\"button_count\">
                            </div>
                        </div>
                        <div class=\"spacer-5px\">
                            <a
                                    href=\"https://twitter.com/intent/tweet?text=";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "&url=http://smilepaintball.com/platform/post/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                                <button class=\"btn twitter-share-button\">Tweet</button></a>
                        </div>
                        <div class=\"spacer-5px\">
                            <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" data-counter=\"right\"></script>
                        </div>
                        <div class=\"spacer-5px\">
                            Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/";
            // line 209
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
        
        $__internal_fc46b05f62126faf7f77fe30ecccd5cbce100b6827b25572cad1238cb69d7738->leave($__internal_fc46b05f62126faf7f77fe30ecccd5cbce100b6827b25572cad1238cb69d7738_prof);

    }

    // line 222
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_aa5a1bca48e5a4dc337e432ef612ebae026f8c884e6c4b1622e079f389d0df0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5a1bca48e5a4dc337e432ef612ebae026f8c884e6c4b1622e079f389d0df0c->enter($__internal_aa5a1bca48e5a4dc337e432ef612ebae026f8c884e6c4b1622e079f389d0df0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 223
        echo "    ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()) != null)) {
            // line 224
            echo "        <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 226
            echo "
    ";
        }
        // line 228
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "<br/>
    ";
        // line 229
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array())) {
            // line 230
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
            echo "
    ";
        }
        // line 232
        echo "    ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array())) {
            // line 233
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
            echo "
    ";
        }
        // line 234
        echo "<br/>
    <div>
        ";
        // line 236
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 237
            echo "            ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 238
                echo "                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editProfileModal\">Edit my profile</button>
            ";
            }
            // line 240
            echo "        ";
        }
        // line 241
        echo "    </div>
    <H3>Teams:</H3>
    ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 244
            echo "        <div class=\"row\">
            <a href=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_team", array("id" => $this->getAttribute($context["team"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 246
            if ($this->getAttribute($context["team"], "teamPicture", array())) {
                // line 247
                echo "                    <img width=\"16px\" class=\"img-responsive pull-left\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                echo "\">
                ";
            }
            // line 249
            echo "                <span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
            echo "</span>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "
    ";
        // line 255
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 256
            echo "        ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 257
                echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CreateTeamModal\">Create a team</button>
        ";
            } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(            // line 258
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "teams", array())) != 0)) {
                // line 259
                echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addToTeamModal\">Add to a team</button>
        ";
            }
            // line 261
            echo "    ";
        }
        // line 262
        echo "




";
        
        $__internal_aa5a1bca48e5a4dc337e432ef612ebae026f8c884e6c4b1622e079f389d0df0c->leave($__internal_aa5a1bca48e5a4dc337e432ef612ebae026f8c884e6c4b1622e079f389d0df0c_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 262,  637 => 261,  633 => 259,  631 => 258,  628 => 257,  625 => 256,  623 => 255,  620 => 254,  608 => 249,  598 => 247,  596 => 246,  592 => 245,  589 => 244,  585 => 243,  581 => 241,  578 => 240,  574 => 238,  571 => 237,  569 => 236,  565 => 234,  559 => 233,  556 => 232,  550 => 230,  548 => 229,  543 => 228,  539 => 226,  529 => 224,  526 => 223,  520 => 222,  498 => 209,  492 => 206,  483 => 202,  474 => 196,  460 => 189,  456 => 188,  447 => 182,  441 => 179,  434 => 175,  426 => 170,  420 => 167,  414 => 163,  406 => 161,  404 => 160,  398 => 156,  392 => 154,  384 => 152,  382 => 151,  377 => 149,  371 => 146,  367 => 145,  363 => 144,  359 => 142,  351 => 139,  346 => 138,  343 => 137,  337 => 134,  332 => 133,  329 => 132,  323 => 129,  318 => 128,  315 => 127,  304 => 124,  301 => 123,  295 => 121,  293 => 120,  288 => 118,  284 => 117,  281 => 116,  277 => 115,  271 => 111,  268 => 110,  264 => 108,  262 => 107,  259 => 106,  256 => 105,  254 => 104,  251 => 103,  239 => 98,  229 => 96,  227 => 95,  223 => 94,  220 => 93,  216 => 92,  212 => 90,  209 => 89,  205 => 87,  202 => 86,  200 => 85,  196 => 83,  190 => 82,  187 => 81,  181 => 79,  179 => 78,  174 => 77,  170 => 75,  160 => 73,  158 => 72,  143 => 60,  124 => 44,  108 => 30,  105 => 29,  93 => 24,  83 => 22,  81 => 21,  77 => 20,  74 => 19,  69 => 18,  67 => 17,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"SmilePlatformBundle::Default/layout.html.twig\" %}

{% block pageHeader %}

{% endblock %}

{% block leftCollumn %}

    <div class=\"modal fade\" id=\"addToTeamModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addToTeamModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Add to a team</h4>
                </div>
                <div class=\"modal-body\">
                    {% if app.user %}
                        {% for team in app.user.teams %}
                            <div class=\"row\">
                                <a href=\"{{ path('smile_platform_add_to_team', {'teamId': team.id, 'userId': user.id}) }}\">
                                    {%  if team.teamPicture  %}
                                        <img width=\"16px\" class=\"img-responsive pull-left\" src=\"{{team.teamPicture.uploadDir}}/{{team.teamPicture.url}}\" alt=\"{{ team.name }}\">
                                    {%  endif %}
                                    <span> {{ team.name }}</span>
                                </a>
                            </div>
                            <div class=\"clearfix\"></div>
                        {% endfor %}
                    {% endif %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"editProfileModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edotProfileModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Edit profile</h4>
                </div>
                <div class=\"modal-body\">
                    {{ render(controller('SmilePlatformBundle:User:editMyProfile', {'request': app.request})) }}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"CreateTeamModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"CreateTeamModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Create a team</h4>
                </div>
                <div class=\"modal-body\">
                    {{ render(controller('SmilePlatformBundle:Team:createTeam', {'request': app.request})) }}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>


    <div class=\"sm-visible\">
        <div class=\"row\">
            <div class=\"container\">
                {% if user.picture != null %}
                    <img class=\"img-responsive\" src=\"{{user.picture.uploadDir}}/{{user.picture.url}}\" alt=\"{{ user.username }}\" width=\"50px\">
                {% else %}

                {% endif %}
                {{ user.username }}<br/>
                {% if user.firstname%}
                    {{ user.firstname }}
                {% endif %}
                {% if user.lastname %}
                    {{ user.lastname }}
                {% endif %}<br/>
                <div>
                    {% if app.user %}
                        {% if user.id == app.user.id %}
                            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editProfileModal\">Edit my profile</button>
                        {% endif %}
                    {% endif %}
                </div>
                <H3>Teams:</H3>
                {% for team in user.teams %}
                    <div class=\"row\">
                        <a href=\"{{ path('smile_platform_team', {'id': team.id}) }}\">
                            {%  if team.teamPicture  %}
                                <img width=\"16px\" class=\"img-responsive pull-left\" src=\"{{team.teamPicture.uploadDir}}/{{team.teamPicture.url}}\" alt=\"{{ team.name }}\">
                            {%  endif %}
                            <span> {{ team.name }}</span>
                        </a>
                    </div>
                    <div class=\"clearfix\"></div>
                {% endfor %}

                {% if app.user %}
                    {% if user.id == app.user.id %}
                        <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CreateTeamModal\">Create a team</button>
                    {% elseif app.user.teams|length !=0 %}
                        <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addToTeamModal\">Add to a team</button>
                    {% endif %}
                {% endif %}
            </div>
        </div>
        <hr/>
    </div>
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
    {% if user.picture != null %}
        <img class=\"img-responsive\" src=\"{{user.picture.uploadDir}}/{{user.picture.url}}\" alt=\"{{ user.username }}\">
    {% else %}

    {% endif %}
    {{ user.username }}<br/>
    {% if user.firstname%}
        {{ user.firstname }}
    {% endif %}
    {% if user.lastname %}
        {{ user.lastname }}
    {% endif %}<br/>
    <div>
        {% if app.user %}
            {% if user.id == app.user.id %}
                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editProfileModal\">Edit my profile</button>
            {% endif %}
        {% endif %}
    </div>
    <H3>Teams:</H3>
    {% for team in user.teams %}
        <div class=\"row\">
            <a href=\"{{ path('smile_platform_team', {'id': team.id}) }}\">
                {%  if team.teamPicture  %}
                    <img width=\"16px\" class=\"img-responsive pull-left\" src=\"{{team.teamPicture.uploadDir}}/{{team.teamPicture.url}}\" alt=\"{{ team.name }}\">
                {%  endif %}
                <span> {{ team.name }}</span>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    {% endfor %}

    {% if app.user %}
        {% if user.id == app.user.id %}
            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CreateTeamModal\">Create a team</button>
        {% elseif app.user.teams|length !=0 %}
            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addToTeamModal\">Add to a team</button>
        {% endif %}
    {% endif %}





{% endblock %}";
    }
}
