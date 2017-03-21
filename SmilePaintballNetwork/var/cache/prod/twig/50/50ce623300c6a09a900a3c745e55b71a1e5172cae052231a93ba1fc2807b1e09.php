<?php

/* SmilePlatformBundle:Default/Blocs:showThermsAndAgreements.html.twig */
class __TwigTemplate_f2b4788ca73d902cd4c510f83b41a23a8027e4ac8c41ec4c5cab713c4e27b761 extends Twig_Template
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
        echo "<div class=\"alert alert-success thermsAndAgreementNotif front-z-index\" role=\"alert\">
    By using this website, you agree the <a href=\"#\" class=\"showThermsAndAgreements\">therms of agreements</a> and the use of cookies.
    <button class=\"btn btn-primary\">Agree and close</button>
</div>
<span id=\"setCookieThermsAndAgreementsUrl\" hidden>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_setThermsAndAgreementsCookie");
        echo "</span>
<span id=\"showThermsAndAgreements\" hidden>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_showThermsAndAgreements");
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default/Blocs:showThermsAndAgreements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SmilePlatformBundle:Default/Blocs:showThermsAndAgreements.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/Blocs/showThermsAndAgreements.html.twig");
    }
}
