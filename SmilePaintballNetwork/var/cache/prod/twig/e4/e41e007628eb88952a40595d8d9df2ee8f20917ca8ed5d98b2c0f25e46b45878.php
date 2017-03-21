<?php

/* SmilePlatformBundle:Default/form:actualiseNewPost.html.twig */
class __TwigTemplate_c775ba32fd5e517b508667aa1733fc87181ec4145cd6cffe540e48810df35b06 extends Twig_Template
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
        echo "<script>
    window.location.href='/platform/post/'+";
        // line 2
        echo twig_escape_filter($this->env, ($context["postId"] ?? null), "html", null, true);
        echo ";
</script>";
    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default/form:actualiseNewPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SmilePlatformBundle:Default/form:actualiseNewPost.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/form/actualiseNewPost.html.twig");
    }
}
