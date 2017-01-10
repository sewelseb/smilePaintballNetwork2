<?php

/* SmilePlatformBundle::Default/form/actualiseNewPost.html.twig */
class __TwigTemplate_4ac933dbc2bd3508ca85e3a19e5cf8d4b345315e32d0334b41bc129ff1a9ecc9 extends Twig_Template
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
        $__internal_c223ac4efd5478ebce9e5039145013293cc7bb07e94cf867f06d1595484c0d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c223ac4efd5478ebce9e5039145013293cc7bb07e94cf867f06d1595484c0d5f->enter($__internal_c223ac4efd5478ebce9e5039145013293cc7bb07e94cf867f06d1595484c0d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/form/actualiseNewPost.html.twig"));

        // line 1
        echo "<script>
    window.location.href='/platform/post/'+";
        // line 2
        echo twig_escape_filter($this->env, ($context["postId"] ?? $this->getContext($context, "postId")), "html", null, true);
        echo ";
</script>";
        
        $__internal_c223ac4efd5478ebce9e5039145013293cc7bb07e94cf867f06d1595484c0d5f->leave($__internal_c223ac4efd5478ebce9e5039145013293cc7bb07e94cf867f06d1595484c0d5f_prof);

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
