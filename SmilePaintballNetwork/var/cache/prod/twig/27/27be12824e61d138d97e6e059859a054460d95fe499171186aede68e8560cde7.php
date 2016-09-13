<?php

/* SmilePlatformBundle::Default/Blocs/topTen.html.twig */
class __TwigTemplate_5f4238a3a02140523f853f77719d06c2a7b5f4d33cdf97517bdaf569f2497c63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9ffbb9c4108f43f20d9779f6242596ba0784e9ff9541214682107c626d3970f = $this->env->getExtension("native_profiler");
        $__internal_a9ffbb9c4108f43f20d9779f6242596ba0784e9ff9541214682107c626d3970f->enter($__internal_a9ffbb9c4108f43f20d9779f6242596ba0784e9ff9541214682107c626d3970f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/Blocs/topTen.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "
    <div class=\"spacer-5px\">
        ";
            // line 4
            if (($this->getAttribute($context["post"], "type", array()) == "video_youtube")) {
                // line 5
                echo "            <iframe  width=\"100%\"  height=\"300px\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" frameborder=\"0\" allowfullscreen></iframe>
        ";
            }
            // line 7
            echo "        ";
            if (($this->getAttribute($context["post"], "type", array()) == "video_facebook")) {
                // line 8
                echo "            <div class=\"fb-video\" data-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"  data-show-text=\"false\"><blockquote cite=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" class=\"fb-xfbml-parse-ignore\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></a>
                </blockquote></div>
        ";
            }
            // line 11
            echo "        ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_facebook")) {
                // line 12
                echo "            <div data-width=\"100%\" class=\"fb-post\" data-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"></div>
        ";
            }
            // line 14
            echo "        ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_externalUrl")) {
                // line 15
                echo "            <img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" alt=\"\">
        ";
            }
            // line 17
            echo "        ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_local")) {
                // line 18
                echo "            <img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
        ";
            }
            // line 20
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a9ffbb9c4108f43f20d9779f6242596ba0784e9ff9541214682107c626d3970f->leave($__internal_a9ffbb9c4108f43f20d9779f6242596ba0784e9ff9541214682107c626d3970f_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/Blocs/topTen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  73 => 18,  70 => 17,  64 => 15,  61 => 14,  55 => 12,  52 => 11,  41 => 8,  38 => 7,  32 => 5,  30 => 4,  26 => 2,  22 => 1,);
    }
}
/* {% for post in posts %}*/
/* */
/*     <div class="spacer-5px">*/
/*         {% if post.type=='video_youtube' %}*/
/*             <iframe  width="100%"  height="300px" src="{{ post.url }}" frameborder="0" allowfullscreen></iframe>*/
/*         {% endif %}*/
/*         {% if post.type=='video_facebook' %}*/
/*             <div class="fb-video" data-href="{{ post.url }}"  data-show-text="false"><blockquote cite="{{ post.url }}" class="fb-xfbml-parse-ignore"><a href="{{ post.url }}"></a>*/
/*                 </blockquote></div>*/
/*         {% endif %}*/
/*         {% if post.type=='picture_facebook' %}*/
/*             <div data-width="100%" class="fb-post" data-href="{{ post.url }}"></div>*/
/*         {% endif %}*/
/*         {% if post.type=='picture_externalUrl' %}*/
/*             <img class="img-responsive" src="{{ post.url }}" alt="">*/
/*         {% endif %}*/
/*         {% if post.type=='picture_local' %}*/
/*             <img class="img-responsive" src="{{post.picture.uploadDir}}/{{post.picture.url}}" alt="">*/
/*         {% endif %}*/
/*     </div>*/
/* {% endfor %}*/
