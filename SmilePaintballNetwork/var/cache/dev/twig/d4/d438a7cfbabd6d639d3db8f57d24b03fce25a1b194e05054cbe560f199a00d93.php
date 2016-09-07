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
        $__internal_c596f26a123602908909ce0d016fcfe31f2bbcaf0d1897404b49b418b783270a = $this->env->getExtension("native_profiler");
        $__internal_c596f26a123602908909ce0d016fcfe31f2bbcaf0d1897404b49b418b783270a->enter($__internal_c596f26a123602908909ce0d016fcfe31f2bbcaf0d1897404b49b418b783270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c596f26a123602908909ce0d016fcfe31f2bbcaf0d1897404b49b418b783270a->leave($__internal_c596f26a123602908909ce0d016fcfe31f2bbcaf0d1897404b49b418b783270a_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_b856486ffa704b287e29f866bddeac9c7467922ab128608ad1a15c89f021071d = $this->env->getExtension("native_profiler");
        $__internal_b856486ffa704b287e29f866bddeac9c7467922ab128608ad1a15c89f021071d->enter($__internal_b856486ffa704b287e29f866bddeac9c7467922ab128608ad1a15c89f021071d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_b856486ffa704b287e29f866bddeac9c7467922ab128608ad1a15c89f021071d->leave($__internal_b856486ffa704b287e29f866bddeac9c7467922ab128608ad1a15c89f021071d_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_e1da9bbb481fa50ecd66a51e829b91bc1dd611954efb43f87977870d19306990 = $this->env->getExtension("native_profiler");
        $__internal_e1da9bbb481fa50ecd66a51e829b91bc1dd611954efb43f87977870d19306990->enter($__internal_e1da9bbb481fa50ecd66a51e829b91bc1dd611954efb43f87977870d19306990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "        <div class=\"row\" >
            <div class=\"col-md-7\">
                ";
            // line 11
            if (($this->getAttribute($context["post"], "type", array()) == "video_youtube")) {
                // line 12
                echo "                    <iframe  width=\"100%\"  height=\"300px\" ng-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" frameborder=\"0\" allowfullscreen></iframe>
                ";
            }
            // line 14
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "video_facebook")) {
                // line 15
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
            // line 18
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_facebook")) {
                // line 19
                echo "                    <div data-width=\"460px\" class=\"fb-post\" data-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></div>
                ";
            }
            // line 21
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_externalUrl")) {
                // line 22
                echo "                    <img class=\"img-responsive\" ng-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" alt=\"\">
                ";
            }
            // line 24
            echo "                ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_local")) {
                // line 25
                echo "                    <img class=\"img-responsive\" ng-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                ";
            }
            // line 27
            echo "            </div>
            <div class=\"col-md-5\">
                <h3>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class=\"btn btn-primary\" href=\"#\">View Project <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div>
        </div>
        <hr/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e1da9bbb481fa50ecd66a51e829b91bc1dd611954efb43f87977870d19306990->leave($__internal_e1da9bbb481fa50ecd66a51e829b91bc1dd611954efb43f87977870d19306990_prof);

    }

    // line 39
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_924ecf89c8996ea57619ba1038fda0e2bc5596d479a53b70d811361a6e237dcd = $this->env->getExtension("native_profiler");
        $__internal_924ecf89c8996ea57619ba1038fda0e2bc5596d479a53b70d811361a6e237dcd->enter($__internal_924ecf89c8996ea57619ba1038fda0e2bc5596d479a53b70d811361a6e237dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 40
        echo "    ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()) != null)) {
            // line 41
            echo "        <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 43
            echo "
    ";
        }
        // line 45
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "<br/>
    ";
        // line 46
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array())) {
            // line 47
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
            echo "
    ";
        }
        // line 49
        echo "    ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array())) {
            // line 50
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
            echo "
    ";
        }
        // line 51
        echo "<br/>

    <H3>Team:</H3>
    ";
        // line 54
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamName", array())) {
            // line 55
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamName", array()), "html", null, true);
            echo "<br/>
    ";
        }
        // line 57
        echo "    ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamPicture", array())) {
            // line 58
            echo "        <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamPicture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamPicture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teamName", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 60
        echo "
    <div>
        ";
        // line 62
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 63
            echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editProfileModal\">Edit my profile</button>
        ";
        }
        // line 65
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
        // line 75
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmilePlatformBundle:User:editMyProfile", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

";
        
        $__internal_924ecf89c8996ea57619ba1038fda0e2bc5596d479a53b70d811361a6e237dcd->leave($__internal_924ecf89c8996ea57619ba1038fda0e2bc5596d479a53b70d811361a6e237dcd_prof);

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
        return array (  232 => 75,  220 => 65,  216 => 63,  214 => 62,  210 => 60,  200 => 58,  197 => 57,  191 => 55,  189 => 54,  184 => 51,  178 => 50,  175 => 49,  169 => 47,  167 => 46,  162 => 45,  158 => 43,  148 => 41,  145 => 40,  139 => 39,  120 => 29,  116 => 27,  108 => 25,  105 => 24,  99 => 22,  96 => 21,  90 => 19,  87 => 18,  76 => 15,  73 => 14,  67 => 12,  65 => 11,  61 => 9,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*                     <img class="img-responsive" ng-src="{{ post.url }}" alt="">*/
/*                 {% endif %}*/
/*                 {% if post.type=='picture_local' %}*/
/*                     <img class="img-responsive" ng-src="{{post.picture.uploadDir}}/{{post.picture.url}}" alt="">*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 <h3>{{ post.title }}</h3>*/
/*                 <h4>Subheading</h4>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>*/
/*                 <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*             </div>*/
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
