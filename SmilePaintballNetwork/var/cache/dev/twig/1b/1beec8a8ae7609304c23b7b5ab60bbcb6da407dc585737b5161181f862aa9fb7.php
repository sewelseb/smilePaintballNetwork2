<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6815d449ce340f4af503cf523e44fbf8c7ac2cc3f87421b18a15f77c8deb6650 extends Twig_Template
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
        $__internal_306d9828e8763a13c8241ce6551fa765db334d4fe193c15b6203bb8002fe166a = $this->env->getExtension("native_profiler");
        $__internal_306d9828e8763a13c8241ce6551fa765db334d4fe193c15b6203bb8002fe166a->enter($__internal_306d9828e8763a13c8241ce6551fa765db334d4fe193c15b6203bb8002fe166a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_306d9828e8763a13c8241ce6551fa765db334d4fe193c15b6203bb8002fe166a->leave($__internal_306d9828e8763a13c8241ce6551fa765db334d4fe193c15b6203bb8002fe166a_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_43a5bfa424ef58716d1ab05560965e1bf08b8a0a2e9c1d15a1ed7ef7c3e69eab = $this->env->getExtension("native_profiler");
        $__internal_43a5bfa424ef58716d1ab05560965e1bf08b8a0a2e9c1d15a1ed7ef7c3e69eab->enter($__internal_43a5bfa424ef58716d1ab05560965e1bf08b8a0a2e9c1d15a1ed7ef7c3e69eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
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
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"  method=\"POST\" class=\"fos_user_registration_register\">
        <div class=\"col-xs-6 col-sm-4\">
        </div>
        <div class=\"col-xs-6 col-sm-4\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\"><i class=\"fa fa-user\"></i></span>
                    <span class=\"form-inscription-text\">
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "username")));
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "e-mail")));
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "password")));
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "confirm password")));
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                        </span>
                </div>
            </div>

            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"form-inscription-text\">
                <input type=\"submit\" value=\"Register\" class=\"btn\"/>
            </div>
        </div>
    </form>

";
        
        $__internal_43a5bfa424ef58716d1ab05560965e1bf08b8a0a2e9c1d15a1ed7ef7c3e69eab->leave($__internal_43a5bfa424ef58716d1ab05560965e1bf08b8a0a2e9c1d15a1ed7ef7c3e69eab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  107 => 41,  94 => 33,  81 => 25,  68 => 17,  56 => 9,  47 => 6,  44 => 5,  39 => 4,  27 => 3,  23 => 1,);
    }
}
/* */
/* */
/* {% block content %}*/
/*     {% for flash_message in app.session.flashBag.get('notice') %}*/
/*         <div class="flash-notice">*/
/*             {{ flash_message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <form action="{{ path('fos_user_registration_register') }}"  method="POST" class="fos_user_registration_register">*/
/*         <div class="col-xs-6 col-sm-4">*/
/*         </div>*/
/*         <div class="col-xs-6 col-sm-4">*/
/*             <div class="form-group">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>*/
/*                     <span class="form-inscription-text">*/
/*                         {{form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder': 'username'} })}} {{form_errors(form.username)}}*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon" id="basic-addon1">@</span>*/
/*                     <span class="form-inscription-text">*/
/*                         {{form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'e-mail'} })}} {{form_errors(form.email)}}*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>*/
/*                         <span class="form-inscription-text">*/
/*                             {{form_widget(form.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder': 'password'} })}} {{form_errors(form.plainPassword.first)}}*/
/*                         </span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>*/
/*                         <span class="form-inscription-text">*/
/*                             {{form_widget(form.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder': 'confirm password'} })}} {{form_errors(form.plainPassword.second)}}*/
/*                         </span>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {{ form_widget(form) }}*/
/*             <div class="form-inscription-text">*/
/*                 <input type="submit" value="Register" class="btn"/>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* */
/* {% endblock %}*/
