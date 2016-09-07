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
        $__internal_d4e60da46011235fbb5b1227240f61503e1da49bef0d4a520df2483303131a59 = $this->env->getExtension("native_profiler");
        $__internal_d4e60da46011235fbb5b1227240f61503e1da49bef0d4a520df2483303131a59->enter($__internal_d4e60da46011235fbb5b1227240f61503e1da49bef0d4a520df2483303131a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4e60da46011235fbb5b1227240f61503e1da49bef0d4a520df2483303131a59->leave($__internal_d4e60da46011235fbb5b1227240f61503e1da49bef0d4a520df2483303131a59_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_ccd6f28bcfce0044142655d5d583d3ed73f52df9195f06b75c05812f91a226a3 = $this->env->getExtension("native_profiler");
        $__internal_ccd6f28bcfce0044142655d5d583d3ed73f52df9195f06b75c05812f91a226a3->enter($__internal_ccd6f28bcfce0044142655d5d583d3ed73f52df9195f06b75c05812f91a226a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_ccd6f28bcfce0044142655d5d583d3ed73f52df9195f06b75c05812f91a226a3->leave($__internal_ccd6f28bcfce0044142655d5d583d3ed73f52df9195f06b75c05812f91a226a3_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_ac81227023c131920eec5c4d85851455854392c7b3d72f794db76094297b410e = $this->env->getExtension("native_profiler");
        $__internal_ac81227023c131920eec5c4d85851455854392c7b3d72f794db76094297b410e->enter($__internal_ac81227023c131920eec5c4d85851455854392c7b3d72f794db76094297b410e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

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
        echo " points
            </div>
            <div class=\"col-md-11\">
                <span id=\"postCommentUrl\" hidden>";
        // line 59
        echo $this->env->getExtension('routing')->getPath("smile_api_comment_addNew");
        echo "</span>
                <strong>Comments:</strong>
                ";
        // line 61
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 62
            echo "                    <textarea class=\"form-control input-lg\" placeholder=\"Your comment...\" with=\"95%\" id=\"textToUseToComment\"></textarea><br/>
                    <div class=\"clearfix\"></div>
                    <button class=\"btn btn-primary\" onclick=\"sendComment(";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo ")\">Send</button>
                ";
        }
        // line 66
        echo "            </div>
        </div>


    </div>
";
        
        $__internal_ac81227023c131920eec5c4d85851455854392c7b3d72f794db76094297b410e->leave($__internal_ac81227023c131920eec5c4d85851455854392c7b3d72f794db76094297b410e_prof);

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
        return array (  191 => 66,  186 => 64,  182 => 62,  180 => 61,  175 => 59,  169 => 56,  160 => 50,  154 => 47,  147 => 43,  139 => 38,  133 => 35,  128 => 33,  122 => 29,  114 => 27,  111 => 26,  105 => 24,  102 => 23,  96 => 21,  93 => 20,  82 => 17,  79 => 16,  73 => 14,  71 => 13,  66 => 11,  62 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*                 {{ post.upvotes-post.downvotes }} points*/
/*             </div>*/
/*             <div class="col-md-11">*/
/*                 <span id="postCommentUrl" hidden>{{ path('smile_api_comment_addNew') }}</span>*/
/*                 <strong>Comments:</strong>*/
/*                 {% if app.user %}*/
/*                     <textarea class="form-control input-lg" placeholder="Your comment..." with="95%" id="textToUseToComment"></textarea><br/>*/
/*                     <div class="clearfix"></div>*/
/*                     <button class="btn btn-primary" onclick="sendComment({{ post.id }})">Send</button>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* {% endblock %}*/
