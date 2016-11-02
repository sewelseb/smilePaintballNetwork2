<?php

/* SmilePlatformBundle::Default/post.html.twig */
class __TwigTemplate_e12083a105909d446a4ac4f65eefaecdc963e78dbd32d8d8758e4c327df9ed2c extends Twig_Template
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
        $__internal_24f17e494ed2c6ce56dbafa0200a1c7507cc7bcbf9e57aa24f46a124358cc6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f17e494ed2c6ce56dbafa0200a1c7507cc7bcbf9e57aa24f46a124358cc6b4->enter($__internal_24f17e494ed2c6ce56dbafa0200a1c7507cc7bcbf9e57aa24f46a124358cc6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f17e494ed2c6ce56dbafa0200a1c7507cc7bcbf9e57aa24f46a124358cc6b4->leave($__internal_24f17e494ed2c6ce56dbafa0200a1c7507cc7bcbf9e57aa24f46a124358cc6b4_prof);

    }

    // line 3
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_9246af770ddacf82141aaa38a6696b3c97c1da67d7eee47f02c9c819fedeb6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9246af770ddacf82141aaa38a6696b3c97c1da67d7eee47f02c9c819fedeb6d0->enter($__internal_9246af770ddacf82141aaa38a6696b3c97c1da67d7eee47f02c9c819fedeb6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        // line 4
        echo "    <meta property=\"og:title\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "\" />
    <!-- facebook id: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getFacebookId", array(), "method"), "html", null, true);
        echo "-->
    ";
        // line 6
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "video_youtube")) {
            // line 7
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getThumbnails", array(), "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 9
        echo "    ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "video_facebook")) {
            // line 10
            echo "        ";
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getFacebookId", array(), "method") != "")) {
                // line 11
                echo "            <meta property=\"og:image\" content=\"https://smilepaintball.com/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getThumbnails", array(), "method"), "html", null, true);
                echo "\" />
        ";
            }
            // line 13
            echo "        ";
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getFacebookId", array(), "method") == "")) {
                // line 14
                echo "            <meta property=\"og:image\" content=\"http://smilepaintball.com/images/logo.png\" />
        ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_facebook")) {
            // line 18
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getThumbnails", array(), "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 20
        echo "    ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_externalUrl")) {
            // line 21
            echo "        <meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 23
        echo "    ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_local")) {
            // line 24
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "picture", array()), "url", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 26
        echo "    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"http://smilepaintball.com/platform/post/";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" />
    ";
        // line 28
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "team", array()) != null)) {
            // line 29
            echo "        ";
            $context["teamText"] = (" of team " . $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "team", array()), "name", array()));
            // line 30
            echo "    ";
        } else {
            // line 31
            echo "        ";
            $context["teamText"] = "";
            // line 32
            echo "    ";
        }
        // line 33
        echo "    <meta property=\"og:description\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo ". Contend posted on SmilePaintball.com by ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "username", array()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["teamText"]) ? $context["teamText"] : $this->getContext($context, "teamText")), "html", null, true);
        echo ".\" />

