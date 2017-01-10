<?php

/* SmilePlatformBundle::Default/post.html.twig */
class __TwigTemplate_282c68c17823f95168105c171f55d33ac578f1b080199a9b8d385c4d82905364 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle::Default/post.html.twig", 1);
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
        $__internal_003c235d7d894e7413dbb7078cbbf8b33a7553121f38ef45fa6efd3139f0a77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003c235d7d894e7413dbb7078cbbf8b33a7553121f38ef45fa6efd3139f0a77c->enter($__internal_003c235d7d894e7413dbb7078cbbf8b33a7553121f38ef45fa6efd3139f0a77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_003c235d7d894e7413dbb7078cbbf8b33a7553121f38ef45fa6efd3139f0a77c->leave($__internal_003c235d7d894e7413dbb7078cbbf8b33a7553121f38ef45fa6efd3139f0a77c_prof);

    }

    // line 3
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_4acce6d7e75dd7f8182a0467a1a9889773dcb2974a33777ce69d6f67777fd71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acce6d7e75dd7f8182a0467a1a9889773dcb2974a33777ce69d6f67777fd71c->enter($__internal_4acce6d7e75dd7f8182a0467a1a9889773dcb2974a33777ce69d6f67777fd71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        // line 4
        echo "    <meta property=\"og:title\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "\" />
    <!-- facebook id: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getFacebookId", array(), "method"), "html", null, true);
        echo "-->
    ";
        // line 6
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "video_youtube")) {
            // line 7
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getThumbnails", array(), "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 9
        echo "    ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "video_facebook")) {
            // line 10
            echo "        ";
            if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getFacebookId", array(), "method") != "")) {
                // line 11
                echo "            <meta property=\"og:image\" content=\"https://smilepaintball.com/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getThumbnails", array(), "method"), "html", null, true);
                echo "\" />
        ";
            }
            // line 13
            echo "        ";
            if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getFacebookId", array(), "method") == "")) {
                // line 14
                echo "            <meta property=\"og:image\" content=\"http://smilepaintball.com/images/logo.png\" />
        ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "picture_facebook")) {
            // line 18
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getThumbnails", array(), "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 20
        echo "    ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "picture_externalUrl")) {
            // line 21
            echo "        <meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 23
        echo "    ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "picture_local")) {
            // line 24
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "picture", array()), "getUploadDir", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "picture", array()), "url", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 26
        echo "    <meta property=\"og:type\"   content=\"article\" />

    <meta property=\"og:url\" content=\"http://smilepaintball.com/platform/post/";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" />
    <meta property=\"article:author\" content=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "getFacebookId", array()), "html", null, true);
        echo "\" />

    ";
        // line 31
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array()) != null)) {
            // line 32
            echo "        ";
            $context["teamText"] = (" of team " . $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array()), "name", array()));
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
        if (($this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "lastName", array()))) {
            // line 38
            echo "        <meta property=\"og:description\" content=\"Posted by ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "lastName", array()), "html", null, true);
            echo twig_escape_filter($this->env, ($context["teamText"] ?? $this->getContext($context, "teamText")), "html", null, true);
            echo ".  :) You too, share your paintball fun on : \" />
    ";
        } else {
            // line 40
            echo "        <meta property=\"og:description\" content=\"Posted by ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "username", array()), "html", null, true);
            echo twig_escape_filter($this->env, ($context["teamText"] ?? $this->getContext($context, "teamText")), "html", null, true);
            echo ". :) You too, share your paintball fun on : \" />
    ";
        }
        // line 42
        echo "
