<?php

/* SmilePlatformBundle:Default:contact.html.twig */
class __TwigTemplate_33affe2cd66b34340c4f7cf5955f79c951c6aa7535cd3bbd0d1b6feec4231f80 extends Twig_Template
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
        $__internal_a64223ae2e7f5bdcc2cd6f3d05e51e2ecccbe3833790f03b41cd14e427da1533 = $this->env->getExtension("native_profiler");
        $__internal_a64223ae2e7f5bdcc2cd6f3d05e51e2ecccbe3833790f03b41cd14e427da1533->enter($__internal_a64223ae2e7f5bdcc2cd6f3d05e51e2ecccbe3833790f03b41cd14e427da1533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a64223ae2e7f5bdcc2cd6f3d05e51e2ecccbe3833790f03b41cd14e427da1533->leave($__internal_a64223ae2e7f5bdcc2cd6f3d05e51e2ecccbe3833790f03b41cd14e427da1533_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_71658db72dc96d2bdd2c055ea718b489a28851f8f9d0073ddbdef0361c5c81d9 = $this->env->getExtension("native_profiler");
        $__internal_71658db72dc96d2bdd2c055ea718b489a28851f8f9d0073ddbdef0361c5c81d9->enter($__internal_71658db72dc96d2bdd2c055ea718b489a28851f8f9d0073ddbdef0361c5c81d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_71658db72dc96d2bdd2c055ea718b489a28851f8f9d0073ddbdef0361c5c81d9->leave($__internal_71658db72dc96d2bdd2c055ea718b489a28851f8f9d0073ddbdef0361c5c81d9_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_5d37a538356ba67ae393ff4d4487c5e5912e22d47ed86e1395d54b85c13c4289 = $this->env->getExtension("native_profiler");
        $__internal_5d37a538356ba67ae393ff4d4487c5e5912e22d47ed86e1395d54b85c13c4289->enter($__internal_5d37a538356ba67ae393ff4d4487c5e5912e22d47ed86e1395d54b85c13c4289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

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
                Or you can contact us by our facebook page: https://www.facebook.com/smilepaintball
            </a>
            <div data-width=\"460px\" class=\"fb-post\" data-href=\"https://www.facebook.com/smilepaintball/photos/a.1552861911596624.1073741827.1552858474930301/1733315486884598/?type=1&theater\"></div>
        </p>

    </div>
";
        
        $__internal_5d37a538356ba67ae393ff4d4487c5e5912e22d47ed86e1395d54b85c13c4289->leave($__internal_5d37a538356ba67ae393ff4d4487c5e5912e22d47ed86e1395d54b85c13c4289_prof);

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
}
/* {% extends "SmilePlatformBundle::Default/layout.html.twig" %}*/
/* */
/* {% block pageHeader %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block leftCollumn %}*/
/*     <div class="row" >*/
/*         <h1>Smile Paintball Network</h1>*/
/*         <hr/>*/
/*         <H2>Contact details</H2>*/
/*         <p>*/
/*             <a href="mailto:team@smilepaintball.com">*/
/*                 You can send us an email at team@smilepaintball.com*/
/*             </a><br/>*/
/*             <a href="https://www.facebook.com/smilepaintball">*/
/*                 Or you can contact us by our facebook page: https://www.facebook.com/smilepaintball*/
/*             </a>*/
/*             <div data-width="460px" class="fb-post" data-href="https://www.facebook.com/smilepaintball/photos/a.1552861911596624.1073741827.1552858474930301/1733315486884598/?type=1&theater"></div>*/
/*         </p>*/
/* */
/*     </div>*/
/* {% endblock %}*/
