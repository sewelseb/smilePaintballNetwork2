<?php

/* SmilePlatformBundle:Default:profile.html.twig */
class __TwigTemplate_c6322f89ef7df983b9d6a3ecc37cef0585ee91e272d97a4a233836a3df395661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle:Default:profile.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
            'rightCollumn' => array($this, 'block_rightCollumn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11665f68124843909df5d493c0a5d3b9d165e95075e12146001895a12000da38 = $this->env->getExtension("native_profiler");
        $__internal_11665f68124843909df5d493c0a5d3b9d165e95075e12146001895a12000da38->enter($__internal_11665f68124843909df5d493c0a5d3b9d165e95075e12146001895a12000da38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11665f68124843909df5d493c0a5d3b9d165e95075e12146001895a12000da38->leave($__internal_11665f68124843909df5d493c0a5d3b9d165e95075e12146001895a12000da38_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_e3725c0235217e000add85630cb7c37f4a96f6d89263df8d56311d98ae0fd729 = $this->env->getExtension("native_profiler");
        $__internal_e3725c0235217e000add85630cb7c37f4a96f6d89263df8d56311d98ae0fd729->enter($__internal_e3725c0235217e000add85630cb7c37f4a96f6d89263df8d56311d98ae0fd729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_e3725c0235217e000add85630cb7c37f4a96f6d89263df8d56311d98ae0fd729->leave($__internal_e3725c0235217e000add85630cb7c37f4a96f6d89263df8d56311d98ae0fd729_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_baafc091cf12d24659021ed7d53e9cdc91922a1d7320557edee37e7059d51be7 = $this->env->getExtension("native_profiler");
        $__internal_baafc091cf12d24659021ed7d53e9cdc91922a1d7320557edee37e7059d51be7->enter($__internal_baafc091cf12d24659021ed7d53e9cdc91922a1d7320557edee37e7059d51be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "        <div class=\"row\" >
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
            if (($this->getAttribute($context["post"], "type", array()) == "video_youtube")) {
                // line 14
                echo "                    <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" frameborder=\"0\" allowfullscreen></iframe>
                ";
            }
            // line 16
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "video_facebook")) {
                // line 17
                echo "                    <div class=\"fb-video\" data-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" class=\"fb-xfbml-parse-ignore\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></a>
                        </blockquote></div>
                ";
            }
            // line 20
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_facebook")) {
                // line 21
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></div>
                    </a>
                ";
            }
            // line 25
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_externalUrl")) {
                // line 26
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                        <img class=\"img-responsive\" src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 30
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_local")) {
                // line 31
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
                echo "\">
                            <img class=\"img-responsive\" src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                ";
            }
            // line 35
            echo "            </div>
            <div class=\"col-md-5 \">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                        <h3>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
                        <h4>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "eventName", array()), "html", null, true);
            echo "</h4>
                    </a>
                    <div>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute($context["post"], "user", array()), "getId", array()))), "html", null, true);
            echo "\">
                            by<img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "user", array()), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "user", array()), "picture", array()), "url", array()), "html", null, true);
            echo "\"  class=\"comment-profile-pic\">
                            <strong>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "username", array()), "html", null, true);
            echo "</strong><br>
                        </a>
                    </div>
                    <p>
                    <div id=\"updownVote_";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"upvote(";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                            </a>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"downvote(";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                            </a>
                        </div>
                    </div>
                    <div id=\"upvoted_";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                        upvoted ;)
                    </div>
                    <div id=\"downvoted_";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                        downvoted :(
                    </div>
                    </p>

                    <div>
                        <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "getId", array()))), "html", null, true);
            echo "\">
                            ";
            // line 70
            echo twig_escape_filter($this->env, ($this->getAttribute($context["post"], "upvotes", array()) - $this->getAttribute($context["post"], "downvotes", array())), "html", null, true);
            echo " points, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "comments", array()), "html", null, true);
            echo " comments
                        </a>
                    </div>

                    <div>
                        <div class=\"spacer-5px\">
                            <div class=\"fb-share-button\"
                                 data-href=\"http://smilepaintball.com/app_dev.php/platform/post/";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\"
                                 data-layout=\"button_count\">
                            </div>
                        </div>
                        <div class=\"spacer-5px\">
                            <a
                                    href=\"https://twitter.com/intent/tweet?text=";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "&url=http://smilepaintball.com/app_dev.php/platform/post/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                                <button class=\"btn twitter-share-button\">Tweet</button></a>
                        </div>
                        <div class=\"spacer-5px\">
                            <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/app_dev.php/platform/post/";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" data-counter=\"right\"></script>
                        </div>
                        <div class=\"spacer-5px\">
                            Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/app_dev.php/platform/post/";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                        </div>


                    </div>
            </div>


        </div>
        <hr/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_baafc091cf12d24659021ed7d53e9cdc91922a1d7320557edee37e7059d51be7->leave($__internal_baafc091cf12d24659021ed7d53e9cdc91922a1d7320557edee37e7059d51be7_prof);

    }

    // line 103
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_c011c3884d81c492552a13b8b07f35b1e2e256b02a3f5aa6ac011d46a91cb163 = $this->env->getExtension("native_profiler");
        $__internal_c011c3884d81c492552a13b8b07f35b1e2e256b02a3f5aa6ac011d46a91cb163->enter($__internal_c011c3884d81c492552a13b8b07f35b1e2e256b02a3f5aa6ac011d46a91cb163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 104
        echo "    ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()) != null)) {
            // line 105
            echo "        <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 107
            echo "
    ";
        }
        // line 109
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "<br/>
    ";
        // line 110
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array())) {
            // line 111
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
            echo "
    ";
        }
        // line 113
        echo "    ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array())) {
            // line 114
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
            echo "
    ";
        }
        // line 115
        echo "<br/>

    <H3>Team:</H3>
    ";
        // line 118
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamName", array())) {
            // line 119
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamName", array()), "html", null, true);
            echo "<br/>
    ";
        }
        // line 121
        echo "    ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamPicture", array())) {
            // line 122
            echo "        <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamPicture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamPicture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamName", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 124
        echo "
    <div>
        ";
        // line 126
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 127
            echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editProfileModal\">Edit my profile</button>
        ";
        }
        // line 129
        echo "    </div>

    <div class=\"modal fade\" id=\"editProfileModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Edit profile</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 139
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmilePlatformBundle:User:editMyProfile", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

