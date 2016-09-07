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
        $__internal_12af1d863ff31a41a843970130129b53aeeab97c1ea06c54d40b65d8cd878a16 = $this->env->getExtension("native_profiler");
        $__internal_12af1d863ff31a41a843970130129b53aeeab97c1ea06c54d40b65d8cd878a16->enter($__internal_12af1d863ff31a41a843970130129b53aeeab97c1ea06c54d40b65d8cd878a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12af1d863ff31a41a843970130129b53aeeab97c1ea06c54d40b65d8cd878a16->leave($__internal_12af1d863ff31a41a843970130129b53aeeab97c1ea06c54d40b65d8cd878a16_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_73299ca2fc7a7cb948944476e8a903987e099b2c5f9e22e6a02028e7181d5f9f = $this->env->getExtension("native_profiler");
        $__internal_73299ca2fc7a7cb948944476e8a903987e099b2c5f9e22e6a02028e7181d5f9f->enter($__internal_73299ca2fc7a7cb948944476e8a903987e099b2c5f9e22e6a02028e7181d5f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_73299ca2fc7a7cb948944476e8a903987e099b2c5f9e22e6a02028e7181d5f9f->leave($__internal_73299ca2fc7a7cb948944476e8a903987e099b2c5f9e22e6a02028e7181d5f9f_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_29e436936865b074e399ba3f8ed503816a1caf074e8c336231fe1846362e9619 = $this->env->getExtension("native_profiler");
        $__internal_29e436936865b074e399ba3f8ed503816a1caf074e8c336231fe1846362e9619->enter($__internal_29e436936865b074e399ba3f8ed503816a1caf074e8c336231fe1846362e9619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

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
        
        $__internal_29e436936865b074e399ba3f8ed503816a1caf074e8c336231fe1846362e9619->leave($__internal_29e436936865b074e399ba3f8ed503816a1caf074e8c336231fe1846362e9619_prof);

    }

    // line 39
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_e22c018a2ed019fa10a1b30aff6afc555126f284e8c2544df5ee84a36143e21d = $this->env->getExtension("native_profiler");
        $__internal_e22c018a2ed019fa10a1b30aff6afc555126f284e8c2544df5ee84a36143e21d->enter($__internal_e22c018a2ed019fa10a1b30aff6afc555126f284e8c2544df5ee84a36143e21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 40
        echo "
";
        
        $__internal_e22c018a2ed019fa10a1b30aff6afc555126f284e8c2544df5ee84a36143e21d->leave($__internal_e22c018a2ed019fa10a1b30aff6afc555126f284e8c2544df5ee84a36143e21d_prof);

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
        return array (  144 => 40,  138 => 39,  119 => 29,  115 => 27,  108 => 25,  105 => 24,  99 => 22,  96 => 21,  90 => 19,  87 => 18,  76 => 15,  73 => 14,  67 => 12,  65 => 11,  61 => 9,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/* */
/* {% endblock %}*/
