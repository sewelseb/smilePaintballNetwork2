<?php

/* SmileUserBundle:Security:login.html.twig */
class __TwigTemplate_f3d59339e56521bfdaefb312fce6b62863c194face091c1fdf101c110970b297 extends Twig_Template
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
        $__internal_da702bd8abfaf9792791de55401072212c68785fd0a174bb325daff1f25fe93b = $this->env->getExtension("native_profiler");
        $__internal_da702bd8abfaf9792791de55401072212c68785fd0a174bb325daff1f25fe93b->enter($__internal_da702bd8abfaf9792791de55401072212c68785fd0a174bb325daff1f25fe93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmileUserBundle:Security:login.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "



";
        // line 46
        echo "    ";
        // line 47
        echo "
    ";
        // line 49
        echo "    ";
        // line 50
        echo "
    ";
        // line 52
        echo "    ";
        // line 53
        echo "
    ";
        // line 55
        echo "    ";
        // line 56
        echo "
    ";
        
        $__internal_da702bd8abfaf9792791de55401072212c68785fd0a174bb325daff1f25fe93b->leave($__internal_da702bd8abfaf9792791de55401072212c68785fd0a174bb325daff1f25fe93b_prof);

    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        $__internal_19c17c985c9ea5483895a88eef52fc7acf919028ed53662adbff272d8b9ee75b = $this->env->getExtension("native_profiler");
        $__internal_19c17c985c9ea5483895a88eef52fc7acf919028ed53662adbff272d8b9ee75b->enter($__internal_19c17c985c9ea5483895a88eef52fc7acf919028ed53662adbff272d8b9ee75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "
        ";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "            <div>Wrong email or password :(</div>
        ";
        }
        // line 6
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\">@</span>
                        <span class=\"form-inscription-text\">
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"e-mail\"/>

                        </span>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\"><i class=\"fa fa-lock\"></i></span>
                        <span class=\"form-inscription-text\">
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"password\"/>
                        </span>
                </div>
            </div>


            <div class=\"form-group\">
                <div class=\"input-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">Remember me</label>
                </div>
            </div>

            <div class=\"form-inscription-text\">
                <input type=\"submit\" value=\"Login\" class=\"btn\"/>
            </div>

    </form>
";
        
        $__internal_19c17c985c9ea5483895a88eef52fc7acf919028ed53662adbff272d8b9ee75b->leave($__internal_19c17c985c9ea5483895a88eef52fc7acf919028ed53662adbff272d8b9ee75b_prof);

    }

    public function getTemplateName()
    {
        return "SmileUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  76 => 7,  71 => 6,  67 => 4,  65 => 3,  62 => 2,  56 => 1,  48 => 56,  46 => 55,  43 => 53,  41 => 52,  38 => 50,  36 => 49,  33 => 47,  31 => 46,  25 => 41,  23 => 1,);
    }
}
/* {% block content %}*/
/* */
/*         {% if error %}*/
/*             <div>Wrong email or password :(</div>*/
/*         {% endif %}*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*             <div class="form-group">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon" id="basic-addon1">@</span>*/
/*                         <span class="form-inscription-text">*/
/*                             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control" placeholder="e-mail"/>*/
/* */
/*                         </span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>*/
/*                         <span class="form-inscription-text">*/
/*                             <input type="password" id="password" name="_password" required="required" class="form-control" placeholder="password"/>*/
/*                         </span>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="form-group">*/
/*                 <div class="input-group">*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                     <label for="remember_me">Remember me</label>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-inscription-text">*/
/*                 <input type="submit" value="Login" class="btn"/>*/
/*             </div>*/
/* */
/*     </form>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* {#<form action="{{ path("fos_user_security_check") }}" method="post">#}*/
/*     {#<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />#}*/
/* */
/*     {#<label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>#}*/
/*     {#<input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />#}*/
/* */
/*     {#<label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>#}*/
/*     {#<input type="password" id="password" name="_password" required="required" />#}*/
/* */
/*     {#<input type="checkbox" id="remember_me" name="_remember_me" value="on" />#}*/
/*     {#<label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>#}*/
/* */
/*     {#<input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />#}*/
/* {#</form>#}*/
