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
        $__internal_0800e423e25e13a2ef81f7090b58bfce81cb7443be7a9b7ada4ea3abd66abbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0800e423e25e13a2ef81f7090b58bfce81cb7443be7a9b7ada4ea3abd66abbd5->enter($__internal_0800e423e25e13a2ef81f7090b58bfce81cb7443be7a9b7ada4ea3abd66abbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/Blocs/topTen.html.twig"));

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
            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
            // line 7
            if (($this->getAttribute($context["post"], "type", array()) == "video_youtube")) {
                // line 8
                echo "                        <img class=\"img-responsive top-10\" src=\"http://smilepaintball.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getThumbnails", array(), "method"), "html", null, true);
                echo "\">
                    ";
            }
            // line 10
            echo "                    ";
            if (($this->getAttribute($context["post"], "type", array()) == "video_facebook")) {
                // line 11
                echo "                        <img class=\"img-responsive  top-10\" src=\"http://smilepaintball.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getThumbnails", array(), "method"), "html", null, true);
                echo "\">
                    ";
            }
            // line 13
            echo "                    ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_facebook")) {
                // line 14
                echo "                        <img class=\"img-responsive top-10\" src=\"http://smilepaintball.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getThumbnails", array(), "method"), "html", null, true);
                echo "\">
                    ";
            }
            // line 16
            echo "                    ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_externalUrl")) {
                // line 17
                echo "                        <img class=\"img-responsive top-10\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    ";
            }
            // line 19
            echo "                    ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_local")) {
                // line 20
                echo "                        <img class=\"img-responsive top-10\" src=\"http://smilepaintball.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    ";
            }
            // line 22
            echo "                </div>
                <div class=\"col-md-6\">
                    <H4><strong>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</strong></H4>
                    ";
            // line 25
            echo twig_escape_filter($this->env, ($this->getAttribute($context["post"], "upvotes", array()) - $this->getAttribute($context["post"], "downvotes", array())), "html", null, true);
            echo " points<br/>
                    ";
            // line 26
            if (($this->getAttribute($context["post"], "comments", array()) < 1)) {
                // line 27
                echo "                        0 comments
                    ";
            } else {
                // line 29
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "comments", array()), "html", null, true);
                echo " comments
                    ";
            }
            // line 31
            echo "                </div>
            </div>
        </a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0800e423e25e13a2ef81f7090b58bfce81cb7443be7a9b7ada4ea3abd66abbd5->leave($__internal_0800e423e25e13a2ef81f7090b58bfce81cb7443be7a9b7ada4ea3abd66abbd5_prof);

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
        return array (  106 => 31,  100 => 29,  96 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 22,  74 => 20,  71 => 19,  65 => 17,  62 => 16,  56 => 14,  53 => 13,  47 => 11,  44 => 10,  38 => 8,  36 => 7,  30 => 4,  26 => 2,  22 => 1,);
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
            <div class=\"row\">
                <div class=\"col-md-6\">
                    {% if post.type=='video_youtube' %}
                        <img class=\"img-responsive top-10\" src=\"http://smilepaintball.com/{{ post.getThumbnails() }}\">
                    {% endif %}
                    {% if post.type=='video_facebook' %}
                        <img class=\"img-responsive  top-10\" src=\"http://smilepaintball.com/{{ post.getThumbnails() }}\">
                    {% endif %}
                    {% if post.type=='picture_facebook' %}
                        <img class=\"img-responsive top-10\" src=\"http://smilepaintball.com/{{ post.getThumbnails() }}\">
                    {% endif %}
                    {% if post.type=='picture_externalUrl' %}
                        <img class=\"img-responsive top-10\" src=\"{{ post.url }}\" alt=\"\">
                    {% endif %}
                    {% if post.type=='picture_local' %}
                        <img class=\"img-responsive top-10\" src=\"http://smilepaintball.com/{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
                    {% endif %}
                </div>
                <div class=\"col-md-6\">
                    <H4><strong>{{ post.title }}</strong></H4>
                    {{ post.upvotes-post.downvotes }} points<br/>
                    {% if post.comments<1 %}
                        0 comments
                    {% else %}
                        {{ post.comments }} comments
                    {% endif %}
                </div>
            </div>
        </a>
    </div>
{% endfor %}", "SmilePlatformBundle::Default/Blocs/topTen.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/Blocs/topTen.html.twig");
    }
}
