<?php

/* SmilePlatformBundle::Default/layout.html.twig */
class __TwigTemplate_25290286895ed5a4a2cf5d79e823b1f36d4ed726b67d50fb3f50b1742a76c3aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
            'rightCollumn' => array($this, 'block_rightCollumn'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dffbdaf91a9cb45ffd9dba9b8b36ff4b8eea7b815755118cf5b82f01559db00 = $this->env->getExtension("native_profiler");
        $__internal_7dffbdaf91a9cb45ffd9dba9b8b36ff4b8eea7b815755118cf5b82f01559db00->enter($__internal_7dffbdaf91a9cb45ffd9dba9b8b36ff4b8eea7b815755118cf5b82f01559db00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Smile Paintball Network</title>

    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Font awsome -->
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- jQuery -->
    <script src=\"js/jquery.js\"></script><script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

    <!-- Custom CSS -->
    <link href=\"css/1-col-portfolio.css\" rel=\"stylesheet\">
    ";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6d14613_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14613_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6d14613_style_1.css");
            // line 32
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "6d14613"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14613") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6d14613.css");
            // line 32
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 35
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular-sanitize.min.js\"></script>
    ";
        // line 45
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fd0d37f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_waypoint_1.js");
            // line 56
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_noframework_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_context_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_group_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_app_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_allPostsCtrl_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_jqwery_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "fd0d37f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 58
        echo "
</head>

<body >
<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

";
        // line 71
        $this->loadTemplate("SmilePlatformBundle::Default/Blocs/navbar.html.twig", "SmilePlatformBundle::Default/layout.html.twig", 71)->display($context);
        // line 72
        echo "
<!-- Page Content -->
<div class=\"container\" >

    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            ";
        // line 79
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 84
        echo "        </div>
    </div>
    <!-- /.row -->
    <div class=\"col-md-9\" id=\"postsNews\" ng-app=\"smile\">
        ";
        // line 88
        $this->displayBlock('leftCollumn', $context, $blocks);
        // line 92
        echo "    </div>
    <div class=\"col-md-3 right-bar\">
        ";
        // line 94
        $this->displayBlock('rightCollumn', $context, $blocks);
        // line 176
        echo "    </div>

    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->



<script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"> lang: en_US</script>
<!-- Bootstrap Core JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

</body>

