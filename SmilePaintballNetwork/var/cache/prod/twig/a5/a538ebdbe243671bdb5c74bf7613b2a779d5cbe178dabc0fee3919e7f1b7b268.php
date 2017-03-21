<?php

/* SmilePlatformBundle:Default/form:actualise.html.twig */
class __TwigTemplate_049c631b72fef4fe6ce8ae24e6a0fbac8f5d088841a269d9677a1af1fc1785b1 extends Twig_Template
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
    window.location.href=document.location.href;
</script>";
    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default/form:actualise.html.twig";
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
        return new Twig_Source("", "SmilePlatformBundle:Default/form:actualise.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/form/actualise.html.twig");
    }
}
