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
        $__internal_f4442f0a1083dd8798dbc6771e6d70a9f3cb5f53cece912093a0e7554200f2db = $this->env->getExtension("native_profiler");
        $__internal_f4442f0a1083dd8798dbc6771e6d70a9f3cb5f53cece912093a0e7554200f2db->enter($__internal_f4442f0a1083dd8798dbc6771e6d70a9f3cb5f53cece912093a0e7554200f2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4442f0a1083dd8798dbc6771e6d70a9f3cb5f53cece912093a0e7554200f2db->leave($__internal_f4442f0a1083dd8798dbc6771e6d70a9f3cb5f53cece912093a0e7554200f2db_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_b9fdf678e8dfc70a98e825560126ed8ef517f2359181c356b3d86ae607167b96 = $this->env->getExtension("native_profiler");
        $__internal_b9fdf678e8dfc70a98e825560126ed8ef517f2359181c356b3d86ae607167b96->enter($__internal_b9fdf678e8dfc70a98e825560126ed8ef517f2359181c356b3d86ae607167b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_b9fdf678e8dfc70a98e825560126ed8ef517f2359181c356b3d86ae607167b96->leave($__internal_b9fdf678e8dfc70a98e825560126ed8ef517f2359181c356b3d86ae607167b96_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_d0ae6b22c79410b2dab9cbe22e1f6556baf8725423098570bf3f20f486d3a759 = $this->env->getExtension("native_profiler");
        $__internal_d0ae6b22c79410b2dab9cbe22e1f6556baf8725423098570bf3f20f486d3a759->enter($__internal_d0ae6b22c79410b2dab9cbe22e1f6556baf8725423098570bf3f20f486d3a759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

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
        
        $__internal_d0ae6b22c79410b2dab9cbe22e1f6556baf8725423098570bf3f20f486d3a759->leave($__internal_d0ae6b22c79410b2dab9cbe22e1f6556baf8725423098570bf3f20f486d3a759_prof);

    }

    // line 39
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_b9fd6713b892e82c09a8598097968ada386a0a15b82ba4cfb6a878a5a114ee54 = $this->env->getExtension("native_profiler");
        $__internal_b9fd6713b892e82c09a8598097968ada386a0a15b82ba4cfb6a878a5a114ee54->enter($__internal_b9fd6713b892e82c09a8598097968ada386a0a15b82ba4cfb6a878a5a114ee54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 40
        echo "    ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()) != null)) {
            // line 41
            echo "
    ";
        }
        // line 43
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
    <div>
        ";
        // line 45
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 46
            echo "            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editProfileModal\">Edit my profile</button>
        ";
        }
        // line 48
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
        // line 58
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmilePlatformBundle:User:editMyProfile", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

";
        
        $__internal_b9fd6713b892e82c09a8598097968ada386a0a15b82ba4cfb6a878a5a114ee54->leave($__internal_b9fd6713b892e82c09a8598097968ada386a0a15b82ba4cfb6a878a5a114ee54_prof);

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
        return array (  175 => 58,  163 => 48,  159 => 46,  157 => 45,  151 => 43,  147 => 41,  144 => 40,  138 => 39,  119 => 29,  115 => 27,  108 => 25,  105 => 24,  99 => 22,  96 => 21,  90 => 19,  87 => 18,  76 => 15,  73 => 14,  67 => 12,  65 => 11,  61 => 9,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*                     <img class="img-responsive" ng-src="{{post.picture.uploadDir}}{{post.picture.url}}" alt="">*/
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
/* */
/*     {% endif %}*/
/*     {{ user.username }}*/
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
