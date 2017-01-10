<?php

/* SmilePlatformBundle::Default/form/actualise.html.twig */
class __TwigTemplate_5b32d704a247048a1afc13fd92e5d8cbb334571367c91358dd686cf1a0401e63 extends Twig_Template
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
        $__internal_a334cdc45fed0dde1042d9fc1b56c7969ed5cdc6a745fd5aa388db6f788ebcef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a334cdc45fed0dde1042d9fc1b56c7969ed5cdc6a745fd5aa388db6f788ebcef->enter($__internal_a334cdc45fed0dde1042d9fc1b56c7969ed5cdc6a745fd5aa388db6f788ebcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/form/actualise.html.twig"));

        // line 1
        echo "<script>
    window.location.href=document.location.href;
</script>";
        
        $__internal_a334cdc45fed0dde1042d9fc1b56c7969ed5cdc6a745fd5aa388db6f788ebcef->leave($__internal_a334cdc45fed0dde1042d9fc1b56c7969ed5cdc6a745fd5aa388db6f788ebcef_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/form/actualise.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
    window.location.href=document.location.href;
</script>", "SmilePlatformBundle::Default/form/actualise.html.twig", "C:\\wamp64\\www\\bamsell\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/form/actualise.html.twig");
    }
}
