<?php

/* SmilePlatformBundle:Default:contact.html.twig */
class __TwigTemplate_4c513668a9c5089355d5c14d51048cb878880dcabf7e3b0758010fcdc0a0f7d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle:Default:contact.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_485391c56563f3e8d3f3df9194dc1e473c8e4a9883dea9bf4424bbc38a006225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485391c56563f3e8d3f3df9194dc1e473c8e4a9883dea9bf4424bbc38a006225->enter($__internal_485391c56563f3e8d3f3df9194dc1e473c8e4a9883dea9bf4424bbc38a006225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_485391c56563f3e8d3f3df9194dc1e473c8e4a9883dea9bf4424bbc38a006225->leave($__internal_485391c56563f3e8d3f3df9194dc1e473c8e4a9883dea9bf4424bbc38a006225_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_42da1e8e2c336a951c91c8924f5a0cd7f8e7ea0eac987a874c378b6fefb87821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42da1e8e2c336a951c91c8924f5a0cd7f8e7ea0eac987a874c378b6fefb87821->enter($__internal_42da1e8e2c336a951c91c8924f5a0cd7f8e7ea0eac987a874c378b6fefb87821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_42da1e8e2c336a951c91c8924f5a0cd7f8e7ea0eac987a874c378b6fefb87821->leave($__internal_42da1e8e2c336a951c91c8924f5a0cd7f8e7ea0eac987a874c378b6fefb87821_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_d464ad3a9911596f4a16f656c4a32072b8e679f2b8bb540f9af387f4edcfed53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d464ad3a9911596f4a16f656c4a32072b8e679f2b8bb540f9af387f4edcfed53->enter($__internal_d464ad3a9911596f4a16f656c4a32072b8e679f2b8bb540f9af387f4edcfed53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 8
        echo "    <div class=\"row\" >
        <h1>Smile Paintball Network</h1>
        <hr/>
        <H2>Contact details</H2>
        <p>
            <a href=\"mailto:team@smilepaintball.com\">
                You can send us an email at team@smilepaintball.com
            </a><br/>
            <a href=\"https://www.facebook.com/smilepaintball\">
                Or you can contact us by our facebook group:https://www.facebook.com/groups/1790079874650463/
            </a>
            <div data-width=\"460px\" class=\"fb-post\" data-href=\"https://www.facebook.com/photo.php?fbid=1672060563092399&set=gm.1794567384201712&type=3&theater\"></div>
        </p>

    </div>
";
        
        $__internal_d464ad3a9911596f4a16f656c4a32072b8e679f2b8bb540f9af387f4edcfed53->leave($__internal_d464ad3a9911596f4a16f656c4a32072b8e679f2b8bb540f9af387f4edcfed53_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SmilePlatformBundle::Default/layout.html.twig\" %}

{% block pageHeader %}

{% endblock %}

{% block leftCollumn %}
    <div class=\"row\" >
        <h1>Smile Paintball Network</h1>
        <hr/>
        <H2>Contact details</H2>
        <p>
            <a href=\"mailto:team@smilepaintball.com\">
                You can send us an email at team@smilepaintball.com
            </a><br/>
            <a href=\"https://www.facebook.com/smilepaintball\">
                Or you can contact us by our facebook group:https://www.facebook.com/groups/1790079874650463/
            </a>
            <div data-width=\"460px\" class=\"fb-post\" data-href=\"https://www.facebook.com/photo.php?fbid=1672060563092399&set=gm.1794567384201712&type=3&theater\"></div>
        </p>

    </div>
{% endblock %}", "SmilePlatformBundle:Default:contact.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/contact.html.twig");
    }
}
