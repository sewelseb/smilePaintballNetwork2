<?php

/* SmilePlatformBundle::Default/Blocs/banner.html.twig */
class __TwigTemplate_ba954e7968196231910e0d4ac2d305dc21219a73f8ad32a630297ea5eb8c5c36 extends Twig_Template
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
        $__internal_7dc5e6a1b9072e9a4adf071c027b8d7fa01ac3ecf1a77d2b10102f228b85a952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc5e6a1b9072e9a4adf071c027b8d7fa01ac3ecf1a77d2b10102f228b85a952->enter($__internal_7dc5e6a1b9072e9a4adf071c027b8d7fa01ac3ecf1a77d2b10102f228b85a952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/Blocs/banner.html.twig"));

        // line 1
        echo "<h1 class=\"page-header\">
    Watch, rate and share fun!
</h1>
<div>
    ";
        // line 5
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 6
            echo "        <a class=\"btn btn-register-facebook\" href=\"#\" onclick=\"fb_login();\">Connect with Facebook</a> OR <button class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#loginModal\" > Connect/Sign up</button>
    ";
        } else {
            // line 8
            echo "        <div class=\"text-center\">
            <button class=\"btn btn-primary text-center\" data-toggle=\"modal\" data-target=\"#newPostModal\"><H4><strong> + Post your paintball fun </strong></H4></button>
        </div>
    ";
        }
        // line 12
        echo "</div>";
        
        $__internal_7dc5e6a1b9072e9a4adf071c027b8d7fa01ac3ecf1a77d2b10102f228b85a952->leave($__internal_7dc5e6a1b9072e9a4adf071c027b8d7fa01ac3ecf1a77d2b10102f228b85a952_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/Blocs/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  34 => 8,  30 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1 class=\"page-header\">
    Watch, rate and share fun!
</h1>
<div>
    {% if not app.user %}
        <a class=\"btn btn-register-facebook\" href=\"#\" onclick=\"fb_login();\">Connect with Facebook</a> OR <button class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#loginModal\" > Connect/Sign up</button>
    {% else %}
        <div class=\"text-center\">
            <button class=\"btn btn-primary text-center\" data-toggle=\"modal\" data-target=\"#newPostModal\"><H4><strong> + Post your paintball fun </strong></H4></button>
        </div>
    {% endif %}
</div>", "SmilePlatformBundle::Default/Blocs/banner.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/Blocs/banner.html.twig");
    }
}
