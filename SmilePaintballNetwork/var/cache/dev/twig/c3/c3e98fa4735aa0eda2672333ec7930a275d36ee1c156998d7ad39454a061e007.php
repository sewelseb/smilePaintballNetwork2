<?php

/* SmilePlatformBundle::Default/Blocs/topTen.html.twig */
class __TwigTemplate_f66f9502ad04017299ecb9518043d6efd81dafb98311c53bde4f2bbcc4fcbaa8 extends Twig_Template
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
        $__internal_274d13822e9b781242cd85be74fb184c972213956ebfc4ffec9c6ba07fbe7566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274d13822e9b781242cd85be74fb184c972213956ebfc4ffec9c6ba07fbe7566->enter($__internal_274d13822e9b781242cd85be74fb184c972213956ebfc4ffec9c6ba07fbe7566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/Blocs/topTen.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "    ";
            if (($this->getAttribute($context["loop"], "index", array()) == 4)) {
                // line 3
                echo "    <div class=\"hidden-top-ten\" hidden>
    ";
            }
            // line 5
            echo "    <div class=\"spacer-5px\">
        ";
            // line 6
            if (($this->getAttribute($context["post"], "type", array()) != "event_picture")) {
                // line 7
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_post", array("postId" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">
        ";
            } else {
                // line 9
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_event", array("eventId" => $this->getAttribute($this->getAttribute($context["post"], "event", array()), "id", array()))), "html", null, true);
                echo "\">
        ";
            }
            // line 11
            echo "            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
            // line 13
            if (($this->getAttribute($context["post"], "type", array()) == "video_youtube")) {
                // line 14
                echo "                        <img class=\"img-responsive top-10\" src=\"http://smilepaintball.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getThumbnails", array(), "method"), "html", null, true);
                echo "\">
                    ";
            }
            // line 16
            echo "                    ";
            if (($this->getAttribute($context["post"], "type", array()) == "video_facebook")) {
                // line 17
                echo "                        <img class=\"img-responsive  top-10\" src=\"http://smilepaintball.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getThumbnails", array(), "method"), "html", null, true);
                echo "\">
                    ";
            }
            // line 19
            echo "                    ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_facebook")) {
                // line 20
                echo "                        <img class=\"img-responsive top-10\" src=\"http://smilepaintball.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getThumbnails", array(), "method"), "html", null, true);
                echo "\">
                    ";
            }
            // line 22
            echo "                    ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_externalUrl")) {
                // line 23
                echo "                        <img class=\"img-responsive top-10\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    ";
            }
            // line 25
            echo "                    ";
            if (($this->getAttribute($context["post"], "type", array()) == "picture_local")) {
                // line 26
                echo "                        <img class=\"img-responsive top-10\" src=\"http://smilepaintball.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    ";
            }
            // line 28
            echo "                    ";
            if (($this->getAttribute($context["post"], "type", array()) == "event_picture")) {
                // line 29
                echo "                        <img class=\"img-responsive top-10\" src=\"http://smilepaintball.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "event", array()), "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "event", array()), "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
                    ";
            }
            // line 31
            echo "                </div>
                <div class=\"col-md-6\">
                    <H4><strong>";
            // line 33
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["post"], "title", array())) > 15)) ? ((twig_slice($this->env, $this->getAttribute($context["post"], "title", array()), 0, 12) . "...")) : ($this->getAttribute($context["post"], "title", array()))), "html", null, true);
            echo "</strong></H4>
                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "views", array()), "html", null, true);
            echo " views<br/>
                    ";
            // line 35
            echo twig_escape_filter($this->env, ($this->getAttribute($context["post"], "upvotes", array()) - $this->getAttribute($context["post"], "downvotes", array())), "html", null, true);
            echo " points
                </div>
            </div>
        </a>
    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </div>
    <div class=\"text-center\">
        <a href=\"\" class=\"ignore-click\"><span class=\"btn-see-more-top-10\">See more <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></span></a>
    </div>
";
        
        $__internal_274d13822e9b781242cd85be74fb184c972213956ebfc4ffec9c6ba07fbe7566->leave($__internal_274d13822e9b781242cd85be74fb184c972213956ebfc4ffec9c6ba07fbe7566_prof);

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
        return array (  156 => 41,  136 => 35,  132 => 34,  128 => 33,  124 => 31,  116 => 29,  113 => 28,  105 => 26,  102 => 25,  96 => 23,  93 => 22,  87 => 20,  84 => 19,  78 => 17,  75 => 16,  69 => 14,  67 => 13,  63 => 11,  57 => 9,  51 => 7,  49 => 6,  46 => 5,  42 => 3,  39 => 2,  22 => 1,);
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
    {% if loop.index == 4 %}
    <div class=\"hidden-top-ten\" hidden>
    {% endif %}
    <div class=\"spacer-5px\">
        {% if post.type!='event_picture' %}
            <a href=\"{{ path('smile_platform_post', {postId: post.id}) }}\">
        {% else %}
            <a href=\"{{ path('smile_platform_event', {eventId: post.event.id}) }}\">
        {% endif %}
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
                    {% if post.type=='event_picture' %}
                        <img class=\"img-responsive top-10\" src=\"http://smilepaintball.com/{{post.event.picture.uploadDir}}/{{post.event.picture.url}}\" alt=\"\">
                    {% endif %}
                </div>
                <div class=\"col-md-6\">
                    <H4><strong>{{ post.title|length > 15 ? post.title|slice(0, 12) ~ '...' : post.title  }}</strong></H4>
                    {{ post.views }} views<br/>
                    {{ post.upvotes-post.downvotes }} points
                </div>
            </div>
        </a>
    </div>
{% endfor %}
    </div>
    <div class=\"text-center\">
        <a href=\"\" class=\"ignore-click\"><span class=\"btn-see-more-top-10\">See more <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></span></a>
    </div>
", "SmilePlatformBundle::Default/Blocs/topTen.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/Blocs/topTen.html.twig");
    }
}
