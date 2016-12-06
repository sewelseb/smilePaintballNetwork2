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
        $__internal_30fb329f7b2e583aa85819c73a6f0e75bb5c55bdd1a5f949460799c10bb4dd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fb329f7b2e583aa85819c73a6f0e75bb5c55bdd1a5f949460799c10bb4dd62->enter($__internal_30fb329f7b2e583aa85819c73a6f0e75bb5c55bdd1a5f949460799c10bb4dd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30fb329f7b2e583aa85819c73a6f0e75bb5c55bdd1a5f949460799c10bb4dd62->leave($__internal_30fb329f7b2e583aa85819c73a6f0e75bb5c55bdd1a5f949460799c10bb4dd62_prof);

    }

    // line 3
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_8abaf97e0e662242397c279046c9007abf0d63f9e847e56e8f7430a82f2f865f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abaf97e0e662242397c279046c9007abf0d63f9e847e56e8f7430a82f2f865f->enter($__internal_8abaf97e0e662242397c279046c9007abf0d63f9e847e56e8f7430a82f2f865f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

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
        echo "    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"http://smilepaintball.com/platform/post/";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" />
    ";
        // line 28
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array()) != null)) {
            // line 29
            echo "        ";
            $context["teamText"] = (" of team " . $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array()), "name", array()));
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo ". Contend posted by ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "username", array()), "html", null, true);
        echo twig_escape_filter($this->env, ($context["teamText"] ?? $this->getContext($context, "teamText")), "html", null, true);
        echo ".\" />

";
        
        $__internal_8abaf97e0e662242397c279046c9007abf0d63f9e847e56e8f7430a82f2f865f->leave($__internal_8abaf97e0e662242397c279046c9007abf0d63f9e847e56e8f7430a82f2f865f_prof);

    }

    // line 37
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_3a7d4fc3686aab77465782e8d00d3b365ec2cc14a042c1805cfb3d2cdcfbc1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7d4fc3686aab77465782e8d00d3b365ec2cc14a042c1805cfb3d2cdcfbc1e9->enter($__internal_3a7d4fc3686aab77465782e8d00d3b365ec2cc14a042c1805cfb3d2cdcfbc1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 38
        echo "
";
        
        $__internal_3a7d4fc3686aab77465782e8d00d3b365ec2cc14a042c1805cfb3d2cdcfbc1e9->leave($__internal_3a7d4fc3686aab77465782e8d00d3b365ec2cc14a042c1805cfb3d2cdcfbc1e9_prof);

    }

    // line 41
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_575d56311bde7eb624c90e77602521870c090b4ed58d27005104e639c7cc8e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575d56311bde7eb624c90e77602521870c090b4ed58d27005104e639c7cc8e8c->enter($__internal_575d56311bde7eb624c90e77602521870c090b4ed58d27005104e639c7cc8e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 42
        echo "    ";
        if (($context["firstView"] ?? $this->getContext($context, "firstView"))) {
            // line 43
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
        // line 65
        echo " ";
        // line 66
        echo "    <div class=\"row\" >
        <h1>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>
      <span id=\"smileApiUpvoteUrl\" hidden>";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_upvote_url");
        echo "</span>
        <span id=\"smileApiDownvoteUrl\" hidden>";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_downvote_url");
        echo "</span>
        <div class=\"col-md-7\">
            ";
        // line 71
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "video_youtube")) {
            // line 72
            echo "                <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
            ";
        }
        // line 74
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "video_facebook")) {
            // line 75
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
        // line 78
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "picture_facebook")) {
            // line 79
            echo "                <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 81
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "picture_externalUrl")) {
            // line 82
            echo "                <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 84
        echo "            ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "type", array()) == "picture_local")) {
            // line 85
            echo "                <img class=\"img-responsive\" src=\"/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "picture", array()), "getUploadDir", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 87
        echo "        </div>
        <div class=\"col-md-5 \">


            <h4>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "eventName", array()), "html", null, true);
        echo "</h4>
            <div>
                <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "getId", array()))), "html", null, true);
        echo "\">
                    by
                    ";
        // line 95
        if (($this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "lastName", array()))) {
            // line 96
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "lastName", array()), "html", null, true);
            echo "</strong><br>
                    ";
        } else {
            // line 98
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                    ";
        }
        // line 100
        echo "                </a>
            </div>
            <div>
                ";
        // line 103
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array())) {
            // line 104
            echo "                    <a href=\"/platform/team/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array()), "id", array()), "html", null, true);
            echo "\">team: <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "team", array()), "name", array()), "html", null, true);
            echo "</strong></a>
                ";
        }
        // line 106
        echo "            </div>
            <p>
            <div id=\"updownVote_";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"\">
                        <span onclick=\"upvote(";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                    </a>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"\">
                        <span onclick=\"downvote(";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                    </a>
                </div>
            </div>
            <div id=\"upvoted_";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                upvoted ;)
            </div>
            <div id=\"downvoted_";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                downvoted :(
            </div>
            </p>

            <div>
                <span id=\"post_point_";
        // line 129
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
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_comment_addNew");
        echo "</span>
                <strong>Comments:</strong>
                ";
        // line 139
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 140
            echo "                    <textarea class=\"form-control input-lg\" placeholder=\"Your comment...\" with=\"95%\" id=\"textToUseToComment\"></textarea><br/>
                    <div class=\"clearfix\"></div>
                    <button class=\"btn btn-primary\" onclick=\"sendComment(";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo ")\">Send</button>
                ";
        }
        // line 144
        echo "
                <div id=\"sendedMessage\" hidden>
                    Sent ;)
                </div>
                ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 149
            echo "                    <div class=\"row\">
                        <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "url", array()), "html", null, true);
            echo "\"  class=\"comment-profile-pic\">
                            <strong>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                        </a>
                        ";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "            </div>
        </div>


        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-582b51a0caf3c323\"></script>

    </div>
