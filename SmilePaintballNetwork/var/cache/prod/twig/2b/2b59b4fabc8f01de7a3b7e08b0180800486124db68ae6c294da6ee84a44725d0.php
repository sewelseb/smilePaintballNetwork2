<?php

/* SmilePlatformBundle:Default:events.html.twig */
class __TwigTemplate_3623066a5ab4b4fd4affa6fd2cf2d944c4927626b42f4fb67d0a4f8c8e679e5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle:Default:events.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'postYourFun' => array($this, 'block_postYourFun'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
            'rightCollumn' => array($this, 'block_rightCollumn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eccff6c1fa3bc859637fbf3f5319e5b67b7d1b762d57e2e43084730cddf8827e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccff6c1fa3bc859637fbf3f5319e5b67b7d1b762d57e2e43084730cddf8827e->enter($__internal_eccff6c1fa3bc859637fbf3f5319e5b67b7d1b762d57e2e43084730cddf8827e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eccff6c1fa3bc859637fbf3f5319e5b67b7d1b762d57e2e43084730cddf8827e->leave($__internal_eccff6c1fa3bc859637fbf3f5319e5b67b7d1b762d57e2e43084730cddf8827e_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_a788d6206fcd15e7b37c99b5ab5e6eaa58786c85687e3b1c9173a3481a2dc272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a788d6206fcd15e7b37c99b5ab5e6eaa58786c85687e3b1c9173a3481a2dc272->enter($__internal_a788d6206fcd15e7b37c99b5ab5e6eaa58786c85687e3b1c9173a3481a2dc272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_a788d6206fcd15e7b37c99b5ab5e6eaa58786c85687e3b1c9173a3481a2dc272->leave($__internal_a788d6206fcd15e7b37c99b5ab5e6eaa58786c85687e3b1c9173a3481a2dc272_prof);

    }

    // line 6
    public function block_postYourFun($context, array $blocks = array())
    {
        $__internal_44735009f67078ce156a370595d1107e92366ae55f8aa0ac7144121df184329e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44735009f67078ce156a370595d1107e92366ae55f8aa0ac7144121df184329e->enter($__internal_44735009f67078ce156a370595d1107e92366ae55f8aa0ac7144121df184329e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "postYourFun"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"container\">
            <div class=\"col-md-9\">
                <div class=\"form-group\">
                    ";
        // line 11
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 12
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Event:addNew"));
            echo "
                    ";
        } else {
            // line 14
            echo "
                        <H2><strong>+ CREATE an event</strong></H2>
                        <div class=\"form-group postOpenSignIn\">
                            <input class=\"form-control input-lg postOpenSignIn\" id=\"postTitleOpenSignIn\" placeholder=\"Event Title\">
                        </div>
                        <div class=\"form-group postOpenSignIn\">
                            <div class=\"pull-right\">
                                <button class=\"btn btn-primary postOpenSignIn\"><strong>CREATE</strong></button>
                            </div>
                        </div>

                    ";
        }
        // line 26
        echo "                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_44735009f67078ce156a370595d1107e92366ae55f8aa0ac7144121df184329e->leave($__internal_44735009f67078ce156a370595d1107e92366ae55f8aa0ac7144121df184329e_prof);

    }

    // line 33
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_bfc872203078130833ddd9eb7181b0c5afef40560817751d61dc7f6f34c82351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc872203078130833ddd9eb7181b0c5afef40560817751d61dc7f6f34c82351->enter($__internal_bfc872203078130833ddd9eb7181b0c5afef40560817751d61dc7f6f34c82351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 34
        echo "

";
        
        $__internal_bfc872203078130833ddd9eb7181b0c5afef40560817751d61dc7f6f34c82351->leave($__internal_bfc872203078130833ddd9eb7181b0c5afef40560817751d61dc7f6f34c82351_prof);

    }

    // line 38
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_c3bd2405e3e376d2876e86331489025ad2583d168a29bc6c34f9ed2c4d3e21a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3bd2405e3e376d2876e86331489025ad2583d168a29bc6c34f9ed2c4d3e21a6->enter($__internal_c3bd2405e3e376d2876e86331489025ad2583d168a29bc6c34f9ed2c4d3e21a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 39
        echo "





";
        
        $__internal_c3bd2405e3e376d2876e86331489025ad2583d168a29bc6c34f9ed2c4d3e21a6->leave($__internal_c3bd2405e3e376d2876e86331489025ad2583d168a29bc6c34f9ed2c4d3e21a6_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  112 => 38,  103 => 34,  97 => 33,  85 => 26,  71 => 14,  65 => 12,  63 => 11,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
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
{% block postYourFun %}
    <div class=\"row\">
        <div class=\"container\">
            <div class=\"col-md-9\">
                <div class=\"form-group\">
                    {% if app.user %}
                        {{  render(controller('SmilePlatformBundle:Event:addNew')) }}
                    {% else %}

                        <H2><strong>+ CREATE an event</strong></H2>
                        <div class=\"form-group postOpenSignIn\">
                            <input class=\"form-control input-lg postOpenSignIn\" id=\"postTitleOpenSignIn\" placeholder=\"Event Title\">
                        </div>
                        <div class=\"form-group postOpenSignIn\">
                            <div class=\"pull-right\">
                                <button class=\"btn btn-primary postOpenSignIn\"><strong>CREATE</strong></button>
                            </div>
                        </div>

                    {% endif %}
                </div>
            </div>

        </div>
    </div>
{% endblock %}

{% block leftCollumn %}


{% endblock %}

{% block rightCollumn %}






{% endblock %}", "SmilePlatformBundle:Default:events.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/events.html.twig");
    }
}
