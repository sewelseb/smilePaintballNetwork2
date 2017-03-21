<?php

/* SmilePlatformBundle::Default/form/actualise.html.twig */
class __TwigTemplate_6031c3ba2aca87e2586634e2d3c14d9246394ecd2ac0b2541258221e129ffe2b extends Twig_Template
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
        $__internal_2836de2e6854456f6900b925701687fe049da338e18eb4602da66b85eb410298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2836de2e6854456f6900b925701687fe049da338e18eb4602da66b85eb410298->enter($__internal_2836de2e6854456f6900b925701687fe049da338e18eb4602da66b85eb410298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/form/actualise.html.twig"));

        // line 1
        echo "<script>
    window.location.href=document.location.href;
</script>";
        
        $__internal_2836de2e6854456f6900b925701687fe049da338e18eb4602da66b85eb410298->leave($__internal_2836de2e6854456f6900b925701687fe049da338e18eb4602da66b85eb410298_prof);

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
</script>", "SmilePlatformBundle::Default/form/actualise.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/form/actualise.html.twig");
    }
}
