<?php

/* SmilePlatformBundle::Default/Blocs/topTen.html.twig */
class __TwigTemplate_cad1b997bac8cd8d9b05dff1d02da5a1f19e2e7ceb2c4a856c52bb66ad66e1eb extends Twig_Template
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
        $__internal_1c6cd65ed69a68ef66fe3b37afb1ba1cc6406807dd02510c6f0129f50ff7518d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6cd65ed69a68ef66fe3b37afb1ba1cc6406807dd02510c6f0129f50ff7518d->enter($__internal_1c6cd65ed69a68ef66fe3b37afb1ba1cc6406807dd02510c6f0129f50ff7518d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/Blocs/topTen.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "
    <div class=\"spacer-5px\">
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 5
            if (($this->getAttribute($context["post"], "type", array()) == "video_youtube")) {
                // line 6
                echo "                <img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getThumbnails", array(), "method"), "html", null, true);
                echo "\">
            ";
            }
            // line 8
            echo "            ";
            if (($this->getAttribute($context["post"], "type", array()) == "video_facebook")) {
                // line 9
                echo "                <img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getThumbnails", array(), "method"), "html", null, true);
                echo "\">
            ";
            }
            // line 11
            echo "            ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_facebook")) {
                // line 12
                echo "                <img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getThumbnails", array(), "method"), "html", null, true);
                echo "\">
            ";
            }
            // line 14
            echo "            ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_externalUrl")) {
                // line 15
                echo "                <img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" alt=\"\">
            ";
            }
            // line 17
            echo "            ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_local")) {
                // line 18
                echo "                <img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
            ";
            }
            // line 20
            echo "        </a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1c6cd65ed69a68ef66fe3b37afb1ba1cc6406807dd02510c6f0129f50ff7518d->leave($__internal_1c6cd65ed69a68ef66fe3b37afb1ba1cc6406807dd02510c6f0129f50ff7518d_prof);

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
        return array (  80 => 20,  72 => 18,  69 => 17,  63 => 15,  60 => 14,  54 => 12,  51 => 11,  45 => 9,  42 => 8,  36 => 6,  34 => 5,  30 => 4,  26 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% for post in posts %}

    <div class=\"spacer-5px\">
        <a href=\"{{ path('smile_platform_post', {postId: post.id}) }}\">
            {% if post.type=='video_youtube' %}
                <img class=\"img-responsive\" src=\"{{ post.getThumbnails() }}\">
            {% endif %}
            {% if post.type=='video_facebook' %}
                <img class=\"img-responsive\" src=\"{{ post.getThumbnails() }}\">
            {% endif %}
            {% if post.type=='picture_facebook' %}
                <img class=\"img-responsive\" src=\"{{ post.getThumbnails() }}\">
            {% endif %}
            {% if post.type=='picture_externalUrl' %}
                <img class=\"img-responsive\" src=\"{{ post.url }}\" alt=\"\">
            {% endif %}
            {% if post.type=='picture_local' %}
                <img class=\"img-responsive\" src=\"{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
            {% endif %}
        </a>
    </div>
{% endfor %}";
    }
}
