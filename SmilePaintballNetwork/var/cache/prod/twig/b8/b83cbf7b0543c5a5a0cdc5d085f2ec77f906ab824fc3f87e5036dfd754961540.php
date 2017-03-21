<?php

/* SmilePlatformBundle:Default:profile.html.twig */
class __TwigTemplate_45c5c278688514fce59056ebd9b71fff1411e4e9bcd16c868cf0d9b06450df64 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
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
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 18
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "teams", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 19
                echo "                            <div class=\"row\">
                                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_add_to_team", array("teamId" => $this->getAttribute($context["team"], "id", array()), "userId" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:User:editMyProfile", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()))));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Team:createTeam", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()))));
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
        if (($this->getAttribute(($context["user"] ?? null), "picture", array()) != null)) {
            // line 73
            echo "                    <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? null), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? null), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
            echo "\" width=\"50px\">
                ";
        } else {
            // line 75
            echo "
                ";
        }
        // line 77
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo "<br/>
                ";
        // line 78
        if ($this->getAttribute(($context["user"] ?? null), "firstname", array())) {
            // line 79
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "firstname", array()), "html", null, true);
            echo "
                ";
        }
        // line 81
        echo "                ";
        if ($this->getAttribute(($context["user"] ?? null), "lastname", array())) {
            // line 82
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "lastname", array()), "html", null, true);
            echo "
                ";
        }
        // line 83
        echo "<br/>
                <div>
                    ";
        // line 85
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 86
            echo "                        ";
            if (($this->getAttribute(($context["user"] ?? null), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))) {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? null), "teams", array()));
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
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 105
            echo "                    ";
            if (($this->getAttribute(($context["user"] ?? null), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))) {
                // line 106
                echo "                        <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CreateTeamModal\">Create a team</button>
                    ";
            } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(            // line 107
($context["app"] ?? null), "user", array()), "teams", array())) != 0)) {
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
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 116
            echo "        <div class=\"row\" >
            <span class=\"postSeenPage\" data-postId=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\"></span>
            <span id=\"smileApiUpvoteUrl\" hidden>";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_upvote_url");
            echo "</span>
            <span id=\"smileApiDownvoteUrl\" hidden>";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_downvote_url");
            echo "</span>
            <div class=\"col-md-7\">
                ";
            // line 121
            if (($this->getAttribute($context["post"], "type", array()) == "video_youtube")) {
                // line 122
                echo "                    <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" frameborder=\"0\" allowfullscreen></iframe>
                ";
            }
            // line 124
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "video_facebook")) {
                // line 125
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
            // line 128
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_facebook")) {
                // line 129
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></div>
                    </a>
                ";
            }
            // line 133
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_externalUrl")) {
                // line 134
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <img class=\"img-responsive\" src=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 138
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_local")) {
                // line 139
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                            <img class=\"img-responsive\" src=\"/";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "getUploadDir", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 143
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "event_picture")) {
                // line 144
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_event", array("eventId" => $this->getAttribute($this->getAttribute($context["post"], "event", array()), "getId", array()))), "html", null, true);
                echo "\">
                        <img class=\"img-responsive\" src=\"/";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "event", array()), "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "event", array()), "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 148
            echo "            </div>
            <div class=\"col-md-5 \">
                    <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                        <h3>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
                        <h4>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "eventName", array()), "html", null, true);
            echo "</h4>
                    </a>
                    <div>
                        <a href=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["post"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                            by
                            ";
            // line 157
            if (($this->getAttribute($this->getAttribute($context["post"], "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute($context["post"], "user", array()), "lastName", array()))) {
                // line 158
                echo "                                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "lastName", array()), "html", null, true);
                echo "</strong><br>
                            ";
            } else {
                // line 160
                echo "                                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "username", array()), "html", null, true);
                echo "</strong><br>
                            ";
            }
            // line 162
            echo "                        </a>
                    </div>

                    <div>
                        ";
            // line 166
            if ($this->getAttribute($context["post"], "team", array())) {
                // line 167
                echo "                            <a href=\"/platform/team/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "team", array()), "id", array()), "html", null, true);
                echo "\">team: <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "team", array()), "name", array()), "html", null, true);
                echo "</strong></a>
                        ";
            }
            // line 169
            echo "                    </div>


                    <p>
                    <div id=\"updownVote_";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"upvote(";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                            </a>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"downvote(";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                            </a>
                        </div>
                    </div>
                    <div id=\"upvoted_";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                        upvoted ;)
                    </div>
                    <div id=\"downvoted_";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                        downvoted :(
                    </div>
                    </p>

                    <div>
                        <a href=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                            <span id=\"post_point_";
            // line 195
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
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\"
                                 data-layout=\"button_count\">
                            </div>
                        </div>
                        <div class=\"spacer-5px\">
                            <a
                                    href=\"https://twitter.com/intent/tweet?text=";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "&url=http://smilepaintball.com/platform/post/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                                <button class=\"btn twitter-share-button\">Tweet</button></a>
                        </div>
                        <div class=\"spacer-5px\">
                            <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" data-counter=\"right\"></script>
                        </div>
                        <div class=\"spacer-5px\">
                            Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/";
            // line 215
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
    }

    // line 228
    public function block_rightCollumn($context, array $blocks = array())
    {
        // line 229
        echo "    ";
        if (($this->getAttribute(($context["user"] ?? null), "picture", array()) != null)) {
            // line 230
            echo "        <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? null), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? null), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 232
            echo "
    ";
        }
        // line 234
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo "<br/>
    ";
        // line 235
        if ($this->getAttribute(($context["user"] ?? null), "firstname", array())) {
            // line 236
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "firstname", array()), "html", null, true);
            echo "
    ";
        }
        // line 238
        echo "    ";
        if ($this->getAttribute(($context["user"] ?? null), "lastname", array())) {
            // line 239
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "lastname", array()), "html", null, true);
            echo "
    ";
        }
        // line 240
        echo "<br/>
    <div>
        ";
        // line 242
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 243
            echo "            ";
            if (($this->getAttribute(($context["user"] ?? null), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))) {
                // line 244
                echo "                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editProfileModal\">Edit my profile</button>
            ";
            }
            // line 246
            echo "        ";
        }
        // line 247
        echo "    </div>
    <H3>Teams:</H3>
    ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? null), "teams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 250
            echo "        <div class=\"row\">
            <a href=\"";
            // line 251
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_team", array("id" => $this->getAttribute($context["team"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 252
            if ($this->getAttribute($context["team"], "teamPicture", array())) {
                // line 253
                echo "                    <img width=\"16px\" class=\"img-responsive pull-left\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["team"], "teamPicture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
                echo "\">
                ";
            }
            // line 255
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
        // line 260
        echo "
    ";
        // line 261
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 262
            echo "        ";
            if (($this->getAttribute(($context["user"] ?? null), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))) {
                // line 263
                echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CreateTeamModal\">Create a team</button>
        ";
            } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(            // line 264
($context["app"] ?? null), "user", array()), "teams", array())) != 0)) {
                // line 265
                echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addToTeamModal\">Add to a team</button>
        ";
            }
            // line 267
            echo "    ";
        }
        // line 268
        echo "




