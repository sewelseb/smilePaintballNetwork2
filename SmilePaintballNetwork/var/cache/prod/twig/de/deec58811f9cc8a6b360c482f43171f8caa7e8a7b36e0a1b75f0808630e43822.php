<?php

/* SkynetBundle:FacebookUser:ShowUsers.html.twig */
class __TwigTemplate_fb9f35fe8b31bfbd5da5a8f6661e812b8a0b5f00b6db0fc73bbb923eca01d5dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SkynetBundle::Default/dashboard.html.twig", "SkynetBundle:FacebookUser:ShowUsers.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'rightCollumn' => array($this, 'block_rightCollumn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SkynetBundle::Default/dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42826e5f50a36fa20a321409182daebd5885ec02370205c880f6a9eb48838d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42826e5f50a36fa20a321409182daebd5885ec02370205c880f6a9eb48838d57->enter($__internal_42826e5f50a36fa20a321409182daebd5885ec02370205c880f6a9eb48838d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SkynetBundle:FacebookUser:ShowUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42826e5f50a36fa20a321409182daebd5885ec02370205c880f6a9eb48838d57->leave($__internal_42826e5f50a36fa20a321409182daebd5885ec02370205c880f6a9eb48838d57_prof);

    }

    // line 2
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_655aba110b0f1191c42c47732b2caaf5b5799f696d2ed2fbee680eca047bc265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655aba110b0f1191c42c47732b2caaf5b5799f696d2ed2fbee680eca047bc265->enter($__internal_655aba110b0f1191c42c47732b2caaf5b5799f696d2ed2fbee680eca047bc265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 3
        echo "    <h1 class=\"page-header\">
        Users
    </h1>
";
        
        $__internal_655aba110b0f1191c42c47732b2caaf5b5799f696d2ed2fbee680eca047bc265->leave($__internal_655aba110b0f1191c42c47732b2caaf5b5799f696d2ed2fbee680eca047bc265_prof);

    }

    // line 8
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_0715d611a03a85b4364faec6b7b1d2a9c6c86d2813a1eb8ed6dd0e5db2df676e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0715d611a03a85b4364faec6b7b1d2a9c6c86d2813a1eb8ed6dd0e5db2df676e->enter($__internal_0715d611a03a85b4364faec6b7b1d2a9c6c86d2813a1eb8ed6dd0e5db2df676e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 9
        echo "    ";
        $this->loadTemplate("SkynetBundle::FacebookUser/Blocs/addUser.html.twig", "SkynetBundle:FacebookUser:ShowUsers.html.twig", 9)->display($context);
        
        $__internal_0715d611a03a85b4364faec6b7b1d2a9c6c86d2813a1eb8ed6dd0e5db2df676e->leave($__internal_0715d611a03a85b4364faec6b7b1d2a9c6c86d2813a1eb8ed6dd0e5db2df676e_prof);

    }

    public function getTemplateName()
    {
        return "SkynetBundle:FacebookUser:ShowUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"SkynetBundle::Default/dashboard.html.twig\" %}
{% block pageHeader %}
    <h1 class=\"page-header\">
        Users
    </h1>
{% endblock %}

{% block rightCollumn %}
    {%  include('SkynetBundle::FacebookUser/Blocs/addUser.html.twig') %}
{% endblock %}";
    }
}
