<?php

/* SmilePlatformBundle:Default:Blocs/showThermsAndAgreements.html.twig */
class __TwigTemplate_2ad3dc488e3573f95e5d877d28a039311f14fd2e19a2498ee470ccd1bbc73248 extends Twig_Template
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
        $__internal_70cbc895d37848906a5bb830f188fbed1cbd98e02c3f77f65f066214402f4cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cbc895d37848906a5bb830f188fbed1cbd98e02c3f77f65f066214402f4cf5->enter($__internal_70cbc895d37848906a5bb830f188fbed1cbd98e02c3f77f65f066214402f4cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:Blocs/showThermsAndAgreements.html.twig"));

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
        
        $__internal_70cbc895d37848906a5bb830f188fbed1cbd98e02c3f77f65f066214402f4cf5->leave($__internal_70cbc895d37848906a5bb830f188fbed1cbd98e02c3f77f65f066214402f4cf5_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:Blocs/showThermsAndAgreements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"alert alert-success thermsAndAgreementNotif front-z-index\" role=\"alert\">
    By using this website, you agree the <a href=\"#\" class=\"showThermsAndAgreements\">therms of agreements</a> and the use of cookies.
    <button class=\"btn btn-primary\">Agree and close</button>
</div>
<span id=\"setCookieThermsAndAgreementsUrl\" hidden>{{ path('smile_api_setThermsAndAgreementsCookie') }}</span>
<span id=\"showThermsAndAgreements\" hidden>{{ path('smile_platform_showThermsAndAgreements') }}</span>", "SmilePlatformBundle:Default:Blocs/showThermsAndAgreements.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/Blocs/showThermsAndAgreements.html.twig");
    }
}
