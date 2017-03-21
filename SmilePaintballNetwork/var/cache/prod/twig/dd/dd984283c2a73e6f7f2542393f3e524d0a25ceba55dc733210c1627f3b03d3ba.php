<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_88915379a55132acb892db6fccc5a0fcfa148cb090a2f70632445b713962babe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a7f36fa963243767ad9d9a5f3d54f8c0f35307ef0a4943d1dccd851229455a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7f36fa963243767ad9d9a5f3d54f8c0f35307ef0a4943d1dccd851229455a4->enter($__internal_8a7f36fa963243767ad9d9a5f3d54f8c0f35307ef0a4943d1dccd851229455a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_8a7f36fa963243767ad9d9a5f3d54f8c0f35307ef0a4943d1dccd851229455a4->leave($__internal_8a7f36fa963243767ad9d9a5f3d54f8c0f35307ef0a4943d1dccd851229455a4_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_f5583917c8e1d3b2b2b2dfe3c194162124f4a1e6d92d083953751a0558a15467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5583917c8e1d3b2b2b2dfe3c194162124f4a1e6d92d083953751a0558a15467->enter($__internal_f5583917c8e1d3b2b2b2dfe3c194162124f4a1e6d92d083953751a0558a15467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 5
            echo "        <div class=\"flash-notice\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"  method=\"POST\" class=\"fos_user_registration_register\">
        <div class=\"\">
        </div>
        <div class=\"\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\"><i class=\"fa fa-user\"></i></span>
                    <span class=\"form-inscription-text\">
                        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "username")));
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                    </span>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\">@</span>
                    <span class=\"form-inscription-text\">
                        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "e-mail")));
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                    </span>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\"><i class=\"fa fa-lock\"></i></span>
                        <span class=\"form-inscription-text\">
                            ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "password")));
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                        </span>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\"><i class=\"fa fa-lock\"></i></span>
                        <span class=\"form-inscription-text\">
                            ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "confirm password")));
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                        </span>
                </div>
            </div>

            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"form-inscription-text\">
                <input type=\"submit\" value=\"Sign up\" class=\"btn\"/>
            </div>
        </div>
    </form>

";
        
        $__internal_f5583917c8e1d3b2b2b2dfe3c194162124f4a1e6d92d083953751a0558a15467->leave($__internal_f5583917c8e1d3b2b2b2dfe3c194162124f4a1e6d92d083953751a0558a15467_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  107 => 41,  94 => 33,  81 => 25,  68 => 17,  56 => 9,  47 => 6,  44 => 5,  39 => 4,  27 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block content %}
    {% for flash_message in app.session.flashBag.get('notice') %}
        <div class=\"flash-notice\">
            {{ flash_message }}
        </div>
    {% endfor %}
    <form action=\"{{ path('fos_user_registration_register') }}\"  method=\"POST\" class=\"fos_user_registration_register\">
        <div class=\"\">
        </div>
        <div class=\"\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\"><i class=\"fa fa-user\"></i></span>
                    <span class=\"form-inscription-text\">
                        {{form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder': 'username'} })}} {{form_errors(form.username)}}
                    </span>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\">@</span>
                    <span class=\"form-inscription-text\">
                        {{form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'e-mail'} })}} {{form_errors(form.email)}}
                    </span>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\"><i class=\"fa fa-lock\"></i></span>
                        <span class=\"form-inscription-text\">
                            {{form_widget(form.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder': 'password'} })}} {{form_errors(form.plainPassword.first)}}
                        </span>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\"><i class=\"fa fa-lock\"></i></span>
                        <span class=\"form-inscription-text\">
                            {{form_widget(form.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder': 'confirm password'} })}} {{form_errors(form.plainPassword.second)}}
                        </span>
                </div>
            </div>

            {{ form_widget(form) }}
            <div class=\"form-inscription-text\">
                <input type=\"submit\" value=\"Sign up\" class=\"btn\"/>
            </div>
        </div>
    </form>

{% endblock %}", "FOSUserBundle:Registration:register.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
