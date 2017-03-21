<?php

/* @HWIOAuth/Connect/registration_success.html.twig */
class __TwigTemplate_66177c7ca39f3845ad4149394cd0c2cc6c312c829c23f9b90406fca32fa9775e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "@HWIOAuth/Connect/registration_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
    }

    public function getTemplateName()
    {
        return "@HWIOAuth/Connect/registration_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HWIOAuth/Connect/registration_success.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\vendor\\hwi\\oauth-bundle\\Resources\\views\\Connect\\registration_success.html.twig");
    }
}