";
        
        $__internal_9246af770ddacf82141aaa38a6696b3c97c1da67d7eee47f02c9c819fedeb6d0->leave($__internal_9246af770ddacf82141aaa38a6696b3c97c1da67d7eee47f02c9c819fedeb6d0_prof);

    }

    // line 37
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_913096e63ec51b949885316f6c47976dbd3efaee2e7d10d35d40dc97ad044def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913096e63ec51b949885316f6c47976dbd3efaee2e7d10d35d40dc97ad044def->enter($__internal_913096e63ec51b949885316f6c47976dbd3efaee2e7d10d35d40dc97ad044def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 38
        echo "
";
        
        $__internal_913096e63ec51b949885316f6c47976dbd3efaee2e7d10d35d40dc97ad044def->leave($__internal_913096e63ec51b949885316f6c47976dbd3efaee2e7d10d35d40dc97ad044def_prof);

    }

    // line 41
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_e362c7aef5c556908d8b9eba24ef20f5d0d023224e8e06e26dad8da499ee8db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e362c7aef5c556908d8b9eba24ef20f5d0d023224e8e06e26dad8da499ee8db5->enter($__internal_e362c7aef5c556908d8b9eba24ef20f5d0d023224e8e06e26dad8da499ee8db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 42
        echo "    <div class=\"row\" >
        <h1>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>
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
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "video_youtube")) {
            // line 48
            echo "                <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
            ";
        }
        // line 50
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "video_facebook")) {
            // line 51
            echo "                <div class=\"fb-video\" data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" class=\"fb-xfbml-parse-ignore\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\"></a>
                    </blockquote></div>
            ";
        }
        // line 54
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_facebook")) {
            // line 55
            echo "                <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 57
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_externalUrl")) {
            // line 58
            echo "                <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 60
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_local")) {
            // line 61
            echo "                <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 63
        echo "        </div>
        <div class=\"col-md-5 \">


            <h4>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "eventName", array()), "html", null, true);
        echo "</h4>
            <div>
                <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "getId", array()))), "html", null, true);
        echo "\">
                    by
                    ";
        // line 71
        if (($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "lastName", array()))) {
            // line 72
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "lastName", array()), "html", null, true);
            echo "</strong><br>
                    ";
        } else {
            // line 74
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                    ";
        }
        // line 76
        echo "                </a>
            </div>
            <div>
                ";
        // line 79
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "team", array())) {
            // line 80
            echo "                    <a href=\"/platform/team/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "team", array()), "id", array()), "html", null, true);
            echo "\">team: <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "team", array()), "name", array()), "html", null, true);
            echo "</strong></a>
                ";
        }
        // line 82
        echo "            </div>
            <p>
            <div id=\"updownVote_";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"\">
                        <span onclick=\"upvote(";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                    </a>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"\">
                        <span onclick=\"downvote(";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                    </a>
                </div>
            </div>
            <div id=\"upvoted_";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                upvoted ;)
            </div>
            <div id=\"downvoted_";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                downvoted :(
            </div>
            </p>

            <div>
                <span id=\"post_point_";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "upvotes", array()) - $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "downvotes", array())), "html", null, true);
        echo "</span> points, <span id=\"post_comment_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()), "html", null, true);
        echo "</span> comments
            </div>
            <div>
                <div class=\"spacer-5px\">
                    <div class=\"fb-share-button\"
                         data-href=\"http://smilepaintball.com/platform/post/";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\"
                         data-layout=\"button_count\">
                    </div>
                </div>
                <div class=\"spacer-5px\">
                    <a
                            href=\"https://twitter.com/intent/tweet?text=";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "&url=http://smilepaintball.com/platform/post/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                        <button class=\"btn twitter-share-button\">Tweet</button></a>
                </div>
                <div class=\"spacer-5px\">
                    <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" data-counter=\"right\"></script>
                </div>
                <div class=\"spacer-5px\">
                    Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                </div>


            </div>
            <div class=\"col-md-11\">
                <span id=\"postCommentUrl\" hidden>";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_comment_addNew");
        echo "</span>
                <strong>Comments:</strong>
                ";
        // line 131
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 132
            echo "                    <textarea class=\"form-control input-lg\" placeholder=\"Your comment...\" with=\"95%\" id=\"textToUseToComment\"></textarea><br/>
                    <div class=\"clearfix\"></div>
                    <button class=\"btn btn-primary\" onclick=\"sendComment(";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo ")\">Send</button>
                ";
        }
        // line 136
        echo "
                <div id=\"sendedMessage\" hidden>
                    Sent ;)
                </div>
                ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 141
            echo "                    <div class=\"row\">
                        <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "url", array()), "html", null, true);
            echo "\"  class=\"comment-profile-pic\">
                            <strong>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                        </a>
                        ";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "            </div>
        </div>


    </div>
";
        
        $__internal_e362c7aef5c556908d8b9eba24ef20f5d0d023224e8e06e26dad8da499ee8db5->leave($__internal_e362c7aef5c556908d8b9eba24ef20f5d0d023224e8e06e26dad8da499ee8db5_prof);

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
        return array (  419 => 149,  410 => 146,  405 => 144,  399 => 143,  395 => 142,  392 => 141,  388 => 140,  382 => 136,  377 => 134,  373 => 132,  371 => 131,  366 => 129,  357 => 123,  351 => 120,  342 => 116,  333 => 110,  319 => 105,  310 => 99,  304 => 96,  297 => 92,  289 => 87,  283 => 84,  279 => 82,  271 => 80,  269 => 79,  264 => 76,  258 => 74,  250 => 72,  248 => 71,  243 => 69,  238 => 67,  232 => 63,  224 => 61,  221 => 60,  215 => 58,  212 => 57,  206 => 55,  203 => 54,  192 => 51,  189 => 50,  183 => 48,  181 => 47,  176 => 45,  172 => 44,  168 => 43,  165 => 42,  159 => 41,  151 => 38,  145 => 37,  131 => 33,  128 => 32,  125 => 31,  122 => 30,  119 => 29,  117 => 28,  113 => 27,  110 => 26,  102 => 24,  99 => 23,  93 => 21,  90 => 20,  84 => 18,  81 => 17,  78 => 16,  74 => 14,  71 => 13,  65 => 11,  62 => 10,  59 => 9,  53 => 7,  51 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"SmilePlatformBundle::Default/layout.html.twig\" %}

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
        <meta property=\"og:image\" content=\"https://smilepaintball.com/{{post.picture.uploadDir}}/{{post.picture.url}}\" />
    {% endif %}
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"http://smilepaintball.com/platform/post/{{ post.id }}\" />
    {% if post.team != null %}
        {% set teamText = \" of team \"~post.team.name %}
    {% else %}
        {% set teamText = \"\" %}
    {% endif %}
    <meta property=\"og:description\" content=\"{{ post.title }}. Contend posted on SmilePaintball.com by {{ post.user.username }}{{ teamText }}.\" />

{% endblock %}

{% block pageHeader %}

{% endblock %}

{% block leftCollumn %}
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
                <img class=\"img-responsive\" src=\"{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
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
                <span id=\"post_point_{{ post.id }}\">{{ post.upvotes-post.downvotes }}</span> points, <span id=\"post_comment_{{ post.id }}\">{{ post.comments }}</span> comments
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


    </div>
{% endblock %}";
    }
}
