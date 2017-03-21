<?php

/* SmilePlatformBundle::Default/form/actualiseNewPost.html.twig */
class __TwigTemplate_aa90b19a872d03a232000afe02a526cf71b913d054149c0ec500da7a02d466b2 extends Twig_Template
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
        $__internal_e246ae21ff6c9d8eb61ff49d209898a6eb6194903a67d94d6c4fb04947fe30e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e246ae21ff6c9d8eb61ff49d209898a6eb6194903a67d94d6c4fb04947fe30e6->enter($__internal_e246ae21ff6c9d8eb61ff49d209898a6eb6194903a67d94d6c4fb04947fe30e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/form/actualiseNewPost.html.twig"));

        // line 1
        echo "<script>
    window.location.href='/platform/post/'+";
        // line 2
        echo twig_escape_filter($this->env, ($context["postId"] ?? $this->getContext($context, "postId")), "html", null, true);
        echo ";
</script>";
        
        $__internal_e246ae21ff6c9d8eb61ff49d209898a6eb6194903a67d94d6c4fb04947fe30e6->leave($__internal_e246ae21ff6c9d8eb61ff49d209898a6eb6194903a67d94d6c4fb04947fe30e6_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/form/actualiseNewPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    window.location.href='/platform/post/'+{{ postId }};
</script>", "SmilePlatformBundle::Default/form/actualiseNewPost.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/form/actualiseNewPost.html.twig");
    }
}
