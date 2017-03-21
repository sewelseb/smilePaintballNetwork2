<?php

/* @SmilePlatform/Default/team.html.twig */
class __TwigTemplate_b7a641120562b63e36f9b8836d2c155f4c9773b95d5e0a082b6a9817dc75d069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "@SmilePlatform/Default/team.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_openGraph($context, array $blocks = array())
    {
        // line 3
        echo "

    ";
        // line 5
        if ($this->getAttribute(($context["team"] ?? null), "teamPicture", array())) {
            // line 6
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["team"] ?? null), "teamPicture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["team"] ?? null), "teamPicture", array()), "url", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["team"] ?? null), "name", array()), "html", null, true);
        echo "\" />


";
    }

    // line 23
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 24
        echo "    <H1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["team"] ?? null), "name", array()), "html", null, true);
        echo "</H1>
    ";
        // line 25
        if ($this->getAttribute(($context["team"] ?? null), "teamPicture", array())) {
            // line 26
            echo "        <img width=\"100px\" class=\"img-responsive \" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["team"] ?? null), "teamPicture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["team"] ?? null), "teamPicture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["team"] ?? null), "name", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 28
        echo "    ";
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 29
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["team"] ?? null), "admin", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))) {
                // line 30
                echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editTeamModal\">Edit team</button>
        ";
            } else {
                // line 32
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 33
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                        // line 34
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_leaveTeam", array("teamId" => $this->getAttribute(($context["team"] ?? null), "Id", array()))), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Team:edit", array("id" => $this->getAttribute(($context["team"] ?? null), "id", array()), "request" => $this->getAttribute(($context["app"] ?? null), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
";
    }

    // line 61
    public function block_leftCollumn($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
            if (($this->getAttribute($context["post"], "type", array()) == "event_picture")) {
                // line 91
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_event", array("eventId" => $this->getAttribute($this->getAttribute($context["post"], "event", array()), "getId", array()))), "html", null, true);
                echo "\">
                        <img class=\"img-responsive\" src=\"/";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "event", array()), "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "event", array()), "picture", array()), "url", array()), "html", null, true);
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
    }

    // line 175
    public function block_rightCollumn($context, array $blocks = array())
    {
        // line 176
        echo "    <H2>Team members:</H2>
    ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
    }

    public function getTemplateName()
    {
        return "@SmilePlatform/Default/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 183,  437 => 181,  435 => 180,  431 => 179,  428 => 178,  424 => 177,  421 => 176,  418 => 175,  399 => 162,  393 => 159,  384 => 155,  375 => 149,  361 => 142,  357 => 141,  348 => 135,  342 => 132,  335 => 128,  327 => 123,  321 => 120,  315 => 116,  307 => 114,  305 => 113,  299 => 109,  293 => 107,  285 => 105,  283 => 104,  278 => 102,  272 => 99,  268 => 98,  264 => 97,  260 => 95,  252 => 92,  247 => 91,  244 => 90,  236 => 87,  231 => 86,  228 => 85,  222 => 82,  217 => 81,  214 => 80,  208 => 77,  203 => 76,  200 => 75,  189 => 72,  186 => 71,  180 => 69,  178 => 68,  173 => 66,  169 => 65,  165 => 64,  162 => 63,  157 => 62,  154 => 61,  142 => 52,  129 => 41,  126 => 40,  123 => 39,  117 => 38,  109 => 34,  106 => 33,  101 => 32,  97 => 30,  94 => 29,  91 => 28,  81 => 26,  79 => 25,  74 => 24,  71 => 23,  63 => 19,  52 => 10,  48 => 8,  40 => 6,  38 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SmilePlatform/Default/team.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle\\Resources\\views\\Default\\team.html.twig");
    }
}
