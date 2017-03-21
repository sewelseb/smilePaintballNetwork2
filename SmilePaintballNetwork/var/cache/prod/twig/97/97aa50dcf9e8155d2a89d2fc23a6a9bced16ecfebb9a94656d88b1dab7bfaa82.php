<?php

/* @SmilePlatform/Default/Blocs/topTen.html.twig */
class __TwigTemplate_d9626f954be4b12ac2d6e19b7f54ab3b3d394c147cd54e80fa3a73271e2fd55b extends Twig_Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
    }

    public function getTemplateName()
    {
        return "@SmilePlatform/Default/Blocs/topTen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 41,  133 => 35,  129 => 34,  125 => 33,  121 => 31,  113 => 29,  110 => 28,  102 => 26,  99 => 25,  93 => 23,  90 => 22,  84 => 20,  81 => 19,  75 => 17,  72 => 16,  66 => 14,  64 => 13,  60 => 11,  54 => 9,  48 => 7,  46 => 6,  43 => 5,  39 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SmilePlatform/Default/Blocs/topTen.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle\\Resources\\views\\Default\\Blocs\\topTen.html.twig");
    }
}
