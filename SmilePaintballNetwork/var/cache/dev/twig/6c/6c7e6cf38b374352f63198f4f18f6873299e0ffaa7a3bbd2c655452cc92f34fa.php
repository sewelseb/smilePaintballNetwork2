<?php

/* SmilePlatformBundle::Default/form/actualiseNewPost.html.twig */
class __TwigTemplate_f1245c40f809948517570a596d814faa5649869f0a92b3831f02f3e0c235d2b3 extends Twig_Template
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
        $__internal_980e059f8efacc2a5fd550103f4ec4dde9e1db1855a314ba00ff1a8079fdbcb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980e059f8efacc2a5fd550103f4ec4dde9e1db1855a314ba00ff1a8079fdbcb3->enter($__internal_980e059f8efacc2a5fd550103f4ec4dde9e1db1855a314ba00ff1a8079fdbcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/form/actualiseNewPost.html.twig"));

        // line 1
        echo "<script>
    window.location.href='/platform/post/'+";
        // line 2
        echo twig_escape_filter($this->env, ($context["postId"] ?? $this->getContext($context, "postId")), "html", null, true);
        echo ";
</script>";
        
        $__internal_980e059f8efacc2a5fd550103f4ec4dde9e1db1855a314ba00ff1a8079fdbcb3->leave($__internal_980e059f8efacc2a5fd550103f4ec4dde9e1db1855a314ba00ff1a8079fdbcb3_prof);

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
</script>", "SmilePlatformBundle::Default/form/actualiseNewPost.html.twig", "C:\\wamp64\\www\\bamsell\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/form/actualiseNewPost.html.twig");
    }
}
