<?php

/* SmilePlatformBundle::Default/post.html.twig */
class __TwigTemplate_15fd40cba6a295e0c256f86706c0c81d5072d29d8f9325d7da5afb7196bfcff0 extends Twig_Template
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
        $__internal_78fe769f72e08f4955ee94e5a52b702c1425a13788ba457eb19151ebcedc1304 = $this->env->getExtension("native_profiler");
        $__internal_78fe769f72e08f4955ee94e5a52b702c1425a13788ba457eb19151ebcedc1304->enter($__internal_78fe769f72e08f4955ee94e5a52b702c1425a13788ba457eb19151ebcedc1304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78fe769f72e08f4955ee94e5a52b702c1425a13788ba457eb19151ebcedc1304->leave($__internal_78fe769f72e08f4955ee94e5a52b702c1425a13788ba457eb19151ebcedc1304_prof);

    }

    // line 3
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_81186804cc2a9f2e8f7e5a7711fe65bbe43061fc44867cbe8f1f408a8aa2a770 = $this->env->getExtension("native_profiler");
        $__internal_81186804cc2a9f2e8f7e5a7711fe65bbe43061fc44867cbe8f1f408a8aa2a770->enter($__internal_81186804cc2a9f2e8f7e5a7711fe65bbe43061fc44867cbe8f1f408a8aa2a770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        // line 4
        echo "    <meta property=\"og:title\" content=\"Smile Paintball Network - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "\" />
    ";
        // line 5
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "video_youtube")) {
            // line 6
            echo "        <meta property=\"og:image\" content=\"http://img.youtube.com/vi/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getYoutubeId", array(), "method"), "html", null, true);
            echo "/default.jpg\" />
    ";
        }
        // line 8
        echo "    ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "video_facebook")) {
            // line 9
            echo "        ";
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getFacebookId", array(), "method") != "")) {
                // line 10
                echo "            <meta property=\"og:image\" content=\"https://graph.facebook.com/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getFacebookId", array(), "method"), "html", null, true);
                echo "/picture\" />
        ";
            }
            // line 12
            echo "        ";
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getFacebookId", array(), "method") == "")) {
                // line 13
                echo "            <meta property=\"og:image\" content=\"https://smilepaintball.com/images/logo.png\" />
        ";
            }
            // line 15
            echo "    ";
        }
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_facebook")) {
            // line 17
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com/images/logo.png\" />
    ";
        }
        // line 19
        echo "    ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_externalUrl")) {
            // line 20
            echo "        <meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 22
        echo "    ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_local")) {
            // line 23
            echo "        <meta property=\"og:image\" content=\"https://smilepaintball.com";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "picture", array()), "url", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 25
        echo "    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"https://smilepaintball.com/platform/post/";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" />