";
        
        $__internal_575d56311bde7eb624c90e77602521870c090b4ed58d27005104e639c7cc8e8c->leave($__internal_575d56311bde7eb624c90e77602521870c090b4ed58d27005104e639c7cc8e8c_prof);

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
        return array (  419 => 157,  410 => 154,  405 => 152,  399 => 151,  395 => 150,  392 => 149,  388 => 148,  382 => 144,  377 => 142,  373 => 140,  371 => 139,  366 => 137,  349 => 129,  340 => 123,  334 => 120,  327 => 116,  319 => 111,  313 => 108,  309 => 106,  301 => 104,  299 => 103,  294 => 100,  288 => 98,  280 => 96,  278 => 95,  273 => 93,  268 => 91,  262 => 87,  254 => 85,  251 => 84,  245 => 82,  242 => 81,  236 => 79,  233 => 78,  222 => 75,  219 => 74,  213 => 72,  211 => 71,  206 => 69,  202 => 68,  198 => 67,  195 => 66,  193 => 65,  168 => 43,  165 => 42,  159 => 41,  151 => 38,  145 => 37,  131 => 33,  128 => 32,  125 => 31,  122 => 30,  119 => 29,  117 => 28,  113 => 27,  110 => 26,  102 => 24,  99 => 23,  93 => 21,  90 => 20,  84 => 18,  81 => 17,  78 => 16,  74 => 14,  71 => 13,  65 => 11,  62 => 10,  59 => 9,  53 => 7,  51 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"http://smilepaintball.com/platform/post/{{ post.id }}\" />
    {% if post.team != null %}
        {% set teamText = \" of team \"~post.team.name %}
    {% else %}
        {% set teamText = \"\" %}
    {% endif %}
    <meta property=\"og:description\" content=\"{{ post.title }}. Contend posted by {{ post.user.username }}{{ teamText }}.\" />

{% endblock %}

{% block pageHeader %}

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
{% endblock %}", "SmilePlatformBundle::Default/post.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/post.html.twig");
    }
}
