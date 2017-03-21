<?php

/* @SmilePlatform/Default/Blocs/navbar.html.twig */
class __TwigTemplate_bcef93587a914c4c4f325b2432a43a99cd5d18286ceecca8d5dfa1bd2d779716 extends Twig_Template
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
        // line 1
        echo "<!-- Navigation -->
";
        // line 2
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_homepage");
            echo "\"><span class=\"yellow-text\"><img class=\"logo\" src=\"/images/logo.png\" alt=\"SMILE\"></span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse pull-right\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"\" data-toggle=\"modal\" data-target=\"#newPostModal\"><span class=\"yellow-text\">+ Post</span></a>
                    </li>
                    <li class=\"visible-md visible-lg\">
                        ";
            // line 22
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "picture", array())) {
                // line 23
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "getId", array()))), "html", null, true);
                echo "\"><img class=\"img-navbar\"  src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "picture", array()), "url", array()), "html", null, true);
                echo "\"></a>
                        ";
            }
            // line 25
            echo "                    </li>
                    <li >
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "getId", array()))), "html", null, true);
            echo "\"><span class=\"yellow-text\">My profile</span></a>
                    </li>
                    <li>
                        <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"#f2c716\"><span class=\"yellow-text\">Logout</span></a>
                    </li>
                    <li>
                        <a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_contactUs");
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
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Post:addNew", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()))));
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
            // line 65
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
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_platform_homepage");
            echo "\"><span class=\"yellow-text\"><img class=\"logo\" src=\"/images/logo.png\" alt=\"SMILE\"></span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse pull-right\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a class=\"btn  btn-register-facebook-navbar\" href=\"#\" onclick=\"fb_login();\"><span class=\"btn-register-facebook-navbar-text\">Connect with Facebook</span></a>
                    </li>
                    <li>
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\"><span class=\"yellow-text\">Connect/Log in</span></a>
                    </li>
                    ";
            // line 89
            echo "                </ul>
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
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Sign up/Login</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row text-center\">
                        <H3 class=\"text-center text-warning\" id=\"showMandatoryLoginForVotes\" hidden>You must be connected to upvote or downvote ;).</H3>
                        <H3 class=\"text-center text-warning\" id=\"showMandatoryLoginForPost\" hidden>You must be connected to post ;).</H3>

                    </div>
                    <div class=\"form-group text-center\" >
                        <a class=\"btn btn-register-facebook\" href=\"#\" onclick=\"fb_login();\">Connect with Facebook</a>
                    </div>
                    <H3 class=\"text-center\">OR</H3>
                    <div class=\"row\">
                        <div class=\"col-md-6\" style=\"border-right: 1px solid lightgray;\">
                            <h4>New on Smile ? Sign up !</h4>
                            ";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmileUserBundle:Registration:register", array("originalRequest" => $this->getAttribute(($context["app"] ?? null), "request", array()))));
            echo "
                        </div>
                        <div class=\"col-md-6\">
                            <h4>Already have an account ? Log in !</h4>
                            ";
            // line 120
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Security:login"));
            echo "
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
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
            // line 143
            echo "                    <div class=\"clearfix\"></div>
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
    }

    public function getTemplateName()
    {
        return "@SmilePlatform/Default/Blocs/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 143,  176 => 120,  169 => 116,  140 => 89,  126 => 75,  114 => 65,  96 => 50,  76 => 33,  70 => 30,  64 => 27,  60 => 25,  50 => 23,  48 => 22,  36 => 13,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SmilePlatform/Default/Blocs/navbar.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle\\Resources\\views\\Default\\Blocs\\navbar.html.twig");
    }
}
