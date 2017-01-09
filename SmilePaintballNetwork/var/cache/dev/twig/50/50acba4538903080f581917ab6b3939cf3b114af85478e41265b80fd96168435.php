<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_661f69730b2192d45d7713e43c26bde01d590683e0da36889b83d31eb018ca02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae087a679f36f46f0942d8137ac6b79700b16c74f8e39839216fc0b50a5876d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae087a679f36f46f0942d8137ac6b79700b16c74f8e39839216fc0b50a5876d6->enter($__internal_ae087a679f36f46f0942d8137ac6b79700b16c74f8e39839216fc0b50a5876d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae087a679f36f46f0942d8137ac6b79700b16c74f8e39839216fc0b50a5876d6->leave($__internal_ae087a679f36f46f0942d8137ac6b79700b16c74f8e39839216fc0b50a5876d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b046b0262e3f7f5f76730398548728c2d1e1915aa33c46c332147369ce19326a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b046b0262e3f7f5f76730398548728c2d1e1915aa33c46c332147369ce19326a->enter($__internal_b046b0262e3f7f5f76730398548728c2d1e1915aa33c46c332147369ce19326a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b046b0262e3f7f5f76730398548728c2d1e1915aa33c46c332147369ce19326a->leave($__internal_b046b0262e3f7f5f76730398548728c2d1e1915aa33c46c332147369ce19326a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\bamsell\\smilePaintballNetwork2\\SmilePaintballNetwork\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
