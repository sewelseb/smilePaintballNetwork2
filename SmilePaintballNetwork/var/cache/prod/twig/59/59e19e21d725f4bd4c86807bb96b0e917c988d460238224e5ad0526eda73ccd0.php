<?php

/* SmilePlatformBundle::Default/form/actualiseNewPost.html.twig */
class __TwigTemplate_35291fd2ef49febdb89ad8715652b54612f30acdb2fae269b43ba36950766169 extends Twig_Template
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
        $__internal_021f7ac9f3ad563039a907582e4640bbf55bd9e5c170dc124d943e9ba63ae6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021f7ac9f3ad563039a907582e4640bbf55bd9e5c170dc124d943e9ba63ae6f7->enter($__internal_021f7ac9f3ad563039a907582e4640bbf55bd9e5c170dc124d943e9ba63ae6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/form/actualiseNewPost.html.twig"));

        // line 1
        echo "<script>
    window.location.href='/platform/post/'+";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["postId"]) ? $context["postId"] : $this->getContext($context, "postId")), "html", null, true);
        echo ";
</script>";
        
        $__internal_021f7ac9f3ad563039a907582e4640bbf55bd9e5c170dc124d943e9ba63ae6f7->leave($__internal_021f7ac9f3ad563039a907582e4640bbf55bd9e5c170dc124d943e9ba63ae6f7_prof);

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

    public function getSource()
    {
        return "<script>
    window.location.href='/platform/post/'+{{ postId }};
</script>";
    }
}