";
        
        $__internal_81186804cc2a9f2e8f7e5a7711fe65bbe43061fc44867cbe8f1f408a8aa2a770->leave($__internal_81186804cc2a9f2e8f7e5a7711fe65bbe43061fc44867cbe8f1f408a8aa2a770_prof);

    }

    // line 30
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_f208e74dfc73792bc950fdb104dccdb9867e79a569e06bb74d36d54bac96197c = $this->env->getExtension("native_profiler");
        $__internal_f208e74dfc73792bc950fdb104dccdb9867e79a569e06bb74d36d54bac96197c->enter($__internal_f208e74dfc73792bc950fdb104dccdb9867e79a569e06bb74d36d54bac96197c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 31
        echo "
";
        
        $__internal_f208e74dfc73792bc950fdb104dccdb9867e79a569e06bb74d36d54bac96197c->leave($__internal_f208e74dfc73792bc950fdb104dccdb9867e79a569e06bb74d36d54bac96197c_prof);

    }

    // line 34
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_f07b4d767a8f11b9aef13fd8a167c18e084a64b750338ae629b6a6cf42aeab08 = $this->env->getExtension("native_profiler");
        $__internal_f07b4d767a8f11b9aef13fd8a167c18e084a64b750338ae629b6a6cf42aeab08->enter($__internal_f07b4d767a8f11b9aef13fd8a167c18e084a64b750338ae629b6a6cf42aeab08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 35
        echo "    <div class=\"row\" >
        <h1>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>
      <span id=\"smileApiUpvoteUrl\" hidden>";
        // line 37
        echo $this->env->getExtension('routing')->getPath("smile_api_post_upvote_url");
        echo "</span>
        <span id=\"smileApiDownvoteUrl\" hidden>";
        // line 38
        echo $this->env->getExtension('routing')->getPath("smile_api_post_downvote_url");
        echo "</span>
        <div class=\"col-md-7\">
            ";
        // line 40
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "video_youtube")) {
            // line 41
            echo "                <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
            ";
        }
        // line 43
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "video_facebook")) {
            // line 44
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
        // line 47
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_facebook")) {
            // line 48
            echo "                <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 50
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_externalUrl")) {
            // line 51
            echo "                <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 53
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_local")) {
            // line 54
            echo "                <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 56
        echo "        </div>
        <div class=\"col-md-5 \">


            <h4>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "eventName", array()), "html", null, true);
        echo "</h4>
            <p>
            <div id=\"updownVote_";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"\">
                        <span onclick=\"upvote(";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                    </a>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"\">
                        <span onclick=\"downvote(";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                    </a>
                </div>
            </div>
            <div id=\"upvoted_";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                upvoted ;)
            </div>
            <div id=\"downvoted_";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                downvoted :(
            </div>
            </p>

            <div>
                ";
        // line 83
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "upvotes", array()) - $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "downvotes", array())), "html", null, true);
        echo " points, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()), "html", null, true);
        echo " comments
            </div>
            <div>
                <div class=\"spacer-5px\">
                    <div class=\"fb-share-button\"
                         data-href=\"http://smilepaintball.com/platform/post/";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\"
                         data-layout=\"button_count\">
                    </div>
                </div>
                <div class=\"spacer-5px\">
                    <a
                            href=\"https://twitter.com/intent/tweet?text=";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "&url=http://smilepaintball.com/platform/post/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                        <button class=\"btn twitter-share-button\">Tweet</button></a>
                </div>
                <div class=\"spacer-5px\">
                    <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" data-counter=\"right\"></script>
                </div>
                <div class=\"spacer-5px\">
                    Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                </div>


            </div>
            <div class=\"col-md-11\">
                <span id=\"postCommentUrl\" hidden>";
        // line 107
        echo $this->env->getExtension('routing')->getPath("smile_api_comment_addNew");
        echo "</span>
                <strong>Comments:</strong>
                ";
        // line 109
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 110
            echo "                    <textarea class=\"form-control input-lg\" placeholder=\"Your comment...\" with=\"95%\" id=\"textToUseToComment\"></textarea><br/>
                    <div class=\"clearfix\"></div>
                    <button class=\"btn btn-primary\" onclick=\"sendComment(";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo ")\">Send</button>
                ";
        }
        // line 114
        echo "
                <div id=\"sendedMessage\" hidden>
                    Sent ;)
                </div>
                ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 119
            echo "                    <div class=\"row\">
                        <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "url", array()), "html", null, true);
            echo "\"  class=\"comment-profile-pic\">
                            <strong>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                        </a>
                        ";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "            </div>
        </div>


    </div>
";
        
        $__internal_f07b4d767a8f11b9aef13fd8a167c18e084a64b750338ae629b6a6cf42aeab08->leave($__internal_f07b4d767a8f11b9aef13fd8a167c18e084a64b750338ae629b6a6cf42aeab08_prof);

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
        return array (  347 => 127,  338 => 124,  333 => 122,  327 => 121,  323 => 120,  320 => 119,  316 => 118,  310 => 114,  305 => 112,  301 => 110,  299 => 109,  294 => 107,  285 => 101,  279 => 98,  270 => 94,  261 => 88,  251 => 83,  242 => 77,  236 => 74,  229 => 70,  221 => 65,  215 => 62,  210 => 60,  204 => 56,  196 => 54,  193 => 53,  187 => 51,  184 => 50,  178 => 48,  175 => 47,  164 => 44,  161 => 43,  155 => 41,  153 => 40,  148 => 38,  144 => 37,  140 => 36,  137 => 35,  131 => 34,  123 => 31,  117 => 30,  107 => 26,  104 => 25,  96 => 23,  93 => 22,  87 => 20,  84 => 19,  80 => 17,  77 => 16,  74 => 15,  70 => 13,  67 => 12,  61 => 10,  58 => 9,  55 => 8,  49 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "SmilePlatformBundle::Default/layout.html.twig" %}*/
