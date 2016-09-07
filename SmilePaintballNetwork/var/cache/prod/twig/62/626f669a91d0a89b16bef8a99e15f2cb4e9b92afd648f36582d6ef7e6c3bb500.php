<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0f875dd73d079e293341db6585841856372bc02f1b5d1ab6c666410fdbdfeab3 extends Twig_Template
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
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "
        ";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : null)) {
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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

            <div class=\"form-group\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\">@</span>
                        <span class=\"form-inscription-text\">
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  67 => 7,  62 => 6,  58 => 4,  56 => 3,  53 => 2,  50 => 1,  45 => 56,  43 => 55,  40 => 53,  38 => 52,  35 => 50,  33 => 49,  30 => 47,  28 => 46,  22 => 41,  20 => 1,);
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