";
        
        $__internal_c011c3884d81c492552a13b8b07f35b1e2e256b02a3f5aa6ac011d46a91cb163->leave($__internal_c011c3884d81c492552a13b8b07f35b1e2e256b02a3f5aa6ac011d46a91cb163_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 139,  353 => 129,  349 => 127,  347 => 126,  343 => 124,  333 => 122,  330 => 121,  324 => 119,  322 => 118,  317 => 115,  311 => 114,  308 => 113,  302 => 111,  300 => 110,  295 => 109,  291 => 107,  281 => 105,  278 => 104,  272 => 103,  250 => 90,  244 => 87,  235 => 83,  226 => 77,  214 => 70,  210 => 69,  201 => 63,  195 => 60,  188 => 56,  180 => 51,  174 => 48,  167 => 44,  161 => 43,  157 => 42,  151 => 39,  147 => 38,  143 => 37,  139 => 35,  131 => 32,  126 => 31,  123 => 30,  117 => 27,  112 => 26,  109 => 25,  103 => 22,  98 => 21,  95 => 20,  84 => 17,  81 => 16,  75 => 14,  73 => 13,  68 => 11,  64 => 10,  61 => 9,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "SmilePlatformBundle::Default/layout.html.twig" %}*/
/* */
/* {% block pageHeader %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block leftCollumn %}*/
/*     {% for post in posts %}*/
/*         <div class="row" >*/
/*             <span id="smileApiUpvoteUrl" hidden>{{ path ('smile_api_post_upvote_url') }}</span>*/
/*             <span id="smileApiDownvoteUrl" hidden>{{ path ('smile_api_post_downvote_url') }}</span>*/
/*             <div class="col-md-7">*/
/*                 {% if post.type=='video_youtube' %}*/
/*                     <iframe  width="100%"  height="300px" ng-src="{{ post.url }}" frameborder="0" allowfullscreen></iframe>*/
/*                 {% endif %}*/
/*                 {% if post.type=='video_facebook' %}*/
/*                     <div class="fb-video" data-href="{{ post.url }}" data-width="700px" data-show-text="false"><blockquote cite="{{ post.url }}" class="fb-xfbml-parse-ignore"><a href="{{ post.url }}"></a>*/
/*                         </blockquote></div>*/
/*                 {% endif %}*/
/*                 {% if post.type=='picture_facebook' %}*/
/*                     <a href="{{ path('smile_platform_post', {'postId': post.getId })  }}">*/
/*                         <div data-width="460px" class="fb-post" data-href="{{ post.url }}"></div>*/
/*                     </a>*/
/*                 {% endif %}*/
/*                 {% if post.type=='picture_externalUrl' %}*/
/*                     <a href="{{ path('smile_platform_post', {'postId': post.getId })  }}">*/
/*                         <img class="img-responsive" src="{{ post.url }}" alt="">*/
/*                     </a>*/
/*                 {% endif %}*/
/*                 {% if post.type=='picture_local' %}*/
/*                     <a href="{{ path('smile_platform_post', {'postId': post.getId })  }}">*/
/*                             <img class="img-responsive" src="{{post.picture.uploadDir}}/{{post.picture.url}}" alt="">*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="col-md-5 ">*/
/*                     <a href="{{ path('smile_platform_post', {'postId': post.getId })  }}">*/
/*                         <h3>{{ post.title }}</h3>*/
/*                         <h4>{{ post.eventName }}</h4>*/
/*                     </a>*/
/*                     <div>*/
/*                         <a href="{{ path('smile_platform_profile', {'userId': post.user.getId })  }}">*/
/*                             by<img src="{{ post.user.picture.uploadDir }}/{{ post.user.picture.url }}"  class="comment-profile-pic">*/
/*                             <strong>{{ post.user.username }}</strong><br>*/
/*                         </a>*/
/*                     </div>*/
/*                     <p>*/
/*                     <div id="updownVote_{{post.id}}">*/
/*                         <div class="col-md-6 col-sm-6 col-xs-6">*/
/*                             <a href="">*/
/*                                 <span onclick="upvote({{ post.id }})"><img src="/images/upvote.png" class="vote-img"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-6">*/
/*                             <a href="">*/
/*                                 <span onclick="downvote({{ post.id }})"><img src="/images/downvote.png" class="vote-img"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div id="upvoted_{{post.id}}" hidden>*/
/*                         upvoted ;)*/
/*                     </div>*/
/*                     <div id="downvoted_{{post.id}}" hidden>*/
/*                         downvoted :(*/
/*                     </div>*/
/*                     </p>*/
/* */
/*                     <div>*/
/*                         <a href="{{ path('smile_platform_post', {'postId': post.getId })  }}">*/
/*                             {{ post.upvotes-post.downvotes }} points, {{ post.comments }} comments*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <div>*/
/*                         <div class="spacer-5px">*/
/*                             <div class="fb-share-button"*/
/*                                  data-href="http://smilepaintball.com/app_dev.php/platform/post/{{ post.id }}"*/
/*                                  data-layout="button_count">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="spacer-5px">*/
/*                             <a*/
/*                                     href="https://twitter.com/intent/tweet?text={{post.title}}&url=http://smilepaintball.com/app_dev.php/platform/post/{{ post.id }}">*/
/*                                 <button class="btn twitter-share-button">Tweet</button></a>*/
/*                         </div>*/
/*                         <div class="spacer-5px">*/
/*                             <script type="IN/Share" data-url="http://smilepaintball.com/app_dev.php/platform/post/{{ post.id }}" data-counter="right"></script>*/
/*                         </div>*/
/*                         <div class="spacer-5px">*/
/*                             Share: <input class=" form-control input-lg" value="http://smilepaintball.com/app_dev.php/platform/post/{{ post.id }}">*/
/*                         </div>*/
/* */
/* */
/*                     </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*         <hr/>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block rightCollumn %}*/
/*     {% if user.picture != null %}*/
/*         <img class="img-responsive" src="{{user.picture.uploadDir}}/{{user.picture.url}}" alt="{{ user.username }}">*/
/*     {% else %}*/
/* */
/*     {% endif %}*/
/*     {{ user.username }}<br/>*/
/*     {% if user.firstname%}*/
/*         {{ user.firstname }}*/
/*     {% endif %}*/
/*     {% if user.lastname %}*/
/*         {{ user.lastname }}*/
/*     {% endif %}<br/>*/
/* */
/*     <H3>Team:</H3>*/
/*     {%  if user.teamName %}*/
/*         {{ user.teamName }}<br/>*/
/*     {%  endif %}*/
/*     {%  if user.teamPicture  %}*/
/*         <img class="img-responsive" src="{{user.teamPicture.uploadDir}}/{{user.teamPicture.url}}" alt="{{ user.teamName }}">*/
/*     {%  endif %}*/
/* */
/*     <div>*/
/*         {% if user.id == app.user.id %}*/
/*             <button class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">Edit my profile</button>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Edit profile</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ render(controller('SmilePlatformBundle:User:editMyProfile', {'request': app.request})) }}*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