";
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
        return array (  639 => 268,  636 => 267,  632 => 265,  630 => 264,  627 => 263,  624 => 262,  622 => 261,  619 => 260,  607 => 255,  597 => 253,  595 => 252,  591 => 251,  588 => 250,  584 => 249,  580 => 247,  577 => 246,  573 => 244,  570 => 243,  568 => 242,  564 => 240,  558 => 239,  555 => 238,  549 => 236,  547 => 235,  542 => 234,  538 => 232,  528 => 230,  525 => 229,  522 => 228,  503 => 215,  497 => 212,  488 => 208,  479 => 202,  465 => 195,  461 => 194,  452 => 188,  446 => 185,  439 => 181,  431 => 176,  425 => 173,  419 => 169,  411 => 167,  409 => 166,  403 => 162,  397 => 160,  389 => 158,  387 => 157,  382 => 155,  376 => 152,  372 => 151,  368 => 150,  364 => 148,  356 => 145,  351 => 144,  348 => 143,  340 => 140,  335 => 139,  332 => 138,  326 => 135,  321 => 134,  318 => 133,  312 => 130,  307 => 129,  304 => 128,  293 => 125,  290 => 124,  284 => 122,  282 => 121,  277 => 119,  273 => 118,  269 => 117,  266 => 116,  262 => 115,  256 => 111,  253 => 110,  249 => 108,  247 => 107,  244 => 106,  241 => 105,  239 => 104,  236 => 103,  224 => 98,  214 => 96,  212 => 95,  208 => 94,  205 => 93,  201 => 92,  197 => 90,  194 => 89,  190 => 87,  187 => 86,  185 => 85,  181 => 83,  175 => 82,  172 => 81,  166 => 79,  164 => 78,  159 => 77,  155 => 75,  145 => 73,  143 => 72,  128 => 60,  109 => 44,  93 => 30,  90 => 29,  78 => 24,  68 => 22,  66 => 21,  62 => 20,  59 => 19,  54 => 18,  52 => 17,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SmilePlatformBundle:Default:profile.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/profile.html.twig");
    }
}