/* */
/* {% block openGraph %}*/
/*     <meta property="og:title" content="Smile Paintball Network - {{ post.title }}" />*/
/*     {% if post.type=='video_youtube' %}*/
/*         <meta property="og:image" content="http://img.youtube.com/vi/{{ post.getYoutubeId() }}/default.jpg" />*/
/*     {% endif %}*/
/*     {% if post.type=='video_facebook' %}*/
/*         {% if post.getFacebookId()!='' %}*/
/*             <meta property="og:image" content="https://graph.facebook.com/{{ post.getFacebookId() }}/picture" />*/
/*         {% endif %}*/
/*         {% if post.getFacebookId()=='' %}*/
/*             <meta property="og:image" content="https://smilepaintball.com/images/logo.png" />*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% if post.type=='picture_facebook' %}*/
/*         <meta property="og:image" content="https://smilepaintball.com/images/logo.png" />*/
/*     {% endif %}*/
/*     {% if post.type=='picture_externalUrl' %}*/
/*         <meta property="og:image" content="{{ post.url }}" />*/
/*     {% endif %}*/
/*     {% if post.type=='picture_local' %}*/
/*         <meta property="og:image" content="https://smilepaintball.com{{post.picture.uploadDir}}/{{post.picture.url}}" />*/
/*     {% endif %}*/
/*     <meta property="og:type" content="website" />*/
/*     <meta property="og:url" content="https://smilepaintball.com/platform/post/{{ post.id }}" />*/
/* */
/* {% endblock %}*/
/* */
/* {% block pageHeader %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block leftCollumn %}*/
/*     <div class="row" >*/
/*         <h1>{{ post.title }}</h1>*/
/*       <span id="smileApiUpvoteUrl" hidden>{{ path ('smile_api_post_upvote_url') }}</span>*/
/*         <span id="smileApiDownvoteUrl" hidden>{{ path ('smile_api_post_downvote_url') }}</span>*/
/*         <div class="col-md-7">*/
/*             {% if post.type=='video_youtube' %}*/
/*                 <iframe  width="100%"  height="300px" ng-src="{{ post.url }}" frameborder="0" allowfullscreen></iframe>*/
/*             {% endif %}*/
/*             {% if post.type=='video_facebook' %}*/
/*                 <div class="fb-video" data-href="{{ post.url }}" data-width="700px" data-show-text="false"><blockquote cite="{{ post.url }}" class="fb-xfbml-parse-ignore"><a href="{{ post.url }}"></a>*/
/*                     </blockquote></div>*/
/*             {% endif %}*/
/*             {% if post.type=='picture_facebook' %}*/
/*                 <div data-width="460px" class="fb-post" data-href="{{ post.url }}"></div>*/
/*             {% endif %}*/
/*             {% if post.type=='picture_externalUrl' %}*/
/*                 <img class="img-responsive" src="{{ post.url }}" alt="">*/
/*             {% endif %}*/
/*             {% if post.type=='picture_local' %}*/
/*                 <img class="img-responsive" src="{{post.picture.uploadDir}}/{{post.picture.url}}" alt="">*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="col-md-5 ">*/
/* */
/* */
/*             <h4>{{ post.eventName }}</h4>*/
/*             <p>*/
/*             <div id="updownVote_{{post.id}}">*/
/*                 <div class="col-md-6 col-sm-6 col-xs-6">*/
/*                     <a href="">*/
/*                         <span onclick="upvote({{ post.id }})"><img src="/images/upvote.png" class="vote-img"></span>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-md-6 col-sm-6 col-xs-6">*/
/*                     <a href="">*/
/*                         <span onclick="downvote({{ post.id }})"><img src="/images/downvote.png" class="vote-img"></span>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="upvoted_{{post.id}}" hidden>*/
/*                 upvoted ;)*/
/*             </div>*/
/*             <div id="downvoted_{{post.id}}" hidden>*/
/*                 downvoted :(*/
/*             </div>*/
/*             </p>*/
/* */
/*             <div>*/
/*                 {{ post.upvotes-post.downvotes }} points, {{ post.comments }} comments*/
/*             </div>*/
/*             <div>*/
/*                 <div class="spacer-5px">*/
/*                     <div class="fb-share-button"*/
/*                          data-href="http://smilepaintball.com/platform/post/{{ post.id }}"*/
/*                          data-layout="button_count">*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="spacer-5px">*/
/*                     <a*/
/*                             href="https://twitter.com/intent/tweet?text={{post.title}}&url=http://smilepaintball.com/platform/post/{{ post.id }}">*/
/*                         <button class="btn twitter-share-button">Tweet</button></a>*/
/*                 </div>*/
/*                 <div class="spacer-5px">*/
/*                     <script type="IN/Share" data-url="http://smilepaintball.com/platform/post/{{ post.id }}" data-counter="right"></script>*/
/*                 </div>*/
/*                 <div class="spacer-5px">*/
/*                     Share: <input class=" form-control input-lg" value="http://smilepaintball.com/platform/post/{{ post.id }}">*/
/*                 </div>*/
/* */
/* */
/*             </div>*/
/*             <div class="col-md-11">*/
/*                 <span id="postCommentUrl" hidden>{{ path('smile_api_comment_addNew') }}</span>*/
/*                 <strong>Comments:</strong>*/
/*                 {% if app.user %}*/
/*                     <textarea class="form-control input-lg" placeholder="Your comment..." with="95%" id="textToUseToComment"></textarea><br/>*/
/*                     <div class="clearfix"></div>*/
/*                     <button class="btn btn-primary" onclick="sendComment({{ post.id }})">Send</button>*/
/*                 {% endif %}*/
/* */
/*                 <div id="sendedMessage" hidden>*/
/*                     Sent ;)*/
/*                 </div>*/
/*                 {% for comment in comments %}*/
/*                     <div class="row">*/
/*                         <a href="{{ path('smile_platform_profile', {'userId': comment.user.getId })  }}">*/
/*                             <img src="{{ comment.user.picture.uploadDir }}/{{ comment.user.picture.url }}"  class="comment-profile-pic">*/
/*                             <strong>{{ comment.user.username }}</strong><br>*/
/*                         </a>*/
/*                         {{ comment.text }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* {% endblock %}*/