";
        
        $__internal_4acce6d7e75dd7f8182a0467a1a9889773dcb2974a33777ce69d6f67777fd71c->leave($__internal_4acce6d7e75dd7f8182a0467a1a9889773dcb2974a33777ce69d6f67777fd71c_prof);

    }

    // line 45
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_db86172cd11ce415c75f55d2a6bf456b9fd019c45eff1d192c2069b69f2dfedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db86172cd11ce415c75f55d2a6bf456b9fd019c45eff1d192c2069b69f2dfedb->enter($__internal_db86172cd11ce415c75f55d2a6bf456b9fd019c45eff1d192c2069b69f2dfedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 46
        echo "    <div class=\"pull-right\">
        <!--Smile's facebook page:
        <div class=\"fb-like\" data-href=\"https://www.facebook.com/smilepaintball/?fref=ts\" data-layout=\"button_count\" data-action=\"like\" data-size=\"large\" data-show-faces=\"true\" data-share=\"true\"></div>
        -->
        <a href=\"https://www.facebook.com/groups/1790079874650463/\"><button class=\"btn btn-register-facebook\"><strong>Join our Facebook group</strong></button></a>
    </div>
";
        
        $__internal_db86172cd11ce415c75f55d2a6bf456b9fd019c45eff1d192c2069b69f2dfedb->leave($__internal_db86172cd11ce415c75f55d2a6bf456b9fd019c45eff1d192c2069b69f2dfedb_prof);

    }

    // line 54
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_ac40844068e4a257b4795c26206bd9af2da01f138a123ea8d4e804c1b30bc2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac40844068e4a257b4795c26206bd9af2da01f138a123ea8d4e804c1b30bc2d3->enter($__internal_ac40844068e4a257b4795c26206bd9af2da01f138a123ea8d4e804c1b30bc2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 55
        echo "    ";
        if (($context["firstView"] ?? $this->getContext($context, "firstView"))) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
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
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "video_youtube")) {
            // line 93
            echo "                <iframe  width=\"80%\"  height=\"300px\" ng-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
            ";
        }
        // line 95
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "video_facebook")) {
            // line 96
            echo "                <div class=\"fb-video\" data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" class=\"fb-xfbml-parse-ignore\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\"></a>
                    </blockquote></div>
            ";
        }
        // line 99
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "picture_facebook")) {
            // line 100
            echo "                <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 102
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "picture_externalUrl")) {
            // line 103
            echo "                <img class=\" post-img\"   src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 105
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "picture_local")) {
            // line 106
            echo "                ";
            if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "picture", array())) {
                // line 107
                echo "                    <img class=\" post-img\"   src=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "picture", array()), "getUploadDir", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "picture", array()), "url", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "getId", array()))), "html", null, true);
        echo "\">
                    by
                    ";
        // line 120
        if (($this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "lastName", array()))) {
            // line 121
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "lastName", array()), "html", null, true);
            echo "</strong><br>
                    ";
        } else {
            // line 123
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                    ";
        }
        // line 125
        echo "                </a>
                <div>
                    ";
        // line 127
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array())) {
            // line 128
            echo "                        <a href=\"/platform/team/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array()), "id", array()), "html", null, true);
            echo "\">team: <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array()), "name", array()), "html", null, true);
            echo "</strong></a>
                    ";
        }
        // line 130
        echo "                </div>
                ";
        // line 131
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "eventName", array()) && ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "eventName", array()) != ""))) {
            // line 132
            echo "                    <h4>Event: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "eventName", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                    ";
        // line 140
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 141
            echo "                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"upvote(";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img img-responsive\"></span>
                            </a>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"downvote(";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                    upvoted ;)
                </div>
                <div id=\"downvoted_";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                    downvoted :(
                </div>
                <div>
                    <span id=\"post_point_";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "upvotes", array()) - $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "downvotes", array())), "html", null, true);
        echo "</span> points, <span id=\"post_comment_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "comments", array()), "html", null, true);
        echo "</span> comments
                </div>
                ";
        // line 173
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()))) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_delete_post", array("postId" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "views", array()), "html", null, true);
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
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 197
            echo "                <textarea class=\"form-control input-lg\" placeholder=\"Your comment...\" with=\"95%\" id=\"textToUseToComment\"></textarea><br/>
                <div class=\"clearfix\"></div>
                <button class=\"btn btn-primary\" onclick=\"sendComment(";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
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
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 225
            echo "        <H3>To upvote, downvote, comment or post, please <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\"><button class=\"btn btn-primary\"><strong>log in</strong></button></a></H3>
    ";
        }
        
        $__internal_ac40844068e4a257b4795c26206bd9af2da01f138a123ea8d4e804c1b30bc2d3->leave($__internal_ac40844068e4a257b4795c26206bd9af2da01f138a123ea8d4e804c1b30bc2d3_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 225,  535 => 224,  525 => 216,  516 => 213,  510 => 211,  502 => 209,  500 => 208,  496 => 207,  493 => 206,  489 => 205,  483 => 201,  478 => 199,  474 => 197,  472 => 196,  467 => 194,  460 => 190,  454 => 186,  446 => 181,  437 => 174,  435 => 173,  424 => 171,  417 => 167,  411 => 164,  408 => 163,  395 => 152,  388 => 148,  380 => 143,  376 => 141,  374 => 140,  370 => 139,  363 => 134,  357 => 132,  355 => 131,  352 => 130,  344 => 128,  342 => 127,  338 => 125,  332 => 123,  324 => 121,  322 => 120,  317 => 118,  309 => 112,  306 => 111,  302 => 109,  294 => 107,  291 => 106,  288 => 105,  282 => 103,  279 => 102,  273 => 100,  270 => 99,  259 => 96,  256 => 95,  250 => 93,  248 => 92,  243 => 90,  239 => 89,  234 => 87,  225 => 81,  221 => 79,  219 => 78,  194 => 56,  191 => 55,  185 => 54,  172 => 46,  166 => 45,  158 => 42,  151 => 40,  142 => 38,  140 => 37,  137 => 36,  134 => 35,  131 => 34,  128 => 33,  125 => 32,  123 => 31,  118 => 29,  114 => 28,  110 => 26,  102 => 24,  99 => 23,  93 => 21,  90 => 20,  84 => 18,  81 => 17,  78 => 16,  74 => 14,  71 => 13,  65 => 11,  62 => 10,  59 => 9,  53 => 7,  51 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
    <meta property=\"og:title\" content=\"{{ post.title }}\" />
    <!-- facebook id: {{ post.getFacebookId() }}-->
    {% if post.type=='video_youtube' %}
        <meta property=\"og:image\" content=\"https://smilepaintball.com/{{ post.getThumbnails() }}\" />
    {% endif %}
    {% if post.type=='video_facebook' %}
        {% if post.getFacebookId()!='' %}
            <meta property=\"og:image\" content=\"https://smilepaintball.com/{{ post.getThumbnails()  }}\" />
        {% endif %}
        {% if post.getFacebookId()=='' %}
            <meta property=\"og:image\" content=\"http://smilepaintball.com/images/logo.png\" />
        {% endif %}
    {% endif %}
    {% if post.type=='picture_facebook' %}
        <meta property=\"og:image\" content=\"https://smilepaintball.com/{{ post.getThumbnails()  }}\" />
    {% endif %}
    {% if post.type=='picture_externalUrl' %}
        <meta property=\"og:image\" content=\"{{ post.url }}\" />
    {% endif %}
    {% if post.type=='picture_local' %}
        <meta property=\"og:image\" content=\"https://smilepaintball.com/{{post.picture.getUploadDir()}}/{{post.picture.url}}\" />
    {% endif %}
    <meta property=\"og:type\"   content=\"article\" />

    <meta property=\"og:url\" content=\"http://smilepaintball.com/platform/post/{{ post.id }}\" />
    <meta property=\"article:author\" content=\"{{ post.user.getFacebookId }}\" />

    {% if post.team != null %}
        {% set teamText = \" of team \"~post.team.name %}
    {% else %}
        {% set teamText = \"\" %}
    {% endif %}

    {% if post.user.firstName and post.user.lastName %}
        <meta property=\"og:description\" content=\"Posted by {{ post.user.firstName }} {{ post.user.lastName }}{{ teamText }}.  :) You too, share your paintball fun on : \" />
    {% else %}
        <meta property=\"og:description\" content=\"Posted by {{ post.user.username }}{{ teamText }}. :) You too, share your paintball fun on : \" />
    {% endif %}

{% endblock %}

{% block pageHeader %}
    <div class=\"pull-right\">
        <!--Smile's facebook page:
        <div class=\"fb-like\" data-href=\"https://www.facebook.com/smilepaintball/?fref=ts\" data-layout=\"button_count\" data-action=\"like\" data-size=\"large\" data-show-faces=\"true\" data-share=\"true\"></div>
        -->
        <a href=\"https://www.facebook.com/groups/1790079874650463/\"><button class=\"btn btn-register-facebook\"><strong>Join our Facebook group</strong></button></a>
    </div>
{% endblock %}

{% block leftCollumn %}
    {% if firstView %}{# it shows the poster where he can share his content #}
        <div class=\"modal fade\" id=\"sharePostModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sharePostModal\">
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
    {% endif %} {# end first view modal #}
    <div>
        <div>
            <a href=\"{{ path('smile_platform_homepage') }}\"><button class=\"btn btn-primary\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i> See more fun</button></a>

        </div>
    </div>
    <div class=\"row\" >

        <h1>{{ post.title }}</h1>

      <span id=\"smileApiUpvoteUrl\" hidden>{{ path ('smile_api_post_upvote_url') }}</span>
        <span id=\"smileApiDownvoteUrl\" hidden>{{ path ('smile_api_post_downvote_url') }}</span>
        <div class=\"text-center\">
            {% if post.type=='video_youtube' %}
                <iframe  width=\"80%\"  height=\"300px\" ng-src=\"{{ post.url }}\" frameborder=\"0\" allowfullscreen></iframe>
            {% endif %}
            {% if post.type=='video_facebook' %}
                <div class=\"fb-video\" data-href=\"{{ post.url }}\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"{{ post.url }}\" class=\"fb-xfbml-parse-ignore\"><a href=\"{{ post.url }}\"></a>
                    </blockquote></div>
            {% endif %}
            {% if post.type=='picture_facebook' %}
                <div data-width=\"460px\" class=\"fb-post\" data-href=\"{{ post.url }}\"></div>
            {% endif %}
            {% if post.type=='picture_externalUrl' %}
                <img class=\" post-img\"   src=\"{{ post.url }}\" alt=\"\">
            {% endif %}
            {% if post.type=='picture_local' %}
                {% if post.picture %}
                    <img class=\" post-img\"   src=\"/{{post.picture.getUploadDir()}}/{{post.picture.url}}\" alt=\"\">
                {% else %}
                    It seems the picture doesn't exist on the server. Please contact us if you think it is a bug ;)
                {% endif %}
            {% endif %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"\">
            <div class=\"col-md-9 col-sm-9 col-xs-9\">
                <a href=\"{{ path('smile_platform_profile', {'userId': post.user.getId })  }}\">
                    by
                    {% if post.user.firstName and post.user.lastName %}
                        <strong>{{ post.user.firstName }} {{ post.user.lastName }}</strong><br>
                    {% else %}
                        <strong>{{ post.user.username }}</strong><br>
                    {% endif %}
                </a>
                <div>
                    {% if post.team  %}
                        <a href=\"/platform/team/{{ post.team.id }}\">team: <strong>{{ post.team.name }}</strong></a>
                    {% endif %}
                </div>
                {% if post.eventName and post.eventName != \"\" %}
                    <h4>Event: {{ post.eventName }}</h4>
                {% endif %}
                <div>
                    <div class=\"addthis_inline_share_toolbox\"></div>
                </div>
            </div>
            <div class=\"col-md-3  sm-hidden\">
                <div class=\"row\" id=\"updownVote_{{post.id}}\">
                    {% if app.user %}
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"upvote({{ post.id }})\"><img src=\"/images/upvote.png\" class=\"vote-img img-responsive\"></span>
                            </a>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"downvote({{ post.id }})\"><img src=\"/images/downvote.png\" class=\"vote-img img-responsive\"></span>
                            </a>
                        </div>
                    {% else %}
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\">
                                <span onclick=\"openModalConnectToVote()\"><img src=\"/images/upvote.png\" class=\"vote-img img-responsive\"></span>
                            </a>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\">
                                <span onclick=\"openModalConnectToVote()\"><img src=\"/images/downvote.png\" class=\"vote-img img-responsive\"></span>
                            </a>
                        </div>
                    {% endif %}
                </div>
                <div id=\"upvoted_{{post.id}}\" hidden>
                    upvoted ;)
                </div>
                <div id=\"downvoted_{{post.id}}\" hidden>
                    downvoted :(
                </div>
                <div>
                    <span id=\"post_point_{{ post.id }}\">{{ post.upvotes-post.downvotes }}</span> points, <span id=\"post_comment_{{ post.id }}\">{{ post.comments }}</span> comments
                </div>
                {%  if app.user == post.user  %}
                    <div class=\"\">
                        <div class=\"dropdown\">
                            <button class=\"btn  dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                Delete
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li><a href=\"{{ path('smile_platform_delete_post', {'postId': post.id}) }}\">Confirm Delete post</a></li>
                            </ul>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"row\">
        this post has been seen {{ post.views }} times on SmilePaintball.com
    </div>
    <div class=\"row\">
        <div class=\"col-md-11\">
            <span id=\"postCommentUrl\" hidden>{{ path('smile_api_comment_addNew') }}</span>
            <strong>Comments:</strong>
            {% if app.user %}
                <textarea class=\"form-control input-lg\" placeholder=\"Your comment...\" with=\"95%\" id=\"textToUseToComment\"></textarea><br/>
                <div class=\"clearfix\"></div>
                <button class=\"btn btn-primary\" onclick=\"sendComment({{ post.id }})\">Send</button>
            {% endif %}

            <div id=\"sendedMessage\" hidden>
                Sent ;)
            </div>
            {% for comment in comments %}
                <div class=\"row\">
                    <a href=\"{{ path('smile_platform_profile', {'userId': comment.user.getId })  }}\">
                        {% if comment.user.picture %}
                            <img src=\"{{ comment.user.picture.uploadDir }}/{{ comment.user.picture.url }}\"  class=\"comment-profile-pic\">
                        {% endif %}
                        <strong>{{ comment.user.username }}</strong><br>
                    </a>
                    {{ comment.text }}
                </div>
            {% endfor %}
        </div>
    </div>


        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-582b51a0caf3c323\"></script>


    {% if not app.user %}
        <H3>To upvote, downvote, comment or post, please <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\"><button class=\"btn btn-primary\"><strong>log in</strong></button></a></H3>
    {% endif %}
{% endblock %}", "SmilePlatformBundle::Default/post.html.twig", "C:\\wamp64\\www\\bamsell\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/post.html.twig");
    }
}
