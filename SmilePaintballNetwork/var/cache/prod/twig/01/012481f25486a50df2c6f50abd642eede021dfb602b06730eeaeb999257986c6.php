<?php

/* SmilePlatformBundle:Default:contact.html.twig */
class __TwigTemplate_9b2816b5aa473b5e7eb46361dba1f87ff86fc390d2688578cdaf438fc8d5d5b9 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
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
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SmilePlatformBundle:Default:contact.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/contact.html.twig");
    }
}
