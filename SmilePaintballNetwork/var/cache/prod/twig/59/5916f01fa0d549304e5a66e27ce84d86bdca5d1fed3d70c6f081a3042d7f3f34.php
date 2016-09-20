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
        $__internal_86ac33065ef1f060ffbdea807b09531aba8bd867821ebcddeeb6a5151b16194a = $this->env->getExtension("native_profiler");
        $__internal_86ac33065ef1f060ffbdea807b09531aba8bd867821ebcddeeb6a5151b16194a->enter($__internal_86ac33065ef1f060ffbdea807b09531aba8bd867821ebcddeeb6a5151b16194a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86ac33065ef1f060ffbdea807b09531aba8bd867821ebcddeeb6a5151b16194a->leave($__internal_86ac33065ef1f060ffbdea807b09531aba8bd867821ebcddeeb6a5151b16194a_prof);

    }

    // line 3
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_992c8e21c9b2687fe56776def16303446e0c4f930e77ccaf31df0248934db671 = $this->env->getExtension("native_profiler");
        $__internal_992c8e21c9b2687fe56776def16303446e0c4f930e77ccaf31df0248934db671->enter($__internal_992c8e21c9b2687fe56776def16303446e0c4f930e77ccaf31df0248934db671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        // line 4
        echo "    <meta property=\"og:title\" content=\"";
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
    <meta property=\"og:description\" content=\"Contend posted on SmilePaintball.com by ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "username", array()), "html", null, true);
        echo ".\" />

";
        
        $__internal_992c8e21c9b2687fe56776def16303446e0c4f930e77ccaf31df0248934db671->leave($__internal_992c8e21c9b2687fe56776def16303446e0c4f930e77ccaf31df0248934db671_prof);

    }

    // line 31
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_26366f040b89e08f42e508f6c38c26ebdf5bafce38468cd6040054a5faf49e66 = $this->env->getExtension("native_profiler");
        $__internal_26366f040b89e08f42e508f6c38c26ebdf5bafce38468cd6040054a5faf49e66->enter($__internal_26366f040b89e08f42e508f6c38c26ebdf5bafce38468cd6040054a5faf49e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 32
        echo "
";
        
        $__internal_26366f040b89e08f42e508f6c38c26ebdf5bafce38468cd6040054a5faf49e66->leave($__internal_26366f040b89e08f42e508f6c38c26ebdf5bafce38468cd6040054a5faf49e66_prof);

    }

    // line 35
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_d8bff50c2c26c59b4e2e42b55e85e4095da5e250098131d60d4e5040cfc76fc5 = $this->env->getExtension("native_profiler");
        $__internal_d8bff50c2c26c59b4e2e42b55e85e4095da5e250098131d60d4e5040cfc76fc5->enter($__internal_d8bff50c2c26c59b4e2e42b55e85e4095da5e250098131d60d4e5040cfc76fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 36
        echo "    <div class=\"row\" >
        <h1>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>
      <span id=\"smileApiUpvoteUrl\" hidden>";
        // line 38
        echo $this->env->getExtension('routing')->getPath("smile_api_post_upvote_url");
        echo "</span>
        <span id=\"smileApiDownvoteUrl\" hidden>";
        // line 39
        echo $this->env->getExtension('routing')->getPath("smile_api_post_downvote_url");
        echo "</span>
        <div class=\"col-md-7\">
            ";
        // line 41
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "video_youtube")) {
            // line 42
            echo "                <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
            ";
        }
        // line 44
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "video_facebook")) {
            // line 45
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
        // line 48
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_facebook")) {
            // line 49
            echo "                <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 51
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_externalUrl")) {
            // line 52
            echo "                <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 54
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_local")) {
            // line 55
            echo "                <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 57
        echo "        </div>
        <div class=\"col-md-5 \">


            <h4>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "eventName", array()), "html", null, true);
        echo "</h4>
            <p>
            <div id=\"updownVote_";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"\">
                        <span onclick=\"upvote(";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                    </a>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"\">
                        <span onclick=\"downvote(";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                    </a>
                </div>
            </div>
            <div id=\"upvoted_";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                upvoted ;)
            </div>
            <div id=\"downvoted_";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                downvoted :(
            </div>
            </p>

            <div>
                ";
        // line 84
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "upvotes", array()) - $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "downvotes", array())), "html", null, true);
        echo " points, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()), "html", null, true);
        echo " comments
            </div>
            <div>
                <div class=\"spacer-5px\">
                    <div class=\"fb-share-button\"
                         data-href=\"http://smilepaintball.com/platform/post/";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\"
                         data-layout=\"button_count\">
                    </div>
                </div>
                <div class=\"spacer-5px\">
                    <a
                            href=\"https://twitter.com/intent/tweet?text=";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "&url=http://smilepaintball.com/platform/post/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                        <button class=\"btn twitter-share-button\">Tweet</button></a>
                </div>
                <div class=\"spacer-5px\">
                    <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" data-counter=\"right\"></script>
                </div>
                <div class=\"spacer-5px\">
                    Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                </div>


            </div>
            <div class=\"col-md-11\">
                <span id=\"postCommentUrl\" hidden>";
        // line 108
        echo $this->env->getExtension('routing')->getPath("smile_api_comment_addNew");
        echo "</span>
                <strong>Comments:</strong>
                ";
        // line 110
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 111
            echo "                    <textarea class=\"form-control input-lg\" placeholder=\"Your comment...\" with=\"95%\" id=\"textToUseToComment\"></textarea><br/>
                    <div class=\"clearfix\"></div>
                    <button class=\"btn btn-primary\" onclick=\"sendComment(";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo ")\">Send</button>
                ";
        }
        // line 115
        echo "
                <div id=\"sendedMessage\" hidden>
                    Sent ;)
                </div>
                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 120
            echo "                    <div class=\"row\">
                        <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "url", array()), "html", null, true);
            echo "\"  class=\"comment-profile-pic\">
                            <strong>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                        </a>
                        ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "            </div>
        </div>


    </div>
";
        
        $__internal_d8bff50c2c26c59b4e2e42b55e85e4095da5e250098131d60d4e5040cfc76fc5->leave($__internal_d8bff50c2c26c59b4e2e42b55e85e4095da5e250098131d60d4e5040cfc76fc5_prof);

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
        return array (  351 => 128,  342 => 125,  337 => 123,  331 => 122,  327 => 121,  324 => 120,  320 => 119,  314 => 115,  309 => 113,  305 => 111,  303 => 110,  298 => 108,  289 => 102,  283 => 99,  274 => 95,  265 => 89,  255 => 84,  246 => 78,  240 => 75,  233 => 71,  225 => 66,  219 => 63,  214 => 61,  208 => 57,  200 => 55,  197 => 54,  191 => 52,  188 => 51,  182 => 49,  179 => 48,  168 => 45,  165 => 44,  159 => 42,  157 => 41,  152 => 39,  148 => 38,  144 => 37,  141 => 36,  135 => 35,  127 => 32,  121 => 31,  111 => 27,  107 => 26,  104 => 25,  96 => 23,  93 => 22,  87 => 20,  84 => 19,  80 => 17,  77 => 16,  74 => 15,  70 => 13,  67 => 12,  61 => 10,  58 => 9,  55 => 8,  49 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "SmilePlatformBundle::Default/layout.html.twig" %}*/
/* */
/* {% block openGraph %}*/
/*     <meta property="og:title" content="{{ post.title }}" />*/
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
/*     <meta property="og:description" content="Contend posted on SmilePaintball.com by {{ post.user.username }}." />*/
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
