<?php

/* SmilePlatformBundle::Default/post.html.twig */
class __TwigTemplate_b1c08e834572a652afdc38a498084f970c64ef5506b35e1d99dadea2b99dd430 extends Twig_Template
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
        $__internal_f5cf83042c87658c7d089869d0cbcfe1c079da1d9f47e875a7124a44711b44bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5cf83042c87658c7d089869d0cbcfe1c079da1d9f47e875a7124a44711b44bb->enter($__internal_f5cf83042c87658c7d089869d0cbcfe1c079da1d9f47e875a7124a44711b44bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5cf83042c87658c7d089869d0cbcfe1c079da1d9f47e875a7124a44711b44bb->leave($__internal_f5cf83042c87658c7d089869d0cbcfe1c079da1d9f47e875a7124a44711b44bb_prof);

    }

    // line 3
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_ddda1fb1396924f3984ed2c2313df0cc23d04ea171ad27339abbeedb46ee8073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddda1fb1396924f3984ed2c2313df0cc23d04ea171ad27339abbeedb46ee8073->enter($__internal_ddda1fb1396924f3984ed2c2313df0cc23d04ea171ad27339abbeedb46ee8073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

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
        
        $__internal_ddda1fb1396924f3984ed2c2313df0cc23d04ea171ad27339abbeedb46ee8073->leave($__internal_ddda1fb1396924f3984ed2c2313df0cc23d04ea171ad27339abbeedb46ee8073_prof);

    }

    // line 45
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_94fc2fefbbb77464ff4731eea63c595bf58cb24593920555b2761e0f522c0642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fc2fefbbb77464ff4731eea63c595bf58cb24593920555b2761e0f522c0642->enter($__internal_94fc2fefbbb77464ff4731eea63c595bf58cb24593920555b2761e0f522c0642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 46
        echo "    <div class=\"pull-right\">
        <!--Smile's facebook page:
        <div class=\"fb-like\" data-href=\"https://www.facebook.com/smilepaintball/?fref=ts\" data-layout=\"button_count\" data-action=\"like\" data-size=\"large\" data-show-faces=\"true\" data-share=\"true\"></div>
        -->
        <a href=\"https://www.facebook.com/groups/1790079874650463/\"><button class=\"btn btn-register-facebook\"><strong>Join our Facebook group</strong></button></a>
    </div>
";
        
        $__internal_94fc2fefbbb77464ff4731eea63c595bf58cb24593920555b2761e0f522c0642->leave($__internal_94fc2fefbbb77464ff4731eea63c595bf58cb24593920555b2761e0f522c0642_prof);

    }

    // line 54
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_66dfa72e29b343d0304b0faf02a6729720a3ab5772931baff084e250dfbbf9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66dfa72e29b343d0304b0faf02a6729720a3ab5772931baff084e250dfbbf9f3->enter($__internal_66dfa72e29b343d0304b0faf02a6729720a3ab5772931baff084e250dfbbf9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 55
        echo "    ";
        if (($context["firstView"] ?? $this->getContext($context, "firstView"))) {
            // line 56
            echo "        <div class=\"modal fade\" id=\"sharePostModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sharePostModal\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Share your post</h4>
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
        <h1 class=\"page-header\">
            Watch, rate and share fun!
        </h1>
        <div>
            <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_homepage");
        echo "\"><button class=\"btn btn-primary\">See more fun</button></a>
            OR
            ";
        // line 86
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 87
            echo "                <button class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#loginModal\" > + Post your paintball fun</button>
            ";
        } else {
            // line 89
            echo "                <div class=\"text-center\">
                    <button class=\"btn btn-primary text-center\" data-toggle=\"modal\" data-target=\"#newPostModal\"><H4><strong> + Post your paintball fun </strong></H4></button>
                </div>
            ";
        }
        // line 93
        echo "        </div>
    </div>
    <div class=\"row\" >
        <h1>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>
      <span id=\"smileApiUpvoteUrl\" hidden>";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_upvote_url");
        echo "</span>
        <span id=\"smileApiDownvoteUrl\" hidden>";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_downvote_url");
        echo "</span>
        <div class=\"col-md-7\">
            ";
        // line 100
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "video_youtube")) {
            // line 101
            echo "                <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
            ";
        }
        // line 103
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "video_facebook")) {
            // line 104
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
        // line 107
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "picture_facebook")) {
            // line 108
            echo "                <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 110
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "picture_externalUrl")) {
            // line 111
            echo "                <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 113
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "picture_local")) {
            // line 114
            echo "                <img class=\"img-responsive\" src=\"/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "picture", array()), "getUploadDir", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 116
        echo "        </div>
        <div class=\"col-md-5 \">


            <h4>";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "eventName", array()), "html", null, true);
        echo "</h4>
            <div>
                <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "getId", array()))), "html", null, true);
        echo "\">
                    by
                    ";
        // line 124
        if (($this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "lastName", array()))) {
            // line 125
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "lastName", array()), "html", null, true);
            echo "</strong><br>
                    ";
        } else {
            // line 127
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                    ";
        }
        // line 129
        echo "                </a>
            </div>
            <div>
                ";
        // line 132
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array())) {
            // line 133
            echo "                    <a href=\"/platform/team/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array()), "id", array()), "html", null, true);
            echo "\">team: <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array()), "name", array()), "html", null, true);
            echo "</strong></a>
                ";
        }
        // line 135
        echo "            </div>
            <p>
            <div id=\"updownVote_";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                ";
        // line 138
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 139
            echo "                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"\">
                            <span onclick=\"upvote(";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"\">
                            <span onclick=\"downvote(";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                        </a>
                    </div>
                ";
        } else {
            // line 150
            echo "                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\">
                            <span onclick=\"openModalConnectToVote()\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\">
                            <span onclick=\"openModalConnectToVote()\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                        </a>
                    </div>
                ";
        }
        // line 161
        echo "            </div>
            <div id=\"upvoted_";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                upvoted ;)
            </div>
            <div id=\"downvoted_";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                downvoted :(
            </div>
            </p>

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
            <div>
                <div class=\"addthis_inline_share_toolbox\"></div>


            </div>
            <div class=\"col-md-11\">
                <span id=\"postCommentUrl\" hidden>";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_comment_addNew");
        echo "</span>
                <strong>Comments:</strong>
                ";
        // line 181
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 182
            echo "                    <textarea class=\"form-control input-lg\" placeholder=\"Your comment...\" with=\"95%\" id=\"textToUseToComment\"></textarea><br/>
                    <div class=\"clearfix\"></div>
                    <button class=\"btn btn-primary\" onclick=\"sendComment(";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo ")\">Send</button>
                ";
        }
        // line 186
        echo "
                <div id=\"sendedMessage\" hidden>
                    Sent ;)
                </div>
                ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 191
            echo "                    <div class=\"row\">
                        <a href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "url", array()), "html", null, true);
            echo "\"  class=\"comment-profile-pic\">
                            <strong>";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                        </a>
                        ";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "            </div>
        </div>


        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-582b51a0caf3c323\"></script>

    </div>
    ";
        // line 207
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 208
            echo "        <H3>To upvote, downvote, comment or post, please <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\"><button class=\"btn btn-primary\"><strong>log in</strong></button></a></H3>
    ";
        }
        
        $__internal_66dfa72e29b343d0304b0faf02a6729720a3ab5772931baff084e250dfbbf9f3->leave($__internal_66dfa72e29b343d0304b0faf02a6729720a3ab5772931baff084e250dfbbf9f3_prof);

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
        return array (  503 => 208,  501 => 207,  491 => 199,  482 => 196,  477 => 194,  471 => 193,  467 => 192,  464 => 191,  460 => 190,  454 => 186,  449 => 184,  445 => 182,  443 => 181,  438 => 179,  421 => 171,  412 => 165,  406 => 162,  403 => 161,  390 => 150,  383 => 146,  375 => 141,  371 => 139,  369 => 138,  365 => 137,  361 => 135,  353 => 133,  351 => 132,  346 => 129,  340 => 127,  332 => 125,  330 => 124,  325 => 122,  320 => 120,  314 => 116,  306 => 114,  303 => 113,  297 => 111,  294 => 110,  288 => 108,  285 => 107,  274 => 104,  271 => 103,  265 => 101,  263 => 100,  258 => 98,  254 => 97,  250 => 96,  245 => 93,  239 => 89,  235 => 87,  233 => 86,  228 => 84,  221 => 79,  219 => 78,  194 => 56,  191 => 55,  185 => 54,  172 => 46,  166 => 45,  158 => 42,  151 => 40,  142 => 38,  140 => 37,  137 => 36,  134 => 35,  131 => 34,  128 => 33,  125 => 32,  123 => 31,  118 => 29,  114 => 28,  110 => 26,  102 => 24,  99 => 23,  93 => 21,  90 => 20,  84 => 18,  81 => 17,  78 => 16,  74 => 14,  71 => 13,  65 => 11,  62 => 10,  59 => 9,  53 => 7,  51 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Share your post</h4>
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
        <h1 class=\"page-header\">
            Watch, rate and share fun!
        </h1>
        <div>
            <a href=\"{{ path('smile_platform_homepage') }}\"><button class=\"btn btn-primary\">See more fun</button></a>
            OR
            {% if not app.user %}
                <button class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#loginModal\" > + Post your paintball fun</button>
            {% else %}
                <div class=\"text-center\">
                    <button class=\"btn btn-primary text-center\" data-toggle=\"modal\" data-target=\"#newPostModal\"><H4><strong> + Post your paintball fun </strong></H4></button>
                </div>
            {% endif %}
        </div>
    </div>
    <div class=\"row\" >
        <h1>{{ post.title }}</h1>
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
                <div data-width=\"460px\" class=\"fb-post\" data-href=\"{{ post.url }}\"></div>
            {% endif %}
            {% if post.type=='picture_externalUrl' %}
                <img class=\"img-responsive\" src=\"{{ post.url }}\" alt=\"\">
            {% endif %}
            {% if post.type=='picture_local' %}
                <img class=\"img-responsive\" src=\"/{{post.picture.getUploadDir()}}/{{post.picture.url}}\" alt=\"\">
            {% endif %}
        </div>
        <div class=\"col-md-5 \">


            <h4>{{ post.eventName }}</h4>
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
                {% if app.user %}
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
                {% else %}
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\">
                            <span onclick=\"openModalConnectToVote()\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\">
                            <span onclick=\"openModalConnectToVote()\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
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
            </p>

            <div>
                <span id=\"post_point_{{ post.id }}\">{{ post.upvotes-post.downvotes }}</span> points, <span id=\"post_comment_{{ post.id }}\">{{ post.comments }}</span> comments
            </div>
            <div>
                <div class=\"addthis_inline_share_toolbox\"></div>


            </div>
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
                            <img src=\"{{ comment.user.picture.uploadDir }}/{{ comment.user.picture.url }}\"  class=\"comment-profile-pic\">
                            <strong>{{ comment.user.username }}</strong><br>
                        </a>
                        {{ comment.text }}
                    </div>
                {% endfor %}
            </div>
        </div>


        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-582b51a0caf3c323\"></script>

    </div>
    {% if not app.user %}
        <H3>To upvote, downvote, comment or post, please <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\"><button class=\"btn btn-primary\"><strong>log in</strong></button></a></H3>
    {% endif %}
{% endblock %}", "SmilePlatformBundle::Default/post.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/post.html.twig");
    }
}
