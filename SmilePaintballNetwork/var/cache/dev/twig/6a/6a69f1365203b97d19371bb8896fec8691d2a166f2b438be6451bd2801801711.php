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
        $__internal_6c1fb26101ff9476ca1919b6ffd310129427d9b53a4aab6fa11ea35ec6a18de4 = $this->env->getExtension("native_profiler");
        $__internal_6c1fb26101ff9476ca1919b6ffd310129427d9b53a4aab6fa11ea35ec6a18de4->enter($__internal_6c1fb26101ff9476ca1919b6ffd310129427d9b53a4aab6fa11ea35ec6a18de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/layout.html.twig"));

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

    <!-- Custom CSS -->
    <link href=\"css/1-col-portfolio.css\" rel=\"stylesheet\">
    ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6d14613_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14613_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6d14613_style_1.css");
            // line 29
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "6d14613"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14613") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6d14613.css");
            // line 29
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 32
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
        // line 42
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "874e11e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_874e11e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/874e11e_app_1.js");
            // line 49
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "874e11e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_874e11e_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/874e11e_allPostsCtrl_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "874e11e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_874e11e_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/874e11e_jqwery_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "874e11e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_874e11e") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/874e11e.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 51
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
        // line 64
        $this->loadTemplate("SmilePlatformBundle::Default/Blocs/navbar.html.twig", "SmilePlatformBundle::Default/layout.html.twig", 64)->display($context);
        // line 65
        echo "
<!-- Page Content -->
<div class=\"container\" >

    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            ";
        // line 72
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 77
        echo "        </div>
    </div>
    <!-- /.row -->
    <div class=\"col-md-9\" id=\"postsNews\" ng-app=\"smile\">
        ";
        // line 81
        $this->displayBlock('leftCollumn', $context, $blocks);
        // line 85
        echo "    </div>
    <div class=\"col-md-3 right-bar\">
        ";
        // line 87
        $this->displayBlock('rightCollumn', $context, $blocks);
        // line 169
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

<!-- jQuery -->
<script src=\"js/jquery.js\"></script><script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<!-- Bootstrap Core JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

</body>

</html>";
        
        $__internal_6c1fb26101ff9476ca1919b6ffd310129427d9b53a4aab6fa11ea35ec6a18de4->leave($__internal_6c1fb26101ff9476ca1919b6ffd310129427d9b53a4aab6fa11ea35ec6a18de4_prof);

    }

    // line 72
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_ee9867ac448b225272ce650b4cc2cb125dd641a8f91e1ae03e8e687ba6adea40 = $this->env->getExtension("native_profiler");
        $__internal_ee9867ac448b225272ce650b4cc2cb125dd641a8f91e1ae03e8e687ba6adea40->enter($__internal_ee9867ac448b225272ce650b4cc2cb125dd641a8f91e1ae03e8e687ba6adea40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 73
        echo "                <h1 class=\"page-header\">
                    Smile Paintball Network
                </h1>
            ";
        
        $__internal_ee9867ac448b225272ce650b4cc2cb125dd641a8f91e1ae03e8e687ba6adea40->leave($__internal_ee9867ac448b225272ce650b4cc2cb125dd641a8f91e1ae03e8e687ba6adea40_prof);

    }

    // line 81
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_150817c6856192a3a8719ff35933a42c548296e501f84335ab91367648622632 = $this->env->getExtension("native_profiler");
        $__internal_150817c6856192a3a8719ff35933a42c548296e501f84335ab91367648622632->enter($__internal_150817c6856192a3a8719ff35933a42c548296e501f84335ab91367648622632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 82
        echo "            ";
        echo twig_include($this->env, $context, "SmilePlatformBundle:Default:Blocs/allPosts.html.twig");
        echo "

        ";
        
        $__internal_150817c6856192a3a8719ff35933a42c548296e501f84335ab91367648622632->leave($__internal_150817c6856192a3a8719ff35933a42c548296e501f84335ab91367648622632_prof);

    }

    // line 87
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_16cb7d6824976500b6d1757eb740eb6df7af952d3c148889551c0b370b27b626 = $this->env->getExtension("native_profiler");
        $__internal_16cb7d6824976500b6d1757eb740eb6df7af952d3c148889551c0b370b27b626->enter($__internal_16cb7d6824976500b6d1757eb740eb6df7af952d3c148889551c0b370b27b626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 88
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
        // line 97
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
        
        $__internal_16cb7d6824976500b6d1757eb740eb6df7af952d3c148889551c0b370b27b626->leave($__internal_16cb7d6824976500b6d1757eb740eb6df7af952d3c148889551c0b370b27b626_prof);

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
        return array (  241 => 97,  230 => 88,  224 => 87,  213 => 82,  207 => 81,  197 => 73,  191 => 72,  158 => 169,  156 => 87,  152 => 85,  150 => 81,  144 => 77,  142 => 72,  133 => 65,  131 => 64,  116 => 51,  90 => 49,  86 => 42,  74 => 32,  68 => 30,  65 => 29,  58 => 30,  55 => 29,  51 => 25,  25 => 1,);
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
/* <!-- jQuery -->*/
/* <script src="js/jquery.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
