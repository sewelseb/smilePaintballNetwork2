<?php

/* SmilePlatformBundle::Default/Blocs/navbar.html.twig */
class __TwigTemplate_b1fad67a6bd1ba363d507750dfe6b48756abc52470e3da2afeda627760af8322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6f321ef9e2d35f73fccb27faa6a61ce8d9e2b6c9ba6879e56f258ecf41ea33e = $this->env->getExtension("native_profiler");
        $__internal_d6f321ef9e2d35f73fccb27faa6a61ce8d9e2b6c9ba6879e56f258ecf41ea33e->enter($__internal_d6f321ef9e2d35f73fccb27faa6a61ce8d9e2b6c9ba6879e56f258ecf41ea33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/Blocs/navbar.html.twig"));

        // line 1
        echo "<!-- Navigation -->
";
        // line 2
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 3
            echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand yellow-text\" href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("smile_platform_homepage");
            echo "\"><span class=\"yellow-text\"><img class=\"logo\" src=\"/images/logo.png\" alt=\"SMILE\"></span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse pull-right\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"\" data-toggle=\"modal\" data-target=\"#newPostModal\"><span class=\"yellow-text\">+ Post</span></a>
                    </li>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getId", array()))), "html", null, true);
            echo "\"><span class=\"yellow-text\">My profile</span></a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"#f2c716\"><span class=\"yellow-text\">Logout</span></a>
                    </li>
                    <li>
                        <a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("smile_platform_contactUs");
            echo "\" class=\"#f2c716\"><span class=\"yellow-text\">Contact us</span></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class=\"modal fade\" id=\"newPostModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">+ New Post</h4>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 45
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmilePlatformBundle:Post:addNew", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
            echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>


    <button  data-toggle=\"modal\" data-target=\"#newPostModal\" class=\"btn btn-primary btn-circle smartphonePostButton front-z-index\" >
        <strong class=\"yellow-text \">+ POST</strong>
    </button>


";
        } else {
            // line 60
            echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand yellow-text\" href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("smile_platform_homepage");
            echo "\"><span class=\"yellow-text\"><img class=\"logo\" src=\"/images/logo.png\" alt=\"SMILE\"></span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse pull-right\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\"><span class=\"yellow-text\">Login</span></a>
                    </li>
                    <li>
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#registerModal\" class=\"yellow-text\"><span class=\"yellow-text\">Register</span></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Login</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group text-center\">
                        <a class=\"btn btn-register-facebook\" href=\"#\" onclick=\"fb_login();\">Connect with Facebook</a>
                    </div>
                    ";
            // line 99
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"));
            echo "
                </div>

            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"registerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"registerModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Register</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group text-center\">
                        <a class=\"btn btn-register-facebook\" href=\"#\" onclick=\"fb_login();\">Connect with Facebook</a>
                    </div>

                    ";
            // line 118
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmileUserBundle:Registration:register", array("originalRequest" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
            echo "
                    <div class=\"clearfix\"></div>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    <div class=\"clear-fix\"></div>
                </div>
                <div class=\"clear-fix\"></div>
            </div>

        </div>
    </div>
";
        }
        
        $__internal_d6f321ef9e2d35f73fccb27faa6a61ce8d9e2b6c9ba6879e56f258ecf41ea33e->leave($__internal_d6f321ef9e2d35f73fccb27faa6a61ce8d9e2b6c9ba6879e56f258ecf41ea33e_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/Blocs/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 118,  145 => 99,  113 => 70,  101 => 60,  83 => 45,  63 => 28,  57 => 25,  51 => 22,  39 => 13,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <!-- Navigation -->*/
/* {% if app.user %}*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand yellow-text" href="{{ path('smile_platform_homepage') }}"><span class="yellow-text"><img class="logo" src="/images/logo.png" alt="SMILE"></span></a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li>*/
/*                         <a href="" data-toggle="modal" data-target="#newPostModal"><span class="yellow-text">+ Post</span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('smile_platform_profile', {'userId': app.user.getId }) }}"><span class="yellow-text">My profile</span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('fos_user_security_logout') }}" class="#f2c716"><span class="yellow-text">Logout</span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('smile_platform_contactUs') }}" class="#f2c716"><span class="yellow-text">Contact us</span></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/* */
/*     <div class="modal fade" id="newPostModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">+ New Post</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ render(controller('SmilePlatformBundle:Post:addNew', {'request': app.request})) }}*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <button  data-toggle="modal" data-target="#newPostModal" class="btn btn-primary btn-circle smartphonePostButton front-z-index" >*/
/*         <strong class="yellow-text ">+ POST</strong>*/
/*     </button>*/
/* */
/* */
/* {% else %}*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand yellow-text" href="{{ path('smile_platform_homepage') }}"><span class="yellow-text"><img class="logo" src="/images/logo.png" alt="SMILE"></span></a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li>*/
/*                         <a href="#" data-toggle="modal" data-target="#loginModal" class="yellow-text"><span class="yellow-text">Login</span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#" data-toggle="modal" data-target="#registerModal" class="yellow-text"><span class="yellow-text">Register</span></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/* */
/*     <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Login</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <div class="form-group text-center">*/
/*                         <a class="btn btn-register-facebook" href="#" onclick="fb_login();">Connect with Facebook</a>*/
/*                     </div>*/
/*                     {{ render(controller('FOSUserBundle:Security:login')) }}*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Register</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <div class="form-group text-center">*/
/*                         <a class="btn btn-register-facebook" href="#" onclick="fb_login();">Connect with Facebook</a>*/
/*                     </div>*/
/* */
/*                     {{ render(controller("SmileUserBundle:Registration:register", {'originalRequest': app.request})) }}*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/* */
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                     <div class="clear-fix"></div>*/
/*                 </div>*/
/*                 <div class="clear-fix"></div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
