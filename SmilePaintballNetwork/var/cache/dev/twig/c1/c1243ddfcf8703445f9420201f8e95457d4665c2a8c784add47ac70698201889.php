<?php

/* SmilePlatformBundle::Default/post.html.twig */
class __TwigTemplate_a0fff5a2876031889bad0be075ee524006978439889aff66024de88ad4ff7c46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle::Default/post.html.twig", 1);
        $this->blocks = array(
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
        $__internal_9e5978894876eb47087f19a40234b1efa194233c315ff1bbda1c548a02ce3823 = $this->env->getExtension("native_profiler");
        $__internal_9e5978894876eb47087f19a40234b1efa194233c315ff1bbda1c548a02ce3823->enter($__internal_9e5978894876eb47087f19a40234b1efa194233c315ff1bbda1c548a02ce3823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e5978894876eb47087f19a40234b1efa194233c315ff1bbda1c548a02ce3823->leave($__internal_9e5978894876eb47087f19a40234b1efa194233c315ff1bbda1c548a02ce3823_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_cca1557b5c69a51aa251d3c88a28c05a53175f14f215e5f9aa3519ead9a553a9 = $this->env->getExtension("native_profiler");
        $__internal_cca1557b5c69a51aa251d3c88a28c05a53175f14f215e5f9aa3519ead9a553a9->enter($__internal_cca1557b5c69a51aa251d3c88a28c05a53175f14f215e5f9aa3519ead9a553a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_cca1557b5c69a51aa251d3c88a28c05a53175f14f215e5f9aa3519ead9a553a9->leave($__internal_cca1557b5c69a51aa251d3c88a28c05a53175f14f215e5f9aa3519ead9a553a9_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_fb830bd20ab0559d45d5c666ab51eef938c93093a6beaa1240315fb3915ecc03 = $this->env->getExtension("native_profiler");
        $__internal_fb830bd20ab0559d45d5c666ab51eef938c93093a6beaa1240315fb3915ecc03->enter($__internal_fb830bd20ab0559d45d5c666ab51eef938c93093a6beaa1240315fb3915ecc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 8
        echo "    <div class=\"row\" >
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>
      <span id=\"smileApiUpvoteUrl\" hidden>";
        // line 10
        echo $this->env->getExtension('routing')->getPath("smile_api_post_upvote_url");
        echo "</span>
        <span id=\"smileApiDownvoteUrl\" hidden>";
        // line 11
        echo $this->env->getExtension('routing')->getPath("smile_api_post_downvote_url");
        echo "</span>
        <div class=\"col-md-7\">
            ";
        // line 13
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "video_youtube")) {
            // line 14
            echo "                <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
            ";
        }
        // line 16
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "video_facebook")) {
            // line 17
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
        // line 20
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_facebook")) {
            // line 21
            echo "                <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 23
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_externalUrl")) {
            // line 24
            echo "                <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 26
        echo "            ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type", array()) == "picture_local")) {
            // line 27
            echo "                <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"\">
            ";
        }
        // line 29
        echo "        </div>
        <div class=\"col-md-5 \">


            <h4>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "eventName", array()), "html", null, true);
        echo "</h4>
            <p>
            <div id=\"updownVote_";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"\">
                        <span onclick=\"upvote(";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                    </a>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <a href=\"\">
                        <span onclick=\"downvote(";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                    </a>
                </div>
            </div>
            <div id=\"upvoted_";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                upvoted ;)
            </div>
            <div id=\"downvoted_";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" hidden>
                downvoted :(
            </div>
            </p>

            <div>
                ";
        // line 56
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "upvotes", array()) - $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "downvotes", array())), "html", null, true);
        echo " points, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()), "html", null, true);
        echo " comments
            </div>
            <div>
                <div class=\"spacer-5px\">
                    <div class=\"fb-share-button\"
                         data-href=\"http://smilepaintball.com/app_dev.php/platform/post/";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\"
                         data-layout=\"button_count\">
                    </div>
                </div>
                <div class=\"spacer-5px\">
                    <a
                            href=\"https://twitter.com/intent/tweet?text=";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "&url=http://smilepaintball.com/app_dev.php/platform/post/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                        <button class=\"btn twitter-share-button\">Tweet</button></a>
                </div>
                <div class=\"spacer-5px\">
                    <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/app_dev.php/platform/post/";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" data-counter=\"right\"></script>
                </div>
                <div class=\"spacer-5px\">
                    Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/app_dev.php/platform/post/";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
                </div>


            </div>
            <div class=\"col-md-11\">
                <span id=\"postCommentUrl\" hidden>";
        // line 80
        echo $this->env->getExtension('routing')->getPath("smile_api_comment_addNew");
        echo "</span>
                <strong>Comments:</strong>
                ";
        // line 82
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 83
            echo "                    <textarea class=\"form-control input-lg\" placeholder=\"Your comment...\" with=\"95%\" id=\"textToUseToComment\"></textarea><br/>
                    <div class=\"clearfix\"></div>
                    <button class=\"btn btn-primary\" onclick=\"sendComment(";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo ")\">Send</button>
                ";
        }
        // line 87
        echo "
                <div id=\"sendedMessage\" hidden>
                    Sent ;)
                </div>
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 92
            echo "                    <div class=\"row\">
                        <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "picture", array()), "url", array()), "html", null, true);
            echo "\"  class=\"comment-profile-pic\">
                            <strong>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                        </a>
                        ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "            </div>
        </div>


    </div>
";
        
        $__internal_fb830bd20ab0559d45d5c666ab51eef938c93093a6beaa1240315fb3915ecc03->leave($__internal_fb830bd20ab0559d45d5c666ab51eef938c93093a6beaa1240315fb3915ecc03_prof);

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
        return array (  265 => 100,  256 => 97,  251 => 95,  245 => 94,  241 => 93,  238 => 92,  234 => 91,  228 => 87,  223 => 85,  219 => 83,  217 => 82,  212 => 80,  203 => 74,  197 => 71,  188 => 67,  179 => 61,  169 => 56,  160 => 50,  154 => 47,  147 => 43,  139 => 38,  133 => 35,  128 => 33,  122 => 29,  114 => 27,  111 => 26,  105 => 24,  102 => 23,  96 => 21,  93 => 20,  82 => 17,  79 => 16,  73 => 14,  71 => 13,  66 => 11,  62 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SmilePlatformBundle::Default/layout.html.twig" %}*/
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
/*                          data-href="http://smilepaintball.com/app_dev.php/platform/post/{{ post.id }}"*/
/*                          data-layout="button_count">*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="spacer-5px">*/
/*                     <a*/
/*                             href="https://twitter.com/intent/tweet?text={{post.title}}&url=http://smilepaintball.com/app_dev.php/platform/post/{{ post.id }}">*/
/*                         <button class="btn twitter-share-button">Tweet</button></a>*/
/*                 </div>*/
/*                 <div class="spacer-5px">*/
/*                     <script type="IN/Share" data-url="http://smilepaintball.com/app_dev.php/platform/post/{{ post.id }}" data-counter="right"></script>*/
/*                 </div>*/
/*                 <div class="spacer-5px">*/
/*                     Share: <input class=" form-control input-lg" value="http://smilepaintball.com/app_dev.php/platform/post/{{ post.id }}">*/
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
