<?php

/* SmilePlatformBundle::Default/Blocs/postViews.html.twig */
class __TwigTemplate_64173a5e8265ba4e46b07f6a5e475d903f924de136e94f7ff9b1452c3ab67267 extends Twig_Template
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
        echo twig_escape_filter($this->env, ($context["totalViews"] ?? null), "html", null, true);
        echo " total post views.";
    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/Blocs/postViews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SmilePlatformBundle::Default/Blocs/postViews.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/Blocs/postViews.html.twig");
    }
}
