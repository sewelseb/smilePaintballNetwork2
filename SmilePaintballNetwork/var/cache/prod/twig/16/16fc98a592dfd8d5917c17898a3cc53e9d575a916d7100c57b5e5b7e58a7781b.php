<?php

/* SmilePlatformBundle::Default/Blocs/topTen.html.twig */
class __TwigTemplate_5546768e7638b34abb846725ddda600d1c00d5d797c6f781dde1be9e7e060fc0 extends Twig_Template
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
        $__internal_2a71c6e44d11410806102e949ddd30f33b00c302651c4778b047eeb301ee84da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a71c6e44d11410806102e949ddd30f33b00c302651c4778b047eeb301ee84da->enter($__internal_2a71c6e44d11410806102e949ddd30f33b00c302651c4778b047eeb301ee84da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/Blocs/topTen.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
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
        
        $__internal_2a71c6e44d11410806102e949ddd30f33b00c302651c4778b047eeb301ee84da->leave($__internal_2a71c6e44d11410806102e949ddd30f33b00c302651c4778b047eeb301ee84da_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for post in posts %}

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
{% endfor %}", "SmilePlatformBundle::Default/Blocs/topTen.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/Blocs/topTen.html.twig");
    }
}
