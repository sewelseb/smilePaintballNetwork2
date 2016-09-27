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
        $__internal_bf95cd01ee135df4ae9acdba7412d13f48066f9863b596fd25c4352485f5f56f = $this->env->getExtension("native_profiler");
        $__internal_bf95cd01ee135df4ae9acdba7412d13f48066f9863b596fd25c4352485f5f56f->enter($__internal_bf95cd01ee135df4ae9acdba7412d13f48066f9863b596fd25c4352485f5f56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf95cd01ee135df4ae9acdba7412d13f48066f9863b596fd25c4352485f5f56f->leave($__internal_bf95cd01ee135df4ae9acdba7412d13f48066f9863b596fd25c4352485f5f56f_prof);

    }

    // line 3
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_9ae97225be344f72d8c91c004b97bacd621637f4389adcfed43a502e31d15138 = $this->env->getExtension("native_profiler");
        $__internal_9ae97225be344f72d8c91c004b97bacd621637f4389adcfed43a502e31d15138->enter($__internal_9ae97225be344f72d8c91c004b97bacd621637f4389adcfed43a502e31d15138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

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
        
        $__internal_9ae97225be344f72d8c91c004b97bacd621637f4389adcfed43a502e31d15138->leave($__internal_9ae97225be344f72d8c91c004b97bacd621637f4389adcfed43a502e31d15138_prof);

    }

    // line 31
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_440aa366fbd95b3e6c5ec22040b4c0d5a4374fd5668372aaea3b6a63430342b9 = $this->env->getExtension("native_profiler");
        $__internal_440aa366fbd95b3e6c5ec22040b4c0d5a4374fd5668372aaea3b6a63430342b9->enter($__internal_440aa366fbd95b3e6c5ec22040b4c0d5a4374fd5668372aaea3b6a63430342b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 32
        echo "
";
        
        $__internal_440aa366fbd95b3e6c5ec22040b4c0d5a4374fd5668372aaea3b6a63430342b9->leave($__internal_440aa366fbd95b3e6c5ec22040b4c0d5a4374fd5668372aaea3b6a63430342b9_prof);

    }

    // line 35
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_614280f2c49f6678f8b83cddf88a25ee38a249b4a54a706739c38ef797cd3fe8 = $this->env->getExtension("native_profiler");
        $__internal_614280f2c49f6678f8b83cddf88a25ee38a249b4a54a706739c38ef797cd3fe8->enter($__internal_614280f2c49f6678f8b83cddf88a25ee38a249b4a54a706739c38ef797cd3fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

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
            <div>
                <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "getId", array()))), "html", null, true);
        echo "\">
                    by
                    ";
        // line 65
        if (($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "firstName", array()) && $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "lastName", array()))) {
            // line 66
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "lastName", array()), "html", null, true);
            echo "</strong><br>
                    ";
        } else {
            // line 68
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                    ";
        }
        // line 70
        echo "                </a>
            </div>
            <div>
                ";
        // line 73
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "team", array())) {
            // line 74
            echo "                    <a href=\"/platform/team/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "team", array()), "id", array()), "html", null, true);
            echo "\">team: <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "team", array()), "name", array()), "html", null, true);
            echo "</strong></a>
                ";
        }
        // line 76
        echo "            </div>
            <p>
            <div id=\"updownVote_";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"\">
                        <span onclick=\"upvote(";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                    </a>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"\">
                        <span onclick=\"downvote(";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                    </a>
                </div>
            </div>
            <div id=\"upvoted_";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                upvoted ;)
            </div>
            <div id=\"downvoted_";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                downvoted :(
            </div>
            </p>

            <div>
                ";
        // line 99
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "upvotes", array()) - $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "downvotes", array())), "html", null, true);
        echo " points, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()), "html", null, true);
        echo " comments
            </div>
            <div>
                <div class=\"spacer-5px\">
                    <div class=\"fb-share-button\"
                         data-href=\"http://smilepaintball.com/platform/post/";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\"
                         data-layout=\"button_count\">
                    </div>
                </div>
                <div class=\"spacer-5px\">
                    <a
                            href=\"https://twitter.com/intent/tweet?text=";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "&url=http://smilepaintball.com/platform/post/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                        <button class=\"btn twitter-share-button\">Tweet</button></a>
                </div>
                <div class=\"spacer-5px\">
                    <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" data-counter=\"right\"></script>
                </div>
                <div class=\"spacer-5px\">
                    Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                </div>


            </div>
            <div class=\"col-md-11\">
                <span id=\"postCommentUrl\" hidden>";
        // line 123
        echo $this->env->getExtension('routing')->getPath("smile_api_comment_addNew");
        echo "</span>
                <strong>Comments:</strong>
                ";
        // line 125
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 126
            echo "                    <textarea class=\"form-control input-lg\" placeholder=\"Your comment...\" with=\"95%\" id=\"textToUseToComment\"></textarea><br/>
                    <div class=\"clearfix\"></div>
                    <button class=\"btn btn-primary\" onclick=\"sendComment(";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo ")\">Send</button>
                ";
        }
        // line 130
        echo "
                <div id=\"sendedMessage\" hidden>
                    Sent ;)
                </div>
                ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 135
            echo "                    <div class=\"row\">
                        <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "url", array()), "html", null, true);
            echo "\"  class=\"comment-profile-pic\">
                            <strong>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                        </a>
                        ";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "            </div>
        </div>


    </div>
";
        
        $__internal_614280f2c49f6678f8b83cddf88a25ee38a249b4a54a706739c38ef797cd3fe8->leave($__internal_614280f2c49f6678f8b83cddf88a25ee38a249b4a54a706739c38ef797cd3fe8_prof);

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
        return array (  391 => 143,  382 => 140,  377 => 138,  371 => 137,  367 => 136,  364 => 135,  360 => 134,  354 => 130,  349 => 128,  345 => 126,  343 => 125,  338 => 123,  329 => 117,  323 => 114,  314 => 110,  305 => 104,  295 => 99,  286 => 93,  280 => 90,  273 => 86,  265 => 81,  259 => 78,  255 => 76,  247 => 74,  245 => 73,  240 => 70,  234 => 68,  226 => 66,  224 => 65,  219 => 63,  214 => 61,  208 => 57,  200 => 55,  197 => 54,  191 => 52,  188 => 51,  182 => 49,  179 => 48,  168 => 45,  165 => 44,  159 => 42,  157 => 41,  152 => 39,  148 => 38,  144 => 37,  141 => 36,  135 => 35,  127 => 32,  121 => 31,  111 => 27,  107 => 26,  104 => 25,  96 => 23,  93 => 22,  87 => 20,  84 => 19,  80 => 17,  77 => 16,  74 => 15,  70 => 13,  67 => 12,  61 => 10,  58 => 9,  55 => 8,  49 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
/*             <div>*/
/*                 <a href="{{ path('smile_platform_profile', {'userId': post.user.getId })  }}">*/
/*                     by*/
/*                     {% if post.user.firstName and post.user.lastName %}*/
/*                         <strong>{{ post.user.firstName }} {{ post.user.lastName }}</strong><br>*/
/*                     {% else %}*/
/*                         <strong>{{ post.user.username }}</strong><br>*/
/*                     {% endif %}*/
/*                 </a>*/
/*             </div>*/
/*             <div>*/
/*                 {% if post.team  %}*/
/*                     <a href="/platform/team/{{ post.team.id }}">team: <strong>{{ post.team.name }}</strong></a>*/
/*                 {% endif %}*/
/*             </div>*/
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
