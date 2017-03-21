<?php

/* SmilePlatformBundle:Default:post.html.twig */
class __TwigTemplate_7efa5c188480aeb1951bc442d37f918f7564ab55c95d75eaafab33d3180c6bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle:Default:post.html.twig", 1);
        $this->blocks = array(
            'openGraph' => array($this, 'block_openGraph'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
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
    public function block_openGraph($context, array $blocks = array())
    {
        // line 4
        echo "    <meta property=\"og:title\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
        echo "\" />
    <!-- facebook id: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "getFacebookId", array(), "method"), "html", null, true);
        echo "-->
    ";
        // line 6
        if (($this->getAttribute(($context["post"] ?? null), "type", array()) == "video_youtube")) {
            // line 7
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "getThumbnails", array(), "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 9
        echo "    ";
        if (($this->getAttribute(($context["post"] ?? null), "type", array()) == "video_facebook")) {
            // line 10
            echo "        ";
            if (($this->getAttribute(($context["post"] ?? null), "getFacebookId", array(), "method") != "")) {
                // line 11
                echo "            <meta property=\"og:image\" content=\"https://smilepaintball.com/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "getThumbnails", array(), "method"), "html", null, true);
                echo "\" />
        ";
            }
            // line 13
            echo "        ";
            if (($this->getAttribute(($context["post"] ?? null), "getFacebookId", array(), "method") == "")) {
                // line 14
                echo "            <meta property=\"og:image\" content=\"http://smilepaintball.com/images/logo.png\" />
        ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if (($this->getAttribute(($context["post"] ?? null), "type", array()) == "picture_facebook")) {
            // line 18
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "getThumbnails", array(), "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 20
        echo "    ";
        if (($this->getAttribute(($context["post"] ?? null), "type", array()) == "picture_externalUrl")) {
            // line 21
            echo "        <meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "url", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 23
        echo "    ";
        if (($this->getAttribute(($context["post"] ?? null), "type", array()) == "picture_local")) {
            // line 24
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "picture", array()), "getUploadDir", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "picture", array()), "url", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 26
        echo "    <meta property=\"og:type\"   content=\"article\" />

    <meta property=\"og:url\" content=\"http://smilepaintball.com/platform/post/";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
        echo "\" />
    <meta property=\"article:author\" content=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "getFacebookId", array()), "html", null, true);
        echo "\" />

    ";
        // line 31
        if (($this->getAttribute(($context["post"] ?? null), "team", array()) != null)) {
            // line 32
            echo "        ";
            $context["teamText"] = (" of team " . $this->getAttribute($this->getAttribute(($context["post"] ?? null), "team", array()), "name", array()));
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "        ";
            $context["teamText"] = "";
            // line 35
            echo "    ";
        }
        // line 36
        echo "
    ";
        // line 37
        if (($this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "lastName", array()))) {
            // line 38
            echo "        <meta property=\"og:description\" content=\"Posted by ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "lastName", array()), "html", null, true);
            echo twig_escape_filter($this->env, ($context["teamText"] ?? null), "html", null, true);
            echo ".  :) You too, share your paintball fun on : \" />
    ";
        } else {
            // line 40
            echo "        <meta property=\"og:description\" content=\"Posted by ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo twig_escape_filter($this->env, ($context["teamText"] ?? null), "html", null, true);
            echo ". :) You too, share your paintball fun on : \" />
    ";
        }
        // line 42
        echo "
";
    }

    // line 45
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 46
        echo "    <div class=\"pull-right\">
        <!--Smile's facebook page:
        <div class=\"fb-like\" data-href=\"https://www.facebook.com/smilepaintball/?fref=ts\" data-layout=\"button_count\" data-action=\"like\" data-size=\"large\" data-show-faces=\"true\" data-share=\"true\"></div>
        -->
        <a href=\"https://www.facebook.com/groups/1790079874650463/\"><button class=\"btn btn-register-facebook\"><strong>Join our Facebook group</strong></button></a>
    </div>
";
    }

    // line 54
    public function block_leftCollumn($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        if (($context["firstView"] ?? null)) {
            // line 56
            echo "        <div class=\"modal fade\" id=\"sharePostModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sharePostModal\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Promote your post ;)</h4>
                    </div>
                    <div class=\"modal-body\">
                        Share your post on more than 200 social networks and websites:
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class=\"addthis_inline_share_toolbox\"></div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <script>
            \$(window).load(function(){
                \$('#sharePostModal').modal('show');
            });
        </script>
    ";
        }
        // line 78
        echo " ";
        // line 79
        echo "    <div>
        <div>
            <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_homepage");
        echo "\"><button class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i> See more fun</button></a>

        </div>
    </div>
    <div class=\"row\" >

        <h1>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h1>

      <span id=\"smileApiUpvoteUrl\" hidden>";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_upvote_url");
        echo "</span>
        <span id=\"smileApiDownvoteUrl\" hidden>";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_downvote_url");
        echo "</span>
        <div class=\"text-center\">
            ";
        // line 92
        if (($this->getAttribute(($context["post"] ?? null), "type", array()) == "video_youtube")) {
            // line 93
            echo "                <iframe  width=\"80%\"  height=\"300px\" ng-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
            ";
        }
        // line 95
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? null), "type", array()) == "video_facebook")) {
            // line 96
            echo "                <div class=\"fb-video\" data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "url", array()), "html", null, true);
            echo "\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "url", array()), "html", null, true);
            echo "\" class=\"fb-xfbml-parse-ignore\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "url", array()), "html", null, true);
            echo "\"></a>
                    </blockquote></div>
            ";
        }
        // line 99
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? null), "type", array()) == "picture_facebook")) {
            // line 100
            echo "                <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "url", array()), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 102
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? null), "type", array()) == "picture_externalUrl")) {
            // line 103
            echo "                <img class=\" post-img\"   src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 105
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? null), "type", array()) == "picture_local")) {
            // line 106
            echo "                ";
            if ($this->getAttribute(($context["post"] ?? null), "picture", array())) {
                // line 107
                echo "                    <img class=\" post-img\"   src=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "picture", array()), "getUploadDir", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                ";
            } else {
                // line 109
                echo "                    It seems the picture doesn't exist on the server. Please contact us if you think it is a bug ;)
                ";
            }
            // line 111
            echo "            ";
        }
        // line 112
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"\">
            <div class=\"col-md-9 col-sm-9 col-xs-9\">
                <a href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "getId", array()))), "html", null, true);
        echo "\">
                    by
                    ";
        // line 120
        if (($this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "lastName", array()))) {
            // line 121
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "lastName", array()), "html", null, true);
            echo "</strong><br>
                    ";
        } else {
            // line 123
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                    ";
        }
        // line 125
        echo "                </a>
                <div>
                    ";
        // line 127
        if ($this->getAttribute(($context["post"] ?? null), "team", array())) {
            // line 128
            echo "                        <a href=\"/platform/team/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "team", array()), "id", array()), "html", null, true);
            echo "\">team: <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "team", array()), "name", array()), "html", null, true);
            echo "</strong></a>
                    ";
        }
        // line 130
        echo "                </div>
                ";
        // line 131
        if (($this->getAttribute(($context["post"] ?? null), "eventName", array()) && ($this->getAttribute(($context["post"] ?? null), "eventName", array()) != ""))) {
            // line 132
            echo "                    <h4>Event: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "eventName", array()), "html", null, true);
            echo "</h4>
                ";
        }
        // line 134
        echo "                <div>
                    <div class=\"addthis_inline_share_toolbox\"></div>
                </div>
            </div>
            <div class=\"col-md-3  sm-hidden\">
                <div class=\"row\" id=\"updownVote_";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
        echo "\">
                    ";
        // line 140
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 141
            echo "                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"upvote(";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img img-responsive\"></span>
                            </a>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"downvote(";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img img-responsive\"></span>
                            </a>
                        </div>
                    ";
        } else {
            // line 152
            echo "                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\">
                                <span onclick=\"openModalConnectToVote()\"><img src=\"/images/upvote.png\" class=\"vote-img img-responsive\"></span>
                            </a>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\">
                                <span onclick=\"openModalConnectToVote()\"><img src=\"/images/downvote.png\" class=\"vote-img img-responsive\"></span>
                            </a>
                        </div>
                    ";
        }
        // line 163
        echo "                </div>
                <div id=\"upvoted_";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
        echo "\" hidden>
                    upvoted ;)
                </div>
                <div id=\"downvoted_";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
        echo "\" hidden>
                    downvoted :(
                </div>
                <div>
                    <span id=\"post_point_";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["post"] ?? null), "upvotes", array()) - $this->getAttribute(($context["post"] ?? null), "downvotes", array())), "html", null, true);
        echo "</span> points, <span id=\"post_comment_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "comments", array()), "html", null, true);
        echo "</span> comments
                </div>
                ";
        // line 173
        if (($this->getAttribute(($context["app"] ?? null), "user", array()) == $this->getAttribute(($context["post"] ?? null), "user", array()))) {
            // line 174
            echo "                    <div class=\"\">
                        <div class=\"dropdown\">
                            <button class=\"btn  dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                Delete
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_delete_post", array("postId" => $this->getAttribute(($context["post"] ?? null), "id", array()))), "html", null, true);
            echo "\">Confirm Delete post</a></li>
                            </ul>
                        </div>
                    </div>
                ";
        }
        // line 186
        echo "            </div>
        </div>
    </div>
    <div class=\"row\">
        this post has been seen ";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "views", array()), "html", null, true);
        echo " times on SmilePaintball.com
    </div>
    <div class=\"row\">
        <div class=\"col-md-11\">
            <span id=\"postCommentUrl\" hidden>";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_comment_addNew");
        echo "</span>
            <strong>Comments:</strong>
            ";
        // line 196
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 197
            echo "                <textarea class=\"form-control input-lg\" placeholder=\"Your comment...\" with=\"95%\" id=\"textToUseToComment\"></textarea><br/>
                <div class=\"clearfix\"></div>
                <button class=\"btn btn-primary\" onclick=\"sendComment(";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
            echo ")\">Send</button>
            ";
        }
        // line 201
        echo "
            <div id=\"sendedMessage\" hidden>
                Sent ;)
            </div>
            ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 206
            echo "                <div class=\"row\">
                    <a href=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                        ";
            // line 208
            if ($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array())) {
                // line 209
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "url", array()), "html", null, true);
                echo "\"  class=\"comment-profile-pic\">
                        ";
            }
            // line 211
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                    </a>
                    ";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "        </div>
    </div>


        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-582b51a0caf3c323\"></script>


    ";
        // line 224
        if ( !$this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 225
            echo "        <H3>To upvote, downvote, comment or post, please <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\"><button class=\"btn btn-primary\"><strong>log in</strong></button></a></H3>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 225,  514 => 224,  504 => 216,  495 => 213,  489 => 211,  481 => 209,  479 => 208,  475 => 207,  472 => 206,  468 => 205,  462 => 201,  457 => 199,  453 => 197,  451 => 196,  446 => 194,  439 => 190,  433 => 186,  425 => 181,  416 => 174,  414 => 173,  403 => 171,  396 => 167,  390 => 164,  387 => 163,  374 => 152,  367 => 148,  359 => 143,  355 => 141,  353 => 140,  349 => 139,  342 => 134,  336 => 132,  334 => 131,  331 => 130,  323 => 128,  321 => 127,  317 => 125,  311 => 123,  303 => 121,  301 => 120,  296 => 118,  288 => 112,  285 => 111,  281 => 109,  273 => 107,  270 => 106,  267 => 105,  261 => 103,  258 => 102,  252 => 100,  249 => 99,  238 => 96,  235 => 95,  229 => 93,  227 => 92,  222 => 90,  218 => 89,  213 => 87,  204 => 81,  200 => 79,  198 => 78,  173 => 56,  170 => 55,  167 => 54,  157 => 46,  154 => 45,  149 => 42,  142 => 40,  133 => 38,  131 => 37,  128 => 36,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  114 => 31,  109 => 29,  105 => 28,  101 => 26,  93 => 24,  90 => 23,  84 => 21,  81 => 20,  75 => 18,  72 => 17,  69 => 16,  65 => 14,  62 => 13,  56 => 11,  53 => 10,  50 => 9,  44 => 7,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SmilePlatformBundle:Default:post.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/post.html.twig");
    }
}