</html>";
        
        $__internal_7dffbdaf91a9cb45ffd9dba9b8b36ff4b8eea7b815755118cf5b82f01559db00->leave($__internal_7dffbdaf91a9cb45ffd9dba9b8b36ff4b8eea7b815755118cf5b82f01559db00_prof);

    }

    // line 79
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_3b94e86010e04d015329081fd609946ce80eef766bec315479a3ff2130bef3f1 = $this->env->getExtension("native_profiler");
        $__internal_3b94e86010e04d015329081fd609946ce80eef766bec315479a3ff2130bef3f1->enter($__internal_3b94e86010e04d015329081fd609946ce80eef766bec315479a3ff2130bef3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 80
        echo "                <h1 class=\"page-header\">
                    Smile Paintball Network
                </h1>
            ";
        
        $__internal_3b94e86010e04d015329081fd609946ce80eef766bec315479a3ff2130bef3f1->leave($__internal_3b94e86010e04d015329081fd609946ce80eef766bec315479a3ff2130bef3f1_prof);

    }

    // line 88
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_7b06af7fa57c952c8a1357f296e98b9bbe988a0c6c0d1c7a0f63a3d16f6463c7 = $this->env->getExtension("native_profiler");
        $__internal_7b06af7fa57c952c8a1357f296e98b9bbe988a0c6c0d1c7a0f63a3d16f6463c7->enter($__internal_7b06af7fa57c952c8a1357f296e98b9bbe988a0c6c0d1c7a0f63a3d16f6463c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 89
        echo "            ";
        echo twig_include($this->env, $context, "SmilePlatformBundle:Default:Blocs/allPosts.html.twig");
        echo "

        ";
        
        $__internal_7b06af7fa57c952c8a1357f296e98b9bbe988a0c6c0d1c7a0f63a3d16f6463c7->leave($__internal_7b06af7fa57c952c8a1357f296e98b9bbe988a0c6c0d1c7a0f63a3d16f6463c7_prof);

    }

    // line 94
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_7a2f062f74d1d6837b1f3f3d1ff5e9863735b3be641fa7b068c4fee8f6843a00 = $this->env->getExtension("native_profiler");
        $__internal_7a2f062f74d1d6837b1f3f3d1ff5e9863735b3be641fa7b068c4fee8f6843a00->enter($__internal_7a2f062f74d1d6837b1f3f3d1ff5e9863735b3be641fa7b068c4fee8f6843a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 95
        echo "            <div class=\"row\">
                <h3>Latest Smile Paintball video</h3>
                <div class=\"fb-video\" data-href=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\"></a>
                    </blockquote></div>
            </div>
            <hr/>
            <div class=\"row\">
                <!-- top 10 -->
                <h3>Top 10</h3>
                ";
        // line 104
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmilePlatformBundle:Post:topTen"));
        echo "
            </div>
            <hr/>
            <div class=\"row\">
                <h3>Sponsors</h3>
                <div class=\"\" >
                    <a href=\"http://www.tippmann.com/\">
                        <img src=\"/images/sponsors/tippmann.png\" width=\"500em\">
                    </a>

                </div>

                <div class=\"\" >
                    <a href=\"http://gisportz.com/\">
                        <img src=\"/images/sponsors/gisportz.png\" width=\"500em\">
                    </a>

                </div>

                <div class=\"\" >
                    <a href=\"http://gisportz.com/vforce-goggles.php\">
                        <img src=\"/images/sponsors/vforce.png\" width=\"500em\">
                    </a>

                </div>

                <div class=\"\" >
                    <a href=\"http://www.redbull.com/be/fr\">
                        <img src=\"/images/sponsors/redbull-com-logo.png\" width=\"500em\">
                    </a>

                </div>

                <div >
                    <a href=\"http://www.kg-factory.fr/fr/\">
                        <img src=\"/images/sponsors/kgfactory.png\" width=\"500em\">
                    </a>

                </div>

                <div >
                    <a href=\"http://www.patch-werk.com/index.php/en/\">
                        <img src=\"/images/sponsors/patch-werk.png\" width=\"500em\">
                    </a>

                </div>

                <div >
                    <a href=\"http://www.enolagaye.com\">
                        <img src=\"/images/sponsors/g-n.jpeg\" width=\"500em\">
                    </a>

                </div>

                <div >
                    <a href=\"http://maxxloader.com/\">
                        <img src=\"http://maxxloader.com/wp-content/uploads/2015/03/MaxXloader-Logo-R35.png\" width=\"500em\">
                    </a>

                </div>

                <div >
                    <a href=\"http://shop.customgunrails.com/\">
                        <img src=\"http://shop.customgunrails.com/images/CGR_LOGOlight.png\">
                    </a>

                </div>

            </div>


        ";
        
        $__internal_7a2f062f74d1d6837b1f3f3d1ff5e9863735b3be641fa7b068c4fee8f6843a00->leave($__internal_7a2f062f74d1d6837b1f3f3d1ff5e9863735b3be641fa7b068c4fee8f6843a00_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 104,  261 => 95,  255 => 94,  244 => 89,  238 => 88,  228 => 80,  222 => 79,  185 => 176,  183 => 94,  179 => 92,  177 => 88,  171 => 84,  169 => 79,  160 => 72,  158 => 71,  143 => 58,  93 => 56,  89 => 45,  77 => 35,  71 => 33,  68 => 32,  61 => 33,  58 => 32,  54 => 28,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>Smile Paintball Network</title>*/
/* */
/*     <!-- Latest compiled and minified CSS -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">*/
/* */
/*     <!-- Optional theme -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">*/
/* */
/*     <!-- Font awsome -->*/
/*     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="js/jquery.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="css/1-col-portfolio.css" rel="stylesheet">*/
/*     {% stylesheets filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/css/style.css'*/
/* */
/*     %}*/
/* */
/*     <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*     {% endstylesheets %}*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js"></script>*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular-sanitize.min.js"></script>*/
/*     {% javascripts*/
/*     '@SmilePlatformBundle/public/js/waypoint.js' filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/js/noframework.js' filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/js/context.js' filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/js/group.js' filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/js/Angular/app.js' filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/js/Angular/Controllers/allPostsCtrl.js' filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/js/jqwery.js' filter='cssrewrite'*/
/* */
/* */
/*     %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/* </head>*/
/* */
/* <body >*/
/* <div id="fb-root"></div>*/
/* <script>(function(d, s, id) {*/
/*         var js, fjs = d.getElementsByTagName(s)[0];*/
/*         if (d.getElementById(id)) return;*/
/*         js = d.createElement(s); js.id = id;*/
/*         js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";*/
/*         fjs.parentNode.insertBefore(js, fjs);*/
/*     }(document, 'script', 'facebook-jssdk'));</script>*/
/* */
/* {% include 'SmilePlatformBundle::Default/Blocs/navbar.html.twig' %}*/
/* */
/* <!-- Page Content -->*/
/* <div class="container" >*/
/* */
/*     <!-- Page Heading -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             {% block pageHeader %}*/
/*                 <h1 class="page-header">*/
/*                     Smile Paintball Network*/
/*                 </h1>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.row -->*/
/*     <div class="col-md-9" id="postsNews" ng-app="smile">*/
/*         {% block leftCollumn %}*/
/*             {{ include ('SmilePlatformBundle:Default:Blocs/allPosts.html.twig') }}*/
/* */
/*         {% endblock %}*/
/*     </div>*/
/*     <div class="col-md-3 right-bar">*/
/*         {% block rightCollumn %}*/
/*             <div class="row">*/
/*                 <h3>Latest Smile Paintball video</h3>*/
/*                 <div class="fb-video" data-href="https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater" data-width="700px" data-show-text="false"><blockquote cite="https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater"></a>*/
/*                     </blockquote></div>*/
/*             </div>*/
/*             <hr/>*/
/*             <div class="row">*/
/*                 <!-- top 10 -->*/
/*                 <h3>Top 10</h3>*/
/*                 {{ render(controller('SmilePlatformBundle:Post:topTen')) }}*/
/*             </div>*/
/*             <hr/>*/
/*             <div class="row">*/
/*                 <h3>Sponsors</h3>*/
/*                 <div class="" >*/
/*                     <a href="http://www.tippmann.com/">*/
/*                         <img src="/images/sponsors/tippmann.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="" >*/
/*                     <a href="http://gisportz.com/">*/
/*                         <img src="/images/sponsors/gisportz.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="" >*/
/*                     <a href="http://gisportz.com/vforce-goggles.php">*/
/*                         <img src="/images/sponsors/vforce.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="" >*/
/*                     <a href="http://www.redbull.com/be/fr">*/
/*                         <img src="/images/sponsors/redbull-com-logo.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div >*/
/*                     <a href="http://www.kg-factory.fr/fr/">*/
/*                         <img src="/images/sponsors/kgfactory.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div >*/
/*                     <a href="http://www.patch-werk.com/index.php/en/">*/
/*                         <img src="/images/sponsors/patch-werk.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div >*/
/*                     <a href="http://www.enolagaye.com">*/
/*                         <img src="/images/sponsors/g-n.jpeg" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div >*/
/*                     <a href="http://maxxloader.com/">*/
/*                         <img src="http://maxxloader.com/wp-content/uploads/2015/03/MaxXloader-Logo-R35.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div >*/
/*                     <a href="http://shop.customgunrails.com/">*/
/*                         <img src="http://shop.customgunrails.com/images/CGR_LOGOlight.png">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/* */
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <!-- /.row -->*/
/* */
/*     <hr>*/
/* */
/*     <!-- Footer -->*/
/*     <footer>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <p>Copyright &copy; Your Website 2014</p>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     </footer>*/
/* */
/* </div>*/
/* <!-- /.container -->*/
/* */
/* <!-- Go to www.addthis.com/dashboard to customize your tools -->*/
/* <!-- Go to www.addthis.com/dashboard to customize your tools -->*/
/* */
/* */
/* */
/* <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>*/
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
