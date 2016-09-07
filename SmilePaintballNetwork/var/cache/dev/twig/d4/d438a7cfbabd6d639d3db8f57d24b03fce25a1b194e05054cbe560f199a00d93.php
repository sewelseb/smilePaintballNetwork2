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
        $__internal_e924dc39c93e4dee13cb32d58cccc84b3f56f0d25e7f30f1763e38ae1f1d66e9 = $this->env->getExtension("native_profiler");
        $__internal_e924dc39c93e4dee13cb32d58cccc84b3f56f0d25e7f30f1763e38ae1f1d66e9->enter($__internal_e924dc39c93e4dee13cb32d58cccc84b3f56f0d25e7f30f1763e38ae1f1d66e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e924dc39c93e4dee13cb32d58cccc84b3f56f0d25e7f30f1763e38ae1f1d66e9->leave($__internal_e924dc39c93e4dee13cb32d58cccc84b3f56f0d25e7f30f1763e38ae1f1d66e9_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_59ec1fab7ab48e0ab13dc4cbdfe39a58aa007dac3d02d1fe10f5257440134c9b = $this->env->getExtension("native_profiler");
        $__internal_59ec1fab7ab48e0ab13dc4cbdfe39a58aa007dac3d02d1fe10f5257440134c9b->enter($__internal_59ec1fab7ab48e0ab13dc4cbdfe39a58aa007dac3d02d1fe10f5257440134c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_59ec1fab7ab48e0ab13dc4cbdfe39a58aa007dac3d02d1fe10f5257440134c9b->leave($__internal_59ec1fab7ab48e0ab13dc4cbdfe39a58aa007dac3d02d1fe10f5257440134c9b_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_71da4b7d170237d7479847f898f994c7d362b478622b99668226aecf25e866ed = $this->env->getExtension("native_profiler");
        $__internal_71da4b7d170237d7479847f898f994c7d362b478622b99668226aecf25e866ed->enter($__internal_71da4b7d170237d7479847f898f994c7d362b478622b99668226aecf25e866ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

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
                echo "                    <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></div>
                ";
            }
            // line 23
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_externalUrl")) {
                // line 24
                echo "                    <img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" alt=\"\">
                ";
            }
            // line 26
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_local")) {
                // line 27
                echo "                    <img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                ";
            }
            // line 29
            echo "            </div>
            <div class=\"col-md-5 \">

                    <h3>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
                    <h4>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "eventName", array()), "html", null, true);
            echo "</h4>
                    <p>
                    <div id=\"updownVote_";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"upvote(";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/upvote.png\" class=\"vote-img\"></span>
                            </a>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"\">
                                <span onclick=\"downvote(";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo ")\"><img src=\"/images/downvote.png\" class=\"vote-img\"></span>
                            </a>
                        </div>
                    </div>
                    <div id=\"upvoted_";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                        upvoted ;)
                    </div>
                    <div id=\"downvoted_";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" hidden>
                        downvoted :(
                    </div>
                    </p>

                    <div>
                        ";
            // line 56
            echo twig_escape_filter($this->env, ($this->getAttribute($context["post"], "upvotes", array()) - $this->getAttribute($context["post"], "downvotes", array())), "html", null, true);
            echo " points
                    </div>
            </div>


        </div>
        <hr/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_71da4b7d170237d7479847f898f994c7d362b478622b99668226aecf25e866ed->leave($__internal_71da4b7d170237d7479847f898f994c7d362b478622b99668226aecf25e866ed_prof);

    }

    // line 66
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_92a5ae77dce1f71d852dba343ff3b9ca3032c490b7c7648d4101d613dceed2df = $this->env->getExtension("native_profiler");
        $__internal_92a5ae77dce1f71d852dba343ff3b9ca3032c490b7c7648d4101d613dceed2df->enter($__internal_92a5ae77dce1f71d852dba343ff3b9ca3032c490b7c7648d4101d613dceed2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 67
        echo "    ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()) != null)) {
            // line 68
            echo "        <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 70
            echo "
    ";
        }
        // line 72
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "<br/>
    ";
        // line 73
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array())) {
            // line 74
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
            echo "
    ";
        }
        // line 76
        echo "    ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array())) {
            // line 77
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
            echo "
    ";
        }
        // line 78
        echo "<br/>

    <H3>Team:</H3>
    ";
        // line 81
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamName", array())) {
            // line 82
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamName", array()), "html", null, true);
            echo "<br/>
    ";
        }
        // line 84
        echo "    ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamPicture", array())) {
            // line 85
            echo "        <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamPicture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamPicture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamName", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 87
        echo "
    <div>
        ";
        // line 89
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 90
            echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editProfileModal\">Edit my profile</button>
        ";
        }
        // line 92
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
        // line 102
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmilePlatformBundle:User:editMyProfile", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

";
        
        $__internal_92a5ae77dce1f71d852dba343ff3b9ca3032c490b7c7648d4101d613dceed2df->leave($__internal_92a5ae77dce1f71d852dba343ff3b9ca3032c490b7c7648d4101d613dceed2df_prof);

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
        return array (  286 => 102,  274 => 92,  270 => 90,  268 => 89,  264 => 87,  254 => 85,  251 => 84,  245 => 82,  243 => 81,  238 => 78,  232 => 77,  229 => 76,  223 => 74,  221 => 73,  216 => 72,  212 => 70,  202 => 68,  199 => 67,  193 => 66,  174 => 56,  165 => 50,  159 => 47,  152 => 43,  144 => 38,  138 => 35,  133 => 33,  129 => 32,  124 => 29,  116 => 27,  113 => 26,  107 => 24,  104 => 23,  98 => 21,  95 => 20,  84 => 17,  81 => 16,  75 => 14,  73 => 13,  68 => 11,  64 => 10,  61 => 9,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*                     <div data-width="460px" class="fb-post" data-href="{{ post.url }}"></div>*/
/*                 {% endif %}*/
/*                 {% if post.type=='picture_externalUrl' %}*/
/*                     <img class="img-responsive" src="{{ post.url }}" alt="">*/
/*                 {% endif %}*/
/*                 {% if post.type=='picture_local' %}*/
/*                     <img class="img-responsive" src="{{post.picture.uploadDir}}/{{post.picture.url}}" alt="">*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="col-md-5 ">*/
/* */
/*                     <h3>{{ post.title }}</h3>*/
/*                     <h4>{{ post.eventName }}</h4>*/
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
/*                         {{ post.upvotes-post.downvotes }} points*/
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
